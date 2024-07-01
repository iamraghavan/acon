<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteMail;

use Illuminate\Support\Facades\Validator;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\InvalidPassword;
use Kreait\Firebase\Exception\Auth\UserNotFound;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about.vision-and-mission');
    }

    public function message_from_founder_and_chairman()
    {
        return view('pages.about.message-from-the-founder-and-chairman');
    }

    public function message_from_principal()
    {
        return view('pages.about.message-from-the-principal');
    }

    public function message_from_secretary()
    {
        return view('pages.about.message-from-the-secretary');
    }

    public function our_history()
    {
        return view('pages.about.our-history');
    }


    public function facilities($facility)
    {
        // Check if the view exists before returning it
        if (view()->exists("facilities.$facility")) {
            // Pass the $facility variable to the view
            return view("facilities.$facility", compact('facility'));
        }

        // If the view doesn't exist, return a 404 error
        abort(404);
    }


    public function contact()
    {
        return view('pages.contact');
    }


    //sent email
    public function sent_message(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|regex:/[0-9]{10}/',
            'address' => 'required|string|max:255',
            'street_address' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'inquiry' => 'required|string',
        ]);

        // Send email
        Mail::to('andavarnsg@gmail.com')->send(new QuoteMail($request->all()));

        // Check if mail was sent successfully
        if (Mail::failures()) {
            return back()->with('error', 'Failed to send email. Please try again.');
        }

        return back()->with('success', 'Email sent successfully!');
    }


    // Department

    public function a_nursing()
    {
        return view('pages.academics.nursing');
    }

    public function a_dgnm()
    {
        return view('pages.academics.diploma-general-nursing-midwifery');
    }

    public function a_anm()
    {
        return view('pages.academics.auxiliary-nurse-midwifery');
    }


    //admissions

    public function admissions()
    {
        return view('pages.admission');
    }

    //gallery

    public function gallery()
    {
        return view('pages.gallery.gallery');
    }




    // Admin login

    public function login()
    {
        return view('admin.auth.login');
    }

    public function verify_login(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the credentials file path from the configuration
        $credentialsFile = config('services.firebase.credentials');

        // Check if the file exists and is readable
        if (!file_exists($credentialsFile) || !is_readable($credentialsFile)) {
            return redirect()->back()->withErrors(['email' => 'Service account file is missing or not readable'])->withInput();
        }

        // Initialize Firebase Auth
        $factory = (new Factory)->withServiceAccount($credentialsFile);
        $auth = $factory->createAuth();

        try {
            // Attempt to authenticate the user with Firebase
            $signInResult = $auth->signInWithEmailAndPassword($request->input('email'), $request->input('password'));

            // Handle successful login (e.g., set session, redirect)
            return redirect()->route('home')->with('success', 'Successfully logged in.');
        } catch (InvalidPassword | UserNotFound $e) {
            // Handle authentication failure
            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }
}
