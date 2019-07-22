<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Repositories\UserRepository;

class UserService
{
	protected $userRepository;
    
	public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function create(RegisterRequest $request)
	{
        $user = $this->userRepository->create([
			'email' => $request->input('email'),    
            'password' => \Hash::make($request->input('password'))
        ]);

		return $user;
	}

	public function index()
	{
		return $this->userRepository->all();
	}

	public function delete($user)
    {
        return $this->userRepository->delete($user);
    }

}