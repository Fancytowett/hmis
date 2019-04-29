<?php

namespace App\Http\Controllers;

use App\County;
use App\Diagnosis;
use App\Patient;
use App\Schedule;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $counties = County::all();
        return view('patient.patient_registration', compact('counties'));
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        $counties = County::all();
        return view('patient.edit_patient', compact('counties', 'patient'));
    }
    public function edit_patient_rec($id)
    {
        $patient = Patient::findOrFail($id);
        $counties = County::all();
        return view('patient.edit_patient_rec_dash', compact('counties', 'patient'));
    }


    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request,
            [
                'f_name' => 'required',
                'm_name' => 'required',
                'l_name' => 'required',
                'k_phone' => 'required',
                'p_phone' => 'required',
                'id_no' => 'numeric',
                'county_id'=>'required',
                'estate' => 'required',
            ]);
//
//        $user=new User();
//        $user->name=$request->input('f_name');
//        $user->email=$request->input('email');
//        $user->password=bcrypt($request->input('password'));
//        $user->user_type=3;
//        $user->save();

        $patient=new Patient();
        $patient->f_name=$request->input('f_name');
//        $patient->user_id=$user->id;
        $patient->m_name=$request->input('m_name');
        $patient->l_name=$request->input('l_name');
        $patient->k_phone=$request->input('k_phone');
        $patient->p_phone=$request->input('p_phone');
        $patient->id_no=$request->input('id_no');
        $patient->estate=$request->input('estate');
        $patient->county_id=$request->input('county_id');
//        dd($patient);
        $patient->save();

        return redirect('/patient_index_rec_dash')->with('message', 'Patient is successfully added');
    }

    public function index()
    {
        $patients = Patient::all();
        return view('patient.index_patient', compact('patients'));
    }
    public function index_patient_rec()
    {
        $patients = Patient::all();
        return view('patient.index_patient_rec_dash', compact('patients'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'f_name' => 'required',
            'm_name' => 'required',
            'l_name' => 'required',
            'k_phone' => 'required',
            'p_phone' => 'required',
            'id_no' => 'numeric',
            'estate' => 'required',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->f_name = $request->input('f_name');
        $patient->m_name = $request->input('m_name');
        $patient->l_name = $request->input('l_name');
        $patient->k_phone = $request->input('k_phone');
        $patient->p_phone = $request->input('p_phone');
        $patient->id_no = $request->input('id_no');
        $patient->estate = $request->input('estate');
        $patient->save();

        return back()->with('message', 'Patient details successfully updated');
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->destroy($id);
        return back()->with('message', $patient->f_name . " " . $patient->m_name . " " . $patient->f_name . 'Was Successfully Deleted');
    }


    public function patient_diagnosis()
    {
        $pateint_id = Auth::user()->id;

            dd($patients = DB::table('patients')->where(['id',$pateint_id])->get());
//
//        $patients = Patient::all();
//        foreach ($patients as $patient) {
////           dd($patient->id);
//            $patients = Patient::where(['id', $patient->id])->get();
//            dd($patients);


    }
}