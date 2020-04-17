<?php

namespace App\Http\Controllers;


use Vedmant\FeedReader\Facades\FeedReader;

class RssController extends Controller
{

    public function rssContent()
    {

        $feed = FeedReader::read('http://www.bbcamerica.com/feed/');
        $items = array(
            'title' => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items' => $feed->get_items(),
        );
        return view('rssFeed',$items);
    }

}
