<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UserUpdateCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-update:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $data = User::where('status', true)->get();

        foreach($data as $result){
            $singleUser = User::getSingleUser($result->id);
            $singleUser->points += 100;
            $singleUser->save();
        }
    }
}
