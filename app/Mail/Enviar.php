<?php

namespace App\Mail;

use App\Pet; 

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Enviar extends Mailable
{
    use Queueable, SerializesModels;

    public $pet;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pet $pet)
    {
        $this->pet = $pet;
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
