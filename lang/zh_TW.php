<?php

/**
 * Chinese (Taiwan) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('zh_TW', $lang) && is_array($lang['zh_TW'])) {
	$lang['zh_TW'] = array_merge($lang['en_US'], $lang['zh_TW']);
} else {
	$lang['zh_TW'] = $lang['en_US'];
}

$lang['zh_TW']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name 身分驗證失敗。';
$lang['zh_TW']['OpenIDAuthenticator']['ERRORCRED'] = '請輸入您的OpenID 身分或i-name。';
$lang['zh_TW']['OpenIDAuthenticator']['LOGINFAILED'] = '登入失敗。再試一次。';
$lang['zh_TW']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID正在溝通';
$lang['zh_TW']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = '身分驗證已被取消。請再試一次。';
$lang['zh_TW']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID 是一個網路通用的身分認證系統。它能夠讓您用一個帳戶登入許多網站。詳情請至<a href="http://openid.net">openid.net 網站</a>.</p></div>';
$lang['zh_TW']['OpenIDLoginForm']['URL'] = 'OpenID身分';
$lang['zh_TW']['Security']['MEMBERALREADYEXISTS'] = '已經有人使用這個身分';
$lang['zh_TW']['Security']['OPENIDDESC'] = '<p>f請確認您輸入的OpenID/i-name身分是正式的。例如：OpenID含有通訊協定及結尾斜線 (http://openid.silverstripe.com/)</p>';
$lang['zh_TW']['Security']['OPENIDHEADER'] = 'OpenID/i-name 身分登入';
$lang['zh_TW']['Security']['OPENIDURL'] = 'OpenID 身分/i-name';

?>