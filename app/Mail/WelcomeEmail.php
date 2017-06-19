<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Customer;

class WelcomeEmail extends Mailable {

    use Queueable,
        SerializesModels;
    public $customer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Customer $customer) {
        $this->customer=$customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('emails.welcome')
                ->from('admin@laracast.com', 'Admin')
                ->cc("testmailuser1000@gmail.com", "Test")
                ->subject("Register Mail");;
    }

}
