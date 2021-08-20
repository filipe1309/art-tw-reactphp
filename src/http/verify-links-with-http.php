<?php

require './vendor/autoload.php';

use Psr\Http\Message\ResponseInterface;

$loop = React\EventLoop\Loop::get();
$browser = new React\Http\Browser($loop);

function urlsFromHtml(string $html) : array
{
    $dom = new DOMDocument();

    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_use_internal_errors(false);

    $urls = [];

    foreach ($dom->getElementsByTagName('a') as $node) {
        $urls[] = $node->getAttribute('href');
    }

    return $urls;
}

$browser->get('https://www.globo.com')->then(function (ResponseInterface $response) use ($loop, $browser) {
    $urls = urlsFromHtml($response->getBody());
    foreach ($urls as $url) {
        $browser->head($url)->then(function (ResponseInterface $response) use ($url) {
            $status = $response->getStatusCode() === 200 ? ' [online]' : ' [offline]';

            echo "{$url} -> {$status} " . PHP_EOL;
        });
    }
});

$time_start = microtime(true);

$loop->run();

echo 'Total execution time: ' . round(microtime(true) - $time_start) . ' seconds' . PHP_EOL;
