<?php

namespace App\Http\Controllers;


use Vedmant\FeedReader\Facades\FeedReader;

class RssController extends Controller
{

    public function rssContent()
    {

        $feed = FeedReader::read('http://www.bbcamerica.com/feed/');
//        $pageTitle=$feed->get_title();
        $items = array(
            'title' => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items' => $feed->get_items(),
        );
        return view('rssFeed')->with('items', $items);

    }

}
