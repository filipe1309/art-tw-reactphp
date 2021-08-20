<?php

require './vendor/autoload.php';

$loop = React\EventLoop\Loop::get();

$timer = $loop->addPeriodicTimer(1, static function () {
    static $count;

    if (null === $count) {
        $count = 0;
    }

    echo $count++ . PHP_EOL;
});

$loop->run();

