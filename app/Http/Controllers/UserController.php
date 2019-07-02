<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Timesheet;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\ValidationName;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    
    public function signin()
	  {
		    return view('user.signin');
	  }

    public function signinpost(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if( Auth::attempt(['email' => $email, 'password' => $password])){
            if( $email=="admin@gmail.com" ){
                return redirect()->route('users.index');
            }
            else{
                return redirect()->route('timesheets.index');
            }
        } 
        else {
            $errors = new MessageBag(['errorlogin' => 'email or password is incorrect ']);
            return redirect()->route('users.signin')->withErrors($errors);
        } 
    }

	  public function create()
	  {
		    return view('user.signup');
	  }

    public function store(Request $request)
  	{
        $request->validate([
            'email' => 'required|email',         
            'password' => 'required|min:8'
            ]);

        $product_id = User::create([
            'email' => $request->input('email'),    
            'password' => \Hash::make($request->input('password'))          
            ]);

        return redirect()->route('timesheets.index');
    }

    public function Logout() 
    {
        Auth::logout();

        return redirect()->route('users.signin');
    }

     public function index()
    {
        return view('user.view', [
                'users' => User::all()
                ]);
    }

    public function show($email){
        $timesheet = Timesheet::wherename($email)->get();
        $late = Timesheet::wherename($email)->wherelate_flg(1)->count();

        return view('user.show', ['timesheet' => $timesheet],compact('late'));
    }
    
}
