<?php

namespace App\Http\Controllers;

use App\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $consults=Consultation::all();
        return view('rooms.index_consult',compact('consults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.add_consult');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|unique:counties',
                'number'=>'required|numeric'
            ]);
        Consultation::create($request->all());
        return redirect('/index_consult')->with('message','consult successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        $consult=Consultation::findOrFail($id);

        return view('rooms.edit_consult',compact('consult'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'number'=>'required|numeric'
            ]);
        $consult=Consultation::findOrFail($id);
        $consult->name=$request->input('name');
        $consult->number=$request->input('number');
        $consult->save();

        return redirect('/index_consult')->with('message',$consult->name. ' details successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consult=Consultation::findOrFail($id);
        $consult->destroy($id);

        return back()->with('message','consult Successfully Deleted');
    }
}
