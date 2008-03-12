<?php

/**
 * Slovak (Slovakia) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('sk_SK', $lang) && is_array($lang['sk_SK'])) {
	$lang['sk_SK'] = array_merge($lang['en_US'], $lang['sk_SK']);
} else {
	$lang['sk_SK'] = $lang['en_US'];
}

$lang['sk_SK']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpedID/i-name autentifikácia zlyhala.';
$lang['sk_SK']['OpenIDAuthenticator']['ERRORCRED'] = 'Prosím zadajte Vaše OpenID URL alebo Vaše i-name.';
$lang['sk_SK']['OpenIDAuthenticator']['LOGINFAILED'] = 'Prihlásenie zlyhalo. Prosím skúste to znovu.';
$lang['sk_SK']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Operácia OpenID sa vykonáva';
$lang['sk_SK']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Overenie bolo zrušené. Prosím skúste to znovu.';
$lang['sk_SK']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID je internetový systém identity, ktorý umožňuje prihlásenie do mnohých webových stránok pomocou jediného účtu.
Pre viac informácií navštívte <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['sk_SK']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['sk_SK']['Security']['MEMBERALREADYEXISTS'] = 'Už existuje člen s touto identifikačnou URL';
$lang['sk_SK']['Security']['OPENIDDESC'] = '<p>Uistite sa, že ste zadali normalizované OpenID/i-name prihlasovacie údaje.</p>';
$lang['sk_SK']['Security']['OPENIDHEADER'] = 'OpenID/i-name prihlasovacie údaje';
$lang['sk_SK']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>