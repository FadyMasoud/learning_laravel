<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // for bonus logging
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // 1) Validate input
        $data = $request->validate([
            'name'    => ['required','string','max:100'],
            'email'   => ['required','email','max:150'],
            'message' => ['required','string','min:5','max:2000'],
        ]);

        // 2) (Bonus) Log the message to storage/logs/laravel.log
        Log::info('Contact form submitted', [
            'name'    => $data['name'],
            'email'   => $data['email'],
            // Keep message as-is or trim; avoid logging sensitive data in real apps
            'message' => $data['message'],
            'ip'      => $request->ip(),
            'agent'   => $request->userAgent(),
        ]);

        // 3) Flash success message & redirect back to form
        return back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
    }
}
