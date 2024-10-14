<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactConfirmation;
use App\Mail\AdminNotification;  // Add the AdminNotification mail class

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

        // List of admin email addresses
        $adminEmails = ['causestand@gmail.com', 'info@causestand.com', 'usanynj@yahoo.com', 'sk963070@gmail.com'];

        // Send notification email to admins
        Mail::to($adminEmails)->send(new AdminNotification($validatedData));

        // Redirect back or to a thank you page with success message
        return redirect()->back()->with('success', 'Your message has been received. We will get back to you soon.');
    }
}
