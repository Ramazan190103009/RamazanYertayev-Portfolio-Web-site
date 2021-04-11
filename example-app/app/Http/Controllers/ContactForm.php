<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Controller
{
    public function contact(){
        return view('contact-us');
    }
    public function sendEmail(Request $request){
      $details = [
          'name'=>$request->name, 
          'email'=>$request->email, 
          'phone'=>$request->phone,
          'msg'=>$request->msg
      ];
      Mail::to("yertayevrk@gmail.com")->send(new DemoMail2($details));
      return back()->with('msg_sent', 'Your message has been sent successfully');
    }
}
