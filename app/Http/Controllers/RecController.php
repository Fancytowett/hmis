<?php

namespace App\Http\Controllers;

use App\Rec;
use App\User;
use Illuminate\Http\Request;

class RecController extends Controller
{
    public function create()
    {
        return view('rec.add_rec');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'id_no' => 'required',
            'phone_no' => 'required',

        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_type = 2;
        $user->save();
//        dd($user);


        $rec = new  Rec();
        $rec->user_id = $user->id;
        $rec->id_no = $request->input('id_no');
        $rec->phone_no = $request->input('phone_no');
//        dd($rec);
        $rec->save();
//     rec::create($request->all());

        return redirect('/index_rec')->with('message', ' rec successfully added');
    }

    public function edit($id)
    {
        $rec = Rec::findOrFail($id);
        return view('rec.edit_rec', compact('rec'));
    }

    public function edit_rec_dash($id)
    {
        $rec = Rec::findOrFail($id);
        return view('rec.edit_rec_dash', compact('rec'));
    }

    public function update(Request $request, $id)
    {
        dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'id_no' => 'required',
            'phone_no' => 'required',
]);

        $rec_old=Rec::where('id',$id)->first();
        $rec = Rec::findOrFail($id);
        $rec->user_id =$rec->user->id;
        $rec->id_no =$rec_old->id_no;
        $rec->phone_no = $request->input('phone_no');
        $rec->save();

        $user = User::findOrFail($rec->user->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_type = 2;
        $user->save();
//        dd($user);


        return redirect('/rec_profile')->with('message', ' Details successfully Updated');
    }

    public function index()
    {
        $recs = Rec::all();
        return view('rec.index_rec', compact('recs'));
    }

    public function destroy($id)
    {
        $rec = Rec::findOrFail($id);
        $rec->destroy($id);
        return back()->with('message', $rec->user->name . '  successfully deleted');


    }

    public function show_rec()
    {
        $rec = Rec::where('user_id', auth()->user()->id)->first();
        return view('rec.rec_profile', compact('rec'));

    }

    public function patient_index_dash()
    {

    }
}



