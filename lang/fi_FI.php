<?php

/**
 * Finnish (Finland) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('fi_FI', $lang) && is_array($lang['fi_FI'])) {
	$lang['fi_FI'] = array_merge($lang['en_US'], $lang['fi_FI']);
} else {
	$lang['fi_FI'] = $lang['en_US'];
}

$lang['fi_FI']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-nimitunnistautuminen epäonnistui.';
$lang['fi_FI']['OpenIDAuthenticator']['ERRORCRED'] = 'Kirjoita OpenID-osoite tai i-nimesi.';
$lang['fi_FI']['OpenIDAuthenticator']['LOGINFAILED'] = 'Kirjautuminen epäonnistui. Yritä uudelleen.';
$lang['fi_FI']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID-tapahtuma on käynnissä';
$lang['fi_FI']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Tunnistautuminen peruutettiin. Yritä uudelleen.';
$lang['fi_FI']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID on internetin laajuinen palvelu, joka antaa sinun kirjatua monille verkkosivustoille yhdellä tunnuksella. Lisätietoja saat OpenID:n <a href="http://openid.net">verkkosivustolta</a>.</p></div>';
$lang['fi_FI']['OpenIDLoginForm']['URL'] = 'OpenID URL-osoite';
$lang['fi_FI']['Security']['MEMBERALREADYEXISTS'] = 'Tällä yksilöllisellä URL-osoitteella on jo rekisteröitynyt käyttäjä.';
$lang['fi_FI']['Security']['OPENIDDESC'] = '<p>Varmista että syötät normalisoidun OpenID/i-name tunnistetietosi tänne, eli protokollan ja vinoviivan kanssa OpenID:ssä (esim. http://openid.silverstripe.com/).</p>';
$lang['fi_FI']['Security']['OPENIDHEADER'] = 'OpenID/i-nimi tunnistetiedot';
$lang['fi_FI']['Security']['OPENIDURL'] = 'OpenID URL/i-nimi';

?>