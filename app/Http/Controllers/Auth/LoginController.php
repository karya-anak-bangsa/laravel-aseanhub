<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\AuthService;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        #--------------------------------------------------------------------------
        # Step 1. Validation
        #--------------------------------------------------------------------------
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        #--------------------------------------------------------------------------
        # Step 2. Email Exists
        #--------------------------------------------------------------------------
        if (! AuthService::emailExists($credentials['email'])) {
            return back()->withInput($request->only('email'))->with('notify', [
                'type'    => 'error',
                'message' => 'Invalid email or password.',
            ]);
        }

        #--------------------------------------------------------------------------
        # Step 3. Email Verified
        #--------------------------------------------------------------------------
        if (! AuthService::isVerified($credentials['email'])) {
            return back()->withInput($request->only('email'))->with('notify', [
                'type'    => 'warning',
                'message' => 'Please verify your email before logging in.',
            ]);
        }

        # Step 4. Login Admin
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('notify', [
                'type'      => 'success',
                'message'   => 'Welcome to Dashboard Administrator.',
            ]);
        }

        # Step 5. Login Judges
        if (Auth::guard('judges')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('judges.dashboard')->with('notify', [
                'type'      => 'success',
                'message'   => 'Welcome to Dashboard Judges.',
            ]);
        }

        # Step 6. Login Participants
        if (Auth::guard('participants')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('participants.dashboard')->with('notify', [
                'type'      => 'success',
                'message'   => 'Welcome to Dashboard Participants.',
            ]);
        }

        # Step 7. Login Voters
        if (Auth::guard('voters')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('voters.dashboard')->with('notify', [
                'type'      => 'success',
                'message'   => 'Welcome to Dashboard Voters.',
            ]);
        }

        # Step 8. Login Failed
        return back()->withInput($request->only('email'))->with('notify', [
            'type'      => 'error',
            'message'   => 'Invalid email or password.',
        ]);
    }


    public function logout(Request $request)
    {
        // logout semua guard
        Auth::guard('admin')->logout();
        Auth::guard('judges')->logout();
        Auth::guard('participants')->logout();
        Auth::guard('voters')->logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('aseanhub');
    }
}
