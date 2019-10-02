<?php

namespace App\Mail;

use App\Preference;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PreferenceMail extends Mailable
{
    use Queueable, SerializesModels;

    private $preference;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Preference $preference)
    {
        $this->preference = $preference;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $preference = [ 'preference' => $this->preference];
        return $this->view('mail.preference', $preference);
    }
}
