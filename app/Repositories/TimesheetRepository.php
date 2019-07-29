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
            return $this->model->orderBy('work_date', 'desc')->paginate(5);
        } else {
    	   return $this->model->orderBy('work_date', 'desc')->where('user_id', \Auth::user()->id)->paginate(4);
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

    public function search($search_date)
    {
        return $this->model->where('work_date', $search_date)->paginate(4);
    }

    public function delete($timesheet)
    {
        return $this->model->find($timesheet)->delete();
    }
}