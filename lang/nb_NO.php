<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Legg til min OpenID til denne kontoen';
$lang['nb_NO']['Member']['OPENIDADDEDTOACCOUNT'] = 'Din OpenID ble lagt til kontoen din, du kan benytte denne fra nå av.';
$lang['nb_NO']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Legg til din OpenID til din konto';
$lang['nb_NO']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name bekreftelse mislyktes';
$lang['nb_NO']['OpenIDAuthenticator']['ERRORCRED'] = 'Vennligst tast inn din OpenID URL eller ditt i-name';
$lang['nb_NO']['OpenIDAuthenticator']['LOGINFAILED'] = 'Innlogging mislykkedes. Vennligst prøv igjen.';
$lang['nb_NO']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Logg inn med din OpenID for å legge den til kontoen din.';
$lang['nb_NO']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Skriv inn din epost adresse og ditt passord for å legge til din OpenID til kontoen.';
$lang['nb_NO']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transaksjon utføres';
$lang['nb_NO']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Verifikasjonen ble avbrutt. Vennligst prøv igjen.';
$lang['nb_NO']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID er et stort internett identitetssystem som gir deg muligheten til å signere på mange nettsider med kun en konto. For mer informasjon se <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['nb_NO']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['nb_NO']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (f.eks: http://openid.silverstripe.com/)';
$lang['nb_NO']['Security']['MEMBERALREADYEXISTS'] = 'Det finnes allerede en bruker med denne identiteten.';
$lang['nb_NO']['Security']['OPENIDDESC'] = '<p>Vennligst sørg for at OpenID/-name blir riktig tastet inn f.eks. med protokoll og etterfølgende skråstrek (eks. http://openid.silverstripe.com/)';
$lang['nb_NO']['Security']['OPENIDHEADER'] = 'ÅpenID/i-navn informasjon';
$lang['nb_NO']['Security']['OPENIDURL'] = 'OpenID URL/i-name.';

?>