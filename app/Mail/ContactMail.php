<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @param array $contact
     * @param string $email
     * @return void
     */
    public function __construct(array $contact, $email)
    {
        $this->contact = $contact;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
                    ->subject('Contact Mail')
                    ->view('emails.contact_notification')
                    ->with(['contact' => $this->contact]);
    }
}
