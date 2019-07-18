<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use App\Models\Timesheet;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\ValidationName;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function login()
	{
		return view('user.signin');
	}

    public function postlogin(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->is_admin == true) {
                return redirect()->route('users.index');
            } else {
                return redirect()->route('timesheets.index');
            }
        } else {
            $errors = new MessageBag(['errorlogin' => 'email or password is incorrect']);
            return redirect()->route('users.login')->withErrors($errors);
        } 
    }

	public function create()
	{
		return view('user.signup');
	}

    public function store(RegisterRequest $request)
  	{
        $User = User::create([
            'email' => $request->input('email'),    
            'password' => \Hash::make($request->input('password'))          
        ]);

        return redirect()->route('users.login')->withSuccess( 'Register is successfuly' );
    }

    public function logout() 
    {
        Auth::logout();

        return redirect()->route('users.login');
    }

     public function index()
    {
        return view('user.view', [
            'user' => User::all()
        ]);
    }

    public function show(User $user)
    {
        $timesheets = $user->timesheets; 

        return view('user.show', ['timesheets' => $timesheets]);
    }
    
    public function destroy($user)
    {
        User::destroy($user);

        return redirect()->route('users.index');
    }
}
