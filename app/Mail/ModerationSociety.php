<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ModerationSociety extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     protected $variable;
     public function __construct($variable)
     {
         //
         $this->variable = $variable;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
     public function build()
     {
         // return $this->view('mail.sendemail');
         return $this->view('mail.ModerationSociety')
           ->with([
             'variable' => $this->variable
       ]);
     }
}
