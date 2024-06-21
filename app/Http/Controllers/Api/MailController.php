<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ContactAdminMail;
use App\Mail\NotificationMail;
use App\Models\Customer;
use App\Models\Contact;


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

    public function sendMailContact(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->email = $request->email;
        $customer->save();

        $contact = new Contact;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->customer_id = $customer->id;
        $contact->save();
        
        Mail::to($request->input('email'))->send(new ContactMail($customer));
        Mail::to(env('MAIL_USERNAME', 'cognitivital@gmail.com'))->send(new ContactAdminMail($customer, $contact));
        return response()->json(['message' => 'Email sent successfully!']);
    }
}
