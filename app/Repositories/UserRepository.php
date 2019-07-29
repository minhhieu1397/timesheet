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
    	return $this->model->paginate(7);
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

    public function search($search_name)
    {
        return $this->model->where('name', $search_name)->paginate(4);
    }

    public function changePassword($new_password)
    {
        $user = \Auth::user();
        $user->password = bcrypt($new_password);
        $user->save();

        return true;
    }
}