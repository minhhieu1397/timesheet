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
    	return $this->model->all();
    }

    public function find($timesheet)
    {
        return $this->model->find($timesheet);
    }

   /* public function update(Timesheet $timesheet, array $attributes)
    {
        return $this->model->find($timesheet)->update($attributes);
    }*/
}