<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Timesheet\CreateRequest;
use App\Http\Requests\Timesheet\UpdateRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\ValidationName;
use App\Models\Timesheet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Services\TimesheetService;

class TimesheetController extends Controller
{ 
    protected $timesheetService;

    public function __construct(TimesheetService $timesheetService)
    {
        $this->timesheetService = $timesheetService;
    }

    public function index()
    {
    $timesheets = $this->timesheetService->index();
     
    return view('timesheet.view', ['timesheets' => $timesheets]);
    }

    public function create()
    {
        return view('timesheet.create');
    }

    public function show(Timesheet $timesheet)
    {
       $timesheet = $this->timesheetService->show($timesheet);

       return view('timesheet.show', ['timesheet' => $timesheet]);
    }

    public function store(CreateRequest $request)
    {  
        if ($this->timesheetService->create($request)) {
            return redirect()->route('timesheets.index');
        } else {
            return back()->withInput()->withErrors([
                'errorCreate' => 'Have an error while creating new timesheet'
            ]);
        }
    }

    public function edit(Timesheet $timesheet)
    {
        return view('timesheet.update', ['timesheet'=>$timesheet]);
    }

    public function update(Timesheet $timesheet, UpdateRequest $request)
    {
        if ($this->timesheetService->update($request, $timesheet)) {
        return redirect()->route('timesheets.index');
        } else {
            return back()->withInput()->withErrors([
                'errorUpdate' => 'Have an error while updating timesheet'
            ]);
        }
    }

    public function destroy($timesheet)
    {
        $this->timesheetService->delete($timesheet);

        return redirect()->route('timesheets.index');
    }
}
