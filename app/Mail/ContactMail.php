<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @param Request $request
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
        $data = [
            'emails' => $this->request->email,
            'messages' => $this->request->message,
        ];

        return $this
            ->subject('Contact form sinistre')
            ->from('contact@sinistrevj.com')
            ->to('sinistre.vj@gmail.com')
            ->view('mail.contact', $data);
    }
}
