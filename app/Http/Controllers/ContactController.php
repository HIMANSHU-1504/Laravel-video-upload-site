<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view("contact");
    }

    public function process(Request $request) {

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "subject" => "required",
            "message" => "required|min:30",
        ]);

        $c = new Contact;

        $c->name = $request->name;
        $c->email = $request->email;
        $c->phone = $request->phone;
        $c->subject = $request->subject;
        $c->message = $request->message;

        $c->save();

        echo "ok";

    }
}
