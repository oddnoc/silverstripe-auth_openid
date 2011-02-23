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

$lang['nl_NL']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Voeg mijn OpenID toe aan mijn account';
$lang['nl_NL']['Member']['OPENIDADDEDTOACCOUNT'] = 'Uw OpenID is toegevoegd aan uw account, u kunt er nu mee inloggen.';
$lang['nl_NL']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Voeg mijn OpenID toe aan mijn account';
$lang['nl_NL']['OpenIDAuthenticator']['AUTHFAILED'] = 'De OpenID/i-name authenticatie is mislukt.';
$lang['nl_NL']['OpenIDAuthenticator']['ERRORCRED'] = 'Vul Uw OpenID URL of i-name in.';
$lang['nl_NL']['OpenIDAuthenticator']['LOGINFAILED'] = 'Dit OpenID (%s) is niet geregistreerd aan een account op deze website. <a href="%s">Klik hier om uw OpenID bij je account te melden</a>.';
$lang['nl_NL']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Log in met uw OpenID om het toe te voegen aan uw account.';
$lang['nl_NL']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Vul je e-mail adres en je wachtwoord in om je OpenID aan je account toe te voegen.';
$lang['nl_NL']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transactie wordt uitgevoerd';
$lang['nl_NL']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'De verificatie is geannuleerd. Probeer het opnieuw.';
$lang['nl_NL']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID is een open identiteit systeem, waarmee U kunt inloggen op vele websites met hetzelfde account. Voor meer informatie; bezoek <a href="http://openid.net">openid.net</a>.</p><p>Als u uw OpenID wilt associëren met uw bestaande account op deze website, log dan hier in met uw OpenID en volg de instructies.</p></div>';
$lang['nl_NL']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['nl_NL']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-naam (bv: http://openid.silverstripe.com/)';
$lang['nl_NL']['Security']['MEMBERALREADYEXISTS'] = 'Er bestaat reeds een gebruiker met deze OpenID URL';
$lang['nl_NL']['Security']['OPENIDDESC'] = '<p>Bevestig dat U Uw genormaliseerde OpenID/i-name gegevens heeft ingevoerd, dus met protocol en schuine steep op het einde. (bijv: http://openid.silverstripe.com/).</p>';
$lang['nl_NL']['Security']['OPENIDHEADER'] = 'OpenID/i-name gegevens';
$lang['nl_NL']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>