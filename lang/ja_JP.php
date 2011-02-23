<?php

/**
 * Japanese (Japan) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('ja_JP', $lang) && is_array($lang['ja_JP'])) {
	$lang['ja_JP'] = array_merge($lang['en_US'], $lang['ja_JP']);
} else {
	$lang['ja_JP'] = $lang['en_US'];
}

$lang['ja_JP']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'このアカウントにOpenIDを追加する';
$lang['ja_JP']['Member']['OPENIDADDEDTOACCOUNT'] = 'アカウントに追加したOpenIDをログインの際に使用する';
$lang['ja_JP']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = '貴方のOpenIDを追加します';
$lang['ja_JP']['OpenIDAuthenticator']['AUTHFAILED'] = 'このOpenID/i-nameは認められません。.';
$lang['ja_JP']['OpenIDAuthenticator']['ERRORCRED'] = 'OpenID URL か i-nameを決定してください.';
$lang['ja_JP']['OpenIDAuthenticator']['LOGINFAILED'] = 'ログインに失敗しました。もう一度入力してください。';
$lang['ja_JP']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'ログインの際に貴方のOpenIDを追加します.';
$lang['ja_JP']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = '入力したe-mail addressとパスワードを貴方のOpenIDを追加します.';
$lang['ja_JP']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenIDの処理中です';
$lang['ja_JP']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = '整合性がとれません、やり直してください.';
$lang['ja_JP']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenIDは、本アカウントでインターネット上にあるWebサイトで幅広く利用できます。
							より詳しい情報は<a href="http://openid.net">こちらのサイト</a>でご確認ください。</p>
							<p>もしこのサイトで現在ご利用されているアカウントとOpenIDを関連付けるのであれば、,
							  ログインの後、OpenIDを指定してください。</p></div>
						';
$lang['ja_JP']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['ja_JP']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (e.g. http://openid.silverstripe.com/)';
$lang['ja_JP']['Security']['MEMBERALREADYEXISTS'] = 'これらの既に存在するメンバーと一致する URL';
$lang['ja_JP']['Security']['OPENIDHEADER'] = 'OpenID/i-name 証明書';

?>