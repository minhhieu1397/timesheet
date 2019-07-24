<?php

namespace App\Repositories;

use App\Models\Timesheet;

class TimesheetRepository
{
	protected $model;

    public function __construct(Timesheet $model)
    {
        $this->model = $model;
    }

    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    public function all()
    {
        if (\Auth::user()->is_admin == true) {
            return $this->model->all();
        } else {
    	   return $this->model->all()->where('user_id', \Auth::user()->id);
        }
    }

    public function find($timesheet)
    {
        return $this->model->find($timesheet->id);
    }

    public function update($timesheet, array $attributes)
    {
        return $this->model->find($timesheet->id)->update($attributes);
    }

    public function delete($timesheet)
    {
        return $this->model->find($timesheet)->delete();
    }
}