<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class SendMailController extends Controller
{
    public function submit(Request $request) {
        $content= array(
            'name'=> $request->name,
            'email'=> $request->email,
            'message'=> $request->message
        );
        Mail::to('propergamer632@gmail.com')->send(new ContactMail($content));

        session()->flash('success', 'Thank you for reaching out!');
        return back();
    }
}
