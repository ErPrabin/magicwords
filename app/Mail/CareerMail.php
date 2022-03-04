<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;
    private $data;
    private $cv;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $cv)
    {
        $this->data = $data;
        $this->cv = $cv;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail =  $this->view('email.mail')
            ->subject('Career | Apply for job')
            ->with('data', $this->data)
            ->attach(public_path('career-file/' . $this->cv));
        return $mail;
    }
}
