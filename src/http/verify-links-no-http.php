<?php

$time_start = microtime(true);

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

function getUrlStatusCode(string $url) : int
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'HEAD');
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    curl_setopt($curl, CURLOPT_URL, $url);

    curl_exec($curl);
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    return $code;
}

function getUrlContent(string $url)
{
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($curl);
    curl_close($curl);

    return $html;
}

$urls = urlsFromHtml(
    getUrlContent('https://www.globo.com')
);

foreach ($urls as $url) {
    $status = getUrlStatusCode($url) === 200 ? ' [online]' : ' [offline]';

    echo "{$url} -> {$status} " . PHP_EOL;
}

echo 'Total execution time: ' . round(microtime(true) - $time_start) . ' seconds' . PHP_EOL;

