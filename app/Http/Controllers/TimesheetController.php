<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTimesheetRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\ValidationName;
use App\Models\Timesheet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TimesheetController extends Controller
{ 
    public function index()
    {
        $id = Auth::user()->id;
        $timesheet = Timesheet::whereuser_id($id)->get();

        return view('timesheet.view', ['timesheet' => $timesheet]);
    }

    public function create()
    {
        return view('timesheet.create', ['name' => 'Hello index welcome']);
    }

    public function show(Timesheet $timesheet)
    {
        return view('timesheet.show', ['timesheet' => $timesheet]);
    }

    public function store(CreateTimesheetRequest $request)
    {  
        $dt = Carbon::now()->hour;
        echo $now = Carbon::now()->toDateString();
        $submitdate = $request->input('submit_date');
        $first_date = strtotime($submitdate);
        $second_date = strtotime($now);
        $datediff = abs($first_date - $second_date);
        echo floor($datediff / (60 * 60 * 24));

        if ($datediff == 0) {
            if ($dt < 17) {
                $late = false;
            } else {
                $late = true;
            }
        } elseif ($datediff > 0) {
            $late = true;
        }
        
        if (strtotime($submitdate) > strtotime($now)) {
            return redirect()->route('timesheets.create')->withSuccess('Wrong date');
        }

        $user = Auth::user();
        $timesheet = $user->timesheets()->create([
            'name' => $request->input('name'),
            'submit_date' => $request->input('submit_date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'details' => $request->input('details'),
            'issue' => $request->input('issue'),
            'intention' => $request->input('intention'),
            'late_flg' => $late          
        ]); 
        
        return redirect()->route('timesheets.index');
    }

    public function edit(Timesheet $timesheet)
    {
        return view('timesheet.update', ['timesheet'=>$timesheet]);
    }

    public function update(Timesheet $timesheet, UpdateRequest $request)
    {
        $timesheet->fill($request->except('_token'));
        $timesheet->save();

        return redirect()->route('timesheets.index');
   }

    public function destroy($timesheet){
        Timesheet::destroy($timesheet);

        return redirect()->route('timesheets.index');
   }
}
