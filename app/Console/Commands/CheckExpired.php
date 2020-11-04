<?php

namespace App\Console\Commands;

use App\Payment;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckExpired extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command will help check plans that have expired!';

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
        $payments = Payment::where('status', 'success')->where('expired', 0)->get();

        foreach ($payments as $payment) 
            {
                //to get user id
                $user_id = $payment->payer_id;
                $user = User::find($user_id);

                //to mark the transaction expired
                $plan = $payment->package;
                $date = $payment->created_at;

                if ($plan == 'lite') 
                    {
                        $hourAdd = 18;
                    }elseif($plan == 'pro')
                        {
                            $hourAdd = 35;
                        }elseif ($plan == 'max') 
                            {
                                $hourAdd = 15;
                            }else
                                {
                                    $hourAdd = 96;
                                }

                $carbon_date = Carbon::parse($date);
                $realtime = $carbon_date->addHours($hourAdd);

                $now = date('Y-m-d H:i:s');
                $startDate = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
                $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $realtime);

                if ( $now > $endDate) 
                    {
                        $days = 0;
                        $hours = 0;
                        $minutes = 0;
                    }else
                        {
                            $days = $startDate->diffInDays($endDate);
                            $hours = $startDate->copy()->addDays($days)->diffInHours($endDate);
                            $minutes = $startDate->copy()->addDays($days)->addHours($hours)->diffInMinutes($endDate);
                        }

                if ($days == 0 && $hours == 0 && $minutes == 0) 
                    {
                        $payment->update([
                            'expired' => 1,
                        ]);
                    }
            }

        dd('work done!');
    }
}
