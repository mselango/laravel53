<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class SendWelcomeEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailer->send('emails.welcome', ['data'=>'data'], function ($message) {

            $message->from('nwambachristian@gmail.com', 'Christian Nwmaba');

            $message->to('nwambachristian@gmail.com');

        });
    }
}
