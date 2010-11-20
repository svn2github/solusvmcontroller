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
if(!isset($_SESSION['user_id'])){
	header('Location: ?q=login');
	exit;
}

$user = new csvHandler(TABLES . SVMC_CODE . 'user.tab', '|', 'user_id');
$result = $user->select('user_id', $_SESSION['user_id']);

if(!$result){
	header('Location: ?q=logout');
	exit;
}

$status = '';
$fullName = isset($_POST['fullName']) ? $_POST['fullName'] : $_SESSION['full_name'];
$username = isset($_POST['username']) ? strtolower($_POST['username']) : $_SESSION['username'];
$password = isset($_POST['password']) ? $_POST['password'] : '';
$confirm = isset($_POST['confirm']) ? $_POST['confirm'] : '';
$timeZone = isset($_POST['timeZone']) ? $_POST['timeZone'] : $_SESSION['time_zone'];
$dst = (isset($_POST['dst'])) ? 1 : ((isset($_POST['fullName'])) ? 0 : $result[0]['dst']);
$language = isset($_POST['language']) ? $_POST['language'] : $result[0]['language'];

$timeZoneOptions = '<select name="timeZone" id="timeZone">' . "\n";
foreach($timeZoneList as $key=>$value){
	$timeZoneOptions .= "\t" . '<option value="' . $key . '"' . ($key==$timeZone ? ' selected' : '') . '> ' . $value . '</option>' . "\n";
}
$timeZoneOptions .= '</select>';

$languageOptions = '<select name="language" id="language">' . "\n";

if($handle = opendir(LANGUAGES)){
	while(false !== ($file = readdir($handle))){
		if(strpos($file, '.php')){
			$content = file_get_contents(LANGUAGES . $file);

			if(preg_match('/UI_LANGUAGE:([^\n]+)/s', $content, $matches)){
				$value = str_replace('.php' , '', $file);
				$languageOptions .= "\t" . '<option value="' . $value . '"' . ($value==$language ? ' selected' : '') . '> ' . trim($matches[1]) . '</option>' . "\n";
			}
		}
	}
	closedir($handle);
}
$languageOptions .= '</select>';



if(isset($_POST['fullName'])){
	if(empty($fullName)){
		$status .= '<p class="red">' . FULL_NAME_CANNOT_BE_BLANK . '</p>';
	}
	if(strlen($fullName) > 50){
		$status .= '<p class="red">' . FULL_NAME_CANNOT_EXCEED_50_CHARACTERS . '</p>';
	}
	if(!preg_match('/^[0-9a-z]{4,16}$/', $username)){
		$status .= '<p class="red">' . USERNAME_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS . '</p>';
	}
	if(!empty($password)){
		if(!preg_match('/^[0-9a-z_!\-#]{4,16}$/', $password)){
			$status .= '<p class="red">' . PASSWORD_MUST_CONTAIN_ONLY_ALPHANUMERIC_CHARACTERS . '</p>';
		}
		if($password != $confirm){
			$status .= '<p class="red">' . CONFIRM_PASSWORD_IS_NOT_MATCHED . '</p>';
		}
	}

	if(empty($status)){
		$user = new csvHandler(TABLES . SVMC_CODE . 'user.tab', '|', 'user_id');
		$result = $user->select('user_id', $_SESSION['user_id']);

		if($result){
			if($result[0]['user_id'] != $_SESSION['user_id'] && $result[0]['username'] == $username){
				$status .= '<p class="red">' . str_replace('%username%', $username, USERNAME_ALREADY_EXISTED) . '</p>';
			}
		}
		else{
			$status .= '<p class="red">' . PROBLEM_RETRIEVING_USER_INFORMATION . '</p>';
		}
	}

	if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'demo.solusvmcontroller.com') $status = '<p class="red">This feature has been disabled in demo.</p>';

	if(empty($status)){
		$user = new csvHandler(TABLES . SVMC_CODE . 'user.tab', '|', 'user_id');

		if(empty($password)){
			$user->update($_SESSION['user_id'], array('full_name'=>$fullName, 'username'=>$username, 'time_zone'=>$timeZone, 'dst'=>$dst, 'language'=>$language));
		}
		else{
			$user->update($_SESSION['user_id'], array('full_name'=>$fullName, 'username'=>$username, 'password'=>$password, 'time_zone'=>$timeZone, 'dst'=>$dst, 'language'=>$language));
		}

		$_SESSION['full_name'] = $fullName;
		$_SESSION['username'] = $username;
		$_SESSION['time_zone'] = $timeZone;
		$_SESSION['dst'] = $dst;

		$status = '<p class="green">' . USER_INFORMATION_UPDATED . '</p>';
	}
}

$title = SETTINGS;
include(INCLUDES . 'header.php');
?>
<h1><?php echo SETTINGS; ?></h1>
<form action="?q=settings" method="post">
	<?php echo $status; ?>
	<label for="fullName"><?php echo FULL_NAME; ?></label>
	<input type="text" name="fullName" id="fullName" value="<?php echo $fullName; ?>" maxlength="50" size="40" class="text" /> <span class="red">*</span>
	<label for="username"><?php echo USERNAME; ?></label>
	<input type="text" name="username" id="username" value="<?php echo $username; ?>" maxlength="16" size="40" class="text" /> <span class="red">*</span>
	<label for="password"><?php echo PASSWORD; ?></label>
	<input type="password" name="password" id="password" value="" maxlength="16" size="40" class="text" /> <span class="red">*</span>
	<label for="confirm"><?php echo CONFIRM; ?></label>
	<input type="password" name="confirm" id="confirm" value="" maxlength="16" size="40" class="text" /> <span class="red">*</span>
	<label for="timeZone"><?php echo TIME_ZONE; ?></label>
	<?php echo $timeZoneOptions; ?> <span class="red">*</span><br />
	<input type="checkbox" name="dst" id="dst"<?php if($dst) echo ' checked'; ?>> <label for="dst" style="display:inline;font-weight:normal;"><?php echo DAYLIGHT_SAVING_TIME; ?></label>
	<label for="language"><?php echo LANGUAGE; ?></label>
	<?php echo $languageOptions; ?> <span class="red">*</span><br />
	<p>&nbsp;</p>
	<input class="button" type="submit" value="<?php echo UPDATE; ?>" /> <a href="?q=vps"><?php echo CANCEL; ?></a>
</form>
<p>&nbsp;</p>
<?php include(INCLUDES . 'footer.php'); ?>