<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $title = "Login";
        $departments= Department::all();
        return view('auth.login', compact('title','departments'));
    }

    public function validateLogin(Request $request)
    {
        $credentials = $request->only('email', 'password','department_id');

        if (Auth::attempt($credentials)) {
                return redirect(RouteServiceProvider::HOME);

        }  
        
        else {
            Session::flash('errorMessage', 'Username atau Password Salah!');
            return redirect('login');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
