<?php

/**
 * Danish (Denmark) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('da_DK', $lang) && is_array($lang['da_DK'])) {
	$lang['da_DK'] = array_merge($lang['en_US'], $lang['da_DK']);
} else {
	$lang['da_DK'] = $lang['en_US'];
}

$lang['da_DK']['OpenIDAuthenticator']['AUTHFAILED'] = 'Dit OpenID/i-name\'s identitet kunne ikke bekræftes.';
$lang['da_DK']['OpenIDAuthenticator']['ERRORCRED'] = 'Indtast din OpenID URL eller dit i-name';
$lang['da_DK']['OpenIDAuthenticator']['LOGINFAILED'] = 'Logind fejlede. Prøv venligst igen.';
$lang['da_DK']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transaktion i gang.';
$lang['da_DK']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Verificeringen blev afbrudt. Prøv igen.';
$lang['da_DK']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID er et globalt internet identitets system der muliggør at logge ind på flere sider med samme konto.
For mere information kan du besøge <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['da_DK']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['da_DK']['Security']['MEMBERALREADYEXISTS'] = 'Der findes allerede et medlem med denne identitets URL';
$lang['da_DK']['Security']['OPENIDDESC'] = '<p>Du skal sikre dig at du indtaster dine normale OpenID/i-name informationer her, F.eks med protokol og efterfølgende slash for OpenID (F.eks http://openid.silverstripe.com/).</p>';
$lang['da_DK']['Security']['OPENIDHEADER'] = 'OpenID/i-name informationer';
$lang['da_DK']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>