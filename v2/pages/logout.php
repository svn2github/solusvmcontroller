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
unset($_SESSION['user_id']);
unset($_SESSION['full_name']);
unset($_SESSION['username']);
unset($_SESSION['time_zone']);
unset($_SESSION['dst']);

$title = LOGOUT;
$metaRedirect = '?q=login';
include(INCLUDES . 'header.php');
?>
<h1><?php echo LOGOUT; ?></h1>
<p>
	<?php echo YOU_ARE_LOGGING_OUT . ' ...'; ?>
</p>
<p>&nbsp;</p>
<?php include(INCLUDES . 'footer.php'); ?>