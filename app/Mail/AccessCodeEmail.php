<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccessCodeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $accessCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($accessCode)
    {
        $this->accessCode = $accessCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.access_code')
                    ->subject('Your Access Code');
    }
}
