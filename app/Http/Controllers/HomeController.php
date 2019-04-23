<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Diagnosis;
use App\Mail\ContactMail;
use App\Patient;
use App\Room_Doctor;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function rec_dash()
    {
        return view('dash.rec_dash');
    }

    public function dashboard()
    {

        $room_docs=Room_Doctor::all();
        $schedules = Schedule::all();
//        foreach ($schedules as $schedule){
//            dd($schedule->patient);
//        }


        return view('dash.dashboard',compact('room_docs','schedules'));
    }

    public function add_schedule()
    {
        $patients = Patient::all();
        $room_docs = Room_Doctor::all();
        return view('schedule', compact('patients', 'room_docs'));
    }

    public function store_schedule(Request $request)
    {
//        dd($request);
        $this->validate($request,

            [
                'patient_id' => 'required',
                'room_doc' => 'required'
            ]);
//        $schedule=new Schedule();
//        $schedule->patient_id=$request->input('patient_id');
//        $schedule->room_doc=$request->input('room_doc');
//        $schedule->save();
        Schedule::create($request->all());
//        $user
        return back()->with('message', 'Schedule successfully added');
    }

    public function index_schedule()
    {
        $schedules = Schedule::all();
        return view('index_schedule', compact('schedules'));
    }

    public function create_diagnosis($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('diagnosis', compact('schedule'));
    }

    public function store_diagnosis(Request $request, $id)
    {
//        dd($request);
//        $this->validate($request,
//            [
//                'schedule_id' => 'required',
//                'diagnosis' => 'required',
//                'prescription' => 'required',
//            ]);

        $schedule_id = Schedule::where(['id' => $id])->first();
        $schedule_id=$schedule_id->id;


        $diagnosis = new  Diagnosis();
        $diagnosis->schedule_id = $schedule_id;
        $diagnosis->diagnosis = $request->input('diagnosis');
        $diagnosis->prescription = $request->input('prescription');
        $diagnosis->save();

        $sche=Schedule::findOrFail($schedule_id);
        $sche->patient_id=$sche->patient_id;
        $sche->room_doc=$sche->room_doc;
        $sche->status=1;
        $sche->save();
        return redirect('/doc_schedule')->with('message','Successfully saved');
    }

    public function index_diagnosis()
    {
       $diagnosis=Diagnosis::all();
       return view('index_diagnosis$prescription',compact('diagnosis'));
    }



}




