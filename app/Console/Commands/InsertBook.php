<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Books;

class InsertBook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:book';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert Book Details';

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
        //$bar = $this->output->createProgressBar(10);
        for ($i=0;$i<=10;$i++) {
            Books::create(['name' => 'Biography']);
            //$bar->advance();
            //sleep(1);
        }
       // $bar->finish();
    }
}
