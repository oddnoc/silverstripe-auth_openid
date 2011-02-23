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

$lang['pt_BR']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Incluir meu OpenID para esta conta';
$lang['pt_BR']['Member']['OPENIDADDEDTOACCOUNT'] = 'Seu OpenID foi incluído a sua conta, você pode usa-lo para entrar no sistema.';
$lang['pt_BR']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Incluir meu OpenID para esta conta';
$lang['pt_BR']['OpenIDAuthenticator']['AUTHFAILED'] = 'A autenticação do OpenID/i-name falhou.';
$lang['pt_BR']['OpenIDAuthenticator']['ERRORCRED'] = 'Por favor digite sua URL do OpenID ou seu i-name.';
$lang['pt_BR']['OpenIDAuthenticator']['LOGINFAILED'] = 'Este OpenID(%s) não esta registrado neste site. <a href="%s">Clique aqui para adicionar este OpenID a sua conta</a>.';
$lang['pt_BR']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Faça o login com o seu OpenID para inclui-lo a sua conta.';
$lang['pt_BR']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Entre com o seu endereço de e-mail e sua senha para incluir seu OpenId a sua conta.';
$lang['pt_BR']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transação OpenID em progresso';
$lang['pt_BR']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'A verificação foi cancelada. Por favor, tente novamente.';
$lang['pt_BR']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID é um sistema de identificação que permite que você entre em vários sites com uma única conta. Para mais informações visite <a href="http://openid.net">openid.net</a>.</p>
</div>';
$lang['pt_BR']['OpenIDLoginForm']['URL'] = 'URL do OpenID';
$lang['pt_BR']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (Ex. http://openid.silverstripe.com/)';
$lang['pt_BR']['Security']['MEMBERALREADYEXISTS'] = 'Já existe um membro com esta URL';
$lang['pt_BR']['Security']['OPENIDDESC'] = '<p>Certifique-se de digitar suas credenciais do OpenID/i-name padronizadas aqui, isto é com o protocolo e as barras para OpenID (por exemplo http://openid.silverstripe.com/).</p>';
$lang['pt_BR']['Security']['OPENIDHEADER'] = 'Credenciais OpenID/i-name';
$lang['pt_BR']['Security']['OPENIDURL'] = 'URL/i-name do OpenID';

?>