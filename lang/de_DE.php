<?php

/**
 * German (Germany) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
	$lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
	$lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Meine OpenID zu diesem Konto hinzufügen';
$lang['de_DE']['Member']['OPENIDADDEDTOACCOUNT'] = 'Ihre OpenID wurde zu Ihrem Konto hinzugefügt, so dass Sie sich nun damit einloggen können.';
$lang['de_DE']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Ihre OpenID zu Ihrem Konto hinzufügen';
$lang['de_DE']['OpenIDAuthenticator']['AUTHFAILED'] = 'Die OpenID/i-name Authentifizierung ist gescheitert.';
$lang['de_DE']['OpenIDAuthenticator']['ERRORCRED'] = 'Bitte geben Sie ihre OpenID URL oder ihren i-name ein.';
$lang['de_DE']['OpenIDAuthenticator']['LOGINFAILED'] = 'Die OpenID (%s) ist keinem Benutzerkonto dieser Seite zugeordnet. <a href="%s">Klicken Sie hier um sie zu ihrem Konto hinzuzufügen</a>.';
$lang['de_DE']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Loggen Sie sich mir Ihrer OpenID ein, um diese Ihrem Konto hinzuzufügen.';
$lang['de_DE']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Geben Sie Ihre E-Mail Adresse und Ihr Passwort ein, um Ihre OpenID Ihrem Konto hinzuzufügen.';
$lang['de_DE']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID Anfrage in Arbeit';
$lang['de_DE']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Die Überprüfung wurde abgebrochen. Bitte versuchen Sie es erneut.';
$lang['de_DE']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID ist ein internetweites Identifizierungssystem, das es Ihnen erlaubt, sich auf mehreren Websites mit einem einzigen Konto anzumelden. Für weitergehenden Informationen besuchen Sie bitte	 
<a href="http://openid.net">openid.net</a>.</p>
<p>Wenn Sie Ihre OpenID mit Ihrem existierenden Konto auf dieser Seite verknüpfen wollen, melden Sie sich einfach mit Ihrer OpenID an und folgen Sie den Anweisungen.</div>';
$lang['de_DE']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['de_DE']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (z.B. http://openid.silverstripe.com/)';
$lang['de_DE']['Security']['MEMBERALREADYEXISTS'] = 'Es gibt bereits ein Mitglied mit dieser Identifizierungs-URL';
$lang['de_DE']['Security']['OPENIDDESC'] = '<p>Stellen Sie sicher, dass Sie die normierte OpenID/i-name eingegeben haben, z.B. mit Protokoll und abschliessenem Slash für OpenID (Beispiel: http://openid.silverstripe.com/ ).<p>';
$lang['de_DE']['Security']['OPENIDHEADER'] = 'OpenID/i-name Beglaubigung';
$lang['de_DE']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>