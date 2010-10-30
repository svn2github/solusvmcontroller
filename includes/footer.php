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
			<h1>CONTROL</h1>
			<div class="left-box">
				<ul class="sidemenu">
					<li><a href="?action=add">Add VPS</a></li>
					<li><a href="?t=<?php echo time(); ?>">Check Status</a></li>
				</ul>
			</div>
		</div>
		<?php } ?>
	</div>

	<div class="footer">
		<p>
			<a href="http://seikan.me/solusvmcontroller">SolusVMController</a> is Free Software released under the GNU/GPL License.
			SolusVM is registered trademark of <a href="http://www.solusvm.com/">Soluslabs</a> Ltd.<br />
			Template is modified from <a href="http://www.styleshout.com/">styleshout</a>.
		</p>
	</div>
</body>
</html>
