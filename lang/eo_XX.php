<?php

/**
 * Esperanto language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('eo_XX', $lang) && is_array($lang['eo_XX'])) {
	$lang['eo_XX'] = array_merge($lang['en_US'], $lang['eo_XX']);
} else {
	$lang['eo_XX'] = $lang['en_US'];
}

$lang['eo_XX']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Aldoni mian OpenID al ĉi tiu konto';
$lang['eo_XX']['Member']['OPENIDADDEDTOACCOUNT'] = 'Via OpenID estas aldonita al via konto, do vi povas uzi ĝin por ensaluti.';
$lang['eo_XX']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Aldonu vian OpenID al via konto';
$lang['eo_XX']['OpenIDAuthenticator']['AUTHFAILED'] = 'Malsukcesis aŭtentigi la OpenID/i-nomon.';
$lang['eo_XX']['OpenIDAuthenticator']['ERRORCRED'] = 'Bonvolu enigi je via OpenID-URL aŭ via i-nomo.';
$lang['eo_XX']['OpenIDAuthenticator']['LOGINFAILED'] = 'Ĉi tiu OpenID (%s) ne estas registrita al ajna konto ĉe ĉi tiu retejo. <a href="%s">Alklaku ĉi tie por enmeti vian OpenID al via konto</a>.';
$lang['eo_XX']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Ensalutu per via OpenID por aldoni ĝin al via konto.';
$lang['eo_XX']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Enigu vian retadreson kaj vian pasvorton por aldoni vian OpenID al via konto.';
$lang['eo_XX']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID-transakcio ankoraŭ progresas.';
$lang['eo_XX']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La kontrolado estas nuligita. Bonvolu provi denove.';
$lang['eo_XX']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID estas Interretovasta identiga sistemo kiu ebligas al oni ensaluti multajn retejojn per ununura konto. Por pliaj informoj vizitu je <a href="http://openid.net">openid.net</a>.</p></div>
<p>Se vi volas asociigi vian OpenID al via ekzistanta konto ĉe ĉi tiu retejo, simple ensalutu ĉi tie per via OpenID kaj agu laŭ la instrukcioj.</p></div>';
$lang['eo_XX']['OpenIDLoginForm']['URL'] = 'OpenID-URL';
$lang['eo_XX']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (ekzemple http://openid.silverstripe.com/)';
$lang['eo_XX']['Security']['MEMBERALREADYEXISTS'] = 'Jam ekzistas membro kun ĉi tiu identeco-URL';
$lang['eo_XX']['Security']['OPENIDDESC'] = '<p>Certigu ke vi enigu vian normaligitan OpenID/i-nomo-legitimaĵon ĉi tie, t.e. kun protokolo kaj vosta oblikvo por OpenID (ekz. http://openid.silverstripe.com/).</p>';
$lang['eo_XX']['Security']['OPENIDHEADER'] = 'OpenID/i-nomo-legitimaĵo';
$lang['eo_XX']['Security']['OPENIDURL'] = 'OpenID URLO/i-nomo';

?>