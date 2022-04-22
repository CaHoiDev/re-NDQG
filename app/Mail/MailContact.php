<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $content;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->content = $message;
    }

    public function build()
    {
        return $this
            ->subject('test')
            ->view('email.emailnotification', [
                'name' => $this->name,
                'email' => $this->email,
                'content' => $this->content
            ]);
    }
}
