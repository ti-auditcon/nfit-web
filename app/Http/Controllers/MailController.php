<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactForm;
use Redirect;
use Session;

class MailController extends Controller
{
    public function contactForm(Request $request)
    {
        Mail::to('pablo.rioseco@asomic.com')->send(new ContactForm($request));
        Session::flash('successs','Formulario enviado con exito!');
        return Redirect::back();
    }
}
