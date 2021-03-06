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
	<link href="includes/css/reset.css" rel="stylesheet" type="text/css" />
	<link href="includes/css/common.css" rel="stylesheet" type="text/css" />
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js"></script>
	<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.3/scriptaculous.js"></script>
	<?php
	if(isset($includeJS) && is_array($includeJS)) foreach($includeJS as $js) echo '<script src="' . $js . '"></script>' . "\n";
	if(isset($scripts)) echo '<script type="text/javascript">' . "\n" . $scripts . "\n" . '</script>';
	?>

<head>

<body>
	<div id="wrap">
		<div id="header">
			<span id="slogan"> <?php echo ALL_VPSES_UNDER_ONE_ROOF; ?></span>
			<?php if($showMenu){ ?>
			<ul>
				<?php if(!isset($_SESSION['user_id'])) echo '<li' . ($q == 'login' ? ' id="current"' : '') . '><a href="?q=login"><span>' . LOGIN . '</span></a></li>'; ?>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'vps' ? ' id="current"' : '') . '><a href="?q=vps"><span>' . VPS . '</span></a></li>'; ?>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'group' ? ' id="current"' : '') . '><a href="?q=group"><span>' . GROUP . '</span></a></li>'; ?>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'provider' ? ' id="current"' : '') . '><a href="?q=provider"><span>' . PROVIDER . '</span></a></li>'; ?>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'settings' ? ' id="current"' : '') . '><a href="?q=settings"><span>' . SETTINGS . '</span></a></li>'; ?>
				<li<?php if($q == 'help') echo ' id="current"'; ?>><a href="?q=help"><span><?php echo HELP; ?></span></a></li>
				<li<?php if($q == 'about') echo ' id="current"'; ?>><a href="?q=about"><span><?php echo ABOUT; ?></span></a></li>
				<?php if(isset($_SESSION['user_id'])) echo '<li' . ($q == 'logout' ? ' id="current"' : '') . '><a href="?q=logout"><span>' . LOGOUT . '</span></a></li>'; ?>
			</ul>
			<?php } ?>
		</div>

		<div id="header-logo">
			<a href="?q=vps"><img src="images/svmcontroller_logo.png" width="85" height="85" border="0" style="position:absolute;top:-50px;;" /></a>
			<div id="logo">SolusVM<span class="red">Controller</span><span style="font-size:10px;color:#666666;"><?php echo SVMC_VERSION; ?></span></div>
			<?php if(isset($_SESSION['full_name'])) echo '<div style="float:right;margin-top:10px;">' . WELCOME . ', ' . $_SESSION['full_name'] . '!</div>'; ?>
		</div>