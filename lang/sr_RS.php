<?php

/**
 * Serbian (Serbia) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('sr_RS', $lang) && is_array($lang['sr_RS'])) {
	$lang['sr_RS'] = array_merge($lang['en_US'], $lang['sr_RS']);
} else {
	$lang['sr_RS'] = $lang['en_US'];
}

$lang['sr_RS']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Додај мој OpenID овом налогу';
$lang['sr_RS']['Member']['OPENIDADDEDTOACCOUNT'] = 'Ваш OpenID је додат вашем налогу. Сада можете да га користите за пријављивање.';
$lang['sr_RS']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Додајте свој OpenID свом налогу';
$lang['sr_RS']['OpenIDAuthenticator']['AUTHFAILED'] = 'OpenID/i-name потврда идентитета није успела.';
$lang['sr_RS']['OpenIDAuthenticator']['ERRORCRED'] = 'Унесите свој OpenID URL или свој i-name.';
$lang['sr_RS']['OpenIDAuthenticator']['LOGINFAILED'] = 'Пријављивање није успело. Покушајте поново.';
$lang['sr_RS']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Пријавите се својим OpenID-ом да бисте га додали свом налогу.';
$lang['sr_RS']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Унесите своју имејл адресу и своју лозинку да бисте додали свој OpenID свом налогу.';
$lang['sr_RS']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID трансакција у току';
$lang['sr_RS']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Провера је отказана. Покушајте поново.';
$lang['sr_RS']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID је систем идентитета на Интернету који вам дозвољава да се пријавите на више сајтова користећи само један налог

За више информација, посетите <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['sr_RS']['OpenIDLoginForm']['URL'] = 'URL OpenID-a';
$lang['sr_RS']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (на пр. http://openid.silverstripe.com/)';
$lang['sr_RS']['Security']['MEMBERALREADYEXISTS'] = 'Већ постоји члан са овим URL-ом';
$lang['sr_RS']['Security']['OPENIDDESC'] = '<p>Проверите да ли сте исправно унели своје	 OpenID/i-name податке (заједно са протоколом и косом цртом на крају за OpenID (на пр. http://openid.silverstripe.com/).</p>';
$lang['sr_RS']['Security']['OPENIDHEADER'] = 'OpenID/i-name подаци';
$lang['sr_RS']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>