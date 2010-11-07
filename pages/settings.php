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

$status = '';
$fullName = isset($_POST['fullName']) ? $_POST['fullName'] : $_SESSION['full_name'];
$username = isset($_POST['username']) ? strtolower($_POST['username']) : $_SESSION['username'];
$password = isset($_POST['password']) ? $_POST['password'] : '';
$confirm = isset($_POST['confirm']) ? $_POST['confirm'] : '';

if(isset($_POST['fullName'])){
	if(empty($fullName)){
		$status .= '<p class="red">Full name cannot be blank.</p>';
	}
	if(!preg_match('/^[0-9a-z]{4,16}$/', $username)){
		$status .= '<p class="red">Username must be 4-16 alphanumeric characters.</p>';
	}
	if(!empty($password)){
		if(!preg_match('/^[0-9a-z_!\-#]{4,16}$/', $password)){
			$status .= '<p class="red">Password must be 4-16 alphanumeric characters.</p>';
		}
		if($password != $confirm){
			$status .= '<p class="red">Confirm password is not matched.</p>';
		}
	}

	if(empty($status)){
		$user = new csvHandler(TABLES . USER_TABLE, ';', 'user_id');
		$result = $user->select('user_id', $_SESSION['user_id']);

		if($result){
			if($result[0]['user_id'] != $_SESSION['user_id'] && $result[0]['username'] == $username){
				$status .= '<p class="red">Username "' . $username . '" already exist.</p>';
			}
		}
		else{
			$status .= '<p class="red">Problem retrieve user information.</p>';
		}
	}

	//$status = '<p class="red">This feature has been disabled in demo.</p>';

	if(empty($status)){
		$user = new csvHandler(TABLES . USER_TABLE, ';', 'user_id');

		if(empty($password)){
			$user->update($_SESSION['user_id'], array('full_name'=>$fullName, 'username'=>$username));
		}
		else{
			$user->update($_SESSION['user_id'], array('full_name'=>$fullName, 'username'=>$username, 'password'=>$password));
		}

		$_SESSION['full_name'] = $fullName;
		$_SESSION['username'] = $username;
		$status = '<p class="green">User information updated.</p>';
	}
}

$title = 'Settings';
include(INCLUDES . 'header.php');
?>
<h1>Settings</h1>
<form action="?q=settings" method="post">
	<?php echo $status; ?>
	<p>
		<label for="fullName">Full Name</label>
		<input type="text" name="fullName" id="fullName" value="<?php echo $fullName; ?>" size="40" /> <span class="red">*</span>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo $username; ?>" size="40" /> <span class="red">*</span>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="" size="40" /> <span class="red">*</span>
		<label for="confirm">Confirm</label>
		<input type="password" name="confirm" id="confirm" value="" size="40" /> <span class="red">*</span>
	</p>
	<p>
		<input class="button" type="submit" value="Update" /> <a href="?q=home">Cancel</a>
	</p>
</form>
<p>&nbsp;</p>
<?php include(INCLUDES . 'footer.php'); ?>