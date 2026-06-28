<?php

namespace App\Http\Controllers\Auth;

use App\Mail\OtpMail;
use App\Models\Participants;
use App\Services\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterParticipantsController extends Controller
{
    public function create()
    {
        return view('auth.participants.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'team_name' => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email', 'max:255'],
            'password'  => ['required', 'string', 'min:8'],
        ]);

        if (AuthService::emailExists($validated['email'])) {
            return back()->withInput()->with('notify', [
                'type'    => 'error',
                'message' => 'Email has already been registered.',
            ]);
        }

        $participants = Participants::create([
            'team_name'         => $validated['team_name'],
            'email'             => $validated['email'],
            'password'          => $validated['password'],
            'otp_code'          => random_int(100000, 999999),
            'otp_expired_at'    => now()->addMinutes(5),
            'email_verified_at' => null,
        ]);

        Mail::to($participants->email)->send(new OtpMail($participants));

        return redirect()->route('participants.verify-email.create', $participants->id_participants)->with('notify', [
            'type'      => 'success',
            'message'   => 'Verification code has been sent to your email.',
        ]);
    }
}
