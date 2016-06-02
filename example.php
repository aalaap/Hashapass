<?php

require __DIR__ . '/vendor/autoload.php';

use Aalaap\Hashapass\Hashapass;

$hashapass = new Hashapass();

echo '<p>' . 'Default length: ' . $hashapass->generate('master', 'parameter') . '</p>' . PHP_EOL;
echo '<p>' . 'Custom length: ' . $hashapass->generate('master', 'parameter', 16) . '</p>' . PHP_EOL;


