<?php

// autoload would be done by framework
$loader = require __DIR__.'/vendor/autoload.php';

$factory = new \AudioTribe\StatsBundle\Factory();

// and this is how I want to be using that client class - just 2 lines
$client = $factory->getYoutubeVideoResolver();
$response = $client->get('https://www.youtube.com/watch?v=ieowIzQwYvs');

print $response->getTitle() . "\n";
print $response->getAuthor() . "\n";
print $response->getPlaybackCount() . "\n";