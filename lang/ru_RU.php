<?php

/**
 * Russian (Russia) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('ru_RU', $lang) && is_array($lang['ru_RU'])) {
	$lang['ru_RU'] = array_merge($lang['en_US'], $lang['ru_RU']);
} else {
	$lang['ru_RU'] = $lang['en_US'];
}

$lang['ru_RU']['OpenIDAuthenticator']['AUTHFAILED'] = 'Авторизация по OpenID/i-name не выполнена.';
$lang['ru_RU']['OpenIDAuthenticator']['ERRORCRED'] = 'Пожалуйста, введите URL Вашего OpenID или Ваш i-name.';
$lang['ru_RU']['OpenIDAuthenticator']['LOGINFAILED'] = 'Вход не выполнен. Пожалуйста, попытайтесь снова.';
$lang['ru_RU']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Выполняется идентификация по OpenID';
$lang['ru_RU']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Проверка отменена. Пожалуйста, попытайтесь снова.';
$lang['ru_RU']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID - это широко распространенная в Интернет система идентификации, позволяющая пользователям авторизоваться на множестве веб-сайтов с помощью всего лишь одной учетной записи.
Для получения более подробной информации посетите сайт <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['ru_RU']['OpenIDLoginForm']['URL'] = 'Идентификатор OpenID';
$lang['ru_RU']['Security']['MEMBERALREADYEXISTS'] = 'Пользователь с таким URL идентификатором уже существует';
$lang['ru_RU']['Security']['OPENIDDESC'] = '<p>Убедитесь, что Вы ввели сюда стандартный идентификатор OpenID/i-name, т.е. с указанием протокола и слэша в конце для OpenID (например, http://openid.silverstripe.com/).</p>';
$lang['ru_RU']['Security']['OPENIDHEADER'] = 'Идентификатор OpenID/i-name';
$lang['ru_RU']['Security']['OPENIDURL'] = 'Адрес OpenID / i-name';

?>