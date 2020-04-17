<?php

namespace App\Console\Commands;

use App\Http\Controllers\RssController;
use Illuminate\Console\Command;

class updateRssFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Update:RssFeed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates BBC America RSS Feed every 60 minutes';

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
        $controller = new RssController();
        $controller->rssContent();
    }
}
