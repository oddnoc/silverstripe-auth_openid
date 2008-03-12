<?php

/**
 * Turkish (Turkey) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name kimlik denetimi başarısız.';
$lang['tr_TR']['OpenIDAuthenticator']['ERRORCRED'] = 'Lütfen OpenID adresinizi ve ya i-name bilginizi giriniz.';
$lang['tr_TR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Giriş başarısız oldu. Lütfen tekrar deneyin.';
$lang['tr_TR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID kimlik doğrulama işlem yapılıyor';
$lang['tr_TR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Doğrulama iptal edildi. Lütfen tekrar deneyin.';
$lang['tr_TR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID internet üzerinde bir çok servise tek noktadan, yani tek kullanıcı adı ve şifre ile bağlanmanızı sağlıyor.<br />Daha fazla bilgi için lütfen <a href="http://openid.net">openid.net</a> yi ziyaret ediniz.</p></div>';
$lang['tr_TR']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['tr_TR']['Security']['MEMBERALREADYEXISTS'] = 'Bu kimlik URL\'sine sahip bir kullanıcı zaten bulunmaktadır';
$lang['tr_TR']['Security']['OPENIDDESC'] = '<p>OpenID/i-name giriş bilgilerinizi düzgün formatta giriniz, örn. protokol kullanılmış ve / karakteri ile bitirilmiş OpenID adresi (e.g. http://openid.sizinsiteniz.com/).</p>';
$lang['tr_TR']['Security']['OPENIDHEADER'] = 'OpenID/i-isim güven belgeleri';
$lang['tr_TR']['Security']['OPENIDURL'] = 'OpenID URL/i-isim';

?>