<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send the email
        Mail::to('cenur10@gmail.com')->send(new \Illuminate\Contracts\Mail\Mailable($validatedData));

        // Redirect or do further processing
        return redirect()->back()->with('success', 'Your message has been submitted. We will get back to you soon.');
    }
}
