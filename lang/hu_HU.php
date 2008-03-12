<?php

/**
 * Hungarian (Hungary) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('hu_HU', $lang) && is_array($lang['hu_HU'])) {
	$lang['hu_HU'] = array_merge($lang['en_US'], $lang['hu_HU']);
} else {
	$lang['hu_HU'] = $lang['en_US'];
}

$lang['hu_HU']['OpenIDAuthenticator']['AUTHFAILED'] = 'A OpenID/i-name azonosítás nem sikerült.';
$lang['hu_HU']['OpenIDAuthenticator']['ERRORCRED'] = 'Kérünk, add meg az OpenID URL-edet, vagy az i-name-edet.';
$lang['hu_HU']['OpenIDAuthenticator']['LOGINFAILED'] = 'Sikertelen bejelentkezés. Kérünk, próbáld újra.';
$lang['hu_HU']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID tranzakció folyamatban';
$lang['hu_HU']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'A megerősítés meg lett szakítva. Kérünk, próbáld újra.';
$lang['hu_HU']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>Az OpenID egy elterjedt azonosítórendszer, aminek segítségével egyetlen fiókkal (azonosítóval) sok weblapra bejelentkezhetsz. További információkért látogass el az <a href="http://openid.net">openid.net</a> weboldalra.</p></div>';
$lang['hu_HU']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['hu_HU']['Security']['MEMBERALREADYEXISTS'] = 'Már létezik egy tag ezzel az azonosító URL-lel.';
$lang['hu_HU']['Security']['OPENIDDESC'] = '<p>Kérünk, győződj meg róla, hogy a normalizált OpenID/i-name azonosítódat adod meg, protokoljelzéssel és a végső perjellel együtt (pl. http://openid.silverstripe.com/).</p>';
$lang['hu_HU']['Security']['OPENIDHEADER'] = 'OpenID/i-name azonosító';
$lang['hu_HU']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>