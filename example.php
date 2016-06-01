<?php

require __DIR__.'/vendor/autoload.php';

use aalaap\Hashapass\Hashapass;

$hashapass = new Hashapass();
echo $hashapass->generate('master', 'parameter');