<?php

require './vendor/autoload.php';

$loop = React\EventLoop\Loop::get();

$timer = $loop->addTimer(1, static function () {
    echo 'World Timer' . PHP_EOL;
});

echo 'Hello ';

$loop->run();

