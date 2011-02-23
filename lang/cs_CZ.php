<?php

/**
 * Czech (Czech Republic) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('cs_CZ', $lang) && is_array($lang['cs_CZ'])) {
	$lang['cs_CZ'] = array_merge($lang['en_US'], $lang['cs_CZ']);
} else {
	$lang['cs_CZ'] = $lang['en_US'];
}

$lang['cs_CZ']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Přidat moje OpenID k tomuto účtu';
$lang['cs_CZ']['Member']['OPENIDADDEDTOACCOUNT'] = 'Vaše OpenID bylo přidáno k vašemu účtu, nyní ho můžete použít k přihlášení.';
$lang['cs_CZ']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Přidat vaše OpenID k vašemu účtu';
$lang['cs_CZ']['OpenIDAuthenticator']['AUTHFAILED'] = 'Ověření OpenID/i-name selhalo.';
$lang['cs_CZ']['OpenIDAuthenticator']['ERRORCRED'] = 'Prosím zadejte své OpenID URL své i-name.';
$lang['cs_CZ']['OpenIDAuthenticator']['LOGINFAILED'] = 'Tyto údaje OpenID (%s) nejsou registrovány u žádného účtu na těchto stránkách. <a href="%s">klikněte zde a přidejte své OpenID ke svému účtu</a>';
$lang['cs_CZ']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Přihlašte se pod vaším OpenID pro jeho přidání k vašemu účtu.';
$lang['cs_CZ']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Vložte vaši emailovou adresu a vaše heslo pro přidání vašeho OpenID k vašemu účtu.';
$lang['cs_CZ']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Probíhá provádění OpenID';
$lang['cs_CZ']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Ověření bylo zrušeno. Prosím zkuste to znovu.';
$lang['cs_CZ']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID je identifikační systém, který Vám umožní registrovat se na několik různých stránek pod jedním účtem. Pro více informací navštivte <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['cs_CZ']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['cs_CZ']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (e.g. http://openid.silverstripe.com/)';
$lang['cs_CZ']['Security']['MEMBERALREADYEXISTS'] = 'Uživatel s tímto identifikačním URL již existuje';
$lang['cs_CZ']['Security']['OPENIDDESC'] = '<p>Ujistěte se, že jste zde zadali normalizované přihlašovací údaje OpenID/i-name, případně protokolem a lomítkem pro OpenID (např. http://openid.silverstripe.com/).</p>';
$lang['cs_CZ']['Security']['OPENIDHEADER'] = 'OpenID/i-name přihlašovací údaje';
$lang['cs_CZ']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>