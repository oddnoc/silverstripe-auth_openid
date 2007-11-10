<?php

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(!isset($lang['zh_CN'])) $lang['zh_CN'] = $lang['en_US'];

$lang['zh_CN']['Security']['OPENIDHEADER'] = '开放系统身份（OpenID）/i-name登录信息';
$lang['zh_CN']['Security']['OPENIDURL'] = '开放系统身份（OpenID）的URL/i-name';
$lang['zh_CN']['Security']['MEMBERALREADYEXISTS'] = '已有会员占用了此身份认证URL';
$lang['zh_CN']['OpenIDAuthenticator']['ERRORCRED'] = '请输入您的开放系统身份（OpenID）或您的i-name';
$lang['zh_CN']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = '开放系统身份（OpenID）正在认证中';
$lang['zh_CN']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = '验证被取消。请重试。';
$lang['zh_CN']['OpenIDAuthenticator']['AUTHFAILED'] = '开放系统身份（OpenID）/i-name认证失败。';
$lang['zh_CN']['OpenIDAuthenticator']['LOGINFAILED'] = '登录失败。请重试。';
$lang['zh_CN']['OpenIDLoginForm']['DESC'] = '<div id="开放系统身份描述“><p>开放系统身份是一个互联网范围内的身份认证系统，他允许您用单一帐户注册登录许多网站。更多信息，访问<a href="http://openid.net">openid.net</a>.</p></div>';
$lang['zh_CN']['OpenIDLoginForm']['URL'] = '开放系统身份（OpenID）的URL';

?>