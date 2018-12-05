<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CreateAsanaTasks implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    private $companyName;

    public function __construct(string $companyName)
    {
        $this->companyName = $companyName;
    }

    public function handle()
    {
        if ($this->companyName === 'janusze biznesu' && $this->attempts() === 1) {
            throw new \RuntimeException('u mnie działa');
        }

        $context = [
            'attempt_number' => $this->attempts(),
            'company_name' => $this->companyName
        ];


        Log::debug('CreateAsanaTasks job started', $context);
        sleep(5);
        Log::debug('CreateAsanaTasks job finished', $context);
    }
}
