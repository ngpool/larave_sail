<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $contact;

    /**
     * Create a new message instance.
     */
    public function __construct($contact)
    {
        $this->email = $contact['email'];
        $this->contact = $contact['contact'];
    }

    public function build()
    {
        return $this
        ->from($this->email)
        ->subject('自動送信メール')
        ->view('contact.mail')
        ->with([
            'email' => $this->email,
            'contact' => $this->contact,
        ]);
    }

    // /**
    //  * Get the message envelope.
    //  */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Sendmail',
        );
    }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
