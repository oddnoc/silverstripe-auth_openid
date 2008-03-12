<?php

/**
 * Polish (Poland) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('pl_PL', $lang) && is_array($lang['pl_PL'])) {
	$lang['pl_PL'] = array_merge($lang['en_US'], $lang['pl_PL']);
} else {
	$lang['pl_PL'] = $lang['en_US'];
}

$lang['pl_PL']['OpenIDAuthenticator']['AUTHFAILED'] = 'Autentykacja OpenID/i-name odrzucona.';
$lang['pl_PL']['OpenIDAuthenticator']['ERRORCRED'] = 'Wprowadź swój OpenID URL lub i-name';
$lang['pl_PL']['OpenIDAuthenticator']['LOGINFAILED'] = 'Logowanie nie powiodło się. Spróbuj ponownie.';
$lang['pl_PL']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Trwa transakcja OpenID';
$lang['pl_PL']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Weryfikacja anulowana. Spróbuj ponownie.';
$lang['pl_PL']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID jest internetowym systemem identyfikacju, dzięki któremu możesz korzystać z wielu różnych stron internetowych za pomocą jednego konta. Więcej informacji szukaj na <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['pl_PL']['OpenIDLoginForm']['URL'] = 'OpenID adres URL';
$lang['pl_PL']['Security']['MEMBERALREADYEXISTS'] = 'Już istnieje członek o tym URL';
$lang['pl_PL']['Security']['OPENIDDESC'] = '<p>Upewnij się, czy wpisałeś poprawne dane OpenID/i-name tj. z protokołem i kończącym ukośnikiem dla OpenID (np. http://openid.silverstripe.com/).</p>';
$lang['pl_PL']['Security']['OPENIDHEADER'] = 'OpeID/i-name dane';
$lang['pl_PL']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>