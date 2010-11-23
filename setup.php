<?php
###########################################################################
#                                                                         #
#  SolusVMController                                                      #
#                                                                         #
#  Copyright (C) 2010  Sei Kan                                            #
#                                                                         #
#  This program is free software: you can redistribute it and/or modify   #
#  it under the terms of the GNU General Public License as published by   #
#  the Free Software Foundation, either version 3 of the License, or      #
#  (at your option) any later version.                                    #
#                                                                         #
#  This program is distributed in the hope that it will be useful,        #
#  but WITHOUT ANY WARRANTY; without even the implied warranty of         #
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          #
#  GNU General Public License for more details.                           #
#                                                                         #
#  You should have received a copy of the GNU General Public License      #
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.  #
#                                                                         #
###########################################################################

defined('INDEX') or die('Access is denied.');

$showMenu = 0;
$showSidebar = 0;

unset($_SESSION['user_id']);
unset($_SESSION['full_name']);
unset($_SESSION['username']);
unset($_SESSION['time_zone']);
unset($_SESSION['dst']);

$_SESSION['language'] = isset($_GET['language']) ? $_GET['language'] : (isset($_SESSION['language']) ? $_SESSION['language'] : 'en-us');

include(file_exists(LANGUAGES . $_SESSION['language'] . '.php') ? LANGUAGES . $_SESSION['language'] . '.php' : LANGUAGES . 'en-us.php');

$title = SOLUSVMCONTROLLER_INSTALLATION;
include(INCLUDES . 'header.php');

$step = isset($_GET['step']) ? $_GET['step'] : 0;

switch($step){
	case '1':
		echo '<h1>' . SOLUSVMCONTROLLER_INSTALLATION . ' (' . STEP_1_OF_2 . ')</h1>';
		$error = 0;

		echo '<p>' . PERFORM_PERMISSION_CHECKING . ' ...</p>';

		if(isRewritable(ROOT . 'configuration.php')){
			echo '<p class="green">' . CHECK_PERMISSION_OF . ' ' . ROOT . 'configuration.php ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . CHECK_PERMISSION_OF . ' ' . ROOT . 'configuration.php ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		if(isRewritable(TABLES)){
			echo '<p class="green">' . CHECK_PERMISSION_OF . ' ' . TABLES . ' ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . CHECK_PERMISSION_OF . ' ' . TABLES . ' ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		echo '<p align="right">
			<input type="button" value="' . RE_CHECK . '" class="button" onclick="window.location.href=\'?step=1\';" />';

		if(!$error){
			echo ' <input type="button" value="' . NEXT . ' &raquo;" class="button" onclick="window.location.href=\'?step=2\';"/>';
		}
		echo '</p>';
	break;

	case '2':
		echo '<h1>' . SOLUSVMCONTROLLER_INSTALLATION . ' (' . STEP_2_OF_2 . ')</h1>';
		$error = 0;
		$randomCode = substr(sha1(microtime()), rand(0,30), 10);

		if(@file_put_contents(TABLES . $randomCode . 'user.tab', 'user_id|full_name|username|password|time_zone|dst|language' . "\n" . '1|Administrator|admin|admin|0|0|en-us' . "\n")){
			echo '<p class="green">' . str_replace('%table%', 'user', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . str_replace('%table%', 'user', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		if(@file_put_contents(TABLES . $randomCode . 'vps.tab', 'vps_id|vps_name|notes|key|hash|protocol|host|port|country|location|price|currency|period|due_date|group_id|provider_id' . "\n")){
			echo '<p class="green">'. str_replace('%table%', 'vps', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . str_replace('%table%', 'vps', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		if(@file_put_contents(TABLES . $randomCode . 'group.tab', 'group_id|group_name' . "\n" . '1|Production' . "\n" . '2|Development' . "\n" . '3|Testing' . "\n")){
			echo '<p class="green">' . str_replace('%table%', 'group', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . str_replace('%table%', 'group', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		if(@file_put_contents(TABLES . $randomCode . 'provider.tab', 'provider_id|provider_name|website_url|support_url' . "\n")){
			echo '<p class="green">' . str_replace('%table%', 'provider', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . str_replace('%table%', 'provider', CREATING_TABLE) . ' ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		if(@file_put_contents(ROOT . 'configuration.php', '<?php' . "\n" . 'define(\'INSTALLED\', 1);' . "\n" . 'define(\'SVMC_VERSION\', \'2.1\');' . "\n" . 'define(\'SVMC_CODE\', \'' . $randomCode . '\');' . "\n" . 'define(\'UI_LANGUAGE\', \'en-us\');' . "\n" . '?>')){
			echo '<p class="green">' . WRITING_CONFIGURATION . ' ' . str_repeat('.', 10) . ' [' . PASS . ']</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">' . WRITING_CONFIGURATION . ' ' . str_repeat('.', 10) . ' [' . FAIL . ']</p>';
		}

		if(!$error){
			echo '<p>' . INSTALLTION_COMPLETED . '</p>
			<p>' . YOU_CAN_NOW_LOGIN . '</p>
			<p align="right"><input type="button" value="' . FINISH . '" class="button" onclick="window.location.href=\'?q=login\';"/></p>';
		}
	break;

	default:
		$languageOptions = '<select name="language" id="language" onchange="window.location.href=\'?q=setup&language=\' + $(this).getValue();">' . "\n";

		if($handle = opendir(LANGUAGES)){
			while(false !== ($file = readdir($handle))){
				if(strpos($file, '.php')){
					$content = file_get_contents(LANGUAGES . $file);

					if(preg_match('/UI_LANGUAGE:([^\n]+)/s', $content, $matches)){
						$value = str_replace('.php' , '', $file);
						$languageOptions .= "\t" . '<option value="' . $value . '"' . ($value==$_SESSION['language'] ? ' selected' : '') . '> ' . trim($matches[1]) . '</option>' . "\n";
					}
				}
			}
			closedir($handle);
		}
		$languageOptions .= '</select>';
		echo '<h1>' . SOLUSVMCONTROLLER_INSTALLATION . '</h1>
		<div align="right">
			<b>' . LANGUAGE . '</b>
			' . $languageOptions . '
		</div>
		<p class="clear">&nbsp;</p>
		<p>' . THANK_YOU_FOR_CHOOSING_SOLUSVMCONTROLLER . '</p>
		<p align="right">
			<input type="button" value="' . NEXT . ' &raquo;" class="button" onclick="window.location.href=\'?step=1\';" />
		</p>';
	break;
}

include(INCLUDES . 'footer.php');
?>