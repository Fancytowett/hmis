<?php

namespace App\Http\Controllers;

use App\Diagnosis;
use App\Doctor;
use App\Room_Doctor;
use App\Schedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('doctor.doctor_registration');
    }

    public function store(Request $request)
    {

     $this->validate($request,[
         'f_name'=>'required',
         'l_name'=>'required',
         'email'=>'required|email',
         'id_no'=>'required',
         'phone_no'=>'required',

     ]);
        $user=new User();
        $user->name=$request->input('f_name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->user_type=3;
        $user->save();
//        dd($user);


        $doctor= new  Doctor();
        $doctor->user_id=$user->id;
        $doctor->f_name=$request->input('f_name');
        $doctor->l_name=$request->input('l_name');
        $doctor->email=$user->email;
        $doctor->id_no=$request->input('id_no');
        $doctor->phone_no=$request->input('phone_no');
//        dd($doctor);
        $doctor->save();
//     Doctor::create($request->all());

     return redirect('/index_doctor')->with('message',' Doctor successfully added');
    }

    public function index()
    {
        $doctors=Doctor::all();
        return view('doctor.index_doctor',compact('doctors'));
    }

    public function edit($id)
    {
    $doctor=Doctor::findOrfail($id);
    return view('doctor.edit_doctor',compact('doctor'));
    }

    public function edit_doc_dash($id)
    {

        $doctor=Doctor::where('user_id',auth()->user()->id)->first();

        return view('doctor.edit_doc_dash',compact('doctor'));



    }
    public function  update(Request $request,$id)
    {
//        $this->validate($request,[
//            'f_name'=>'required',
//            'l_name'=>'required',
//            'email'=>'required',
//            'id_no'=>'required|unique:users',
//            'phone_no'=>'required',
//
//        ]);



        $doctor_old=Doctor::where('id',$id)->first();
        $doctor=Doctor::findOrFail($id);
        $doctor->f_name=$request->input('f_name');
        $doctor->l_name=$request->input('l_name');
        $doctor->email=$request->input('email');
        $doctor->id_no=$doctor_old->id_no;
        $doctor->phone_no=$request->input('phone_no');
        $doctor->save();
        $user = User::findOrFail($doctor->user->id);
        $user->name = $doctor->f_name;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_type = 3;
        $user->save();

        return redirect('/doc_profile')->with('message',$doctor->f_name. '  Details are successfully updated');

    }

    public function destroy($id)
    {
        $doctor=Doctor::findOrFail($id);
        $doctor->destroy($id);
        return back()->with('message',$doctor->f_name.'successfully deleted');
    }

    public function doc_schedule()
    {
        $doctor=Doctor::where('user_id',auth()->user()->id)->first();
       $room_doc=Room_Doctor::where('doctor_id',$doctor->id)->first();
//        $schedules=Schedule::where('room_doc',$room_doc->id)->get();
        $diagnosis=Diagnosis::all();
        foreach ($diagnosis as $diagno){
          $read_schedules=Schedule::where('room_doc',$room_doc->id)->where('id',$diagno->schedule_id)->get();
            foreach ($read_schedules as $sche){

                $sche=Schedule::findOrFail($sche->id);
                $sche->patient_id=$sche->patient_id;
                $sche->room_doc=$sche->room_doc;
                $sche->status=1;
//                dd($sche);
                $sche->save();
            }
          $schedules=Schedule::where('room_doc',$room_doc->id)->where('status',0)->get();
            return view('schedule_only',compact('schedules'));
        }


  }

    public function show_doc()

    {
        $doc=Doctor::where('user_id',auth()->user()->id)->first();
        return view('doctor.show_doc',compact('doc'));

}
    public function doc_dash()

    {
        $doctor=Doctor::where('user_id',auth()->user()->id)->first();
        $room_doc=Room_Doctor::where('doctor_id',$doctor->id)->first();
        $schedules=Schedule::where('room_doc',$room_doc->id)->get();
        foreach ($schedules as $schedule){
            if(Gate::allows('diagnosis',$schedule->id)){
        return view('dash.doc_dash',compact('schedules'));
    }else{

                return view('dash.doc_dash',compact('schedules'));

            }
        }
//        return view('dash.doc_dash',compact('schedules'));
}
}
