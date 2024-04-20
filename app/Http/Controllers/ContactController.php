<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Spatie\SchemaOrg\Schema;
class ContactController extends Controller
{
    public function index(){

        $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
            ->name('Contact Us')
            ->description('Contact us to get in touch with our team. Leave us a message and we will get back to you as soon as possible.')
            ->url(url()->current());

        return view('contact',compact('schemaMarkup'));
    }

    public function sendEmail(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns',
            // Add other validation rules for your form fields as needed
        ]);
      try {


        $contactData = $request->all(); // You might want to sanitize and validate the data
        $recipientEmail = env('MAIL_RECIPIENT_EMAIL', 'contact@formshub.net');

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
