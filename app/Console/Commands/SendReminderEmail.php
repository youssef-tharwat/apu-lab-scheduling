<?php

namespace App\Console\Commands;

use App\Event;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class SendReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind users of their lab schedule';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $allEvents = Event::whereDay('start_date', '=', Carbon::today())->get();

        foreach ($allEvents as $event){
            dd($event);
            $user = User::find($event['user_id']);

            Mail::queue('emails.reminder', [
                'user' => $user,
                'lab_id'=> $event['resource_id'],
                'start' => $event['start_date'],
            ], function ($mail) use ($user) {
                $mail->to($user['email'])
                    ->from('labscheduling@apu.com', 'APU')
                    ->subject('Lab Scheduled Reminder!');
            });

        }
    }
}
