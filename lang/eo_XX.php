<?php

/**
 * Esperanto language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('eo_XX', $lang) && is_array($lang['eo_XX'])) {
	$lang['eo_XX'] = array_merge($lang['en_US'], $lang['eo_XX']);
} else {
	$lang['eo_XX'] = $lang['en_US'];
}

$lang['eo_XX']['OpenIDAuthenticator']['AUTHFAILED'] = 'La OpenID/i-nomo aŭtentikigo ne sukces.';
$lang['eo_XX']['OpenIDAuthenticator']['ERRORCRED'] = 'Plaĉi al enigu vian OpenID URLO aŭ via i-nomo.';
$lang['eo_XX']['OpenIDAuthenticator']['LOGINFAILED'] = 'Sinanonco ne sukcesis. Plaĉi al provi denove.';
$lang['eo_XX']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transakcio ankoraŭ progresanta.';
$lang['eo_XX']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La konfirmo estis nuligita. Plaĉi provi denove.';
$lang['eo_XX']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID estas Interretolarĝa identeco sistemo ke permesas vin sin registr multaj retejoj kun ununura konto. Por pliaj informoj vizito <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['eo_XX']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['eo_XX']['Security']['MEMBERALREADYEXISTS'] = 'Tie jam ekzistas membron kun ĉi tiu identeco URLO';
$lang['eo_XX']['Security']['OPENIDDESC'] = '<p>Certig vin enigu vian normaligita OpenID/i-nomon akreditaĵo ĉi tie, tio estas kun protokolo kaj sekv tranĉ por OpenID (ekz. http://openid.silverstripe.com/).</p>';
$lang['eo_XX']['Security']['OPENIDHEADER'] = 'OpenID/i-nomo akreditaĵo';
$lang['eo_XX']['Security']['OPENIDURL'] = 'OpenID URLO/i-nomo';

?>