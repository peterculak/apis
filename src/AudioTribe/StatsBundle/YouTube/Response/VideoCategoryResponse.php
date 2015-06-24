<?php

namespace AudioTribe\StatsBundle\YouTube\Response;

class VideoCategoryResponse extends Response
{
    public function getTitle()
    {
        return $this->extractFromResponse('items')[0]['title'];
    }
}
