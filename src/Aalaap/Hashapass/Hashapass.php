<?php

/**
 * Hashapass class file
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hashapass
 * @author   Aalaap Ghag <aalaap@gmail.com>
 * @license  http://www.wtfpl.net/txt/copying WTFPL
 * @link     https://github.com/aalaap/Hashapass
 */ 

namespace Aalaap\Hashapass;

/**
 * Hashapass class
 *
 * The class holding the root Hashapass class definition
 *
 * @category Class
 * @package  Hashapass
 * @author   Aalaap Ghag <aalaap@gmail.com>
 * @license  http://www.wtfpl.net/txt/copying WTFPL
 * @link     https://github.com/aalaap/Hashapass
 */ 
class Hashapass
{
    /**
     * Returns a password hashed using Base64 and HMAC-SHA1.
     *
     * @param string $master_password The master password.
     * @param string $parameter       The variable parameter.
     * @param int    $length          The length of the password. Default is 8,
     *                                maximum is 40.
     *       
     * @return string
     */
    public function generate($master_password, $parameter, $length = 8)
    {
        return substr(
            base64_encode(
                hash_hmac(
                    'sha1',
                    $parameter,
                    $master_password,
                    true
                )
            ), 0, $length
        );
    }//end generate()
}//end class
