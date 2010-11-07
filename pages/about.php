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
$title = 'About';
include(INCLUDES . 'header.php');
?>
<h1>SolusVMController v1.21</h1>
<p>
	SolusVMController is free web based application to control all your SolusVM based VPSes under one interface. This application access your VPS using API provided by <a href="http://solusvm.com" target="_blank">Soluslabs</a>.
	Please make sure your VPS provider has enabled API access in order to use this application.
</p>
<p>
	If you found any errors or bugs in this application, feel free to contact us at <a href="http://solusvmcontroller.com/?q=contact" target="_blank">here</a>. Latest version of SolusVMController is available at <a href="http://solusvmcontroller.com">http://solusvmcontroller.com</a>.
</p>
<p>
	If you feel this application helps you, you may consider to send me donation <a href="http://goo.gl/hMiiq" target="_blank">here</a>.
</p>
<p>&nbsp;</p>
<?php include(INCLUDES . 'footer.php'); ?>