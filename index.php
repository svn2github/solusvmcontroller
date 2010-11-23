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

// Preset PHP settings
error_reporting(E_ALL);
ini_set('display_errors', 0);
if(function_exists('date_default_timezone_set')) date_default_timezone_set('GMT');
set_time_limit(0);

// Define this as parent file
define('INDEX', 1);

// Define root directory
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__) . DS);

// Define folders directory
define('INCLUDES', ROOT . 'includes' . DS);
define('LANGUAGES', ROOT . 'languages' . DS);
define('LIBRARIES', ROOT . 'libraries' . DS);
define('PAGES', ROOT . 'pages' . DS);
define('TABLES', ROOT . 'tables' . DS);

/** Import required functions and libraries **/
// Load configuration
file_exists(ROOT . 'configuration.php') or die('Cannot find "configuration.php".');
include(ROOT . 'configuration.php');

// Common functions
require(INCLUDES . 'functions.php');

// CSV class
require(LIBRARIES . 'csvhandler.class.php');

// SolusVM class
require(LIBRARIES . 'solusvm.class.php');


// Clean up all GET and POST values
if(isset($_GET)) foreach($_GET as $key=>$value) $_GET[$key] = stripslashes(trim($value));
if(isset($_POST)){
	foreach($_POST as $key=>$value){
		if(is_array($value)){
			foreach($value as $k=>$v){
				$value[$k] = stripslashes(trim($v));
			}
			$_POST[$key] = $value;
		}
		else{
			$_POST[$key] = stripslashes(trim($value));
		}
	}
}

// Get requested page
$q = isset($_GET['q']) ? $_GET['q'] : 'vps';

// Start session
if(session_id() == ''){
	// Generate an unique session Id
	$id = 0;
	while(strlen($id) < 32) $id .= mt_rand(0, mt_getrandmax());
	$id = md5(uniqid($id, true));

	// Start the session
	session_start();
}

// Check installation status
if(!defined('INSTALLED')){
	file_exists(ROOT . 'setup.php') or die('Cannot find "setup.php". Installation aborted.');
	include(ROOT . 'setup.php');
	exit;
}

// Include language file
$languageCode = UI_LANGUAGE;

if(isset($_SESSION['user_id'])){
	$user = new csvHandler(TABLES . SVMC_CODE . 'user.tab', '|', 'user_id');

	$result = $user->select('user_id', $_SESSION['user_id']);
	if($result) $languageCode = $result[0]['language'];
}

if(file_exists(LANGUAGES . $languageCode . '.php')) include(LANGUAGES . $languageCode . '.php');

// Display requested page
$showSidebar = 0;
$showMenu = 1;
if(file_exists(PAGES . $q . '.php')){
	include(PAGES . $q . '.php');
}
else{
	include(PAGES . '404.php');
}
?>