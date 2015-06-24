<?php

namespace AudioTribe\StatsBundle\YouTube;

/**
 * Pulls details about video from youtube api
 */
class VideoResolver extends Client
{
    const API_URL = 'https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&key=%s&id=%s';

    /**
     * @param $url
     * @return Response
     */
    public function get($url)
    {
        $bits = explode('v=', $url);
        $videoId = end($bits);
        /** @var ResolveResponse $response */
        return parent::get(sprintf(self::API_URL, $this->apiKey, $videoId));
    }
}
