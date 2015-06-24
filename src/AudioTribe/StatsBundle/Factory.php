<?php

namespace AudioTribe\StatsBundle;

class Factory
{
    public function getYoutubeVideoResolver()
    {
        $guzzle = new \Guzzle\Http\Client('', ['redirect.disable' => true]);
        $videoResponse = new \AudioTribe\StatsBundle\YouTube\Response\VideoResponse();
        $request = new \AudioTribe\StatsBundle\YouTube\Request(['video' => $videoResponse]);
        $apiKey = 'AIzaSyB7BuJfBsHcT10zOhSMIexmREmGtQ1lgIo';
        return new \AudioTribe\StatsBundle\YouTube\VideoResolver($guzzle, $request, $apiKey);
    }
}
