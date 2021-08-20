<?php

require './vendor/autoload.php';

use React\Filesystem\Filesystem;

$loop = React\EventLoop\Loop::get();

$filesystem = Filesystem::create($loop);

$filesystem->file('src/streams/numbers.txt')->open('rb')->then(function($stream) {
    $stream->on('data', function ($chunk) {
        // echo "$chunk
    });

    $stream->on('end', function () {
        echo 'Memory usage ' . (memory_get_peak_usage(true)/1024/1024) . ' MB' . PHP_EOL;
    });
});

$loop->run();


