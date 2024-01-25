<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserMessages extends Mailable
{
    use Queueable, SerializesModels;

    
    public $data;
    public $name;
    public $email;
    public $subject;
    /**
     * Create a new message instance.
     */

    public function __construct($data)
    {
        $this->data = $data;
        $this->subject = $data['subject'];
        
       $this->name = $data['name'];
       $this->email = $data['email']; 
       $this->from($this->email,$this->name);
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.usersmessages',
            with: [
                'data' => $this->data ]
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
