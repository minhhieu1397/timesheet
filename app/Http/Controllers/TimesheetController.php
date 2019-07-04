<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {  
        $request->validate([
           'details' => 'required'
            ]);

        $email = Auth::user()->email;
        $dt = Carbon::now()->hour;
        echo $submit_date = Carbon::now()->toDateString();

        if($dt < 17){
            $late = false;
        }
        else{
            $late = true;
        }

        $user = Auth::user();
        $timesheet = $user->timesheets()->create([
            'name' => $request->input('name'),
            'submit_date' => $submit_date,
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

    public function update(Timesheet $timesheet, Request $request)
    {

        $request->validate(
        [
           'details' => 'required'
        ]
        );

        $timesheet->fill($request->except('_token'));
        $timesheet->save();

        return redirect()->route('timesheets.index');
   }

    public function destroy($id){
        Timesheet::destroy($id);

        return redirect()->route('timesheets.index');
   }

}
