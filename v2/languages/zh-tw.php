<?php
// UI_LANGUAGE: 繁體中文
define('ALL_VPSES_UNDER_ONE_ROOF', 'VPS同一屋檐下');


/* start of setup page */
	define('SOLUSVMCONTROLLER_INSTALLATION', '安裝 SolusVMController');
	define('THANK_YOU_FOR_CHOOSING_SOLUSVMCONTROLLER', '謝謝您選用SolusVMController。請點擊“下一步”開始安裝。');
	define('NEXT', '下一步');
	define('STEP_1_OF_2', '步驟2之1');
	define('PERFORM_PERMISSION_CHECKING', '進行權限檢查');
	define('CHECK_PERMISSION_OF', '查看權限：');
	define('PASS', '通過');
	define('FAIL', '失敗');
	define('RE_CHECK', '重新檢查');
	define('STEP_2_OF_2', '步驟2之2');
	define('CREATING_TABLE', '創建 %table% 數據庫');
	define('WRITING_CONFIGURATION', '寫入系統設置');
	define('INSTALLTION_COMPLETED', '安裝完成！');
	define('YOU_CAN_NOW_LOGIN', '您現在將可以以用戶 <b>admin</b> 以及密碼 <b>admin</b> 登錄系統。');
	define('FINISH', '完成');
/* end of setup page */


/* start of menu */
	define('VPS', 'VPS主機');
	define('GROUP', '分類');
	define('PROVIDER', '供應商');
	define('SETTINGS', '設置');
	define('HELP', '幫助');
	define('ABOUT', '關于');
	define('LOGOUT', '登出');
	define('WELCOME', '歡迎');
/* end of menu */


/* start of control */
	define('CONTROL', '控制');
	define('ADD_VPS', '新增VPS主機');
	define('CHECK_STATUS', '查看狀態');
	define('ADD_GROUP', '新增分類');
	define('ADD_PROVIDER', '新增供應商');
/* end of control */


/* start of 404 page */
	define('ERROR_404_PAGE_NOT_FOUND', '錯誤 404： 網頁不存在');
	define('PAGE_NOT_FOUND', '網頁不存在');
	define('OPS_I_M_SORRY_THAT_THE_PAGE', '很抱歉！您所浏覽的網頁並沒有列在我們的系統當中。');
/* end of 404 page */


/* start of login page */
	define('LOGIN_PAGE', '登錄');
	define('ADMINISTRATOR_LOGIN', '管理員登錄');
	define('USERNAME', '帳戶名字');
	define('PASSWORD', '用戶密碼');
	define('LOGIN', '登錄');
	define('INVALID_USERNAME_OR_PASSWORD', '帳戶名字或用戶密碼不正確。');
/* end of login page */


/* start of vps page */
	define('VPS_LIST', 'VPS主機列表');
	define('ALL', '全部');
	define('THERE_ARE_NO_RESULTS_FOUND', '沒有任何結果。');
	define('STATUS', '狀態');
	define('VPS_NAME', 'VPS名字');
	define('COUNTRY', '國家');
	define('LOCATION', '地點');
	define('PRICE', '價格');
	define('PERIOD', '周期');
	define('DUE_DATE', '到期日期');
	define('SUBSCRIPTION_DUE_WITHIN_7_DAYS', '服務將在7天內終止');
	define('SUBSCRIPTION_DUED', '服務已經終止');
	define('NOTES', '備注');
	define('ACTION', '行動');
	define('ONLINE', '上線');
	define('OFFLINE', '離線');
	define('UNKNOWN', '不詳');
	define('ERROR', '錯誤');
	define('BOOT', '啓動');
	define('REBOOT', '重啓');
	define('SHUTDOWN', '關機');
	define('EDIT', '編輯');
	define('REMOVE', '刪除');
	define('CANCEL', '取消');
	define('YOUR_VPS_LIST_IS_EMPTY', '您沒有任何VPS主機。請點擊<a href="%link%">這裏</a>新增VPS主機。');
	define('API_KEY', 'API Key');
	define('API_HASH', 'API Hash');
	define('HOST', '主機');
	define('PORT', '端口');
	define('VPS_NAME_CANNOT_BE_BLANK', 'VPS名字不能空白。');
	define('VPS_NAME_CANNOT_EXCEED_50_CHARACTERS', 'VPS名字不能超過50字節。');
	define('A_VALID_API_KEY_SHOULD_LOOK_LIKE', '正確的的API key是“ABCDE-FGHIJ-KLMNO”格式的。');
	define('A_VALID_API_HASH_SHOULD_BE_40_CHARACTERS_IN_LENGTH', '正確的API hash應有40字節的長度。');
	define('YOU_MUST_PROVIDE_A_VALID_HOST', '請提供有效的主機地址。');
	define('IS_NOT_A_VALID_PORT', '“%port%”不是有效的端口。');
	define('VPS_NAME_ALREADY_EXISTED', 'VPS名字“%name%”已經存在了。');
	define('LOCATION_CANNOT_EXCEED_50_CHARACTERS', '地方的長度不能超過50字節。');
	define('IS_NOT_A_VALID_PRICE', '“%price%”不是有效的價格格式。');
	define('IS_NOT_A_VALID_DATE', '“%date%”不是有效的日期格式。');
	define('NOTES_CANNOT_EXCEED_200_CHARACTERS', '備注的長度不能超過200字節。');
	define('VPS_HAS_BEEN_ADDED', 'VPS主機“%name%”加入成功。');
	define('VPS_INFORMATION', 'VPS主機詳情');
	define('HOSTNAME', '主機名字');
	define('IP_ADDRESS', 'IP 地址');
	define('BACK', '上一頁');
	define('ERROR_RETRIEVING_VPS_STATUS', '無法獲取VPS主機狀態。請稍候再試。');
	define('NO_VPS_IS_FOUND_WITH_ID', '無法獲取ID“%id%”的VPS主機。');
	define('VPS_IS_BOOTED', 'VPS主機“%name%”啓動成功。');
	define('FAILED_TO_BOOT_VPS', 'VPS主機“%name%”啓動失敗。');
	define('VPS_IS_SHUTTED_DOWN', 'VPS主機“%name%”關機成功。');
	define('FAILED_TO_SHUTDOWN_VPS', 'VPS主機“%name%”關機失敗。');
	define('VPS_IS_REBOOTED', 'VPS主機“%name%”重啓成功。');
	define('FAILED_TO_REBOOT_VPS', 'VPS主機“%name%”重啓失敗。');
	define('EDIT_VPS', '編輯VPS主機');
	define('UPDATE', '更新');
	define('VPS_HAS_BEEN_UPDATED', 'VPS主機“%name%”資料更新成功。');
	define('REMOVE_VPS', '刪除VPS');
	define('VPS_HAS_BEEN_REMOVED', 'VPS主機“%name%”刪除成功。');
	define('CONFIRM_TO_REMOVE_VPS', '確定刪除VPS主機“%name%”嗎？');
	define('EXPIRING_IN_DAY', '將在 %day% 天內到期。');
	define('DISK_SPACE', '硬碟空間');
	define('MEMORY', '內存容量');
	define('BANDWIDTH', '網絡流量');

	$countryList = array(
		'AF'=>'阿富汗',
		'AX'=>'奧蘭群島',
		'AL'=>'阿爾巴尼亞',
		'DZ'=>'阿爾及利亞',
		'AS'=>'美屬薩摩亞',
		'AD'=>'安道爾',
		'AO'=>'安哥拉',
		'AI'=>'安圭拉',
		'AG'=>'安提瓜和巴布達',
		'AR'=>'阿根廷',
		'AM'=>'亞美尼亞',
		'AW'=>'阿魯巴',
		'AU'=>'澳大利亞',
		'AT'=>'奧地利',
		'AZ'=>'阿塞拜疆',
		'BS'=>'巴哈馬',
		'BH'=>'巴林',
		'BD'=>'孟加拉國',
		'BB'=>'巴巴多斯',
		'BY'=>'白俄羅斯',
		'BE'=>'比利時',
		'BZ'=>'伯利茲',
		'BJ'=>'貝甯',
		'BM'=>'百慕大',
		'BT'=>'不丹',
		'BO'=>'玻利維亞',
		'BA'=>'波斯尼亞和黑塞哥維那',
		'BW'=>'博茨瓦納',
		'BV'=>'布維島',
		'BR'=>'巴西',
		'IO'=>'英屬印度洋領地',
		'BN'=>'文萊',
		'BG'=>'保加利亞',
		'BF'=>'布基納法索',
		'BI'=>'布隆迪',
		'KH'=>'柬埔寨',
		'CM'=>'喀麥隆',
		'CA'=>'加拿大',
		'CV'=>'佛得角',
		'KY'=>'開曼群島',
		'CF'=>'中非共和國',
		'TD'=>'乍得',
		'CL'=>'智利',
		'CN'=>'中國',
		'CX'=>'聖誕島',
		'CC'=>'科科斯（基林）群島',
		'CO'=>'哥倫比亞',
		'KM'=>'科摩羅',
		'CG'=>'剛果',
		'CD'=>'剛果民主共和國',
		'CK'=>'庫克群島',
		'CR'=>'哥斯達黎加',
		'CI'=>'科特迪瓦',
		'HR'=>'克羅地亞',
		'CU'=>'古巴',
		'CY'=>'塞浦路斯',
		'CZ'=>'捷克共和國',
		'DK'=>'丹麥',
		'DJ'=>'吉布提',
		'DM'=>'多米尼加',
		'DO'=>'多米尼加共和國',
		'EC'=>'厄瓜多爾',
		'EG'=>'埃及',
		'SV'=>'薩爾瓦多',
		'GQ'=>'赤道幾內亞',
		'ER'=>'厄立特裏亞',
		'EE'=>'愛沙尼亞',
		'ET'=>'埃塞俄比亞',
		'FK'=>'福克蘭群島（馬爾維納斯）',
		'FO'=>'法羅群島',
		'FJ'=>'斐濟',
		'FI'=>'芬蘭',
		'FR'=>'法國',
		'GF'=>'法屬圭亞那',
		'PF'=>'法屬波利尼西亞',
		'TF'=>'法國南部領土',
		'GA'=>'加蓬',
		'GM'=>'岡比亞',
		'GE'=>'格魯吉亞',
		'DE'=>'德國',
		'GH'=>'加納',
		'GI'=>'直布羅陀',
		'GR'=>'希臘',
		'GL'=>'格陵蘭',
		'GD'=>'格林納達',
		'GP'=>'瓜德羅普島',
		'GU'=>'關島',
		'GT'=>'危地馬拉',
		'GG'=>'根西島',
		'GN'=>'幾內亞',
		'GW'=>'幾內亞比紹',
		'GY'=>'圭亞那',
		'HT'=>'海地',
		'HM'=>'赫德島和麥當勞群島',
		'VA'=>'羅馬教廷（梵蒂岡城國）',
		'HN'=>'洪都拉斯',
		'HK'=>'香港',
		'HU'=>'匈牙利',
		'IS'=>'冰島',
		'IN'=>'印度',
		'ID'=>'印度尼西亞',
		'IR'=>'伊朗伊斯蘭共和國',
		'IQ'=>'伊拉克',
		'IE'=>'愛爾蘭',
		'IM'=>'馬恩島',
		'IL'=>'以色列',
		'IT'=>'意大利',
		'JM'=>'牙買加',
		'JP'=>'日本',
		'JE'=>'澤西',
		'JO'=>'約旦',
		'KZ'=>'哈薩克斯坦',
		'KE'=>'肯尼亞',
		'KI'=>'基裏巴斯',
		'KP'=>'朝鮮民主人民共和國',
		'KR'=>'朝鮮共和國',
		'KW'=>'科威特',
		'KG'=>'吉爾吉斯斯坦',
		'LA'=>'老撾人民民主共和國',
		'LV'=>'拉脫維亞',
		'LB'=>'黎巴嫩',
		'LS'=>'萊索托',
		'LR'=>'利比裏亞',
		'LY'=>'阿拉伯利比亞民衆國',
		'LI'=>'列支敦士登',
		'LT'=>'立陶宛',
		'LU'=>'盧森堡',
		'MO'=>'澳門',
		'MK'=>'馬其頓',
		'MG'=>'馬達加斯加',
		'MW'=>'馬拉維',
		'MY'=>'馬來西亞',
		'MV'=>'馬爾代夫',
		'ML'=>'馬裏',
		'MT'=>'馬耳他',
		'MH'=>'馬紹爾群島',
		'MQ'=>'馬提尼克',
		'MR'=>'毛裏塔尼亞',
		'MU'=>'毛裏求斯',
		'YT'=>'馬約特',
		'MX'=>'墨西哥',
		'FM'=>'密克羅尼西亞聯邦',
		'MD'=>'摩爾多瓦共和國',
		'MC'=>'摩納哥',
		'MN'=>'蒙古',
		'ME'=>'黑山',
		'MS'=>'蒙特塞拉特',
		'MA'=>'摩洛哥',
		'MZ'=>'莫桑比克',
		'MM'=>'緬甸',
		'NA'=>'納米比亞',
		'NR'=>'瑙魯',
		'NP'=>'尼泊爾',
		'NL'=>'荷蘭',
		'AN'=>'荷屬安的列斯',
		'NC'=>'新喀裏多尼亞',
		'NZ'=>'新西蘭',
		'NI'=>'尼加拉瓜',
		'NE'=>'尼日爾',
		'NG'=>'尼日利亞',
		'NU'=>'紐埃',
		'NF'=>'諾福克島',
		'MP'=>'北馬裏亞納群島',
		'NO'=>'挪威',
		'OM'=>'阿曼',
		'PK'=>'巴基斯坦',
		'PW'=>'帕勞',
		'PS'=>'巴勒斯坦領土',
		'PA'=>'巴拿馬',
		'PG'=>'巴布亞新幾內亞',
		'PY'=>'巴拉圭',
		'PE'=>'秘魯',
		'PH'=>'菲律賓',
		'PN'=>'皮特凱恩',
		'PL'=>'波蘭',
		'PT'=>'葡萄牙',
		'PR'=>'波多黎各',
		'QA'=>'卡塔爾',
		'RE'=>'團圓',
		'RO'=>'羅馬尼亞',
		'RU'=>'俄羅斯聯邦',
		'RW'=>'盧旺達',
		'SH'=>'聖海倫娜',
		'KN'=>'聖基茨和尼維斯',
		'LC'=>'聖盧西亞',
		'PM'=>'聖皮埃爾和密克隆島',
		'VC'=>'聖文森特和格林納丁斯',
		'WS'=>'薩摩亞',
		'SM'=>'聖馬力諾',
		'ST'=>'聖多美和普林西',
		'SA'=>'沙特阿拉伯',
		'SN'=>'塞內加爾',
		'RS'=>'塞爾維亞',
		'SC'=>'塞舌爾',
		'SL'=>'塞拉利昂',
		'SG'=>'新加坡',
		'SK'=>'斯洛伐克',
		'SI'=>'斯洛文尼亞',
		'SB'=>'所羅門群島',
		'SO'=>'索馬裏',
		'ZA'=>'南非',
		'GS'=>'南喬治亞島和南桑威奇群島',
		'ES'=>'西班牙',
		'LK'=>'斯裏蘭卡',
		'SD'=>'蘇丹',
		'SR'=>'蘇裏南',
		'SJ'=>'斯瓦爾巴群島和揚馬延島',
		'SZ'=>'斯威士蘭',
		'SE'=>'瑞典',
		'CH'=>'瑞士',
		'SY'=>'阿拉伯敘利亞共和國',
		'TW'=>'台灣',
		'TJ'=>'塔吉克斯坦',
		'TZ'=>'坦桑尼亞聯合共和國',
		'TH'=>'泰國',
		'TL'=>'東帝汶',
		'TG'=>'多哥',
		'TK'=>'托克勞',
		'TO'=>'湯加',
		'TT'=>'特裏尼達和多巴哥',
		'TN'=>'突尼斯',
		'TR'=>'土耳其',
		'TM'=>'土庫曼斯坦',
		'TC'=>'特克斯和凱科斯群島',
		'TV'=>'圖瓦盧',
		'UG'=>'烏幹達',
		'UA'=>'烏克蘭',
		'AE'=>'阿拉伯聯合酋長國',
		'GB'=>'英國',
		'US'=>'美國',
		'UM'=>'美國本土外小島嶼',
		'UY'=>'烏拉圭',
		'UZ'=>'烏茲別克斯坦',
		'VU'=>'瓦努阿圖',
		'VE'=>'委內瑞拉',
		'VN'=>'越南',
		'VG'=>'英屬維爾京群島',
		'VI'=>'美國維爾京群島',
		'WF'=>'瓦利斯群島和富圖納群島',
		'EH'=>'西撒哈拉',
		'YE'=>'也門',
		'ZM'=>'贊比亞',
		'ZW'=>'津巴布韋'
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
		'daily'=>'每天',
		'monthly'=>'每月',
		'quaterly'=>'每4個月',
		'semi_annual'=>'每半年',
		'annually'=>'每年',
	);
/* end of vps page */


/* start of group page */
	define('GROUP_LIST', '分類列表');
	define('GROUP_NAME', '名字');
	define('TOTAL_VPS', 'VPS總數');
	define('YOUR_GROUP_LIST_IS_EMPTY', '您沒有任何分類。請點擊<a href="%link%">這裏</a>新增分類。');
	define('GROUP_NAME_CANNOT_BE_BLANK', '分類名字不能空白。');
	define('GROUP_NAME_CANNOT_EXCEED_50_CHARACTERS', '分類名字的長度不能超過50字節。');
	define('GROUP_NAME_ALREADY_EXISTED', '分類“%name%”已存在。');
	define('GROUP_HAS_BEEN_ADDED', '分類“%name%”加入成功。');
	define('NO_GROUP_IS_FOUND_WITH_ID', '無法獲取ID“id%”的分類。');
	define('GROUP_HAS_BEEN_UPDATED', '分類“%name%”更新成功。');
	define('EDIT_GROUP', '編輯分類');
	define('REMOVE_GROUP', '刪除分類');
	define('GROUP_HAS_BEEN_REMOVED', '分類“%name%”刪除成功。');
	define('CONFIRM_TO_REMOVE_GROUP', '確定刪除分類“%name%”嗎？');
/* end of group page */


/* start of provider page */
	define('PROVIDER_LIST', '供應商列表');
	define('PROVIDER_NAME', '供應商');
	define('WEBSITE', '主頁');
	define('SUPPORT_PAGE', '技術頁');
	define('YOUR_PROVIDER_LIST_IS_EMPTY', '您沒有任何供應商。請點擊<a href="%link%">這裏</a>新增供應商。');
	define('PROVIDER_NAME_CANNOT_BE_BLANK', '供應商名字不能空白。');
	define('PROVIDER_NAME_CANNOT_EXCEED_50_CHARACTERS', '供應商名字的長度不能超過50字節。');
	define('PROVIDER_WEBSITE_MUST_BE_A_VALID_URL', '主頁必須是有效的網頁地址。');
	define('PROVIDER_SUPPORT_PAGE_MUST_BE_A_VALID_URL', 'P技術也必須是有效的網頁地址。');
	define('PROVIDER_NAME_ALREADY_EXISTED', '供應商“%name%”已存在。');
	define('PROVIDER_HAS_BEEN_ADDED', '供應商“%name%”加入成功。');
	define('EDIT_PROVIDER', '編輯供應商');
	define('PROVIDER_HAS_BEEN_UPDATED', '供應商“%name%”更新成功。');
	define('NO_PROVIDER_IS_FOUND_WITH_ID', '無法獲取ID“%id%”的供應商。');
	define('REMOVE_PROVIDER', '刪除供應商');
	define('PROVIDER_HAS_BEEN_REMOVED', '供應商“%name%”刪除成功。');
	define('CONFIRM_TO_REMOVE_PROVIDER', '確定刪除供應商“%name%”嗎？');
/* end of provider page */


/* start of settings page */
	define('FULL_NAME', '名字');
	define('CONFIRM', '確認');
	define('TIME_ZONE', '時區');
	define('DAYLIGHT_SAVING_TIME', '夏令時');
	define('LANGUAGE', '界面語言');

	$timeZoneList = array(
		'-12.0'=>'(GMT -12:00) 埃尼威托克，誇賈林',
		'-11.0'=>'(GMT -11:00) 中途島，薩摩亞',
		'-10.0'=>'(GMT -10:00) 夏威夷',
		'-9.0'=>'(GMT -9:00) 阿拉斯加州',
		'-8.0'=>'(GMT -8:00) 太平洋時間（美國和加拿大）',
		'-7.0'=>'(GMT -7:00) 山地時間（美國和加拿大）',
		'-6.0'=>'(GMT -6:00) 中部時間（美國和加拿大），墨西哥城',
		'-5.0'=>'(GMT -5:00) 東部時間（美國和加拿大），波哥大，利馬',
		'-4.0'=>'(GMT -4:00) 大西洋時間（加拿大），加拉加斯，拉巴斯',
		'-3.5'=>'(GMT -3:30) 紐芬蘭',
		'-3.0'=>'(GMT -3:00) 巴西，布宜諾斯艾利斯，喬治敦',
		'-2.0'=>'(GMT -2:00) 中大西洋',
		'-1.0'=>'(GMT -1:00) 亞速爾群島，佛得角群島',
		'0.0'=>'(GMT) 西歐時間，倫敦，裏斯本，卡薩布蘭卡',
		'1.0'=>'(GMT +1:00) 布魯塞爾，哥本哈根，馬德裏，巴黎',
		'2.0'=>'(GMT +2:00) 加裏甯格勒，南非',
		'3.0'=>'(GMT +3:00) 巴格達，利雅得，莫斯科，聖彼得堡',
		'3.5'=>'(GMT +3:30) 德黑蘭',
		'4.0'=>'(GMT +4:00) 阿布紮比，馬斯喀特，巴庫，第比利斯',
		'4.5'=>'(GMT +4:30) 喀布爾',
		'5.0'=>'(GMT +5:00) 葉卡捷琳堡，伊斯蘭堡，卡拉奇，塔什幹',
		'5.5'=>'(GMT +5:30) 孟買，加爾各答，馬德拉斯，新德裏',
		'5.75'=>'(GMT +5:45) 加德滿都',
		'6.0'=>'(GMT +6:00) 阿拉木圖，達卡，科倫坡',
		'7.0'=>'(GMT +7:00) 曼谷，河內，雅加達',
		'8.0'=>'(GMT +8:00) 北京，珀斯，新加坡，香港',
		'9.0'=>'(GMT +9:00) 東京，漢城，大阪，劄幌，雅庫茨克',
		'9.5'=>'(GMT +9:30) 阿德萊德，達爾文',
		'10.0'=>'(GMT +10:00) 澳大利亞東部，關島，海參威',
		'11.0'=>'(GMT +11:00) 馬加丹，索羅門群島，新喀裏多尼亞',
		'12.0'=>'(GMT +12:00) 奧克蘭，惠靈頓，斐濟，堪察加半島'
	);

	define('FULL_NAME_CANNOT_BE_BLANK', '名字不能空白。');
	define('FULL_NAME_CANNOT_EXCEED_50_CHARACTERS', '名字的長度不能超過50字節。');
	define('USERNAME_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS', '帳戶名字必須是4至16字節的英文字母。');
	define('PASSWORD_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS', '用戶密碼必須是4至16字節的英文字母。');
	define('CONFIRM_PASSWORD_IS_NOT_MATCHED', '確認密碼不相符。');
	define('USERNAME_ALREADY_EXISTED', '帳戶名字“%username%”已存在。');
	define('PROBLEM_RETRIEVING_USER_INFORMATION', '無法獲取用戶資料。');
	define('USER_INFORMATION_UPDATED', '用戶資料更新成功。');
/* end of settings page */


/* start of help page */
	define('BACK_TO_TOP', '回到頂端');
	define('HOW_DO_I_GET_MY_API_KEY_AND_API_HASH', '如何獲取我的API key和API hash？');
	define('WHAT_IS_MY_HOST', '我的主機名字是什麽？');
	define('ANSWER1', '1. 登錄您的SolusVM管理界面。<br />
	2. 從您的VPS列表中，點擊“Manage”。<br />
	<img src="images/screenshot001.jpg" width="335" height="172" border="0" class="screenshot" /><br /><br />
	3. 在左邊菜單中選擇“API Settings”。<br />
	<img src="images/screenshot002.jpg" width="372" height="264" border="0" class="screenshot" /><br /><br />
	4. 點擊“Generate”按鈕。<br />
	<img src="images/screenshot003.jpg" width="455" height="234" border="0" class="screenshot" /><br /><br />
	5. 您的API key以及API hash已經生成了。<br />
	<img src="images/screenshot004.jpg" width="497" height="254" border="0" class="screenshot" /><br /><br />');
	define('ANSWER2', '這裏指的不是您的VPS主機名字，而是您的SolusVM管理界面的主機名字。如果您的SolusVM登錄網址是<a href="#">https://yourvpsprovider.com:5656/login.php</a>, 那您的主機名字就是<b>yourvpsprovider.com</b>而端口則是<b>5656</b>。<br />');
/* end of help page */


/* start of about page */
	define('SOLUSVMCONTROLLER_IS_FREE_WEB_BASED_APPLICATION_TO_CONTROL', 'SolusVMController爲一個免費的VPS控制系統。它可以操控SolusVM運行的任何VPS主機。這系統只是單純地使用<a href="http://solusvm.com" target="_blank">Soluslabs</a>所提供的API操作。在使用本系統前，請確認您的VPS供應商給予您API的權限。');
	define('IF_YOU_FOUND_ANY_ERRORS_OR_BUGS_IN_THIS_APPLICATION', '如果您發現任何錯誤，歡迎點擊<a href="http://solusvmcontroller.com/contact" target="_blank">這裏</a>與我們聯系。最新版本的SolusVMController可在<a href="http://solusvmcontroller.com">http://solusvmcontroller.com</a>找到。');
	define('IF_YOU_FEEL_THIS_APPLICATION_HELPS_YOU', '如果您覺得這個系統給您獲益良多，請點擊<a href="http://goo.gl/hMiiq" target="_blank">這裏</a>捐助這項工程。');
	define('CREDITS', '感謝');
	define('SOLUSVMCONTROLLER_GUI_IS_MODIFIED_FROM_TEMPLATE', 'SolusVMController的操作界面更改自<a href="http://styleshout.com" target="_blank">Styleshout</a>所提供的免費模板。系統圖標改自<a href="http://led24.de/iconset/" target="_blank">LED圖標包</a>。');
/* end of about page */


/* start of logout page */
	define('YOU_ARE_LOGGING_OUT', '登出中');
/* end of logout page */
?>