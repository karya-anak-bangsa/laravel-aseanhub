<?php

namespace App\Http\Controllers\Auth;

use App\Mail\OtpMail;
use App\Models\Voters;
use App\Services\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterVotersController extends Controller
{
    public function create()
    {
        return view('auth.voters.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'voters_name'   => ['required', 'string', 'max:255'],
            'email'         => ['required', 'email', 'max:255'],
            'password'      => ['required', 'string', 'min:8'],

        ]);

        if (AuthService::emailExists($validated['email'])) {
            return back()->withInput()->with('notify', [
                'type'    => 'error',
                'message' => 'Email has already been registered.',
            ]);
        }

        $voters = Voters::create([
            'voters_name'           => $validated['voters_name'],
            'email'                 => $validated['email'],
            'password'              => $validated['password'],
            'otp_code'              => random_int(100000, 999999),
            'otp_expired_at'        => now()->addMinutes(5),
            'email_verified_at'     => null,
        ]);

        Mail::to($voters->email)->send(new OtpMail($voters));

        return redirect()->route('voters.verify-email.create', $voters->id_voters)->with('notify', [
            'type'      => 'success',
            'message'   => 'Verification code has been sent to your email.',
        ]);
    }
}
