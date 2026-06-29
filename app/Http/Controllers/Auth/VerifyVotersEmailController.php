<?php

namespace App\Http\Controllers\Auth;

use App\Mail\OtpMail;
use App\Models\Voters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class VerifyVotersEmailController extends Controller
{

    public function create(string $id_voters)
    {
        $voters = Voters::findOrFail($id_voters);
        return view('auth.voters.verify-email', compact('voters'));
    }

    public function store(Request $request, string $id_voters)
    {
        $validated = $request->validate([
            'otp_code' => ['required', 'digits:6'],
        ]);

        $voters = Voters::findOrFail($id_voters);

        if ($voters->email_verified_at !== null) {
            return redirect()->route('login')->with('notify', [
                'type'      => 'info',
                'message'   => 'Your email has already been verified.',
            ]);
        }

        if (now()->greaterThan($voters->otp_expired_at)) {
            return back()->with('notify', [
                'type'      => 'error',
                'message'   => 'Verification code has expired.',
            ]);
        }

        if ($voters->otp_code !== $validated['otp_code']) {
            return back()->with('notify', [
                'type'      => 'error',
                'message'   => 'Invalid verification code.',
            ]);
        }

        $voters->update([
            'otp_code'          => null,
            'otp_expired_at'    => null,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('login')->with('notify', [
            'type'      => 'success',
            'message'   => 'Email verification successful. Please login.',
        ]);
    }

    public function resend(string $id_voters)
    {
        $voters = Voters::findOrFail($id_voters);

        if ($voters->email_verified_at !== null) {
            return redirect()->route('login')->with('notify', [
                'type'      => 'info',
                'message'   => 'Your email has already been verified.',
            ]);
        }

        $voters->update([
            'otp_code'       => random_int(100000, 999999),
            'otp_expired_at' => now()->addMinutes(5),
            'email_verified_at' => null,
        ]);

        Mail::to($voters->email)->send(new OtpMail($voters));

        return back()->with('notify', [
            'type'      => 'success',
            'message'   => 'A new verification code has been sent to your email.',
        ]);
    }
}
