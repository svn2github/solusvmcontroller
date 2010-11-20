<?php
// UI_LANGUAGE: 简体中文
define('ALL_VPSES_UNDER_ONE_ROOF', 'VPS同一屋檐下');


/* start of setup page */
	define('SOLUSVMCONTROLLER_INSTALLATION', '安装 SolusVMController');
	define('THANK_YOU_FOR_CHOOSING_SOLUSVMCONTROLLER', '谢谢您选用SolusVMController。请点击“下一步”开始安装。');
	define('NEXT', '下一步');
	define('STEP_1_OF_2', '步骤2之1');
	define('PERFORM_PERMISSION_CHECKING', '进行权限检查');
	define('CHECK_PERMISSION_OF', '查看权限：');
	define('PASS', '通过');
	define('FAIL', '失败');
	define('RE_CHECK', '重新检查');
	define('STEP_2_OF_2', '步骤2之2');
	define('CREATING_TABLE', '创建 %table% 数据库');
	define('WRITING_CONFIGURATION', '写入系统设置');
	define('INSTALLTION_COMPLETED', '安装完成！');
	define('YOU_CAN_NOW_LOGIN', '您现在将可以以用户 <b>admin</b> 以及密码 <b>admin</b> 登录系统。');
	define('FINISH', '完成');
/* end of setup page */


/* start of menu */
	define('VPS', 'VPS主机');
	define('GROUP', '分类');
	define('PROVIDER', '供应商');
	define('SETTINGS', '设置');
	define('HELP', '帮助');
	define('ABOUT', '关于');
	define('LOGOUT', '登出');
	define('WELCOME', '欢迎');
/* end of menu */


/* start of control */
	define('CONTROL', '控制');
	define('ADD_VPS', '新增VPS主机');
	define('CHECK_STATUS', '查看状态');
	define('ADD_GROUP', '新增分类');
	define('ADD_PROVIDER', '新增供应商');
/* end of control */


/* start of 404 page */
	define('ERROR_404_PAGE_NOT_FOUND', '错误 404： 网页不存在');
	define('PAGE_NOT_FOUND', '网页不存在');
	define('OPS_I_M_SORRY_THAT_THE_PAGE', '很抱歉！您所浏览的网页并没有列在我们的系统当中。');
/* end of 404 page */


/* start of login page */
	define('LOGIN_PAGE', '登录');
	define('ADMINISTRATOR_LOGIN', '管理员登录');
	define('USERNAME', '帐户名字');
	define('PASSWORD', '用户密码');
	define('LOGIN', '登录');
	define('INVALID_USERNAME_OR_PASSWORD', '帐户名字或用户密码不正确。');
/* end of login page */


/* start of vps page */
	define('VPS_LIST', 'VPS主机列表');
	define('ALL', '全部');
	define('THERE_ARE_NO_RESULTS_FOUND', '没有任何结果。');
	define('STATUS', '状态');
	define('VPS_NAME', 'VPS名字');
	define('COUNTRY', '国家');
	define('LOCATION', '地点');
	define('PRICE', '价格');
	define('PERIOD', '周期');
	define('DUE_DATE', '到期日期');
	define('SUBSCRIPTION_DUE_WITHIN_7_DAYS', '服务将在7天内终止');
	define('SUBSCRIPTION_DUED', '服务已经终止');
	define('NOTES', '备注');
	define('ACTION', '行动');
	define('ONLINE', '上线');
	define('OFFLINE', '离线');
	define('UNKNOWN', '不详');
	define('ERROR', '错误');
	define('BOOT', '启动');
	define('REBOOT', '重启');
	define('SHUTDOWN', '关机');
	define('EDIT', '编辑');
	define('REMOVE', '删除');
	define('CANCEL', '取消');
	define('YOUR_VPS_LIST_IS_EMPTY', '您没有任何VPS主机。请点击<a href="%link%">这里</a>新增VPS主机。');
	define('API_KEY', 'API Key');
	define('API_HASH', 'API Hash');
	define('HOST', '主机');
	define('PORT', '端口');
	define('VPS_NAME_CANNOT_BE_BLANK', 'VPS名字不能空白。');
	define('VPS_NAME_CANNOT_EXCEED_50_CHARACTERS', 'VPS名字不能超过50字节。');
	define('A_VALID_API_KEY_SHOULD_LOOK_LIKE', '正确的的API key是“ABCDE-FGHIJ-KLMNO”格式的。');
	define('A_VALID_API_HASH_SHOULD_BE_40_CHARACTERS_IN_LENGTH', '正确的API hash应有40字节的长度。');
	define('YOU_MUST_PROVIDE_A_VALID_HOST', '请提供有效的主机地址。');
	define('IS_NOT_A_VALID_PORT', '“%port%”不是有效的端口。');
	define('VPS_NAME_ALREADY_EXISTED', 'VPS名字“%name%”已经存在了。');
	define('LOCATION_CANNOT_EXCEED_50_CHARACTERS', '地方的长度不能超过50字节。');
	define('IS_NOT_A_VALID_PRICE', '“%price%”不是有效的价格格式。');
	define('IS_NOT_A_VALID_DATE', '“%date%”不是有效的日期格式。');
	define('NOTES_CANNOT_EXCEED_200_CHARACTERS', '备注的长度不能超过200字节。');
	define('VPS_HAS_BEEN_ADDED', 'VPS主机“%name%”加入成功。');
	define('VPS_INFORMATION', 'VPS主机详情');
	define('HOSTNAME', '主机名字');
	define('IP_ADDRESS', 'IP 地址');
	define('BACK', '上一页');
	define('ERROR_RETRIEVING_VPS_STATUS', '无法获取VPS主机状态。请稍候再试。');
	define('NO_VPS_IS_FOUND_WITH_ID', '无法获取ID“%id%”的VPS主机。');
	define('VPS_IS_BOOTED', 'VPS主机“%name%”启动成功。');
	define('FAILED_TO_BOOT_VPS', 'VPS主机“%name%”启动失败。');
	define('VPS_IS_SHUTTED_DOWN', 'VPS主机“%name%”关机成功。');
	define('FAILED_TO_SHUTDOWN_VPS', 'VPS主机“%name%”关机失败。');
	define('VPS_IS_REBOOTED', 'VPS主机“%name%”重启成功。');
	define('FAILED_TO_REBOOT_VPS', 'VPS主机“%name%”重启失败。');
	define('EDIT_VPS', '编辑VPS主机');
	define('UPDATE', '更新');
	define('VPS_HAS_BEEN_UPDATED', 'VPS主机“%name%”资料更新成功。');
	define('REMOVE_VPS', '删除VPS');
	define('VPS_HAS_BEEN_REMOVED', 'VPS主机“%name%”删除成功。');
	define('CONFIRM_TO_REMOVE_VPS', '确定删除VPS主机“%name%”吗？');
	define('EXPIRING_IN_DAY', '将在 %day% 天内到期。');

	$countryList = array(
		'AF'=>'阿富汗',
		'AX'=>'奥兰群岛',
		'AL'=>'阿尔巴尼亚',
		'DZ'=>'阿尔及利亚',
		'AS'=>'美属萨摩亚',
		'AD'=>'安道尔',
		'AO'=>'安哥拉',
		'AI'=>'安圭拉',
		'AG'=>'安提瓜和巴布达',
		'AR'=>'阿根廷',
		'AM'=>'亚美尼亚',
		'AW'=>'阿鲁巴',
		'AU'=>'澳大利亚',
		'AT'=>'奥地利',
		'AZ'=>'阿塞拜疆',
		'BS'=>'巴哈马',
		'BH'=>'巴林',
		'BD'=>'孟加拉国',
		'BB'=>'巴巴多斯',
		'BY'=>'白俄罗斯',
		'BE'=>'比利时',
		'BZ'=>'伯利兹',
		'BJ'=>'贝宁',
		'BM'=>'百慕大',
		'BT'=>'不丹',
		'BO'=>'玻利维亚',
		'BA'=>'波斯尼亚和黑塞哥维那',
		'BW'=>'博茨瓦纳',
		'BV'=>'布维岛',
		'BR'=>'巴西',
		'IO'=>'英属印度洋领地',
		'BN'=>'文莱',
		'BG'=>'保加利亚',
		'BF'=>'布基纳法索',
		'BI'=>'布隆迪',
		'KH'=>'柬埔寨',
		'CM'=>'喀麦隆',
		'CA'=>'加拿大',
		'CV'=>'佛得角',
		'KY'=>'开曼群岛',
		'CF'=>'中非共和国',
		'TD'=>'乍得',
		'CL'=>'智利',
		'CN'=>'中国',
		'CX'=>'圣诞岛',
		'CC'=>'科科斯（基林）群岛',
		'CO'=>'哥伦比亚',
		'KM'=>'科摩罗',
		'CG'=>'刚果',
		'CD'=>'刚果民主共和国',
		'CK'=>'库克群岛',
		'CR'=>'哥斯达黎加',
		'CI'=>'科特迪瓦',
		'HR'=>'克罗地亚',
		'CU'=>'古巴',
		'CY'=>'塞浦路斯',
		'CZ'=>'捷克共和国',
		'DK'=>'丹麦',
		'DJ'=>'吉布提',
		'DM'=>'多米尼加',
		'DO'=>'多米尼加共和国',
		'EC'=>'厄瓜多尔',
		'EG'=>'埃及',
		'SV'=>'萨尔瓦多',
		'GQ'=>'赤道几内亚',
		'ER'=>'厄立特里亚',
		'EE'=>'爱沙尼亚',
		'ET'=>'埃塞俄比亚',
		'FK'=>'福克兰群岛（马尔维纳斯）',
		'FO'=>'法罗群岛',
		'FJ'=>'斐济',
		'FI'=>'芬兰',
		'FR'=>'法国',
		'GF'=>'法属圭亚那',
		'PF'=>'法属波利尼西亚',
		'TF'=>'法国南部领土',
		'GA'=>'加蓬',
		'GM'=>'冈比亚',
		'GE'=>'格鲁吉亚',
		'DE'=>'德国',
		'GH'=>'加纳',
		'GI'=>'直布罗陀',
		'GR'=>'希腊',
		'GL'=>'格陵兰',
		'GD'=>'格林纳达',
		'GP'=>'瓜德罗普岛',
		'GU'=>'关岛',
		'GT'=>'危地马拉',
		'GG'=>'根西岛',
		'GN'=>'几内亚',
		'GW'=>'几内亚比绍',
		'GY'=>'圭亚那',
		'HT'=>'海地',
		'HM'=>'赫德岛和麦当劳群岛',
		'VA'=>'罗马教廷（梵蒂冈城国）',
		'HN'=>'洪都拉斯',
		'HK'=>'香港',
		'HU'=>'匈牙利',
		'IS'=>'冰岛',
		'IN'=>'印度',
		'ID'=>'印度尼西亚',
		'IR'=>'伊朗伊斯兰共和国',
		'IQ'=>'伊拉克',
		'IE'=>'爱尔兰',
		'IM'=>'马恩岛',
		'IL'=>'以色列',
		'IT'=>'意大利',
		'JM'=>'牙买加',
		'JP'=>'日本',
		'JE'=>'泽西',
		'JO'=>'约旦',
		'KZ'=>'哈萨克斯坦',
		'KE'=>'肯尼亚',
		'KI'=>'基里巴斯',
		'KP'=>'朝鲜民主人民共和国',
		'KR'=>'朝鲜共和国',
		'KW'=>'科威特',
		'KG'=>'吉尔吉斯斯坦',
		'LA'=>'老挝人民民主共和国',
		'LV'=>'拉脱维亚',
		'LB'=>'黎巴嫩',
		'LS'=>'莱索托',
		'LR'=>'利比里亚',
		'LY'=>'阿拉伯利比亚民众国',
		'LI'=>'列支敦士登',
		'LT'=>'立陶宛',
		'LU'=>'卢森堡',
		'MO'=>'澳门',
		'MK'=>'马其顿',
		'MG'=>'马达加斯加',
		'MW'=>'马拉维',
		'MY'=>'马来西亚',
		'MV'=>'马尔代夫',
		'ML'=>'马里',
		'MT'=>'马耳他',
		'MH'=>'马绍尔群岛',
		'MQ'=>'马提尼克',
		'MR'=>'毛里塔尼亚',
		'MU'=>'毛里求斯',
		'YT'=>'马约特',
		'MX'=>'墨西哥',
		'FM'=>'密克罗尼西亚联邦',
		'MD'=>'摩尔多瓦共和国',
		'MC'=>'摩纳哥',
		'MN'=>'蒙古',
		'ME'=>'黑山',
		'MS'=>'蒙特塞拉特',
		'MA'=>'摩洛哥',
		'MZ'=>'莫桑比克',
		'MM'=>'缅甸',
		'NA'=>'纳米比亚',
		'NR'=>'瑙鲁',
		'NP'=>'尼泊尔',
		'NL'=>'荷兰',
		'AN'=>'荷属安的列斯',
		'NC'=>'新喀里多尼亚',
		'NZ'=>'新西兰',
		'NI'=>'尼加拉瓜',
		'NE'=>'尼日尔',
		'NG'=>'尼日利亚',
		'NU'=>'纽埃',
		'NF'=>'诺福克岛',
		'MP'=>'北马里亚纳群岛',
		'NO'=>'挪威',
		'OM'=>'阿曼',
		'PK'=>'巴基斯坦',
		'PW'=>'帕劳',
		'PS'=>'巴勒斯坦领土',
		'PA'=>'巴拿马',
		'PG'=>'巴布亚新几内亚',
		'PY'=>'巴拉圭',
		'PE'=>'秘鲁',
		'PH'=>'菲律宾',
		'PN'=>'皮特凯恩',
		'PL'=>'波兰',
		'PT'=>'葡萄牙',
		'PR'=>'波多黎各',
		'QA'=>'卡塔尔',
		'RE'=>'团圆',
		'RO'=>'罗马尼亚',
		'RU'=>'俄罗斯联邦',
		'RW'=>'卢旺达',
		'SH'=>'圣海伦娜',
		'KN'=>'圣基茨和尼维斯',
		'LC'=>'圣卢西亚',
		'PM'=>'圣皮埃尔和密克隆岛',
		'VC'=>'圣文森特和格林纳丁斯',
		'WS'=>'萨摩亚',
		'SM'=>'圣马力诺',
		'ST'=>'圣多美和普林西',
		'SA'=>'沙特阿拉伯',
		'SN'=>'塞内加尔',
		'RS'=>'塞尔维亚',
		'SC'=>'塞舌尔',
		'SL'=>'塞拉利昂',
		'SG'=>'新加坡',
		'SK'=>'斯洛伐克',
		'SI'=>'斯洛文尼亚',
		'SB'=>'所罗门群岛',
		'SO'=>'索马里',
		'ZA'=>'南非',
		'GS'=>'南乔治亚岛和南桑威奇群岛',
		'ES'=>'西班牙',
		'LK'=>'斯里兰卡',
		'SD'=>'苏丹',
		'SR'=>'苏里南',
		'SJ'=>'斯瓦尔巴群岛和扬马延岛',
		'SZ'=>'斯威士兰',
		'SE'=>'瑞典',
		'CH'=>'瑞士',
		'SY'=>'阿拉伯叙利亚共和国',
		'TW'=>'台湾',
		'TJ'=>'塔吉克斯坦',
		'TZ'=>'坦桑尼亚联合共和国',
		'TH'=>'泰国',
		'TL'=>'东帝汶',
		'TG'=>'多哥',
		'TK'=>'托克劳',
		'TO'=>'汤加',
		'TT'=>'特里尼达和多巴哥',
		'TN'=>'突尼斯',
		'TR'=>'土耳其',
		'TM'=>'土库曼斯坦',
		'TC'=>'特克斯和凯科斯群岛',
		'TV'=>'图瓦卢',
		'UG'=>'乌干达',
		'UA'=>'乌克兰',
		'AE'=>'阿拉伯联合酋长国',
		'GB'=>'英国',
		'US'=>'美国',
		'UM'=>'美国本土外小岛屿',
		'UY'=>'乌拉圭',
		'UZ'=>'乌兹别克斯坦',
		'VU'=>'瓦努阿图',
		'VE'=>'委内瑞拉',
		'VN'=>'越南',
		'VG'=>'英属维尔京群岛',
		'VI'=>'美国维尔京群岛',
		'WF'=>'瓦利斯群岛和富图纳群岛',
		'EH'=>'西撒哈拉',
		'YE'=>'也门',
		'ZM'=>'赞比亚',
		'ZW'=>'津巴布韦'
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
		'quaterly'=>'每4个月',
		'semi_annual'=>'每半年',
		'annually'=>'每年',
	);
/* end of vps page */


/* start of group page */
	define('GROUP_LIST', '分类列表');
	define('GROUP_NAME', '名字');
	define('TOTAL_VPS', 'VPS总数');
	define('YOUR_GROUP_LIST_IS_EMPTY', '您没有任何分类。请点击<a href="%link%">这里</a>新增分类。');
	define('GROUP_NAME_CANNOT_BE_BLANK', '分类名字不能空白。');
	define('GROUP_NAME_CANNOT_EXCEED_50_CHARACTERS', '分类名字的长度不能超过50字节。');
	define('GROUP_NAME_ALREADY_EXISTED', '分类“%name%”已存在。');
	define('GROUP_HAS_BEEN_ADDED', '分类“%name%”加入成功。');
	define('NO_GROUP_IS_FOUND_WITH_ID', '无法获取ID“id%”的分类。');
	define('GROUP_HAS_BEEN_UPDATED', '分类“%name%”更新成功。');
	define('EDIT_GROUP', '编辑分类');
	define('REMOVE_GROUP', '删除分类');
	define('GROUP_HAS_BEEN_REMOVED', '分类“%name%”删除成功。');
	define('CONFIRM_TO_REMOVE_GROUP', '确定删除分类“%name%”吗？');
/* end of group page */


/* start of provider page */
	define('PROVIDER_LIST', '供应商列表');
	define('PROVIDER_NAME', '供应商');
	define('WEBSITE', '主页');
	define('SUPPORT_PAGE', '技术页');
	define('YOUR_PROVIDER_LIST_IS_EMPTY', '您没有任何供应商。请点击<a href="%link%">这里</a>新增供应商。');
	define('PROVIDER_NAME_CANNOT_BE_BLANK', '供应商名字不能空白。');
	define('PROVIDER_NAME_CANNOT_EXCEED_50_CHARACTERS', '供应商名字的长度不能超过50字节。');
	define('PROVIDER_WEBSITE_MUST_BE_A_VALID_URL', '主页必须是有效的网页地址。');
	define('PROVIDER_SUPPORT_PAGE_MUST_BE_A_VALID_URL', 'P技术也必须是有效的网页地址。');
	define('PROVIDER_NAME_ALREADY_EXISTED', '供应商“%name%”已存在。');
	define('PROVIDER_HAS_BEEN_ADDED', '供应商“%name%”加入成功。');
	define('EDIT_PROVIDER', '编辑供应商');
	define('PROVIDER_HAS_BEEN_UPDATED', '供应商“%name%”更新成功。');
	define('NO_PROVIDER_IS_FOUND_WITH_ID', '无法获取ID“%id%”的供应商。');
	define('REMOVE_PROVIDER', '删除供应商');
	define('PROVIDER_HAS_BEEN_REMOVED', '供应商“%name%”删除成功。');
	define('CONFIRM_TO_REMOVE_PROVIDER', '确定删除供应商“%name%”吗？');
/* end of provider page */


/* start of settings page */
	define('FULL_NAME', '名字');
	define('CONFIRM', '确认');
	define('TIME_ZONE', '时区');
	define('DAYLIGHT_SAVING_TIME', '夏令时');
	define('LANGUAGE', '界面语言');

	$timeZoneList = array(
		'-12.0'=>'(GMT -12:00) 埃尼威托克，夸贾林',
		'-11.0'=>'(GMT -11:00) 中途岛，萨摩亚',
		'-10.0'=>'(GMT -10:00) 夏威夷',
		'-9.0'=>'(GMT -9:00) 阿拉斯加州',
		'-8.0'=>'(GMT -8:00) 太平洋时间（美国和加拿大）',
		'-7.0'=>'(GMT -7:00) 山地时间（美国和加拿大）',
		'-6.0'=>'(GMT -6:00) 中部时间（美国和加拿大），墨西哥城',
		'-5.0'=>'(GMT -5:00) 东部时间（美国和加拿大），波哥大，利马',
		'-4.0'=>'(GMT -4:00) 大西洋时间（加拿大），加拉加斯，拉巴斯',
		'-3.5'=>'(GMT -3:30) 纽芬兰',
		'-3.0'=>'(GMT -3:00) 巴西，布宜诺斯艾利斯，乔治敦',
		'-2.0'=>'(GMT -2:00) 中大西洋',
		'-1.0'=>'(GMT -1:00) 亚速尔群岛，佛得角群岛',
		'0.0'=>'(GMT) 西欧时间，伦敦，里斯本，卡萨布兰卡',
		'1.0'=>'(GMT +1:00) 布鲁塞尔，哥本哈根，马德里，巴黎',
		'2.0'=>'(GMT +2:00) 加里宁格勒，南非',
		'3.0'=>'(GMT +3:00) 巴格达，利雅得，莫斯科，圣彼得堡',
		'3.5'=>'(GMT +3:30) 德黑兰',
		'4.0'=>'(GMT +4:00) 阿布扎比，马斯喀特，巴库，第比利斯',
		'4.5'=>'(GMT +4:30) 喀布尔',
		'5.0'=>'(GMT +5:00) 叶卡捷琳堡，伊斯兰堡，卡拉奇，塔什干',
		'5.5'=>'(GMT +5:30) 孟买，加尔各答，马德拉斯，新德里',
		'5.75'=>'(GMT +5:45) 加德满都',
		'6.0'=>'(GMT +6:00) 阿拉木图，达卡，科伦坡',
		'7.0'=>'(GMT +7:00) 曼谷，河内，雅加达',
		'8.0'=>'(GMT +8:00) 北京，珀斯，新加坡，香港',
		'9.0'=>'(GMT +9:00) 东京，汉城，大阪，札幌，雅库茨克',
		'9.5'=>'(GMT +9:30) 阿德莱德，达尔文',
		'10.0'=>'(GMT +10:00) 澳大利亚东部，关岛，海参威',
		'11.0'=>'(GMT +11:00) 马加丹，索罗门群岛，新喀里多尼亚',
		'12.0'=>'(GMT +12:00) 奥克兰，惠灵顿，斐济，堪察加半岛'
	);

	define('FULL_NAME_CANNOT_BE_BLANK', '名字不能空白。');
	define('FULL_NAME_CANNOT_EXCEED_50_CHARACTERS', '名字的长度不能超过50字节。');
	define('USERNAME_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS', '帐户名字必须是4至16字节的英文字母。');
	define('PASSWORD_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS', '用户密码必须是4至16字节的英文字母。');
	define('CONFIRM_PASSWORD_IS_NOT_MATCHED', '确认密码不相符。');
	define('USERNAME_ALREADY_EXISTED', '帐户名字“%username%”已存在。');
	define('PROBLEM_RETRIEVING_USER_INFORMATION', '无法获取用户资料。');
	define('USER_INFORMATION_UPDATED', '用户资料更新成功。');
/* end of settings page */


/* start of help page */
	define('BACK_TO_TOP', '回到顶端');
	define('HOW_DO_I_GET_MY_API_KEY_AND_API_HASH', '如何获取我的API key和API hash？');
	define('WHAT_IS_MY_HOST', '我的主机名字是什么？');
	define('ANSWER1', '1. 登录您的SolusVM管理界面。<br />
	2. 从您的VPS列表中，点击“Manage”。<br />
	<img src="images/screenhot001.jpg" width="335" height="172" border="0" class="screenshot" /><br /><br />
	3. 在左边菜单中选择“API Settings”。<br />
	<img src="images/screenhot002.jpg" width="372" height="264" border="0" class="screenshot" /><br /><br />
	4. 点击“Generate”按钮。<br />
	<img src="images/screenhot003.jpg" width="455" height="234" border="0" class="screenshot" /><br /><br />
	5. 您的API key以及API hash已经生成了。<br />
	<img src="images/screenhot004.jpg" width="497" height="254" border="0" class="screenshot" /><br /><br />');
	define('ANSWER2', '这里指的不是您的VPS主机名字，而是您的SolusVM管理界面的主机名字。如果您的SolusVM登录网址是<a href="#">https://yourvpsprovider.com:5656/login.php</a>, 那您的主机名字就是<b>yourvpsprovider.com</b>而端口则是<b>5656</b>。<br />');
/* end of help page */


/* start of about page */
	define('SOLUSVMCONTROLLER_IS_FREE_WEB_BASED_APPLICATION_TO_CONTROL', 'SolusVMController为一个免费的VPS控制系统。它可以操控SolusVM运行的任何VPS主机。这系统只是单纯地使用<a href="http://solusvm.com" target="_blank">Soluslabs</a>所提供的API操作。在使用本系统前，请确认您的VPS供应商给予您API的权限。');
	define('IF_YOU_FOUND_ANY_ERRORS_OR_BUGS_IN_THIS_APPLICATION', '如果您发现任何错误，欢迎点击<a href="http://solusvmcontroller.com/contact" target="_blank">这里</a>与我们联系。最新版本的SolusVMController可在<a href="http://solusvmcontroller.com">http://solusvmcontroller.com</a>找到。');
	define('IF_YOU_FEEL_THIS_APPLICATION_HELPS_YOU', '如果您觉得这个系统给您获益良多，请点击<a href="http://goo.gl/hMiiq" target="_blank">这里</a>捐助这项工程。');
	define('CREDITS', '感谢');
	define('SOLUSVMCONTROLLER_GUI_IS_MODIFIED_FROM_TEMPLATE', 'SolusVMController的操作界面更改自<a href="http://styleshout.com" target="_blank">Styleshout</a>所提供的免费模板。系统图标改自<a href="http://led24.de/iconset/" target="_blank">LED图标包</a>。');
/* end of about page */


/* start of logout page */
	define('YOU_ARE_LOGGING_OUT', '登出中');
/* end of logout page */
?>