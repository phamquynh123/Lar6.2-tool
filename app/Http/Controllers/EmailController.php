<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
use App\Mail\MailNotify;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $user = auth()->user();
        $data['email'] = "phamquynh047@gmail.com";
        $data['message'] = "Manh me len em nhe !!!";
        // dd($data['email']);
        // Mail::to($user)->send(new MailNotify($user));
        Mail::to($data['email'])->send(new MailNotify($data));
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
            return "gui thanh cong";
        }
    }
}
