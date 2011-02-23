<?php

/**
 * Italian (Italy) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('it_IT', $lang) && is_array($lang['it_IT'])) {
	$lang['it_IT'] = array_merge($lang['en_US'], $lang['it_IT']);
} else {
	$lang['it_IT'] = $lang['en_US'];
}

$lang['it_IT']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Aggiungi il mio OpenID a questo account';
$lang['it_IT']['Member']['OPENIDADDEDTOACCOUNT'] = 'Il tuo OpenID è stato aggiunto al tuo account, puoi usarlo per autenticarti.';
$lang['it_IT']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Aggiungi il tuo OpenID al tuo account';
$lang['it_IT']['OpenIDAuthenticator']['AUTHFAILED'] = 'L\'autenticazione OpenID/i-name è fallita.';
$lang['it_IT']['OpenIDAuthenticator']['ERRORCRED'] = 'Per favore inserisci il tuo URL OpenID o il tuo i-name.';
$lang['it_IT']['OpenIDAuthenticator']['LOGINFAILED'] = 'Questo OpenID (%s) non è registrato a nessun account su questo sito web. <a href="%s">Clicca qui per aggiungere il tuo OpenID al tuo account</a>.';
$lang['it_IT']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Accedi con OpenID per aggiugere questo al tuo account';
$lang['it_IT']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Inserisci il tuo indirizzo e-mail e la tua password per aggiunger il tuo OpenID al tuo account.';
$lang['it_IT']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transazione OpenID in corso';
$lang['it_IT']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'La verifica è stata cancellata. Per favore prova di nuovo.';
$lang['it_IT']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID è un sistema di identificazione su Internet che ti permette di fare il login su più siti web con un singolo account. Per maggiori informazioni visita <a href="http://openid.net">openid.net</a>.</p>
<p>Se vuoi associare il tuo OpenID con il tuo account presente su questo sito web, accedi qui semplicemente col tuo OpenID e segui le istruzioni.</p></div>';
$lang['it_IT']['OpenIDLoginForm']['URL'] = 'URL OpenID';
$lang['it_IT']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (e.g. http://openid.silverstripe.com/)';
$lang['it_IT']['Security']['MEMBERALREADYEXISTS'] = 'Esiste già un membro con questo URL identificativo';
$lang['it_IT']['Security']['OPENIDDESC'] = '<p>Assicurati di inserire qui le tue credenziali OpenID/i-name corrette, per es. quelle per OpenID con il protocollo e lo slash (http://openid.silverstripe.com/).</p>';
$lang['it_IT']['Security']['OPENIDHEADER'] = 'Credenziali OpenID/i-name';
$lang['it_IT']['Security']['OPENIDURL'] = 'URL/i-name OpenID';

?>