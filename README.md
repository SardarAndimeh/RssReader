#Simple RSS Feed Reader

Steps

•	composer require "vedmant/laravel-feed-reader": "^1.4"

•	Creating Controller -> RssController

•	Defining a function in the Controller to read RSS-Feed-URL and pass the data to view

•	Creating a view to diplay the feed with Bootstrap Responsive Tiles (Cards)

•	Creating a Job (Command) -> App \ Console \ Commands \ updateRssFeed.php to run the RssController-Method

•	Placing the Job into the Schedule-Function (App\Console\Kernel.php), to run the job every 60 minute 

•	Adding the Schedule in the Server-Cron-Joblists
