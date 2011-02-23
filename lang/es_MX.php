<?php

/**
 * Spanish (Mexico) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('es_MX', $lang) && is_array($lang['es_MX'])) {
	$lang['es_MX'] = array_merge($lang['en_US'], $lang['es_MX']);
} else {
	$lang['es_MX'] = $lang['en_US'];
}

$lang['es_MX']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Agregar mi OpenID a esta cuenta';
$lang['es_MX']['Member']['OPENIDADDEDTOACCOUNT'] = 'Has agregado satisfactoriamente un OpenID a tu cuenta, a partir de ahora puedes ingresar con él.';
$lang['es_MX']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Agrega un OpenID a tu cuenta';
$lang['es_MX']['OpenIDAuthenticator']['AUTHFAILED'] = 'Falló la autentificación OpenID/i-name';
$lang['es_MX']['OpenIDAuthenticator']['ERRORCRED'] = 'Por favor ingresa la URL de tu OpenID o tu i-name';
$lang['es_MX']['OpenIDAuthenticator']['LOGINFAILED'] = 'Este OpenID (%s) no está vinculado con ninguna cuenta en éste sitio. <a href="%s">Pulsa aquí para agregar un OpenID a tu cuenta</a>.';
$lang['es_MX']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Ingresa con tu OpenID para agregarlo a tu cuenta.';
$lang['es_MX']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Ingresa la dirección de correo-e y contraseña para agregar el OpenID a tu cuenta.';
$lang['es_MX']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transacción OpenID en progreso';
$lang['es_MX']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La verificación ha sido cancelada. Por favor inténtalo de nuevo.';
$lang['es_MX']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID es un sistema de identidad ampliamente utilizado en Internet, que te permite firmar en muchos sitios web con una única cuenta. Para mayor información visita <a href="http://openid.net">openid.net</a>.</p><p>Si deseas asociar un OpenID con tu cuenta en éste sitio web, simplemente ingresa aquí con tu OpenID y sigue las instrucciones</p></div>';
$lang['es_MX']['OpenIDLoginForm']['URL'] = 'URL OpenID';
$lang['es_MX']['Security']['EDITOPENIDURL'] = 'URL del OpenID/i-name (p.e. http://openid.silverstripe.com/)';
$lang['es_MX']['Security']['MEMBERALREADYEXISTS'] = 'Ya existe un miembro con ésta URL como identidad';
$lang['es_MX']['Security']['OPENIDDESC'] = '<p>Asegúrate de ingresar aquí el OpenID/credenciales i-nombre normalizado, p.ej. con protocolo y barra inclinada final para OpenID (ej. http://openid.silverstripe.com/).</p>';
$lang['es_MX']['Security']['OPENIDHEADER'] = 'OpenID/credenciales i-name';
$lang['es_MX']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>