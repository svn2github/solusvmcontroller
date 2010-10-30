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
$title = 'Help';
include(INCLUDES . 'header.php');
?>
<a name="top"></a>
<h1>Help</h1>
<p>
	<ol>
		<li><a href="#1">How do I get my API key and API hash?</a></li>
		<li><a href="#2">What is my host?</a></li>
	</ol>
</p>
<p>&nbsp;</p>
<p>
	<a name="1"><h3>How do I get my API key and API hash?</h3></a>
	1. Login to your SolusVM contorl panel.<br />
	2. From you VPS list, click "Manage".<br />
	<img src="images/screenhot001.jpg" width="335" height="172" border="0" alt="" class="screenshot" /><br /><br />
	3. Choose "API Settings" from left menu.<br />
	<img src="images/screenhot002.jpg" width="372" height="264" border="0" alt="" class="screenshot" /><br /><br />
	4. Press "Generate" button.<br />
	<img src="images/screenhot003.jpg" width="455" height="234" border="0" alt="" class="screenshot" /><br /><br />
	5. Your API key and API hash is now generated.<br />
	<img src="images/screenhot004.jpg" width="497" height="254" border="0" alt="" class="screenshot" /><br /><br />
	<div style="float:right"><a href="#top">Back to top</a></div>
</p>
<p>
	<a name="2"><h3>What is my host?</h3></a>
	Please note that host is not hostname of your VPS. It is the hostname of your SolusVM control panel. If your URL to login SolusVM is <a href="#">https://yourvpsprovider.com:5656/login.php</a>, your host will be <b>yourvpsprovider.com</b> and port is <b>5656</b>.<br />
	<div style="float:right"><a href="#top">Back to top</a></div>
</p>
<p>&nbsp;</p>
<?php include(INCLUDES . 'footer.php'); ?>