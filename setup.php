<?php
$showMenu = 0;
$showSidebar = 0;
$title = 'SolusVMController Installation';
include(INCLUDES . 'header.php');

$step = isset($_GET['step']) ? $_GET['step'] : 0;

switch($step){
	case '1':
		echo '<h1>SolusVMController Installation (Step 1 of 2)</h1>';
		$error = 0;

		echo '<p>Perform permission checking...</p>';

		if(isRewritable(ROOT . 'configuration.php')){
			echo '<p class="green">Check permission of ' . ROOT . 'configuration.php ' . str_repeat('.', 10) . ' [pass]</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">Check permission of ' . ROOT . 'configuration.php ' . str_repeat('.', 10) . ' [fail]</p>';
		}

		if(isRewritable(TABLES)){
			echo '<p class="green">Check permission of ' . TABLES . ' ' . str_repeat('.', 10) . ' [pass]</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">Check permission of ' . TABLES . ' ' . str_repeat('.', 10) . ' [fail]</p>';
		}

		echo '<p align="right">
			<input type="button" value="Re-check" class="button" onclick="window.location.href=\'?step=1\';" />';

		if(!$error){
			echo ' <input type="button" value="Next &raquo;" class="button" onclick="window.location.href=\'?step=2\';"/>';
		}
		echo '</p>';
	break;

	case '2':
		echo '<h1>SolusVMController Installation (Step 2 of 2)</h1>';
		$error = 0;
		$randomCode = substr(sha1(microtime()), rand(0,30), 10);

		if(@file_put_contents(TABLES . $randomCode . 'user.tab', 'user_id;full_name;username;password' . "\n" . '1;Administrator;admin;admin' . "\n")){
			echo '<p class="green">Creating user table ' . str_repeat('.', 10) . ' [pass]</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">Creating user table ' . str_repeat('.', 10) . ' [fail]</p>';
		}

		if(@file_put_contents(TABLES . $randomCode . 'vps.tab', 'vps_id;vps_name;description;key;hash;host;port;date_added' . "\n")){
			echo '<p class="green">Creating vps table ' . str_repeat('.', 10) . ' [pass]</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">Creating vps table ' . str_repeat('.', 10) . ' [fail]</p>';
		}

		if(@file_put_contents(ROOT . 'configuration.php', '<?php' . "\n" . 'define(\'INSTALLED\', 1);' . "\n"  . 'define(\'USER_TABLE\', \'' . $randomCode . 'user.tab' . '\');' . "\n" . 'define(\'VPS_TABLE\', \'' . $randomCode . 'vps.tab' . '\');' . "\n" . '?>')){
			echo '<p class="green">Writing configuration ' . str_repeat('.', 10) . ' [pass]</p>';
		}
		else{
			$error = 1;
			echo '<p class="red">Writing configuration ' . str_repeat('.', 10) . ' [fail]</p>';
		}

		if(!$error){
			echo '<p>Installtion completed.</p>
			<p>You can now login with default username <b>admin</b> and password <b>admin</b>.</p>
			<p align="right"><input type="button" value="Finish" class="button" onclick="window.location.href=\'?q=login\';"/></p>';
		}
	break;

	default:
		echo '<h1>SolusVMController Installation.</h1>
		<p>Thank you for choosing SolusVMController. Please click the next button to start installation.</p>
		<p align="right">
			<input type="button" value="Next &raquo;" class="button" onclick="window.location.href=\'?step=1\';" />
		</p>';
	break;
}

include(INCLUDES . 'footer.php');
?>