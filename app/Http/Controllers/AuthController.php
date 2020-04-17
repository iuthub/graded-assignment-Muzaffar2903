<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * View Home Page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return redirect('/login');
    }

    /**
     * Show Login Form.
     *
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Do Login.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt([
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ], $request->get('remember'))) {
            return redirect()
                ->intended('/tasks')
                ->with('message', 'Logged in successfully');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('message', 'Wrong email or password');
    }

    /**
     * Logout.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/')
            ->with('message', 'Logged out successfully');
    }
}
