<?php

namespace AudioTribe\StatsBundle\YouTube;

use Guzzle\Http\Message\RequestInterface;
use AudioTribe\StatsBundle\YouTube\Response\Response;

class Request
{
    /**
     * @var RequestInterface
     */
    private $guzzleRequest;

    /**
     * @var Response[]
     */
    private $responses = [];

    function __construct(array $responses)
    {
        $this->responses = $responses;
    }

    /**
     * @param mixed $guzzleRequest
     */
    public function setGuzzleRequest(RequestInterface $guzzleRequest)
    {
        $this->guzzleRequest = $guzzleRequest;
    }

    public function send()
    {
        $response = $this->responses['video'];

        $response->setGuzzleResponse($this->guzzleRequest->send());
        return $response;
    }
}
