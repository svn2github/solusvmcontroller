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
		<?php if($showSidebar){ ?>
		<div id="sidebar">
			<h1><?php echo CONTROL; ?></h1>
			<div class="left-box">
				<ul class="sidemenu">
					<?php
					switch($q){
						case 'vps':
							echo '<li><a href="?q=vps&action=add"><img src="images/icons/computer_add.png" width="16" height="16" border="0" alt="' . ADD_VPS . '" title="' . ADD_VPS . '" align="absMiddle" /> ' . ADD_VPS . '</a></li>';
							if(!isset($_GET['action'])) echo '<li><a href="javascript:;" onclick="getStatus();"><img src="images/icons/refresh.png" width="16" height="16" border="0" alt="' . CHECK_STATUS . '" title="' . CHECK_STATUS . '" align="absMiddle" /> ' . CHECK_STATUS . '</a></li>';
						break;

						case 'group':
							echo '<li><a href="?q=group&action=add"><img src="images/icons/folder_add.png" width="16" height="16" border="0" alt="' . ADD_GROUP . '" title="' . ADD_GROUP . '" align="absMiddle" /> ' . ADD_GROUP . '</a></li>';
						break;

						case 'provider':
							echo '<li><a href="?q=provider&action=add"><img src="images/icons/people_add.png" width="16" height="16" border="0" alt="' . ADD_PROVIDER . '" title="' . ADD_PROVIDER . '" align="absMiddle" /> ' . ADD_PROVIDER . '</a></li>';
						break;
					}
					?>
				</ul>
			</div>
		</div>
		<?php } ?>
	</div>

	<div class="footer">
		<p>
			<a href="http://seikan.me/solusvmcontroller">SolusVMController</a> is Free Software released under the GNU/GPL License.
			SolusVM is registered trademark of <a href="http://www.solusvm.com/">Soluslabs</a> Ltd.
		</p>
	</div>
</body>
</html>
