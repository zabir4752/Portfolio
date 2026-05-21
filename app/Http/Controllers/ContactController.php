<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('messages', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:5',
        ]);

        // Save to Database
        $contact = Contact::create($validated);

        // Send Email (Logged to laravel.log in local)
        try {
            Mail::raw(
                "Name: {$contact->name}\nEmail: {$contact->email}\n\nMessage:\n{$contact->message}",
                function ($message) use ($contact) {
                    $message->to('siddiquezabir2020@gmail.com')
                            ->subject("New Contact Form Message from {$contact->name}");
                }
            );
        } catch (\Exception $e) {
            // Keep going even if mail fails, since DB saved successfully
            report($e);
        }

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
