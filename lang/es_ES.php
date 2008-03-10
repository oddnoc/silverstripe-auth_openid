<?php

/**
 * Spanish (Spain) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

$lang['es_ES']['OpenIDAuthenticator']['AUTHFAILED'] = 'La autentificación de OpenID/i-name ha fallado.';
$lang['es_ES']['OpenIDAuthenticator']['ERRORCRED'] = 'Por favor introduce tu OpenID URL o i-name.';
$lang['es_ES']['OpenIDAuthenticator']['LOGINFAILED'] = 'Inicio de Sesión Fallido. Por favor intenta de nuevo.';
$lang['es_ES']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transacción OpenID en progreso';
$lang['es_ES']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La verificación fué cancelada, Por favor intente de nuevo.';
$lang['es_ES']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID es un sistema de identidad  ampliamente aceptada en la Internet, que le permite acceder a una gran variedad de sitios con una sola cuenta.
Para obtener mayot información visite<a href="http://openid.net">openid.net</a>.</p></div>';
$lang['es_ES']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['es_ES']['Security']['MEMBERALREADYEXISTS'] = 'Ya existe un miembro con esta URL como identidad';
$lang['es_ES']['Security']['OPENIDDESC'] = '<p>Asegúrese de introducir sus credenciales OpenID/i-name tal cual le han sido proporcionadas, por ejemplo. incluya el protocolo y la barra en diagonal al final para su OpenID (ej. http://openid.silverstripe.com/).</p>';
$lang['es_ES']['Security']['OPENIDHEADER'] = 'Credenciales OpenID/i- name';
$lang['es_ES']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>