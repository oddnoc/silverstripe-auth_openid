<?php

/**
 * Sinhalese (Sri Lanka) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('si_LK', $lang) && is_array($lang['si_LK'])) {
	$lang['si_LK'] = array_merge($lang['en_US'], $lang['si_LK']);
} else {
	$lang['si_LK'] = $lang['en_US'];
}

$lang['si_LK']['OpenIDAuthenticator']['ERRORCRED'] = 'OpenID URL / i-name ඵක ඇතුල් කරන්න';
$lang['si_LK']['OpenIDAuthenticator']['LOGINFAILED'] = 'ඇතුල්වීම අසාර්තකයි, නැවත උත්සාහ කරන්න';
$lang['si_LK']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'වලංගු කිරීම අවලංගු කරන ලදී. උත්සාහ කරන්න';
$lang['si_LK']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['si_LK']['Security']['MEMBERALREADYEXISTS'] = 'මෙම URL ඵක ඇති සාමාඡිකයෙක් සිටියි';
$lang['si_LK']['Security']['OPENIDHEADER'] = 'OpenID/i-name දත්ත';
$lang['si_LK']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>