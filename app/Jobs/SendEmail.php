<?php

namespace App\Jobs;

use Exception;
use Illuminate\Support\Facades\Mail;

class SendEmail extends AbstractJob
{
    private $path;

    private $info;

    private $fields;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path, $info, $fields)
    {
        if (func_num_args() != 3) {
            throw new Exception('Job send mail missing 3 parameter');
        }

        $this->path = $path;
        $this->info = $info;
        $this->fields = $fields;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $emails = is_array($this->info['emails']) ? $this->info['emails'] : [$this->info['emails']];
        $subject = $this->info['subject'];
        Mail::send($this->path, $this->fields, function ($message) use ($emails, $subject) {
            $message->from(config('mail.from.address'));
            $message->to($emails)->subject($subject);
        });
    }
}
