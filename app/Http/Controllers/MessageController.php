<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function store(Request $request, $freelancerId)
    {

        // Validate the request data
        $request->validate([
            'message' => 'required|string|max:255',
            'contactinfo' => 'required|string|max:255', // Example validation rule for message content
        ]);

        // Create a new message
        $message = new Message();
        $message->user_id = auth()->user()->id;
        $message->freelancer_id = $freelancerId;
        $message->message = $request->input('message');
        $message->contact_info = $request->input('contactinfo'); // Assuming you have a 'content' field in your request
        // Save the message
        error_log($message);
        $message->save();
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function viewMessage()
    {
        $me = auth()->user();
        $messages = Message::where('freelancer_id', $me->id)->with('user')->get();
        error_log($messages);
        return view('freelancersite.Project.viewMessage', compact('messages'));
    }
}
