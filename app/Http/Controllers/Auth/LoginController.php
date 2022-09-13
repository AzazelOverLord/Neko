<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\http\request;
use Illuminate\support\facades\Auth;
use App\Providers\RouteServiceProvider;

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

    protected $redirectTo = '/';
    protected $loginType;
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login (Request $request)
    {
        $this->validate($request, [
            'login'=>'require|string',
            'password'=>'require|string'
        ]);

        $credentials = [
            $this->loginType=>$request->login,
            'password'=>$request->password
        ];

        if (auth::attempt($credentials))
        {
            return redirectTo()->intended($this->redirectTo);
        }

        return redirect()->back()->withInput()->withErrors([
            'login'=>'Не верный логин'
        ]);
    }

    protected function checkLoginInput()
    {
        $inputData = request()->get('login');
        return filter_var($inputData, FILTER_VALIDATE_EMAIL) ? 'email':'name';
    }
}
