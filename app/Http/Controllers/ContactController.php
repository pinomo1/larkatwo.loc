<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class ContactController extends Controller
{
    public function ContactIndex()
    {

        $contact = Contact::take(1)->get()[0];

        return view('Site.contact', [
            'contact' =>  $contact
        ]);
    }

    public function EmailGet(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $params = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::to('pro.service.94@gmail.com')->send(new OrderShipped($params));
			
			$request->session()->flash('alert-success-send-email', 'Thank you, the email has been sent.');
        }

        return redirect()->route('Contact');
    }
}
