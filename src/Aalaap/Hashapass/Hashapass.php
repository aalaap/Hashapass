<?php namespace Aalaap\Hashapass;

/*
 * Hashapass
 *
 * A password generator based on HMAC-SHA1 and Base64. The passwords
 * generated are identical to the Hashapass.com website. This generator
 * also allows you to specify a custom size for the generated passwords.
 * 
 * by Aalaap Ghag <aalaap@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
class Hashapass
{
    public function generate($master_password, $parameter, $length = 8)
    {
        return substr(base64_encode(hash_hmac('sha1', $parameter, $master_password, TRUE)), 0, $length);
    }
}
