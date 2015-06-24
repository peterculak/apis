<?php

namespace AudioTribe\StatsBundle\YouTube;

use Guzzle\Http\Client as Guzzle;
use AudioTribe\StatsBundle\YouTube\Response\Response;

class Client
{
    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * @var Request
     */
    protected $request;

    protected $apiKey;

    /**
     * @param $appId
     * @param Guzzle $client
     */
    function __construct(Guzzle $guzzle, Request $request, $apiKey)
    {
        $this->guzzle = $guzzle;
        $this->request = $request;
        $this->apiKey = $apiKey;
    }

    /**
     * @param $url
     * @return Response
     */
    public function get($url)
    {
        $request = $this->request;

        $request->setGuzzleRequest($this->guzzle->get($url));

        return $request->send();
    }
}
