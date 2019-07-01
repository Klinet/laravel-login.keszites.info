<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthOController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/home';
    protected $username;

    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('login_form');
    }

    public function loginPost(Request $request)
    {

        $this->validate($request,[
            'login_data' => 'required',
            'password' => 'required'
        ]);

        $fieldType = filter_var($request['login_data'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == "username") {

            if(Auth::attempt(['username' => $request['login_data'], 'password'=> $request['password'] ])){
                return redirect()->route('dashboard');

            } else{
                $errors = ['username_error' => 'Please Check your Username and Password'];
                return back()->withErrors($errors);
            }

        }elseif ($fieldType == "email") {

            if(Auth::attempt(['email' => $request['login_data'], 'password'=> $request['password'] ])){
                return redirect()->route('dashboard');

            } else{
                $errors = ['email_error' => 'Please Check your Email and Password'];
                return back()->withErrors($errors);
            }

        } else {
            return redirect('/dashboard');
        };

    }

    public function username()
    {
        return $this->username;
    }

    public function logout()
    {
        Auth::logout();
        $errors = ['logged_out' => 'You are logged out'];
        return redirect()->to('/')->withErrors($errors);;
    }

}
