<?php

/**
 * English (United Kingdom) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('en_GB', $lang) && is_array($lang['en_GB'])) {
	$lang['en_GB'] = array_merge($lang['en_US'], $lang['en_GB']);
} else {
	$lang['en_GB'] = $lang['en_US'];
}

$lang['en_GB']['Member']['BUTTONADDOPENIDTOACCOUNT'] = 'Add my OpenID to this account';
$lang['en_GB']['Member']['OPENIDADDEDTOACCOUNT'] = 'Your OpenID was added to your account, you can use it now to log in.';
$lang['en_GB']['OpenIDAuthenticator']['ADDOPENIDTOACCOUNTHEADER'] = 'Add your OpenID to your account';
$lang['en_GB']['OpenIDAuthenticator']['AUTHFAILED'] = 'The OpenID/i-name authentication failed.';
$lang['en_GB']['OpenIDAuthenticator']['ERRORCRED'] = 'Please enter your OpenID URL or your i-name.';
$lang['en_GB']['OpenIDAuthenticator']['LOGINFAILED'] = 'This OpenID (%s) is not registered to any account on this website. <a href="%s">Click here to add your OpenID to your account</a>.';
$lang['en_GB']['OpenIDAuthenticator']['NOOPENIDPASSED'] = 'Login with your OpenID to add it to your account.';
$lang['en_GB']['OpenIDAuthenticator']['NOTEADDOPENIDTOACCOUNT'] = 'Enter your e-mail address and your password to add your OpenID to your account.';
$lang['en_GB']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transaction in progress';
$lang['en_GB']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'The verification was cancelled. Please try again.';
$lang['en_GB']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID is an Internet-wide identity system
that allows you to sign in to many websites with a single account.
For more information visit <a href="http://openid.net">OpenID.net</a>.</p>
<p>If you want to associate your OpenID with your existing account on this website,
simply log in here with your OpenID and follow the instructions.</div> ';
$lang['en_GB']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['en_GB']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (e.g. http://openid.silverstripe.com/)';
$lang['en_GB']['Security']['MEMBERALREADYEXISTS'] = 'There already exists a member with this identity URL';
$lang['en_GB']['Security']['OPENIDDESC'] = '<p>Make sure you enter your normalized OpenID/i-name credentials
here, i.e. with protocol and trailing slash for OpenID (e.g. http://openid.silverstripe.com/).</p>';
$lang['en_GB']['Security']['OPENIDHEADER'] = 'OpenID/i-name credentials';
$lang['en_GB']['Security']['OPENIDURL'] = 'OpenID URL/i-name';

?>