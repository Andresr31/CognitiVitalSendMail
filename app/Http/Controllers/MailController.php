<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;

class MailController extends Controller
{
    public function sendMailGift(Request $request)
    {
        
        Mail::to($request->input('email'))->bcc(env('MAIL_USERNAME', 'cognitivital@gmail.com'))->send(new NotificationMail($request->name));
        return response()->json(['message' => 'Email sent successfully!']);
    }
}
