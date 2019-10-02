<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SandBox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sandbox:testing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command used for testing things quickly. Just remove contents when you are done.';

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
        // Have fun!
    }
}
