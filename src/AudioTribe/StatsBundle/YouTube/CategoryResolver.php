<?php

namespace AudioTribe\StatsBundle\YouTube;

/**
 * Pulls details about video category from youtube api
 */
class CategoryResolver extends Client
{
    const API_URL = 'https://www.googleapis.com/youtube/v3/videoCategories?part=snippet&id=%d&key=%s';

    /**
     * @param $url
     * @return Response
     */
    public function get($categoryId)
    {
        /** @var ResolveResponse $response */
        return parent::get(sprintf(self::API_URL, (int)$categoryId, $this->apiKey));
    }
}
