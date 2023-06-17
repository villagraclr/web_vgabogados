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
    public $nameFrom = "";
    public $email = "";
    public $phone = "";
    public $practiceAreaTitle = "";
    public $subjectTitle = "";
    public $subject = "";
    public $messageText = "";

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $phone, $practiceAreaTitle, $subjectTitle, $subject, $messageText)
    {
	    //
	    $this->nameFrom = $name;
	    $this->email = $email;
	    $this->phone = $phone;
            $this->practiceAreaTitle = $practiceAreaTitle;
	    $this->subjectTitle = $subjectTitle;
	    $this->subject = $subject;
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
