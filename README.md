## Hashapass 
[![Build Status](https://travis-ci.org/aalaap/Hashapass.svg?branch=master)](https://travis-ci.org/aalaap/Hashapass) [![Gitter](https://badges.gitter.im/aalaap/Hashapass.svg)](https://gitter.im/aalaap/Hashapass?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

[![Join the chat at https://gitter.im/aalaap/Hashapass](https://badges.gitter.im/aalaap/Hashapass.svg)](https://gitter.im/aalaap/Hashapass?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Hashapass is a library that generates unique and secure passwords, which are
a hashed combination of a master password and a variable parameter.

The algorithm is based on a Base64 encode of the HMAC_SHA1 of the provided
master password and parameter values.

## Simple Usage

```
<?php

require __DIR__.'/vendor/autoload.php';

use Aalaap\Hashapass\Hashapass;

$hashapass = new Hashapass();
echo $hashapass->generate('master', 'parameter');
```

## Motivation

I use Hashapass extensively to generate unique passwords for all my accounts.
I need it at different places, so I've made a JavaScript bookmarklet, a Windows
app and, now, a PHP package.
 
## Installation

Install using Composer.

```
composer require aalaap/Hashapass
```

## Advanced Usage

The package has one main method:

```
$hashapass->generate($master_password, $parameter);
```

By default, it will return a Hashapass-compatible 8-character password. To
get a more secure 16-character password (or longer), simply specify the
length:

```
$hashapass->generate($master_password, $parameter, 16);
```

Note that the maximum possible length is 40, as the algoritm is limited to
the length of the generated HMAC_SHA1. 

## Tests

Hashapass has been tested in PHP 5.4 through PHP 7 and HHVM. If you want to
run the tests, run:

```
vendor/bin/phpunit
```

## Contributors

Fork it, work on it, send a PR.

## License

Hashapass is licensed under WTFPL. Do whatever you want with it.
