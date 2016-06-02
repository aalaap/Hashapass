<?php

/**
 * An example script to demonstrate the use of the Hashapass package
 *
 * PHP version 5
 *
 * @category File
 * @package  Hashapass
 * @author   Aalaap Ghag <aalaap@gmail.com>
 * @license  http://www.wtfpl.net/txt/copying WTFPL
 * @link     https://github.com/aalaap/Hashapass
 */ 

require __DIR__ . '/vendor/autoload.php';

use Aalaap\Hashapass\Hashapass;

$hashapass = new Hashapass();

echo '<p>' . 'Default length: ' . $hashapass->generate('master', 'parameter') .
    '</p>' . PHP_EOL;
echo '<p>' . 'Custom length: ' . $hashapass->generate(
    'master', 'parameter',
    16
) . '</p>' . PHP_EOL;
