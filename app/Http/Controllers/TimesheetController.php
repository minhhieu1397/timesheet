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
        $email = Auth::user()->email;
        $timesheet = Timesheet::wherename($email)->get();

        return view('timesheet.view', ['timesheet' => $timesheet]);
    }

    public function create()
    {
        return view('timesheet.create', ['name' => 'Hello index welcome']);
    }

    public function show($id)
    {
        $timesheet = Timesheet::find($id);

        return view('timesheet.show', ['timesheet' => $timesheet]);
    }

    public function store(Request $request)
    {  
        $request->validate([
           'details' => 'required',]
        );

        $email = Auth::user()->email;
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->hour;
        $submit_date = Carbon::now('Asia/Ho_Chi_Minh');
        echo $submit_date->toDateString();

        if($dt<17){
            $late =0;
        }
        else{
            $late=1;
        }

        $product_id = Timesheet::create([
            'name' => $email,
            'submit_date' => $submit_date/*$request->input('submit_date')*/,
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'details' => $request->input('details'),
            'issue' => $request->input('issue'),
            'intention' => $request->input('intention'),
            'late_flg' => $late          
        ]); 

        return redirect()->route('timesheets.index')->with('message', ' '. $product_id);
    }

    public function edit($id)
    {
        $timesheet = Timesheet::find($id);

        return view('timesheet.update', ['timesheet'=>$timesheet]);
    }

    public function update(Request $request, $id)
    {
        $timesheet = Timesheet::find($id);

        $request->validate(
        [
           'details' => 'required'
        ]
        );

        $timesheet->details = $request->details;
        $timesheet->issue = $request->issue;
        $timesheet->intention = $request->intention;
        $timesheet->save();

        return redirect()->route('timesheets.index');
   }

    public function destroy($id){
        Timesheet::destroy($id);

        return redirect()->route('timesheets.index');
   }

}
