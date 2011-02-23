<?php

/**
 * Catalan (Andorra) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('ca_AD', $lang) && is_array($lang['ca_AD'])) {
	$lang['ca_AD'] = array_merge($lang['en_US'], $lang['ca_AD']);
} else {
	$lang['ca_AD'] = $lang['en_US'];
}

$lang['ca_AD']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Afegeix el meu OpenID a aquest compte';
$lang['ca_AD']['Member']['OPENIDADDEDTOACCOUNT'] = 'El vostre OpenID ha estat afegit al vostre compte, ara podeu utilitzar-lo per entrar.';
$lang['ca_AD']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Afegiu el vostre OpenID al vostre compte';
$lang['ca_AD']['OpenIDAuthenticator']['AUTHFAILED'] = 'L\'autenticació OpenID/i-name ha fallat.';
$lang['ca_AD']['OpenIDAuthenticator']['ERRORCRED'] = 'Si us plau, introduïu la vostra URL OpenID o el vostre i-name.';
$lang['ca_AD']['OpenIDAuthenticator']['LOGINFAILED'] = 'Aquest OpenID (%s) no està registrat a cap compte d\'aquest lloc web. <a href="%s">Premeu aquí per afegir el vostre OpenID al vostre compte</a>.';
$lang['ca_AD']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Entreu amb el vostre OpenID per a afegir-lo al vostre compte.';
$lang['ca_AD']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Introduïu la vostra adreça de correu electrònic i la vostra contrasenya per a afegir el vostre OpenID al vostre compte.';
$lang['ca_AD']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'La transacció OpenID està en progrés';
$lang['ca_AD']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La verificació ha estat cancel·lada. Si us plau, intenteu-ho de nou.';
$lang['ca_AD']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID és un sistema d\'identitat d\'Internet que us permet entrar a molts llocs web amb un sol compte.
Per a més informació visiteu <a href="http://openid.net">OpenID.net</a>.</p>
<p>Si voleu associar el vostre OpenID amb el vostre compte existent d\'aquest web, simplement entreu amb el vostre OpenID i seguiu les instruccions.</p></div>';
$lang['ca_AD']['OpenIDLoginForm']['URL'] = 'URL OpenID';
$lang['ca_AD']['Security']['EDITOPENIDURL'] = 'URL OpenID/i-name (p.ex. http://openid.silverstripe.com/)';
$lang['ca_AD']['Security']['MEMBERALREADYEXISTS'] = 'Ja existeix un membre amb aquesta URL d\'identitat';
$lang['ca_AD']['Security']['OPENIDDESC'] = '<p>Assegureu-vos que introduïu les vostres credencials OpenID/i-name normalitzades, és a dir, amb protocol i barra final per a l\'OpenID (p.ex. http://openid.silverstripe.com/).</p>';
$lang['ca_AD']['Security']['OPENIDHEADER'] = 'Credencials OpenID/i-name';
$lang['ca_AD']['Security']['OPENIDURL'] = 'URL OpenID/i-name';

?>