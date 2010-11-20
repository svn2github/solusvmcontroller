<?php
// UI_LANGUAGE: English
define('ALL_VPSES_UNDER_ONE_ROOF', 'All VPSes under one roof');


/* start of setup page */
	define('SOLUSVMCONTROLLER_INSTALLATION', 'SolusVMController Installation');
	define('THANK_YOU_FOR_CHOOSING_SOLUSVMCONTROLLER', 'Thank you for choosing SolusVMController. Please click the next button to start installation.');
	define('NEXT', 'Next');
	define('STEP_1_OF_2', 'Step 1 of 2');
	define('PERFORM_PERMISSION_CHECKING', 'Perform permission checking');
	define('CHECK_PERMISSION_OF', 'Check permission of');
	define('PASS', 'pass');
	define('FAIL', 'fail');
	define('RE_CHECK', 'Re-check');
	define('STEP_2_OF_2', 'Step 2 of 2');
	define('CREATING_TABLE', 'Creating %table% table');
	define('WRITING_CONFIGURATION', 'Writing configuration');
	define('INSTALLTION_COMPLETED', 'Installtion completed!');
	define('YOU_CAN_NOW_LOGIN', 'You can now login with default username <b>admin</b> and password <b>admin</b>.');
	define('FINISH', 'Finish');
/* end of setup page */


/* start of menu */
	define('VPS', 'VPS');
	define('GROUP', 'Group');
	define('PROVIDER', 'Provider');
	define('SETTINGS', 'Settings');
	define('HELP', 'Help');
	define('ABOUT', 'About');
	define('LOGOUT', 'Logout');
	define('WELCOME', 'Welcome');
/* end of menu */


/* start of control */
	define('CONTROL', 'Control');
	define('ADD_VPS', 'Add VPS');
	define('CHECK_STATUS', 'Check Status');
	define('ADD_GROUP', 'Add Group');
	define('ADD_PROVIDER', 'Add Provider');
/* end of control */


/* start of 404 page */
	define('ERROR_404_PAGE_NOT_FOUND', 'Error 404: Page not found');
	define('PAGE_NOT_FOUND', 'Page not found');
	define('OPS_I_M_SORRY_THAT_THE_PAGE', 'Ops! I\'m sorry that the page you are trying to access cannot be found in our system.');
/* end of 404 page */


/* start of login page */
	define('LOGIN_PAGE', 'Login Page');
	define('ADMINISTRATOR_LOGIN', 'Administrator Login');
	define('USERNAME', 'Username');
	define('PASSWORD', 'Password');
	define('LOGIN', 'Login');
	define('INVALID_USERNAME_OR_PASSWORD', 'Invalid username or password.');
/* end of login page */


/* start of vps page */
	define('VPS_LIST', 'VPS List');
	define('ALL', 'All');
	define('THERE_ARE_NO_RESULTS_FOUND', 'There are no results found.');
	define('STATUS', 'Status');
	define('VPS_NAME', 'VPS Name');
	define('COUNTRY', 'Country');
	define('LOCATION', 'Location');
	define('PRICE', 'Price');
	define('PERIOD', 'Period');
	define('DUE_DATE', 'Due Date');
	define('SUBSCRIPTION_DUE_WITHIN_7_DAYS', 'Subscription due within 7 days');
	define('SUBSCRIPTION_DUED', 'Subscription dued');
	define('NOTES', 'Notes');
	define('ACTION', 'Action');
	define('ONLINE', 'Online');
	define('OFFLINE', 'Offline');
	define('UNKNOWN', 'Unknown');
	define('ERROR', 'Error');
	define('BOOT', 'Boot');
	define('REBOOT', 'Reboot');
	define('SHUTDOWN', 'Shutdown');
	define('EDIT', 'Edit');
	define('REMOVE', 'Remove');
	define('CANCEL', 'Cancel');
	define('YOUR_VPS_LIST_IS_EMPTY', 'Your VPS list is empty. Click <a href="%link%">here</a> to add a VPS.');
	define('API_KEY', 'API Key');
	define('API_HASH', 'API Hash');
	define('HOST', 'Host');
	define('PORT', 'Port');
	define('VPS_NAME_CANNOT_BE_BLANK', 'VPS name cannot be blank.');
	define('VPS_NAME_CANNOT_EXCEED_50_CHARACTERS', 'VPS name cannot exceed 50 characters.');
	define('A_VALID_API_KEY_SHOULD_LOOK_LIKE', 'A valid API key should look like "ABCDE-FGHIJ-KLMNO".');
	define('A_VALID_API_HASH_SHOULD_BE_40_CHARACTERS_IN_LENGTH', 'A valid API hash should be 40 characters in length.');
	define('YOU_MUST_PROVIDE_A_VALID_HOST', 'You must provide a valid host.');
	define('IS_NOT_A_VALID_PORT', '"%port%" is not a valid port number.');
	define('VPS_NAME_ALREADY_EXISTED', 'VPS name "%name%" already existed.');
	define('LOCATION_CANNOT_EXCEED_50_CHARACTERS', 'Location cannot exceed 50 characters.');
	define('IS_NOT_A_VALID_PRICE', '"%price%" is not a valid price.');
	define('IS_NOT_A_VALID_DATE', '"%date%" is not a valid date.');
	define('NOTES_CANNOT_EXCEED_200_CHARACTERS', 'Notes cannot exceed 200 characters.');
	define('VPS_HAS_BEEN_ADDED', 'VPS "%name%" has been added.');
	define('VPS_INFORMATION', 'VPS Information');
	define('HOSTNAME', 'Hostname');
	define('IP_ADDRESS', 'IP Address');
	define('BACK', 'Back');
	define('ERROR_RETRIEVING_VPS_STATUS', 'Error retrieving VPS status. Please try again later.');
	define('NO_VPS_IS_FOUND_WITH_ID', 'No VPS is found with Id "%id%".');
	define('VPS_IS_BOOTED', 'VPS "%name%" is booted.');
	define('FAILED_TO_BOOT_VPS', 'Failed to boot VPS "%name%".');
	define('VPS_IS_SHUTTED_DOWN', 'VPS "%name%" is shutted down.');
	define('FAILED_TO_SHUTDOWN_VPS', 'Failed to shutdown VPS "%name%".');
	define('VPS_IS_REBOOTED', 'VPS "%name%" is rebooted.');
	define('FAILED_TO_REBOOT_VPS', 'Failed to reboot VPS "%name%".');
	define('EDIT_VPS', 'Edit VPS');
	define('UPDATE', 'Update');
	define('VPS_HAS_BEEN_UPDATED', 'VPS "%name%" has been updated.');
	define('REMOVE_VPS', 'Remove VPS');
	define('VPS_HAS_BEEN_REMOVED', 'VPS "%name%" has been removed.');
	define('CONFIRM_TO_REMOVE_VPS', 'Confirm to remove VPS "%name%"?');
	define('EXPIRING_IN_DAY', 'Expiring in %day% day(s).');

	$countryList = array(
		'AF'=>'Afghanistan',
		'AX'=>'Aland Islands',
		'AL'=>'Albania',
		'DZ'=>'Algeria',
		'AS'=>'American Samoa',
		'AD'=>'Andorra',
		'AO'=>'Angola',
		'AI'=>'Anguilla',
		'AG'=>'Antigua and Barbuda',
		'AR'=>'Argentina',
		'AM'=>'Armenia',
		'AW'=>'Aruba',
		'AU'=>'Australia',
		'AT'=>'Austria',
		'AZ'=>'Azerbaijan',
		'BS'=>'Bahamas',
		'BH'=>'Bahrain',
		'BD'=>'Bangladesh',
		'BB'=>'Barbados',
		'BY'=>'Belarus',
		'BE'=>'Belgium',
		'BZ'=>'Belize',
		'BJ'=>'Benin',
		'BM'=>'Bermuda',
		'BT'=>'Bhutan',
		'BO'=>'Bolivia',
		'BA'=>'Bosnia and Herzegovina',
		'BW'=>'Botswana',
		'BV'=>'Bouvet Island',
		'BR'=>'Brazil',
		'IO'=>'British Indian Ocean Territory',
		'BN'=>'Brunei Darussalam',
		'BG'=>'Bulgaria',
		'BF'=>'Burkina Faso',
		'BI'=>'Burundi',
		'KH'=>'Cambodia',
		'CM'=>'Cameroon',
		'CA'=>'Canada',
		'CV'=>'Cape Verde',
		'KY'=>'Cayman Islands',
		'CF'=>'Central African Republic',
		'TD'=>'Chad',
		'CL'=>'Chile',
		'CN'=>'China',
		'CX'=>'Christmas Island',
		'CC'=>'Cocos (Keeling) Islands',
		'CO'=>'Colombia',
		'KM'=>'Comoros',
		'CG'=>'Congo',
		'CD'=>'Congo The Democratic Republic of the',
		'CK'=>'Cook Islands',
		'CR'=>'Costa Rica',
		'CI'=>'Cote d\'Ivoire',
		'HR'=>'Croatia',
		'CU'=>'Cuba',
		'CY'=>'Cyprus',
		'CZ'=>'Czech Republic',
		'DK'=>'Denmark',
		'DJ'=>'Djibouti',
		'DM'=>'Dominica',
		'DO'=>'Dominican Republic',
		'EC'=>'Ecuador',
		'EG'=>'Egypt',
		'SV'=>'El Salvador',
		'GQ'=>'Equatorial Guinea',
		'ER'=>'Eritrea',
		'EE'=>'Estonia',
		'ET'=>'Ethiopia',
		'FK'=>'Falkland Islands (Malvinas)',
		'FO'=>'Faroe Islands',
		'FJ'=>'Fiji',
		'FI'=>'Finland',
		'FR'=>'France',
		'GF'=>'French Guiana',
		'PF'=>'French Polynesia',
		'TF'=>'French Southern Territories',
		'GA'=>'Gabon',
		'GM'=>'Gambia',
		'GE'=>'Georgia',
		'DE'=>'Germany',
		'GH'=>'Ghana',
		'GI'=>'Gibraltar',
		'GR'=>'Greece',
		'GL'=>'Greenland',
		'GD'=>'Grenada',
		'GP'=>'Guadeloupe',
		'GU'=>'Guam',
		'GT'=>'Guatemala',
		'GG'=>'Guernsey',
		'GN'=>'Guinea',
		'GW'=>'Guinea-Bissau',
		'GY'=>'Guyana',
		'HT'=>'Haiti',
		'HM'=>'Heard Island and McDonald Islands',
		'VA'=>'Holy See (Vatican City State)',
		'HN'=>'Honduras',
		'HK'=>'Hong Kong',
		'HU'=>'Hungary',
		'IS'=>'Iceland',
		'IN'=>'India',
		'ID'=>'Indonesia',
		'IR'=>'Iran Islamic Republic of',
		'IQ'=>'Iraq',
		'IE'=>'Ireland',
		'IM'=>'Isle of Man',
		'IL'=>'Israel',
		'IT'=>'Italy',
		'JM'=>'Jamaica',
		'JP'=>'Japan',
		'JE'=>'Jersey',
		'JO'=>'Jordan',
		'KZ'=>'Kazakhstan',
		'KE'=>'Kenya',
		'KI'=>'Kiribati',
		'KP'=>'Korea Democratic People\'s Republic of',
		'KR'=>'Korea Republic of',
		'KW'=>'Kuwait',
		'KG'=>'Kyrgyzstan',
		'LA'=>'Lao People\'s Democratic Republic',
		'LV'=>'Latvia',
		'LB'=>'Lebanon',
		'LS'=>'Lesotho',
		'LR'=>'Liberia',
		'LY'=>'Libyan Arab Jamahiriya',
		'LI'=>'Liechtenstein',
		'LT'=>'Lithuania',
		'LU'=>'Luxembourg',
		'MO'=>'Macao',
		'MK'=>'Macedonia',
		'MG'=>'Madagascar',
		'MW'=>'Malawi',
		'MY'=>'Malaysia',
		'MV'=>'Maldives',
		'ML'=>'Mali',
		'MT'=>'Malta',
		'MH'=>'Marshall Islands',
		'MQ'=>'Martinique',
		'MR'=>'Mauritania',
		'MU'=>'Mauritius',
		'YT'=>'Mayotte',
		'MX'=>'Mexico',
		'FM'=>'Micronesia Federated States of',
		'MD'=>'Moldova Republic of',
		'MC'=>'Monaco',
		'MN'=>'Mongolia',
		'ME'=>'Montenegro',
		'MS'=>'Montserrat',
		'MA'=>'Morocco',
		'MZ'=>'Mozambique',
		'MM'=>'Myanmar',
		'NA'=>'Namibia',
		'NR'=>'Nauru',
		'NP'=>'Nepal',
		'NL'=>'Netherlands',
		'AN'=>'Netherlands Antilles',
		'NC'=>'New Caledonia',
		'NZ'=>'New Zealand',
		'NI'=>'Nicaragua',
		'NE'=>'Niger',
		'NG'=>'Nigeria',
		'NU'=>'Niue',
		'NF'=>'Norfolk Island',
		'MP'=>'Northern Mariana Islands',
		'NO'=>'Norway',
		'OM'=>'Oman',
		'PK'=>'Pakistan',
		'PW'=>'Palau',
		'PS'=>'Palestinian Territory',
		'PA'=>'Panama',
		'PG'=>'Papua New Guinea',
		'PY'=>'Paraguay',
		'PE'=>'Peru',
		'PH'=>'Philippines',
		'PN'=>'Pitcairn',
		'PL'=>'Poland',
		'PT'=>'Portugal',
		'PR'=>'Puerto Rico',
		'QA'=>'Qatar',
		'RE'=>'Reunion',
		'RO'=>'Romania',
		'RU'=>'Russian Federation',
		'RW'=>'Rwanda',
		'SH'=>'Saint Helena',
		'KN'=>'Saint Kitts and Nevis',
		'LC'=>'Saint Lucia',
		'PM'=>'Saint Pierre and Miquelon',
		'VC'=>'Saint Vincent and the Grenadines',
		'WS'=>'Samoa',
		'SM'=>'San Marino',
		'ST'=>'Sao Tome and Principe',
		'SA'=>'Saudi Arabia',
		'SN'=>'Senegal',
		'RS'=>'Serbia',
		'SC'=>'Seychelles',
		'SL'=>'Sierra Leone',
		'SG'=>'Singapore',
		'SK'=>'Slovakia',
		'SI'=>'Slovenia',
		'SB'=>'Solomon Islands',
		'SO'=>'Somalia',
		'ZA'=>'South Africa',
		'GS'=>'South Georgia and the South Sandwich Islands',
		'ES'=>'Spain',
		'LK'=>'Sri Lanka',
		'SD'=>'Sudan',
		'SR'=>'Suriname',
		'SJ'=>'Svalbard and Jan Mayen',
		'SZ'=>'Swaziland',
		'SE'=>'Sweden',
		'CH'=>'Switzerland',
		'SY'=>'Syrian Arab Republic',
		'TW'=>'Taiwan',
		'TJ'=>'Tajikistan',
		'TZ'=>'Tanzania United Republic of',
		'TH'=>'Thailand',
		'TL'=>'Timor-Leste',
		'TG'=>'Togo',
		'TK'=>'Tokelau',
		'TO'=>'Tonga',
		'TT'=>'Trinidad and Tobago',
		'TN'=>'Tunisia',
		'TR'=>'Turkey',
		'TM'=>'Turkmenistan',
		'TC'=>'Turks and Caicos Islands',
		'TV'=>'Tuvalu',
		'UG'=>'Uganda',
		'UA'=>'Ukraine',
		'AE'=>'United Arab Emirates',
		'GB'=>'United Kingdom',
		'US'=>'United States',
		'UM'=>'United States Minor Outlying Islands',
		'UY'=>'Uruguay',
		'UZ'=>'Uzbekistan',
		'VU'=>'Vanuatu',
		'VE'=>'Venezuela',
		'VN'=>'Vietnam',
		'VG'=>'Virgin Islands British',
		'VI'=>'Virgin Islands U.S.',
		'WF'=>'Wallis and Futuna',
		'EH'=>'Western Sahara',
		'YE'=>'Yemen',
		'ZM'=>'Zambia',
		'ZW'=>'Zimbabwe'
	);

	$currencyList = array(
		'AUD'=>'$',
		'EUR'=>'&euro;',
		'GBP'=>'&pound;',
		'CAD'=>'$',
		'CNY'=>'&yen;',
		'HKD'=>'$',
		'IDR'=>'Rp',
		'INR'=>'Rs',
		'JPY'=>'&yen;',
		'MYR'=>'RM',
		'PHP'=>'Php',
		'SGD'=>'$',
		'THB'=>'&#3647;',
		'USD'=>'$'
	);

	$periodList = array(
		'daily'=>'Daily',
		'monthly'=>'Monthly',
		'quaterly'=>'Quaterly',
		'semi_annual'=>'Semi Annual',
		'annually'=>'Annually',
	);
/* end of vps page */


/* start of group page */
	define('GROUP_LIST', 'Group List');
	define('GROUP_NAME', 'Group Name');
	define('TOTAL_VPS', 'Total VPS');
	define('YOUR_GROUP_LIST_IS_EMPTY', 'Your group list is empty. Click <a href="%link%">here</a> to add a group.');
	define('GROUP_NAME_CANNOT_BE_BLANK', 'Group name cannot be blank.');
	define('GROUP_NAME_CANNOT_EXCEED_50_CHARACTERS', 'Group name cannot exceed 50 characters.');
	define('GROUP_NAME_ALREADY_EXISTED', 'Group name "%name%" already existed.');
	define('GROUP_HAS_BEEN_ADDED', 'Group "%name%" has been added.');
	define('NO_GROUP_IS_FOUND_WITH_ID', 'No group is found with Id "%id%".');
	define('GROUP_HAS_BEEN_UPDATED', 'Group "%name%" has been updated.');
	define('EDIT_GROUP', 'Edit Group');
	define('REMOVE_GROUP', 'Remove Group');
	define('GROUP_HAS_BEEN_REMOVED', 'Group "%name%" has been removed.');
	define('CONFIRM_TO_REMOVE_GROUP', 'Confirm to remove group "%name%"?');
/* end of group page */


/* start of provider page */
	define('PROVIDER_LIST', 'Provider List');
	define('PROVIDER_NAME', 'Provider Name');
	define('WEBSITE', 'Website');
	define('SUPPORT_PAGE', 'Support Page');
	define('YOUR_PROVIDER_LIST_IS_EMPTY', 'Your provider list is empty. Please click <a href="%link%">here</a> to add a provider.');
	define('PROVIDER_NAME_CANNOT_BE_BLANK', 'Provider name cannot be blank.');
	define('PROVIDER_NAME_CANNOT_EXCEED_50_CHARACTERS', 'Provider name cannot exceed 50 characters.');
	define('PROVIDER_WEBSITE_MUST_BE_A_VALID_URL', 'Provider website must be a valid URL.');
	define('PROVIDER_SUPPORT_PAGE_MUST_BE_A_VALID_URL', 'Provider support page must be a valid URL.');
	define('PROVIDER_NAME_ALREADY_EXISTED', 'Provider name "%name%" already existed.');
	define('PROVIDER_HAS_BEEN_ADDED', 'Provider "%name%" has been added.');
	define('EDIT_PROVIDER', 'Edit Provider');
	define('PROVIDER_HAS_BEEN_UPDATED', 'Provider "%name%" has been updated.');
	define('NO_PROVIDER_IS_FOUND_WITH_ID', 'No provider is found with Id "%id%".');
	define('REMOVE_PROVIDER', 'Remove Provider');
	define('PROVIDER_HAS_BEEN_REMOVED', 'Provider "%name%" has been removed.');
	define('CONFIRM_TO_REMOVE_PROVIDER', 'Confirm to remove provider "%name%"?');
/* end of provider page */


/* start of settings page */
	define('FULL_NAME', 'Full Name');
	define('CONFIRM', 'Confirm');
	define('TIME_ZONE', 'Time Zone');
	define('DAYLIGHT_SAVING_TIME', 'Daylight saving time');
	define('LANGUAGE', 'Language');

	$timeZoneList = array(
		'-12.0'=>'(GMT -12:00) Eniwetok, Kwajalein',
		'-11.0'=>'(GMT -11:00) Midway Island, Samoa',
		'-10.0'=>'(GMT -10:00) Hawaii',
		'-9.0'=>'(GMT -9:00) Alaska',
		'-8.0'=>'(GMT -8:00) Pacific Time (US & Canada)',
		'-7.0'=>'(GMT -7:00) Mountain Time (US & Canada)',
		'-6.0'=>'(GMT -6:00) Central Time (US & Canada), Mexico City',
		'-5.0'=>'(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima',
		'-4.0'=>'(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz',
		'-3.5'=>'(GMT -3:30) Newfoundland',
		'-3.0'=>'(GMT -3:00) Brazil, Buenos Aires, Georgetown',
		'-2.0'=>'(GMT -2:00) Mid-Atlantic',
		'-1.0'=>'(GMT -1:00) Azores, Cape Verde Islands',
		'0.0'=>'(GMT) Western Europe Time, London, Lisbon, Casablanca',
		'1.0'=>'(GMT +1:00) Brussels, Copenhagen, Madrid, Paris',
		'2.0'=>'(GMT +2:00) Kaliningrad, South Africa',
		'3.0'=>'(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg',
		'3.5'=>'(GMT +3:30) Tehran',
		'4.0'=>'(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi',
		'4.5'=>'(GMT +4:30) Kabul',
		'5.0'=>'(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent',
		'5.5'=>'(GMT +5:30) Bombay, Calcutta, Madras, New Delhi',
		'5.75'=>'(GMT +5:45) Kathmandu',
		'6.0'=>'(GMT +6:00) Almaty, Dhaka, Colombo',
		'7.0'=>'(GMT +7:00) Bangkok, Hanoi, Jakarta',
		'8.0'=>'(GMT +8:00) Beijing, Perth, Singapore, Hong Kong',
		'9.0'=>'(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk',
		'9.5'=>'(GMT +9:30) Adelaide, Darwin',
		'10.0'=>'(GMT +10:00) Eastern Australia, Guam, Vladivostok',
		'11.0'=>'(GMT +11:00) Magadan, Solomon Islands, New Caledonia',
		'12.0'=>'(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka'
	);

	define('FULL_NAME_CANNOT_BE_BLANK', 'Full name cannot be blank.');
	define('FULL_NAME_CANNOT_EXCEED_50_CHARACTERS', 'Full name cannot exceed 50 characters.');
	define('USERNAME_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS', 'Username must contain only alphanumeric characters with 4-16 long.');
	define('PASSWORD_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS', 'Password must contain only alphanumeric characters with 4-16 long.');
	define('CONFIRM_PASSWORD_IS_NOT_MATCHED', 'Confirm password is not matched.');
	define('USERNAME_ALREADY_EXISTED', 'Username "%username%" already existed.');
	define('PROBLEM_RETRIEVING_USER_INFORMATION', 'Problem retrieving user information.');
	define('USER_INFORMATION_UPDATED', 'User information updated.');
/* end of settings page */


/* start of help page */
	define('BACK_TO_TOP', 'Back to top');
	define('HOW_DO_I_GET_MY_API_KEY_AND_API_HASH', 'How do I get my API key and API hash?');
	define('WHAT_IS_MY_HOST', 'What is my host?');
	define('ANSWER1', '1. Login to your SolusVM contorl panel.<br />
	2. From you VPS list, click "Manage".<br />
	<img src="images/screenhot001.jpg" width="335" height="172" border="0" class="screenshot" /><br /><br />
	3. Choose "API Settings" from left menu.<br />
	<img src="images/screenhot002.jpg" width="372" height="264" border="0" class="screenshot" /><br /><br />
	4. Press "Generate" button.<br />
	<img src="images/screenhot003.jpg" width="455" height="234" border="0" class="screenshot" /><br /><br />
	5. Your API key and API hash is now generated.<br />
	<img src="images/screenhot004.jpg" width="497" height="254" border="0" class="screenshot" /><br /><br />');
	define('ANSWER2', 'Please note that host is not hostname of your VPS. It is the hostname of your SolusVM control panel. If your URL to login SolusVM is <a href="#">https://yourvpsprovider.com:5656/login.php</a>, your host will be <b>yourvpsprovider.com</b> and port is <b>5656</b>.<br />');
/* end of help page */


/* start of about page */
	define('SOLUSVMCONTROLLER_IS_FREE_WEB_BASED_APPLICATION_TO_CONTROL', 'SolusVMController is free web based application to control all your SolusVM based VPSes under one interface. This application access your VPS using API provided by <a href="http://solusvm.com" target="_blank">Soluslabs</a>.
	Please make sure your VPS provider has enabled API access in order to use this application.');
	define('IF_YOU_FOUND_ANY_ERRORS_OR_BUGS_IN_THIS_APPLICATION', 'If you found any errors or bugs in this application, feel free to contact us at <a href="http://solusvmcontroller.com/?q=contact" target="_blank">here</a>. Latest version of SolusVMController is available at <a href="http://solusvmcontroller.com">http://solusvmcontroller.com</a>.');
	define('IF_YOU_FEEL_THIS_APPLICATION_HELPS_YOU', 'If you feel this application helps you, you may consider to send me donation <a href="http://goo.gl/hMiiq" target="_blank">here</a>.');
	define('CREDITS', 'Credits');
	define('SOLUSVMCONTROLLER_GUI_IS_MODIFIED_FROM_TEMPLATE', 'SolusVMController GUI is modified from template provided by <a href="http://styleshout.com" target="_blank">Styleshout</a>. All icons are modified from <a href="http://led24.de/iconset/" target="_blank">LED icon set</a>.');
/* end of about page */


/* start of logout page */
	define('YOU_ARE_LOGGING_OUT', 'You are logging out');
/* end of logout page */
?>