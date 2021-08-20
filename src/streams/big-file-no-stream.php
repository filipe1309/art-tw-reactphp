<?php

ini_set('memory_limit', '10M');

echo ini_get("memory_limit"). PHP_EOL;

file_get_contents('src/streams/numbers.txt');

echo 'Memory usage ' . (memory_get_peak_usage(true)/1024/1024) . ' MB' . PHP_EOL;
