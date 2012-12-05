<?php
###########################################################################
#                                                                         #
#  SolusVMController                                                      #
#                                                                         #
#  Copyright (C) 2012 SolusVMController                                   #
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

// Validate IP address
function isValidIP($ip){
	return filter_var($ip, FILTER_VALIDATE_IP);
}

// Validate email address
function isValidEmail($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}
// Get client IP
function getIP(){ return $_SERVER['REMOTE_ADDR']; }

// Get HTTP referer
function getHttpReferer(){ return (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''); }

// Get client user agent
function getUserAgent(){ return (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : ''); }

// Get URL of current page
function getPageURL(){
	$s = empty($_SERVER['HTTPS']) ? '' : ($_SERVER['HTTPS'] == 'on') ? 's' : '';
	$protocol = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0, strpos(strtolower($_SERVER['SERVER_PROTOCOL']), '/')) . $s;
	$port = ($_SERVER['SERVER_PORT'] == '80') ? '' : (':' . $_SERVER['SERVER_PORT']);
	return $protocol . '://' . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

// Display size in proper unit
function displayBytes($bytes){
	$ext = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
	$unitCount = 0;
	for(; $bytes > 1024; $unitCount++) $bytes /= 1024;
	return round($bytes, 2) . ' ' . $ext[$unitCount];
}

// Generate random string
function random($length=16){
	$key = '';
	$pattern = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	for($i=0; $i<$length; $i++) $key .= $pattern{rand(0, strlen($pattern)-1)};
	return $key;
}

// Hash a string, one way encryption
function hashed($s){
	return sha1(sha1($s . 'SfC97$zrAM@n'));
}
?>