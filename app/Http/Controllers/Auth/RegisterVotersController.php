<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Models\Voters;

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
            'voters_name' => $validated['voters_name'],
            'email'       => $validated['email'],
            'password'    => $validated['password'],
        ]);

        return redirect()->route('login')->with('notify', [
            'type'      => 'success',
            'message'   => 'Registration successful. Please login.',
        ]);
    }
}
