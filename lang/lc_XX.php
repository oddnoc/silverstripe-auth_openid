<?php

/**
 * LOLCAT language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('lc_XX', $lang) && is_array($lang['lc_XX'])) {
	$lang['lc_XX'] = array_merge($lang['en_US'], $lang['lc_XX']);
} else {
	$lang['lc_XX'] = $lang['en_US'];
}

$lang['lc_XX']['OpenIDAuthenticator']['AUTHFAILED'] = 'U HAVE FIALED. TEH OPENID/I-NAEM AUTHENTICASHUN FAILED.';
$lang['lc_XX']['OpenIDAuthenticator']['ERRORCRED'] = 'PLZ ENTR UR OPENID URL OR UR I-NAYM.';
$lang['lc_XX']['OpenIDAuthenticator']['LOGINFAILED'] = 'ALL UR BASE R BELONG 2 US! LOGIN FIALED. PLZ 2 TRY AGAIN!';
$lang['lc_XX']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'UR OPENID TRANZACSHUN IZ JUS IN PROGRES';
$lang['lc_XX']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'TEH VERIFICASHUN WUZ CANCELLD. PLZ TRY AGAIN.';
$lang['lc_XX']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OPENID IZ AN INTERNET-WIDE IDENTITY SISTEM
DAT ALLOWS U 2 SIGN IN 2 LOTZ DA WEBSIETS WIF SINGLE AKOWNT.
4 MOAR INFORMASHUN VISIT <a href="http://openid.net">OPENID.NET</a>.</p></div>';
$lang['lc_XX']['OpenIDLoginForm']['URL'] = 'TEH OPENID URL';
$lang['lc_XX']['Security']['MEMBERALREADYEXISTS'] = 'THAR ALREADY EXISTS MEMBR WIF DIS IDENTITY URL';
$lang['lc_XX']['Security']['OPENIDDESC'] = '<p>MAK SHUR U ENTR UR NORMALIZD OPENID/I-NAYM CREDENTIALS
HER, I.E. WIF PROTOCOL AN TRAILIN SLASH 4 OPENID (E.G. http://openid.silverstripe.com)</p>';
$lang['lc_XX']['Security']['OPENIDHEADER'] = 'OPENID/I-NAYM CREDENSHALS';
$lang['lc_XX']['Security']['OPENIDURL'] = 'OPENID URL/I-NAYM';

?>