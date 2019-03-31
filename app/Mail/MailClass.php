<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $tel;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $tel)
    {
        $this->name=$name;
        $this->tel=$tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //шаблон письма
        return $this->view('emails.contact-mail')->with([
            'name'=>$this->name,
            'tel'=>$this->tel,
        ])->subject('New');
    }
}
