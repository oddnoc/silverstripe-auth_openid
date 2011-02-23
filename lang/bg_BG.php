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

$lang['bg_BG']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Добави моето OpenID за този профил';
$lang['bg_BG']['Member']['OPENIDADDEDTOACCOUNT'] = 'Вашето OpenID беше добавено във вашият профил, сега може да го ползвате за да влизате в системата.';
$lang['bg_BG']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Добавete вашето OpenID към вашият профил';
$lang['bg_BG']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name идентификацията неуспешна.';
$lang['bg_BG']['OpenIDAuthenticator']['ERRORCRED'] = 'Моля въвдете вашият OpenID URL или вашето i-name.';
$lang['bg_BG']['OpenIDAuthenticator']['LOGINFAILED'] = 'Това OpenID (%s) не е регистрирано към никой акаунт на тази страница. <a href="%s">Натиснете тук за да добавите вашето OpenID към вашата сметка<a/>.';
$lang['bg_BG']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Влезте с вашето OpenID за да го добавите към вашият профил.';
$lang['bg_BG']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Въведете вашият мейл адрес и вашата парола за да добавите вашето OpenID към профила ви.';
$lang['bg_BG']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID споразумение напредва';
$lang['bg_BG']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Проверката беше отменена. Моля, опитайте отново.';
$lang['bg_BG']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID е интернет идентификационна система която ви позволява да влизате в страници само с една единствена сметка. За повече информация моля посетете a href="http://openid.net">OpenID.net</a>.</p> <p>Ако искате да добавите вашето OpenID към съществуваща сметка на този сайт, просто се впишете тук с вашето OpenID и следвайте инструкцийте.</div>';
$lang['bg_BG']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['bg_BG']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-име (н.п. http://openid.silverstripe.com/)';
$lang['bg_BG']['Security']['MEMBERALREADYEXISTS'] = 'Вече съществува потребител с този идентификационен URL';
$lang['bg_BG']['Security']['OPENIDDESC'] = '<p>Уверете се, че сте въвели вашите OpenID/i-name данни тук, н.п. с протокол и наклонена черта за OpenID (н.п. http://openid.silverstripe.com/). </p>';
$lang['bg_BG']['Security']['OPENIDHEADER'] = 'OpenID/i-name данни';
$lang['bg_BG']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>