<?php

/**
 * French (France) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Ajouter mon OpenID à ce compte';
$lang['fr_FR']['Member']['OPENIDADDEDTOACCOUNT'] = 'Votre OpenID a été ajouté à votre compte, vous pouvez désormais l\'utiliser pour vous connecter.';
$lang['fr_FR']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Ajouter votre OpenID à votre compte';
$lang['fr_FR']['OpenIDAuthenticator']['AUTHFAILED'] = 'L\'authentification OpenID / i-name a echouée.';
$lang['fr_FR']['OpenIDAuthenticator']['ERRORCRED'] = 'Entrez votre URL OpenID ou votre i-name s\'il vous plaît.';
$lang['fr_FR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Cet OpenID (%s) n\'est pas liée avec une compte connu sur ce site.	<a href="%s">Veuillez cliquer ici pour lier votre OpenID à votre compte</a>.';
$lang['fr_FR']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Connectez-vous avec votre OpenID pour l\'ajouter à votre compte.';
$lang['fr_FR']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Saisissez votre adresse email et votre mot de passe pour ajouter votre OpenID à votre compte.';
$lang['fr_FR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transaction OpenID en cours';
$lang['fr_FR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La vérification a été annulée. Essayez encore s\'il vous plaît.';
$lang['fr_FR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID est un système d\'authentification décentralisé sur Internet qui permet de s\'authentifier auprès de plusieurs sites web avec un seul compte. Pour plus d\'informations, visiter <a href="http://openid.net">OpenID.net</a>.</p><p>
Si vous voulez associer votre OpenID à un compte existant sur ce site, veuillez simplement vous identifier ici avec votre OpenID et suivre les instructions.</p></div>';
$lang['fr_FR']['OpenIDLoginForm']['URL'] = 'URL OpenID';
$lang['fr_FR']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-nom (ex. http://openid.silverstripe.com/)';
$lang['fr_FR']['Security']['MEMBERALREADYEXISTS'] = 'Un membre ayant cette URL d\'identité existe déjà';
$lang['fr_FR']['Security']['OPENIDDESC'] = '<p>Assurez-vous d\'entrer vos identifiants OpenID/i-name ici, en n\'oubliant pas de préciser le protocole et le slash final pour OpenID ( exemple: http://openid.silverstripe.com/ ).</p>';
$lang['fr_FR']['Security']['OPENIDHEADER'] = 'OpenID / i-name identifiants';
$lang['fr_FR']['Security']['OPENIDURL'] = 'URL OpenID / i-name';

?>