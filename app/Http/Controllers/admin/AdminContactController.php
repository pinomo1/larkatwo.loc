<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function Contact(){

        $contact = Contact::take(1)->get()[0];

        return view("admin.contact", [
            "contact" => $contact
        ]);
    }
    
    public function ContactUpdate(Request $request){

        $contact = Contact::take(1)->get()[0];

        $contact->adress = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;

        if ($contact->save()) {
            $request->session()->flash('alert-success-contact', 'Contact has been changed');
        }
        else {
            $request->session()->flash('alert-error-contact', 'The contact has not been changed');
        }
        return redirect()->route("contact");
    }
}
