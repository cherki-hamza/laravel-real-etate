<?php

namespace App\Mail\frontend;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    public $data ;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // defin the data mardown
        $subject = $this->data['name'] .'Send a Message On '.$this->data['subject'];

        return $this->markdown('frontend/emails.contactMail')
                    ->subject($subject)
                    ->with([
                        'data' => $this->data
        ]);
    }
}
