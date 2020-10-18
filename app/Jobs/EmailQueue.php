<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

use App\Models\Contacts;

class EmailQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $contact;
    protected $mail;

    /**
     * Create a new job instance.
     *
     * @return void
         */
    public function __construct(Contacts $contact, Mailable $mail)
    {
        $this->contact = $contact;
        $this->mail = $mail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Redis::throttle('EmailQueue')->allow(1)->every(10)
            ->then(function () {
                Mail::to($this->contact->email)->send($this->mail); 
            }, function () {
                return $this->release(10);
            });
    }
}
