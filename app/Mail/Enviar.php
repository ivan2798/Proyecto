<?php

namespace App\Mail;

use App\Lider; 

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Enviar extends Mailable
{
    use Queueable, SerializesModels;

    public $lider;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lider $lider)
    {
        $this->lider = $lider;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 

        return $this->from('Torneo@unova.test.mx')->view('emails.mensaje');
    }
}
