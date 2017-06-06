<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $data = $request->only([
            'email',
            'password',
        ]);
        
        if (Auth::attempt([
            'email' => $data['email'], 
            'password' => $data['password'],
            'token_confirm' => null,
        ])) {
            return redirect()->intended(action(auth()->user()->level == 1 ? 'Admin\BaseController@index' : 'User\ProductController@index'));
        }

        return redirect()->action('Auth\LoginController@getLogin')->with(['message-fail' => 'Email or password not match.']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->action('Auth\LoginController@getLogin');
    }
}
