<?php

namespace App\Services;

use Carbon\Carbon;
use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Mail;

class OtpService
{
    public function __construct()
    {
        //
    }
    /**
     * Generate OTP
     */
    private function generateOtp(): string
    {
        return (string) random_int(100000, 999999);
    }

    /**
     * Send OTP
     */
    public function send($user): void
    {
        $otp = $this->generateOtp();

        $user->update([
            'otp_code'        => $otp,
            'otp_expired_at'  => Carbon::now()->addMinutes(5),
        ]);

        Mail::to($user->email)->send(
            new SendOtpMail(
                $user->participants_name_1 ?? $user->voters_name,
                $otp
            )
        );
    }

    /**
     * Verify OTP
     */
    public function verify($user, string $otp): bool
    {
        if ($user->otp_code !== $otp) {
            return false;
        }

        if (Carbon::now()->greaterThan($user->otp_expired_at)) {
            return false;
        }

        $user->update([
            'otp_code'          => null,
            'otp_expired_at'    => null,
            'email_verified_at' => now(),
        ]);

        return true;
    }

    /**
     * Resend OTP
     */
    public function resend($user): void
    {
        $this->send($user);
    }
}
