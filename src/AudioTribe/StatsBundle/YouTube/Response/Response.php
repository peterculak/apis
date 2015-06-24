<?php

namespace AudioTribe\StatsBundle\YouTube\Response;

use Guzzle\Http\Message\Response as GuzzleResponse;

class Response
{
    /**
     * @var GuzzleResponse
     */
    protected $guzzleResponse;

    /**
     * @param GuzzleResponse $guzzleResponse
     */
    public function setGuzzleResponse(GuzzleResponse $guzzleResponse)
    {
        $this->guzzleResponse = $guzzleResponse;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->guzzleResponse->isSuccessful();
    }

    /**
     * @param string $what
     * @return null
     */
    protected function extractFromResponse($what)
    {
        $data = $this->guzzleResponse->json();
        if ($data && is_array($data)) {
            if (array_key_exists($what, $data)) {
                return $data[$what];
            }
        }
        return null;
    }
}
