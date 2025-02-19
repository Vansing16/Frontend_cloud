<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:255', // Example validation rule for message content
        ]);

        try {
            // Create a new contact message using the validated data
            $contactMessage = new contactUs();
            $contactMessage->name = $request->input('name');
            $contactMessage->email = $request->input('email');
            $contactMessage->message = $request->input('message');
            $contactMessage->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            // Redirect back with an error message if something goes wrong
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again.');
        }
    }
}
