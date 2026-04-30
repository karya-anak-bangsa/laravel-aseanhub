<?php

namespace App\Http\Controllers\Auth;

use App\Models\Participants;
use App\Models\Voters;
use App\Services\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        # 1. Validasi Input Form
        $request->validate([
            'role'     => 'required|in:participants,voters',
            'email'    => 'required|email',
            'password' => 'required|min:8',
        ]);

        # 2. Validasi Email Global
        if (AuthService::emailExists($request->email)) {
            return back()->withInput()->with('alert', [
                'icon'  => 'error',
                'title' => 'Email already registered',
                'text'  => 'Please use a different email address.',
            ]);
        }

        # 3. Proses Registrasi
        if ($request->role === 'participants') {
            Participants::create([
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } else {
            Voters::create([
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        # 4. REDIRECT LOGIN
        return redirect()->route('login')->with('alert', [
            'icon'  => 'success',
            'title' => 'Register Success',
            'text'  => 'Please login to continue',
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
