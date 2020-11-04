<?php

namespace App\Console\Commands;

use App\Deposit;
use App\User;
use Illuminate\Console\Command;

class FundDeposit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fund:deposit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command will credit all the successful deposite.';

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
        $deposits = Deposit::where('status', 'success')->where('remit', 0)->get();

        foreach ($deposits as $deposit) 
            {
                //to get the user
                $user_id = $deposit->user_id;
                $user = User::find($user_id);

                //to add the amount into the user balance
                $total = $user->balance + $deposit->USDamount;
                User::where('id', $user->id)->update([
                    'balance' => $total,
                ]);

                //to update it to remitted
                $deposit->update([
                    'remit' => 1,
                ]);
            }

        dd('work Done!');
    }
}
