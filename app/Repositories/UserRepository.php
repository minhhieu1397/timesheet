<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
	protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    public function all()
    {
    	return $this->model->all();
    }

    public function delete($user)
    {
        return $this->model->find($user)->delete();
    }

    public function show($user)
    {
        $timesheets = $user->timesheets;
        return $timesheets;
    }
}