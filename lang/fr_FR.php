<?php

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(!isset($lang['fr_FR'])) $lang['fr_FR'] = $lang['en_US'];

$lang['fr_FR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Connection échouée. Essayez encore s\'il vous plaît.';
$lang['fr_FR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La vérification a été annulée. Essayez encore s\'il vous plaît.';
$lang['fr_FR']['Security']['MEMBERALREADYEXISTS'] = 'Un membre ayant cette URL d\'identité existe déjà';
$lang['fr_FR']['Security']['OPENIDHEADER'] = 'OpenID / i-name identifiants';
$lang['fr_FR']['OpenIDLoginForm']['URL'] = 'URL OpenID';
$lang['fr_FR']['OpenIDAuthenticator']['AUTHFAILED'] = 'L\'authentification OpenID / i-name a echouée.';
$lang['fr_FR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transaction OpenID en cours';
$lang['fr_FR']['OpenIDAuthenticator']['ERRORCRED'] = 'Entrez votre URL OpenID ou votre i-name s\'il vous plaît.';
$lang['fr_FR']['Security']['OPENIDURL'] = 'URL OpenID / i-name';
$lang['fr_FR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID est un système d\'authentification décentralisé sur Internet qui permet de s\'authentifier auprès de plusieurs sites web avec un seul compte. Pour plus d\'informations, visiter <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['fr_FR']['Security']['OPENIDDESC'] = '<p>Assurez-vous d\'entrer vos détails OpenID / I-name ici, cad en accord avec le protocole et les slashs pour OpenID ( cad http://openid.silverstripe.com/ ).</p>';

?>