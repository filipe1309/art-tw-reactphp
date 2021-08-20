<?php

require './vendor/autoload.php';

use React\Stream\ReadableResourceStream;

$loop = React\EventLoop\Loop::get();

$stream = new ReadableResourceStream(fopen('src/streams/numbers.txt', 'r'), $loop);

$stream->on('data', function ($chunk) {
    // echo "$chunk
});

$stream->on('end', function () {
    echo 'Memory usage ' . (memory_get_peak_usage(true)/1024/1024) . ' MB' . PHP_EOL;
});

