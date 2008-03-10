<?php

/**
 * Portuguese (Portugal) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('pt_PT', $lang) && is_array($lang['pt_PT'])) {
	$lang['pt_PT'] = array_merge($lang['en_US'], $lang['pt_PT']);
} else {
	$lang['pt_PT'] = $lang['en_US'];
}

$lang['pt_PT']['OpenIDAuthenticator']['AUTHFAILED'] = 'A autenticação do OpenID/i-name falhou.';
$lang['pt_PT']['OpenIDAuthenticator']['ERRORCRED'] = 'Por favor ínsira o seu URL OpenID ou o seu i-name.';
$lang['pt_PT']['OpenIDAuthenticator']['LOGINFAILED'] = 'Erro na autenticação. Por favor tente novamente.';
$lang['pt_PT']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transacção OpenID em progresso';
$lang['pt_PT']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'A verificação foi cancelada. Por favor tente novamente.';
$lang['pt_PT']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID é um sistema de identidade na internet
		  					que lhe permite autenticar-se em vários sites com apenas uma conta.
							Para mais informações visite o site <a href="http://openid.net">openid.net</a>.</p></div>
						';
$lang['pt_PT']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['pt_PT']['Security']['MEMBERALREADYEXISTS'] = 'Já existe um utilizador com esta identidade';
$lang['pt_PT']['Security']['OPENIDDESC'] = '<p>Certifique-se que inseriu aqui as suas credenciais OpenID/i-name normalizadas 
				, p.ex. com protocolo e barra para a direita para o OpenID (ex. http://openid.silverstripe.com/).</p>';
$lang['pt_PT']['Security']['OPENIDHEADER'] = 'Credenciais OpenID/i-name';
$lang['pt_PT']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>