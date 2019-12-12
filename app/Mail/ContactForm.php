<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    protected $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('lab@asomic.com')
        ->view('emails.contact')                    
        ->with([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'boxname' => $this->request->boxname,
            'city' => $this->request->city,
            'users' => $this->request->users,
         ]);
    }
}
