<?php

namespace AudioTribe\StatsBundle\Interfaces;

interface AuthorAwareResponse
{
    /**
     * @return string
     */
    public function getAuthor();
}
