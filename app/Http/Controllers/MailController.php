<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactForm;
use Redirect;

class MailController extends Controller
{
    public function contactForm(Request $request)
    {
        Mail::to('jmanuel.jorquera@gmail.com')->send(new ContactForm($request));
        return Redirect::back();

    }
}
