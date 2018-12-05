<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendConfirmationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $companyEmail;

    public function __construct(string $companyEmail)
    {
        $this->companyEmail = $companyEmail;
    }

    public function handle()
    {
        $context = [
            'attempt_number' => $this->attempts(),
            'company_email' => $this->companyEmail
        ];

        Log::debug('SendConfirmationEmail job started', $context);
        sleep(0.2);
        Log::debug('SendConfirmationEmail job finished', $context);
    }
}
