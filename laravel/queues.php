<?php

// Laravel's queues provide a powerful way to manage time-consuming tasks, 
// such as sending emails,send sms, processing uploads, to be processed in the background

// Laravel supports multiple queue drivers for different backends like database, 
// Redis, Beanstalkd, Amazon SQS, and more. 
// We can configure the queue driver in your .env file:

## QUEUE_CONNECTION=redis

## php artisan make:job SendEmail

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function handle()
    {
        // Logic to send email
    }
}
