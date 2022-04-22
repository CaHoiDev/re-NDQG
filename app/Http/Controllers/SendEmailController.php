<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use App\Mail\MailToCus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->all();

        $mailToAdmin = new MailContact($data['name'], $data['email'], $data['message']);
        $mailToCus = new MailToCus();
//        dd(gettype($data['email']));
//
        Mail::to("the.vuphamlethanh@gmail.com")->send($mailToAdmin);
        Mail::to($data['email'])->send($mailToCus);

        return view('portfolio.thankyou');
    }
}
