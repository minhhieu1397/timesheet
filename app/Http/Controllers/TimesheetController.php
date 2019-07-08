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

class TimesheetController extends Controller
{ 
    public function index()
    {
        $user = Auth::user();
        $timesheets = $user->timesheets;

        return view('timesheet.view', ['timesheets' => $timesheets]);
    }

    public function create()
    {
        return view('timesheet.create', ['name' => 'Hello index welcome']);
    }

    public function show(Timesheet $timesheet)
    {
        return view('timesheet.show', ['timesheet' => $timesheet]);
    }

    public function store(CreateRequest $request)
    {  
        $now = \Carbon\Carbon::now();
        $workDate = $request->input('work_date');
        $diff = $now->diffInSeconds(\Carbon\Carbon::parse($workDate)->hour(17),false);
        if ($diff >= 0) {
            $lateFlg = false;
        } else {
            $lateFlg = true;
        }

        $user = Auth::user();
        $timesheet = $user->timesheets()->create([
            'name' => $request->input('name'),
            'work_date' => $request->input('work_date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'details' => $request->input('details'),
            'issue' => $request->input('issue'),
            'intention' => $request->input('intention'),
            'late_flg' => $lateFlg
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
