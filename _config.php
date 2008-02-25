<?php

/**
 * Configuration file for the auth_openid module.
 * @package OpenID
 */

/**
 * Define the random number generator for the OpenID library
 *
 * To set a source of randomness, define {@link Auth_OpenID_RAND_SOURCE}
 * to the path to the randomness source. If your platform does not provide a
 * secure randomness source, the library can operate in pseudorandom mode,
 * but it is then vulnerable to theoretical attacks.
 * If you wish to operate in pseudorandom mode, define
 * {@link Auth_OpenID_RAND_SOURCE} to null.
 * On a Unix-like platform  (including MacOS X), try "/dev/random" and
 * "/dev/urandom".
 */
define('Auth_OpenID_RAND_SOURCE', null);

/**
 * Register the {@link OpenIDAuthenticator OpenID authenticator}
 */
Authenticator::register_authenticator('OpenIDAuthenticator');

?>
