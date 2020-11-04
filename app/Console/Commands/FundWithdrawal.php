<?php

namespace App\Console\Commands;

use App\Payment;
use App\User;
use Illuminate\Console\Command;

class FundWithdrawal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fund:withdrawal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command will top up the users ROI';

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
        $investments = Payment::where('status', 'success')->where('expired', 1)->where('balanced', 0)->get();

        foreach ($investments as $investment) 
            {
                //to get the user
                $user_id = $investment->payer_id;
                $user = User::find($user_id);

                //to update the user's account
                $package = $investment->package;
                if ($package == 'lite') 
                   {
                       $rate = 0.105;
                   }elseif($package == 'pro')
                        {
                            $rate = 0.35;
                        }elseif($package == 'max')
                            {
                                $rate = 0.60;
                            }else
                                {
                                    $rate = 0.96;
                                }

                $interest = $rate * $investment->USDamount;

                $total = $user->balance + $investment->USDamount + $interest;
                User::where('id', $user->id)->update([
                    'balance' => $total,
                ]);

                $investment->update([
                    'balanced' => 1,
                ]);
            }

        dd('work done!');
    }
}
