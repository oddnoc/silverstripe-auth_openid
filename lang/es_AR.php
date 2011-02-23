<?php

/**
 * Spanish (Argentina) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('es_AR', $lang) && is_array($lang['es_AR'])) {
	$lang['es_AR'] = array_merge($lang['en_US'], $lang['es_AR']);
} else {
	$lang['es_AR'] = $lang['en_US'];
}

$lang['es_AR']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Agregar mi OpendID a esta cuenta';
$lang['es_AR']['Member']['OPENIDADDEDTOACCOUNT'] = 'Tu OpenID fue agregado a tu cuenta, ahora puedes usarlo para acceder al sitio.';
$lang['es_AR']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Agrega tu OpenID a tu cuenta';
$lang['es_AR']['OpenIDAuthenticator']['AUTHFAILED'] = 'La autenticación utilizando el OpenID/i-name a fallado.';
$lang['es_AR']['OpenIDAuthenticator']['ERRORCRED'] = 'Por favor ingrese el URL de su OpenID o su i-name.';
$lang['es_AR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Este OpenID (%s) no está registrado a ninguna cuenta en este sitio web. <a href="%s">Haz click aquí para agregar tu OpenID a tu cuenta</a>.';
$lang['es_AR']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Ingresa a tu cuenta con OpenID para agregarlo a tu cuenta.';
$lang['es_AR']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Ingresa tu dirección email y tu contraseña para agregar tu OpenID a tu cuenta.';
$lang['es_AR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transacción de OpenID en progreso.';
$lang['es_AR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La verificación se ha cancelado. Por favor intentar nuevamente.';
$lang['es_AR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID es un sistema de identificación a lo largo de la Internet que te permite ingresar a muchos sitios web utilizando una sola cuenta.
Para más información visita <a href="http://openid.net">OpenID.net</a>.</p>
<p>Si deseas asociar tu OpenID con tu cuenta existente en este sitio web,
simplemente ingresa aquí con tu OpenID y sigue las instrucciones.</p></div>';
$lang['es_AR']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['es_AR']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (por ej. http://openid.silverstripe.com/)';
$lang['es_AR']['Security']['MEMBERALREADYEXISTS'] = 'Ya existe un miembro con este URL de identidad';
$lang['es_AR']['Security']['OPENIDDESC'] = '<p>Asegurarte de haber ingresado tus credenciales normalizadas de OpenID/i-name aquí, p.ej. con protocolo y barra final del OpenID (p.ej. http://openid.silverstripe.com/).</p>';
$lang['es_AR']['Security']['OPENIDHEADER'] = 'OpenID/credenciales i-name';
$lang['es_AR']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>