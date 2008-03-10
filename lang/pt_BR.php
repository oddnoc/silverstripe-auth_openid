<?php

/**
 * Portuguese (Brazil) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('pt_BR', $lang) && is_array($lang['pt_BR'])) {
	$lang['pt_BR'] = array_merge($lang['en_US'], $lang['pt_BR']);
} else {
	$lang['pt_BR'] = $lang['en_US'];
}

$lang['pt_BR']['OpenIDAuthenticator']['AUTHFAILED'] = 'A autenticação do OpenID/i-name falhou.';
$lang['pt_BR']['OpenIDAuthenticator']['ERRORCRED'] = 'Por favor digite sua URL do OpenID ou seu i-name.';
$lang['pt_BR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Falha no login. Por favor, tente novamente.';
$lang['pt_BR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transação OpenID em progresso';
$lang['pt_BR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'A verificação foi cancelada. Por favor, tente novamente.';
$lang['pt_BR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID é um sistema de identificação que permite que você entre em vários sites com uma única conta. Para mais informações visite <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['pt_BR']['OpenIDLoginForm']['URL'] = 'URL do OpenID';
$lang['pt_BR']['Security']['MEMBERALREADYEXISTS'] = 'Já existe um membro com esta URL';
$lang['pt_BR']['Security']['OPENIDDESC'] = '<p>Certifique-se de digitar suas credenciais do OpenID/i-name padronizadas aqui, isto é com o protocolo e as barras para OpenID (por exemplo http://openid.silverstripe.com/).</p>';
$lang['pt_BR']['Security']['OPENIDHEADER'] = 'Credenciais OpenID/i-name';
$lang['pt_BR']['Security']['OPENIDURL'] = 'URL/i-name do OpenID';

?>