<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

//use Illuminate\Mail\Mailable;

class ReplyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $replyMessage;

    /**
     * Create a new message instance.
     *
     * @param  string  $replyMessage
     * @return void
     */
    public function __construct($replyMessage)
    {
        $this->replyMessage = $replyMessage;
    }

    public function build()
    {
        return $this->subject('Reply to Your Message')
                    ->view('Admin.emails.reply');
                 
    }
}

