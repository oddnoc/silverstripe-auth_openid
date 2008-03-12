<?php

/**
 * Nepali (Nepal) language pack
 * @package auth_openid
 * @subpackage i18n
 */

i18n::include_locale_file('auth_openid', 'en_US');

global $lang;

if(array_key_exists('ne_NP', $lang) && is_array($lang['ne_NP'])) {
	$lang['ne_NP'] = array_merge($lang['en_US'], $lang['ne_NP']);
} else {
	$lang['ne_NP'] = $lang['en_US'];
}

$lang['ne_NP']['OpenIDAuthenticator']['AUTHFAILED'] = 'ओपेन आइडि/आइ-नाम प्रमणिकरण गर्ने कार्य हुन् सकेन ।';
$lang['ne_NP']['OpenIDAuthenticator']['ERRORCRED'] = 'कृपया आफ्नो ओपेन आइडि यू.र्.ल्  अथवा तपाईंको आइ-नाम लेखनुहोस् ।';
$lang['ne_NP']['OpenIDAuthenticator']['LOGINFAILED'] = 'लोगिन गर्ने कार्य हुन् सकेन । कृपया पुन प्रयास गर्नुहोस् ।';
$lang['ne_NP']['OpenIDAuthenticator']['TRANSACTIONINPROGRESS'] = 'ओपेन आइडि कारोबारको काम हुँदै छ';
$lang['ne_NP']['OpenIDAuthenticator']['VERIFICATIONCANCELLED'] = 'प्रमणिकरण गर्ने कार्य क्यान्सिल भयो । कृपया पुन प्रयास गर्नुहोस् । ';
$lang['ne_NP']['OpenIDLoginForm']['DESC'] = '<div id="OpenIDDescription"><p>ओपेन आइडि भकेको ईन्टरनेट-भरिको परिचय प्रकृया हो, जसले एउटै अकाउन्टले धेरै वेबसाईटहरुमा लोगिन गर्न मिल्छ । अरु धेरै जानकारीको लगी, कृपया यो वेबसाईटमा जानुहोस् ।<a href="http://openid.net">openid.net</a>.</p></div>';
$lang['ne_NP']['OpenIDLoginForm']['URL'] = 'ओपेन आइडि URL';
$lang['ne_NP']['Security']['MEMBERALREADYEXISTS'] = 'यो यू.र्.ल्  परिचय भएको कार्यकर्ता पहिले देखि छ ।';
$lang['ne_NP']['Security']['OPENIDDESC'] = '<p>निस्चित गरनुहोस् कि तपाईंले सामान्यक्रित ओपेन आइडि/आइ-नामको विवरण लेखनुभएको छ, अर्थत्  protocol and trailing slash for OpenID (e.g. 
http://openid.silverstripe.com/) भएको ।</p>';
$lang['ne_NP']['Security']['OPENIDHEADER'] = 'ओपेन आइडि/आइ-नाम विवरण';
$lang['ne_NP']['Security']['OPENIDURL'] = 'ओपेन आइडि यू.र्.ल् /आइ-नाम';

?>