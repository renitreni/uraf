<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewComplaint extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('do-not-reply@uraf-ksa.com')
                    ->html(
                        'New Request has been send today! <br>' .
                        $this->request->first_name . '<br>' .
                        $this->request->middle_name . '<br>' .
                        $this->request->last_name . '<br>' .
                        $this->request->complain
                    );
    }
}
