<?php

require __DIR__.'/vendor/autoload.php';

use Aalaap\Hashapass\Hashapass;

$hashapass = new Hashapass();
echo $hashapass->generate('master', 'parameter');