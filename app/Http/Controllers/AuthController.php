<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Socialite;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function googleLogin() {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()    {
        $user = Socialite::driver('google')->user();

        $userModel = User::where('email', $user->getEmail())->first();

        if ($userModel) {
            Auth::login($userModel);
            $userModel->photo = $user->getAvatar();
            $userModel->save();
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        } else {
            return redirect()->route('login')->with('error', 'No account found for this Google email.');
        }

        return redirect()->route('home');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials, $request->filled('remember'))) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        }

        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
