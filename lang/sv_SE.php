<?php

/**
 * Swedish (Sweden) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('sv_SE', $lang) && is_array($lang['sv_SE'])) {
	$lang['sv_SE'] = array_merge($lang['en_US'], $lang['sv_SE']);
} else {
	$lang['sv_SE'] = $lang['en_US'];
}

$lang['sv_SE']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID URL/i-name-verifieringen misslyckades.';
$lang['sv_SE']['OpenIDAuthenticator']['ERRORCRED'] = 'Var god och ange din OpenID-URL eller ditt i-namn.';
$lang['sv_SE']['OpenIDAuthenticator']['LOGINFAILED'] = 'Inloggningen misslyckades. Var god försök igen.';
$lang['sv_SE']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transaktion pågår';
$lang['sv_SE']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Verifikationen avbröts. Var god försök igen.';
$lang['sv_SE']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID är ett identifikationssystem som finns på hela Internet och som tillåter dig att logga in på flera olika hemsidor med ett enda konto. Du hittar mer information på <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['sv_SE']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['sv_SE']['Security']['MEMBERALREADYEXISTS'] = 'Det finns redan en medlem med den här identitets-URLen';
$lang['sv_SE']['Security']['OPENIDHEADER'] = 'OpenID/i-name-uppgifter';
$lang['sv_SE']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>