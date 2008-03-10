<?php

/**
 * Dutch (Netherlands) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('nl_NL', $lang) && is_array($lang['nl_NL'])) {
	$lang['nl_NL'] = array_merge($lang['en_US'], $lang['nl_NL']);
} else {
	$lang['nl_NL'] = $lang['en_US'];
}

$lang['nl_NL']['OpenIDAuthenticator']['AUTHFAILED'] = 'De OpenID/i-name authenticatie is mislukt.';
$lang['nl_NL']['OpenIDAuthenticator']['ERRORCRED'] = 'Vul Uw OpenID URL of i-name in.';
$lang['nl_NL']['OpenIDAuthenticator']['LOGINFAILED'] = 'Het inloggen is mislukt. Probeer het a.u.b. opnieuw.';
$lang['nl_NL']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transactie wordt uitgevoerd';
$lang['nl_NL']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'De verificatie is geannuleerd. Probeer het opnieuw.';
$lang['nl_NL']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID is een open identiteitssysteem, waarmee U kunt inloggen op vele websites met hetzelfde account. Voor meer informatie; bezoek <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['nl_NL']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['nl_NL']['Security']['MEMBERALREADYEXISTS'] = 'Er bestaat reeds een gebruiker met deze OpenID URL';
$lang['nl_NL']['Security']['OPENIDDESC'] = '<p>Bevestig dat U Uw genormaliseerde OpenID/i-name gegevens heeft ingevoerd, dus met protocol en schuine steep op het einde. (b.v. http://openid.silverstripe.com/).</p>';
$lang['nl_NL']['Security']['OPENIDHEADER'] = 'OpenID/i-name gegevens';
$lang['nl_NL']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>