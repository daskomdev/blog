<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Auth;
use Route;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'code';
    }

    public function login(Request $request){

		// Validate the form data
		$this->validate($request, [
			'code'      => 'required|size:3|string',
			'password'  => 'required|min:6|string',
		]);
		
		// Attempt to log the user in
        if (Auth::guard('web')
            ->attempt(['code' => $request->code, 'password' => $request->password], false)) 
			return '{"message": "success"}';

        return '{"message": "Login Failed"}';
	}
	
	public function logout(){

		Auth::guard('web')->logout();
		return redirect('/login');
	}
}
