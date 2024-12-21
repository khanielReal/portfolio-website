<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Send the email
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('ngangakehlani28@gmail.com')
                    ->subject('Contact Form Submission')
                    ->from($request->email, $request->name);
        });

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
