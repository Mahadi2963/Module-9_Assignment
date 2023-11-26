<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Handle form submission logic here
        // For now, let's just redirect back to the contact page
        return redirect()->route('contact')->with('message', 'Form submitted successfully!');
    }
}
