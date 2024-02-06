<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns',
            // Add other validation rules for your form fields as needed
        ]);
      try {


        $contactData = $request->all(); // You might want to sanitize and validate the data
        $recipientEmail = env('MAIL_RECIPIENT_EMAIL', 'no-reply@formshub.net');

        Mail::to($recipientEmail)->send(new ContactFormMail($contactData));

        // Optionally, you can check if the email was sent successfully
        // if (count(Mail::failures()) > 0) {
        //     return redirect()->back()->withErrors(['message' => 'Failed to send email.']);
        // }
        //code...
        return redirect()->back()->with('success', trans('main.successmessagesend'));
        }
        catch (\Throwable $th) {

               return redirect()->back()->withErrors(['message' => trans('main.errorsendmessage')]);
        }

    }
}
