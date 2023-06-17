<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "";
    public $nameFrom = "";
    public $email = "";
    public $practiceAreaTitle = "";
    public $subjectTitle = "";
    public $messageText = "";

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $name, $email, $practiceAreaTitle, $subjectTitle, $messageText)
    {
	    //
	    $this->subject = $subject;
	    $this->nameFrom = $name;
            $this->email = $email;
            $this->practiceAreaTitle = $practiceAreaTitle;
            $this->subjectTitle = $subjectTitle;
            $this->messageText = $messageText;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
	return new Envelope(
            subject: $this->subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
	    view: 'emails.email'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
