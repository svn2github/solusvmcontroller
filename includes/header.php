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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="robots" content="all">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php if(isset($metaRedirect)) echo '<meta http-equiv="refresh" content="2;url=' . $metaRedirect . '">';  ?>
	<title><?php echo (isset($title) ? $title : ''); ?></title>
	<link href="./includes/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="./includes/css/common.css" rel="stylesheet" type="text/css" />
<head>

<body>
	<div id="wrap">
		<div id="header">
			<span id="slogan"> All VPSes in one place</span>
			<?php if($showMenu){ ?>
			<ul>
				<li<?php if($q == 'home') echo ' id="current"'; ?>><a href="?q=home"><span>Home</span></a></li>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'settings' ? ' id="current"' : '') . '><a href="?q=settings"><span>Settings</span></a></li>'; ?>
				<li<?php if($q == 'help') echo ' id="current"'; ?>><a href="?q=help"><span>Help</span></a></li>
				<li<?php if($q == 'about') echo ' id="current"'; ?>><a href="?q=about"><span>About</span></a></li>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'logout' ? ' id="current"' : '') . '><a href="?q=logout"><span>Logout</span></a></li>'; ?>
			</ul>
			<?php } ?>
		</div>

		<div id="header-logo">
			<div id="logo">SolusVM<span class="red">Controller</span></div>
			<?php if(isset($_SESSION['full_name'])) echo '<div style="float:right;margin-top:10px;">Welcome, ' . $_SESSION['full_name'] . '!</div>'; ?>
		</div>