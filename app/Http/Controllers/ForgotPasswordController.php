<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Str;
use App\Notifications\ResetPasswordRequest;
use App\Http\Requests\User\ResetRequest;
use App\Http\Requests\User\ChangePassRequest;


class ForgotPasswordController extends Controller
{
    public function forgot()
    {
    	return view('user.ForgetPassword.forgot');
    }

    public function postForgot(Request $request)
    {
    	$user = User::where('email', $request->email)->first();

    	if (count($user) == 0) {
    		return back()->withErrors([
                'errorEmail' => 'Email does not exist'
            ]);
    	} else {
    		$passwordReset = PasswordReset::updateOrCreate([
            	'email' => $user->email,
        		], [
            	'token' => Str::random(60),]);
	        if ($passwordReset) {
	            $user->notify(new ResetPasswordRequest($passwordReset->token));
	        }
	        return back()->withErrors([
	        	'message' => 'We have e-mailed your password reset link!'
	        	]);
    	}
    }

    public function resetPassword($token)
    {
    	return View('user.ForgetPassword.reset',['token'=>$token]);
    }

    public function putResetPassword(ResetRequest $request, $token)
    {
    	$PasswordReset = PasswordReset::where('token', $token)->first();
    	$user = User::where('email', $PasswordReset->email)->first();
    	$new_password = $request->input('new_password');
        $user->password = bcrypt($new_password);
        $user->save();

        return redirect()->route('users.login')->withSuccess( 'Reset Password is successfuly' );

    }
}
