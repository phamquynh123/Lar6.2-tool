<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        // dd($data['email']);
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->data);
        return $this->view('emails.email', ['data' => $this->data]);
    }
}
