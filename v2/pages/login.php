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
if(isset($_SESSION['user_id'])){
	header('Location: ?q=vps');
	exit;
}

$status = '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if(isset($_POST['username'])){
	$user = new csvHandler(TABLES . SVMC_CODE . 'user.tab', '|', 'user_id');

	$result = $user->select('username', $username);

	if($result){
		if($result[0]['username'] == $username && $result[0]['password'] == $password){
			$_SESSION['user_id'] = $result[0]['user_id'];
			$_SESSION['full_name'] = $result[0]['full_name'];
			$_SESSION['username'] = $result[0]['username'];
			$_SESSION['time_zone'] = $result[0]['time_zone'];
			$_SESSION['dst'] = $result[0]['dst'];

			header('Location: ?q=vps');
			exit;
		}
	}
	$status = '<p class="red">' . INVALID_USERNAME_OR_PASSWORD . '</p>';
}

$title = LOGIN_PAGE;
include(INCLUDES . 'header.php');
?>
<h1><?php echo ADMINISTRATOR_LOGIN; ?></h1>
<form action="?q=login" method="post">
	<?php echo $status; ?>
	<label for="username"><?php echo USERNAME; ?></label>
	<input type="text" name="username" id="username" value="<?php echo $username; ?>" maxlength="16" size="30" class="text" />
	<label for="password"><?php echo PASSWORD; ?></label>
	<input type="password" name="password" id="password" value="" maxlength="16" size="30" class="text" />
	<p>&nbsp;</p>
	<input class="button" type="submit" value="<?php echo LOGIN; ?>" />
</form>
<p>&nbsp;</p>
<?php include(INCLUDES . 'footer.php'); ?>