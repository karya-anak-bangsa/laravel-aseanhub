<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use App\Models\Participants;
use Illuminate\Http\Request;

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
            'team_name' => $validated['team_name'],
            'email'     => $validated['email'],
            'password'  => $validated['password'],
        ]);

        return redirect()->route('login')->with('notify', [
            'type'      => 'success',
            'message'   => 'Registration successful. Please login.',
        ]);
    }
}
