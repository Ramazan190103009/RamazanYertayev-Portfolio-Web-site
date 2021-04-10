<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
         $details = [
             'title' => 'Mail from Ramazan.Y',
             'body' => 'This is testing mail'
         ];
         Mail::to("yertayevrk@gmail.com")->send(new SendMail($details));
         return "Email sent";
    }
}
