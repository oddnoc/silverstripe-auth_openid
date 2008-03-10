<?php

/**
 * Croatian (Croatia) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('hr_HR', $lang) && is_array($lang['hr_HR'])) {
	$lang['hr_HR'] = array_merge($lang['en_US'], $lang['hr_HR']);
} else {
	$lang['hr_HR'] = $lang['en_US'];
}

$lang['hr_HR']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name autorizacije nije uspjela.';
$lang['hr_HR']['OpenIDAuthenticator']['ERRORCRED'] = 'Molim unesite Vaš OpenID URL ili Vaš i-name.';
$lang['hr_HR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Prijava nije uspjela. Pokušajte ponovno.';
$lang['hr_HR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transakcija je u tijeku';
$lang['hr_HR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Verifikacija je otkazana. Pokušajte ponovno.';
$lang['hr_HR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID je sustav koji Vam omogućuje korištenje jednog korisničkog računa na više web stranica. Za više informacija posjetite <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['hr_HR']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['hr_HR']['Security']['MEMBERALREADYEXISTS'] = 'Član sa tim URLom već postoji';
$lang['hr_HR']['Security']['OPENIDDESC'] = '<p>Provjerite da li ste upisali normalizirane OpenID/i-name podatke, npr. sa protokolom i (/) za OpenID (npr. http://openid.silverstripe.com/).</p>';
$lang['hr_HR']['Security']['OPENIDHEADER'] = 'OpenID/i-name podaci';
$lang['hr_HR']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>