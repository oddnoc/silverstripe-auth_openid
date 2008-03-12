<?php

/**
 * Bulgarian (Bulgaria) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('bg_BG', $lang) && is_array($lang['bg_BG'])) {
	$lang['bg_BG'] = array_merge($lang['en_US'], $lang['bg_BG']);
} else {
	$lang['bg_BG'] = $lang['en_US'];
}

$lang['bg_BG']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name идентификацията неуспешна.';
$lang['bg_BG']['OpenIDAuthenticator']['ERRORCRED'] = 'Моля въвдете вашият OpenID URL или вашето i-name.';
$lang['bg_BG']['OpenIDAuthenticator']['LOGINFAILED'] = 'Неуспешно влизане. Моля, опитайте отново.';
$lang['bg_BG']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID споразумение напредва';
$lang['bg_BG']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Проверката беше отменена. Моля, опитайте отново.';
$lang['bg_BG']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID е система за идентификация през интернет, която ви позволява да се идентифицирате в много сайтове само с един акаунт.
За повече информация посетете <a href="http://openid.net">openid.net</a>.</p></div>
';
$lang['bg_BG']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['bg_BG']['Security']['MEMBERALREADYEXISTS'] = 'Вече съществува потребител с този идентификационен URL';
$lang['bg_BG']['Security']['OPENIDDESC'] = '<p>Уверете се, че сте въвели вашите OpenID/i-name данни тук, н.п. с протокол и наклонена черта за OpenID (н.п. http://openid.silverstripe.com/). </p>';
$lang['bg_BG']['Security']['OPENIDHEADER'] = 'OpenID/i-name данни';
$lang['bg_BG']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>