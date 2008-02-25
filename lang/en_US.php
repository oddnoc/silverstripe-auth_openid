<?php

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

$lang['en_US'] = $lang['en_US'];

$lang['en_US']['OpenIDLoginForm']['URL'] = 'OpenID URL';
$lang['en_US']['OpenIDAuthenticator']['LOGINFAILED'] = 'Login failed. Please try again.';
$lang['en_US']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>OpenID is an Internet-wide identity system
		  					that allows you to sign in to many websites with a single account.
							For more information visit <a href="http://openid.net">openid.net</a>.</p></div>
						';
$lang['en_US']['OpenIDAuthenticator']['AUTHFAILED'] = 'The OpenID/i-name authentication failed.';
$lang['en_US']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'The verification was cancelled. Please try again.';
$lang['en_US']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'OpenID transaction in progress';
$lang['en_US']['OpenIDAuthenticator']['ERRORCRED'] = 'Please enter your OpenID URL or your i-name.';
$lang['en_US']['Security']['MEMBERALREADYEXISTS'] = 'There already exists a member with this identity URL';
$lang['en_US']['Security']['OPENIDURL'] = 'OpenID URL/i-name';
$lang['en_US']['Security']['OPENIDDESC'] = '<p>Make sure you enter your normalized OpenID/i-name credentials 
				here, i.e. with protocol and trailing slash for OpenID (e.g. http://openid.silverstripe.com/).</p>';
$lang['en_US']['Security']['OPENIDHEADER'] = 'OpenID/i-name credentials';

// New2

$lang['en_US']['Security']['EDITOPENIDURL'] = 'OpenID URL/i-name (e.g. http://openid.silverstripe.com/)';
$lang['en_US']['Security']['OPENIDURLNORMALIZATION'] = '<p>Make sure you enter your normalized OpenID/i-name credentials 
				here, i.e. with protocol and trailing slash for OpenID (e.g. http://openid.silverstripe.com/).</p>';


?>