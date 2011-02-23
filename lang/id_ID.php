<?php

/**
 * Indonesian (Indonesia) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('id_ID', $lang) && is_array($lang['id_ID'])) {
	$lang['id_ID'] = array_merge($lang['en_US'], $lang['id_ID']);
} else {
	$lang['id_ID'] = $lang['en_US'];
}

$lang['id_ID']['OpenIDAuthenticator']['AUTHFAILED'] = 'Otentikasi penID/i-name gagal';
$lang['id_ID']['OpenIDAuthenticator']['ERRORCRED'] = 'Harap masukkan OpenID URL Anda atau i-name Anda.';
$lang['id_ID']['OpenIDAuthenticator']['LOGINFAILED'] = 'Gagal masuk. Harap coba lagi.';
$lang['id_ID']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'Transaksi OpenID dalam proses';
$lang['id_ID']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'Verifikasi telah dibatalkan. Harap coba lagi.';
$lang['id_ID']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID adalah sistem identitas Internet-luas
yang membolehkan anda masuk ke berbagai situs web dengan satu keanggotaan.
Untuk informasi lebih lanjut kunjungi <a href="http://openid.net">openid.net</a>.</p></div>';
$lang['id_ID']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['id_ID']['Security']['MEMBERALREADYEXISTS'] = 'Sudah ada member dengan URL identitas ini';
$lang['id_ID']['Security']['OPENIDDESC'] = '<p>Pastikan anda memasukkan surat kepercayaan OpenID/i-name normal disini
here, dengan protokol dan trailing slash untuk OpenID (contoh http://openid.silverstripe.com/).</p>';
$lang['id_ID']['Security']['OPENIDHEADER'] = 'Surat kepercayaan OpenID/i-name';
$lang['id_ID']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>