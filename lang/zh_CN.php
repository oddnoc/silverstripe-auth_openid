<?php

/**
 * Chinese (China) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('zh_CN', $lang) && is_array($lang['zh_CN'])) {
	$lang['zh_CN'] = array_merge($lang['en_US'], $lang['zh_CN']);
} else {
	$lang['zh_CN'] = $lang['en_US'];
}

$lang['zh_CN']['OpenIDAuthenticator']['AUTHFAILED'] = '开放身份证（OpenID）/i-name认证失败。';
$lang['zh_CN']['OpenIDAuthenticator']['ERRORCRED'] = '请输入您的开放身份证（OpenID）或i-name';
$lang['zh_CN']['OpenIDAuthenticator']['LOGINFAILED'] = '登录失败。请重试。';
$lang['zh_CN']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = '开放身份证（OpenID）正在认证中';
$lang['zh_CN']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = '认证被取消。请重试。';
$lang['zh_CN']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription“><p>开放身份证（OpenID)是一个互联网范围内的身份认证系统，允许您用单一帐户登录许多网站。更多信息，请参阅<a href="http://openid.net">openid.net</a>.</p></div>';
$lang['zh_CN']['OpenIDLoginForm']['URL'] = '开放身份证（OpenID）路径（URL）';
$lang['zh_CN']['Security']['MEMBERALREADYEXISTS'] = '已有会员占用了此身份认证URL';
$lang['zh_CN']['Security']['OPENIDDESC'] = '<p>请确认您在此输入您标准化的开放通行证（OpenID）或i-name登录信息，即,带有协议名及尾随斜杠的OpenID（例如，http://openid.silverstripe.com/）。</p>';
$lang['zh_CN']['Security']['OPENIDHEADER'] = '开放通行证（OpenID）或i-name登录信息';
$lang['zh_CN']['Security']['OPENIDURL'] = '开放通行证（OpenID）路径（URL）或i-name';

?>