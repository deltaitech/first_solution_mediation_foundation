<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class ConsultationRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $consultation_request;

    public function __construct($consultation_request)
    {
        $this->consultation_request = $consultation_request;
    }


    public function envelope()
    {
        return new Envelope(
            from: new Address($this->consultation_request->email, $this->consultation_request->name),
            subject: __('words.consultation_request_mail'),
        );
    }


    public function content()
    {
        return new Content(
            view: 'mail.consultation_request_mail',
        );
    }

    public function attachments()
    {
        return [];
    }
}
