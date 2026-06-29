<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Participants;
use Illuminate\Http\Request;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;

class VerifyParticipantsEmailController extends Controller
{
    public function create(string $id_participants)
    {
        $participants = Participants::findOrFail($id_participants);
        return view('auth.participants.verify-email', compact('participants'));
    }

    public function store(Request $request, string $id_participants)
    {
        $validated = $request->validate([
            'otp_code' => ['required', 'digits:6'],
        ]);

        $participants = Participants::findOrFail($id_participants);

        if ($participants->email_verified_at !== null) {
            return redirect()->route('login')->with('notify', [
                'type'      => 'info',
                'message'   => 'Your email has already been verified.',
            ]);
        }

        if (now()->greaterThan($participants->otp_expired_at)) {
            return back()->with('notify', [
                'type'      => 'error',
                'message'   => 'Verification code has expired.',
            ]);
        }

        if ($participants->otp_code !== $validated['otp_code']) {
            return back()->with('notify', [
                'type'      => 'error',
                'message'   => 'Invalid verification code.',
            ]);
        }

        $participants->update([
            'otp_code'          => null,
            'otp_expired_at'    => null,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('login')->with('notify', [
            'type'      => 'success',
            'message'   => 'Email verification successful. Please login.',
        ]);
    }

    public function resend(string $id_participants)
    {
        $participants = Participants::findOrFail($id_participants);

        if ($participants->email_verified_at !== null) {
            return redirect()->route('login')->with('notify', [
                'type'      => 'info',
                'message'   => 'Your email has already been verified.',
            ]);
        }

        $participants->update([
            'otp_code'          => random_int(100000, 999999),
            'otp_expired_at'    => now()->addMinutes(5),
            'email_verified_at' => null,
        ]);

        Mail::to($participants->email)->send(new OtpMail($participants));

        return back()->with('notify', [
            'type'      => 'success',
            'message'   => 'A new verification code has been sent to your email.',
        ]);
    }
}
