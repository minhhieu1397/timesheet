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
use App\Services\UserService;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

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
        if ($this->userService->create($request)) {
            return redirect()->route('users.login')->withSuccess( 'Register is successfuly' );
        } else {
            return back()->withInput()->withErrors([
                'errorCreate' => 'Have an error while creating new User'
            ]);
        }
    }

    public function logout() 
    {
        Auth::logout();

        return redirect()->route('users.login');
    }

    public function index()
    {
        $user = Auth::user();
        $this->authorize('view',$user);

        $user = $this->userService->index();
        return view('user.view', ['user' => $user]);
    }

    public function show(User $user)
    {
        $timesheets = $this->userService->show($user);
        $user = Auth::user();
        $this->authorize('view',$user);

        return view('user.show', ['timesheets' => $timesheets]);
    }
    
    public function destroy($user)
    {
        if ($this->userService->delete($user)) {
            return redirect()->route('users.index')->withSuccess( 'Delete is successfuly' );
        } else {
            return back()->withErrors([
                'errorDelete' => 'Have an error while deleting user'
            ]);
        }
    }
}
