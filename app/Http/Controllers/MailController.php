<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function mail_send(Request $request)
    {


        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'message'=>'required',
            ]);
//        ($request);
//        ContactUs::create($request->all());
        if($request){
            Mail::to('fancytowett@gmail.com')->send(new ContactMail($request));

            Session::flash('Email succeffully received');

            return back()->with('message','Message successfully sent!');
        }
$me=789;
      return $me;
    }
}
