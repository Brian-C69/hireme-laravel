<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // 1. Validate Input
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Save to database (optional)
        Contact::create($validated);

        // 3. Send email
        Mail::to('bchoong1@gmail.com')->send(new ContactMessage($validated));

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}
