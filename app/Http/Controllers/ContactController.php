<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmation;

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send confirmation email to the customer
        Mail::to($validatedData['email'])->send(new ContactConfirmation($validatedData));

        // Optionally, you can store the message in the database or notify admin here

        // Redirect back or to a thank you page with success message
        return redirect()->back()->with('success', 'Your message has been received. We will get back to you soon.');
    }
}

