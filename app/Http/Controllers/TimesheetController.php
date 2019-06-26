<?php 

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\ValidationName;

class TimesheetController extends Controller
{
    
   
   public function AddTimesheet(){

    return view('timesheet.create',['name' => 'Hello index welcome']);

   }

   public function view(){

        return view('timesheet.view',[
            'timesheet' => User::all()
        ]);
   }

   public function post_AddTimesheet(Request $request){  
   $request->validate([

                'name' => 'required',

                '_work' => 'required',

                '_date' => 'required|date'

            ], [

                'name.required' => 'Name is required',

                '_work.required' => '_work is required',
                '_date.required' => 'date is error'

            ]);
       $product_id = \DB::table('timesheet')->insert([
            'name'       => $request->input('name'),
            '_date'      => $request->input('_date'),
            '_work'    => $request->input('_work'),
            'difficulty' => $request->input('difficulty'),
            'intention' => $request->input('intention'),
            'late' => $request->input('late')
            
            ]);
        return redirect()->route('view')->with('message', ' ' . $product_id);
   }



   public function edit($id){
    $timesheet=User::find($id);
    return view('timesheet.update',['timesheet'=>$timesheet]);

   }

   public function postedit(Request $request,$id){

    $timesheet = User::find($id);
    $timesheet ->name= $request->name;
    $timesheet ->_work= $request->_work;
    $timesheet ->difficulty= $request->difficulty;
    $timesheet ->intention= $request->intention;
    $timesheet ->save();
    return redirect()->route('view');

   }



}
