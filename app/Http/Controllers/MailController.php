<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;
use App\Models\Customer;

class MailController extends Controller
{
    public function sendMailGift(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->email = $request->email;
        $customer->save();
        
        Mail::to($request->input('email'))->bcc(env('MAIL_USERNAME', 'cognitivital@gmail.com'))->send(new NotificationMail($request->name));
        return response()->json(['message' => 'Email sent successfully!']);
    }
}
