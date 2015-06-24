<?php

namespace AudioTribe\StatsBundle\YouTube\Response;

use AudioTribe\StatsBundle\Interfaces\AuthorAwareResponse;

class VideoResponse extends Response implements AuthorAwareResponse
{
    public function getTitle()
    {
        $data = $this->guzzleResponse->json();
        return $data['items'][0]['snippet']['title'];
    }

    public function getThumbnailUrl()
    {
        $data = $this->guzzleResponse->json();
        return $data['items'][0]['snippet']['thumbnails']['medium']['url'];
    }

    public function getAuthor()
    {
        $data = $this->guzzleResponse->json();
        return $data['items'][0]['snippet']['channelTitle'];
    }

    public function getPlaybackCount()
    {
        $data = $this->guzzleResponse->json();
        return $data['items'][0]['statistics']['viewCount'];
    }
}
