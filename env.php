<?php

$lines = file(__DIR__ . '/.env');

foreach ($lines as $line) {
    $line = trim($line);

    if ($line === '' || strpos($line, '#') === 0) {
        continue;
    }

    putenv($line);
}
