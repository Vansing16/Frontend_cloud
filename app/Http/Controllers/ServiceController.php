<?php

// app/Http/Controllers/ServiceController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function addService()
    {
        return view('freelancersite.Project.addServices');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'service-title' => 'required|string|max:255',
            'service-thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validate image file
            'service-category' => 'required|string|max:255',
            'service-cost' => 'required|numeric',
            'rate-hour' => 'required|string|max:255',
            'service-description' => 'required|string|max:255',
        ]);

        try {
            // Store the uploaded file in the 'thumbnails' directory within the storage folder
            $path = $request->file('service-thumbnail')->store('thumbnails', 'public');

            // Create a new message
            $Service = new Service();
            $Service->freelancer_id = auth()->user()->id;
            $Service->title = $request->input('service-title');
            $Service->thumbnail = $path;
            $Service->category = $request->input('service-category'); // Assuming you have a 'content' field in your request
            $Service->cost = $request->input('service-cost');
            $Service->rate_hour = $request->input('rate-hour');
            $Service->description = $request->input('service-description');
            // Save the message
            error_log($Service);
            $Service->save();
            // Redirect back with success message if everything is successful
            return redirect()->back()->with('success', 'Service posted successfully!');
        } catch (\Exception $e) {
            // Redirect back with error message if an exception occurs
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to store the service. Please try again.']);
        }
    }


    public function viewService()
    {
        $me = auth()->user();
        $services = Service::where('freelancer_id', $me->id)->with('freelancer')->get();
        // $services = Service::all();
        return view('freelancersite.Project.viewService', compact('services'));
    }
}
