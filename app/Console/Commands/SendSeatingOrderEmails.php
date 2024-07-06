<?php

namespace App\Console\Commands;

use App\Mail\SeatingOrder;
use App\Models\Guest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendSeatingOrderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send-seating-order {user?*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email with seating order immage';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = collect($this->argument('user'));
        if ($users->isEmpty()) {
           $users = Guest::select('email')->whereNotNull('email')->pluck('email')->unique();
           $users->push('pytelovaa@gmail.com','simonkukuc@gmail.com', 'vkolejakova1@gmail.com');
        }
        $users->each(fn($user) => Mail::to($user)->send(new SeatingOrder()));
        $this->info('Mail was sucessfully sent');
    }
}
