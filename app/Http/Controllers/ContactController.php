<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Create a new contact message using the validated data
            ContactUs::create($validatedData);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            // Redirect back with an error message if something goes wrong
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again.');
        }
    }
}
