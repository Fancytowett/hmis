<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Doctor;
use App\Room_Doctor;
use Illuminate\Http\Request;

class Room_DoctorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $doctors=Doctor::all();
        $rooms=Consultation::all();
        return view('room_doctor.add_room_doctor',compact('doctors','rooms'));
    }

    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request,
            [
                'room_id'=>'required',
                'doctor_id'=>'required',
            ]);

        Room_Doctor::create($request->all());

        return redirect('/index_roomdoc')->with('message','Doctor successfully allocated');
    }

    public function edit($id)
    {
        $doctors=Doctor::all();
        $rooms=Consultation::all();
        $room_doctor=Room_Doctor::findOrFail($id);
      return view('room_doctor.edit_room_doctor',compact('room_doctor','doctors','rooms'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,

            [
                'room_id' => 'required',
                'doctor_id' => 'required'
            ]);

        $room_doctor=Room_Doctor::findOrFail($id);
        $room_doctor->room_id=$request->input('room_id');
        $room_doctor->doctor_id=$request->input('doctor_id');
        $room_doctor->save();
        return redirect('/index_roomdoc')->with('message','Room Allocation successffully updated');

        
    }

    public function destroy($id)
    {
        $room_doctor = Room_Doctor::findOrFail($id);
        $room_doctor->destroy($id);
        return back()->with('message', 'Room allocations successfully deleted');
    }

    public function index()
    {
        $room_docs=Room_Doctor::all();

       return view('room_doctor.index_room_doctor',compact('room_docs'));
    }
}
