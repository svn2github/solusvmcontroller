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
if(!isset($_SESSION['user_id'])){
	header('Location: ?q=login');
	exit;
}

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$output = '<div id="main">';

switch($action){
	case 'add':
		$status = '';
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$key = isset($_POST['key']) ? $_POST['key'] : '';
		$hash = isset($_POST['hash']) ? $_POST['hash'] : '';
		$protocol = isset($_POST['protocol']) ? $_POST['protocol'] : 'http';
		$protocol = ($protocol == 'https') ? 'https' : 'http';
		$host = isset($_POST['host']) ? $_POST['host'] : '';
		$port = isset($_POST['port']) ? $_POST['port'] : '';
		$description = isset($_POST['description']) ? $_POST['description'] : '';

		$protocols = array('http'=>'http://', 'https'=>'https://');

		$protocolOptions = '<select name="protocol" id="protocol">';
		foreach($protocols as $optionKey=>$optionValue){
			$protocolOptions .= '<option value="' . $optionKey . '"' . ($optionKey==$protocol ? ' selected' : '') . '> ' . $optionValue . '</option>';
		}
		$protocolOptions .= '</select>';


		if(isset($_POST['name'])){
			if(empty($name)){
				$status .= '<p class="red">VPS name cannot be blank.</p>';
			}
			if(empty($key)){
				$status .= '<p class="red">You must provide a API key.</p>';
			}
			if(empty($hash)){
				$status .= '<p class="red">You must provide a API hash.</p>';
			}
			if(!preg_match('/^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$/', gethostbyname($host))){
				$status .= '<p class="red">"' . $host . '" is not a valid host.</p>';
			}
			if(!empty($port) && !preg_match('/[0-9]+/', $port)){
				$status .= '<p class="red">"' . $port . '" is not a valid port.</p>';
			}

			if(empty($status)){
				$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
				$vps->add(array('vps_id'=>$vps->getLastId()+1, 'vps_name'=>$name, 'key'=>$key, 'hash'=>$hash, 'protocol'=>$protocol, 'host'=>$host, 'port'=>$port, 'description'=>str_replace(array("\n", ';'), array('\n', '<semicolon>'), $description), 'date_added'=>time()));
				$_SESSION['status'] = '<p class="green">VPS "' . $name . '" added.</p>';
				header('Location: ?p=home');
				exit;
			}
		}

		$output .= '<h1>Add VPS</h1>
		' . $status . '
		<form action="?action=add" method="post">
			<p>
				<label for="name">VPS Name</label>
				<input type="text" name="name" id="name" value="' . $name . '" size="64" /> <span class="red">*</span>
				<label for="key">API Key</label>
				<input type="text" name="key" id="key" value="' . $key . '" size="64" /> <span class="red">*</span>
				<label for="hash">API Hash</label>
				<input type="text" name="hash" id="hash" value="' . $hash . '" size="64" /> <span class="red">*</span>
				<label for="host">Host</label>
				' . $protocolOptions . ' <input type="text" name="host" id="host" value="' . $host . '" size="50" /> <span class="red">*</span>
				<label for="port">Port</label>
				<input type="text" name="port" id="port" value="' . $port . '" size="10" />
				<label for="description">Description</label>
				<textarea name="description" id="description">' . $description . '</textarea>
			</p>
			<p>
			<input class="button" type="submit" value="Add VPS" /> <a href="?q=home">Cancel</a>
		</p>
		</form>';
	break;

	case 'view':
		$output .= '<h1>VPS Information</h1>';

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
		$result = $vps->select('vps_id', $id);

		if($result){
			$solus = new SolusVM;
			$solus->setKey($result[0]['key']);
			$solus->setHash($result[0]['hash']);
			$solus->setProtocol($result[0]['protocol']);
			$solus->setHost($result[0]['host']);
			if($result[0]['port']) $solus->setPort($result[0]['port']);
			$data = $solus->getStatus();

			if($data){
				$output .= '<form>
				<p>
					<label>Status</label>
					' . ($data['statusmsg'] == 'online' ? '<img src="images/online.png" border="0" alt="Online" title="Online" align="absMiddle" /> Online' : '<img src="images/offline.png" border="0" alt="Offline" title="Offline" align="absMiddle" /> Offline') . '
					<label>Hostname</label>
					' . $data['hostname'] . '
					<label>IP Address</label>
					' . $data['ipaddress'] . '
					<label>VPS Name</label>
					' . $result[0]['vps_name'] . '
					<label>Added on</label>
					' . date('d M, Y', $result[0]['date_added']) . '
					<label>API Key</label>
					' . $result[0]['key'] . '
					<label>API Hash</label>
					' . $result[0]['hash'] . '
					<label>Host</label>
					' . $result[0]['protocol'] . '://' . $result[0]['host'] . ($result[0]['port'] ? ':' . $result[0]['vps_name'] : '') . '
					<label>Description</label>
					' . str_replace(array('\n', '<semicolon>'), array('<br />', ';'), $result[0]['description']) . '
					<hr />
					<div style="float:left;">
						<a href="?action=boot&id=' . $result[0]['vps_id'] . '&ref=' . urlencode(getPageURL()) . '"><img src="images/boot.gif" border="0" alt="Boot" title="Boot" align="absMiddle" /> Boot</a> |
						<a href="?action=shutdown&id=' . $result[0]['vps_id'] . '&ref=' . urlencode(getPageURL()) . '"><img src="images/shutdown.gif" border="0" alt="Shutdown" title="Shutdown" align="absMiddle" />Shutdown</a> |
						<a href="?action=reboot&id=' . $result[0]['vps_id'] . '&ref=' . urlencode(getPageURL()) . '"><img src="images/reboot.gif" border="0" alt="Reboot" title="Reboot" align="absMiddle" />Reboot</a>
					</div>
					<div style="float:right">
						<a href="?action=edit&id=' . $result[0]['vps_id'] . '&ref=' . urlencode(getPageURL()) . '"><img src="images/edit.gif" border="0" alt="Edit" title="Edit" align="absMiddle" /> Edit</a> |
						<a href="?action=remove&id=' . $result[0]['vps_id'] . '&ref=' . urlencode(getPageURL()) . '"><img src="images/trash.gif" border="0" alt="Remove" title="Remove" align="absMiddle" /> Remove</a> |
						<a href="?q=home">Back</a>
					</div>
					<div class="clear"></div>
				</p>
			</form>';
			}
			else{
				$output .= '<p class="red">Error retrieving VPS status. Please try again later.</p>';
			}
		}
		else{
			$output .= '<p class="red">No VPS is found with Id ' . $id . '.</p>';
		}
	break;

	case 'boot':
		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=home';
		$output .= '<h1>Boot</h1>';

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
		$result = $vps->select('vps_id', $id);

		if($result){
			$output .= '<form method="post">
				<input type="hidden" name="back" />';

			$solus = new SolusVM;
			$solus->setKey($result[0]['key']);
			$solus->setHash($result[0]['hash']);
			$solus->setProtocol($result[0]['protocol']);
			$solus->setHost($result[0]['host']);
			if($result[0]['port']) $solus->setPort($result[0]['port']);
			$data = $solus->boot();

			if($data){
				if($data['statusmsg'] == 'booted'){
					$output .= '<p class="green">"' . $result[0]['vps_name'] . '" is booted.</p>';
				}
				else{
					$output .= '<p class="red">Fail to boot "' . $result[0]['vps_name'] . '".</p>';
				}
			}
			else{
				$output .= '<p class="red">Error retrieving VPS status. Please try again later.</p>';
			}

			$output .= '<p><input class="button" type="button" value="Back" onclick="window.location.href=\'' . $referer . '\';" /></p>
				</form>';
		}
		else{
			$output .= '<p class="red">No VPS is found with Id ' . $id . '.</p>';
		}
	break;

	case 'shutdown':
		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=home';
		$output .= '<h1>Shutdown</h1>';

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
		$result = $vps->select('vps_id', $id);

		if($result){
			$output .= '<form method="post">
				<input type="hidden" name="back" />';

			$solus = new SolusVM;
			$solus->setKey($result[0]['key']);
			$solus->setHash($result[0]['hash']);
			$solus->setProtocol($result[0]['protocol']);
			$solus->setHost($result[0]['host']);
			if($result[0]['port']) $solus->setPort($result[0]['port']);
			$data = $solus->shutdown();

			if($data){
				if($data['statusmsg'] == 'shutdown'){
					$output .= '<p class="green">"' . $result[0]['vps_name'] . '" is shutdown.</p>';
				}
				else{
					$output .= '<p class="red">Fail to shutdown "' . $result[0]['vps_name'] . '".</p>';
				}
			}
			else{
				$output .= '<p class="red">Error retrieving VPS status. Please try again later.</p>';
			}

			$output .= '<p><input class="button" type="button" value="Back" onclick="window.location.href=\'' . $referer . '\';" /></p>
				</form>';
		}
		else{
			$output .= '<p class="red">No VPS is found with Id ' . $id . '.</p>';
		}
	break;

	case 'reboot':
		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=home';
		$output .= '<h1>Reboot</h1>';

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
		$result = $vps->select('vps_id', $id);

		if($result){
			$output .= '<form method="post">
				<input type="hidden" name="back" />';

			$solus = new SolusVM;
			$solus->setKey($result[0]['key']);
			$solus->setHash($result[0]['hash']);
			$solus->setProtocol($result[0]['protocol']);
			$solus->setHost($result[0]['host']);
			if($result[0]['port']) $solus->setPort($result[0]['port']);
			$data = $solus->reboot();

			if($data){
				if($data['statusmsg'] == 'rebooted'){
					$output .= '<p class="green">"' . $result[0]['vps_name'] . '" is rebooted.</p>';
				}
				else{
					$output .= '<p class="red">Fail to reboot "' . $result[0]['vps_name'] . '".</p>';
				}
			}
			else{
				$output .= '<p class="red">Error retrieving VPS status. Please try again later.</p>';
			}

			$output .= '<p><input class="button" type="button" value="Back" onclick="window.location.href=\'' . $referer . '\';" /></p>
				</form>';
		}
		else{
			$output .= '<p class="red">No VPS is found with Id ' . $id . '.</p>';
		}
	break;

	case 'edit':
		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=home';
		$output .= '<h1>Edit VPS</h1>';

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
		$result = $vps->select('vps_id', $id);

		if($result){
			$status = '';
			$name = isset($_POST['name']) ? $_POST['name'] : $result[0]['vps_name'];
			$key = isset($_POST['key']) ? $_POST['key'] : $result[0]['key'];
			$hash = isset($_POST['hash']) ? $_POST['hash'] : $result[0]['hash'];
			$protocol = isset($_POST['protocol']) ? $_POST['protocol'] : $result[0]['protocol'];
			$protocol = ($protocol == 'https') ? 'https' : 'http';
			$host = isset($_POST['host']) ? $_POST['host'] : $result[0]['host'];
			$port = isset($_POST['port']) ? $_POST['port'] : $result[0]['port'];
			$description = isset($_POST['description']) ? $_POST['description'] : str_replace(array('\n', '<semicolon>'), array("\n", ';'), $result[0]['description']);

			$protocols = array('http'=>'http://', 'https'=>'https://');

			$protocolOptions = '<select name="protocol" id="protocol">';
			foreach($protocols as $optionKey=>$optionValue){
				$protocolOptions .= '<option value="' . $optionKey . '"' . ($optionKey==$protocol ? ' selected' : '') . '> ' . $optionValue . '</option>';
			}
			$protocolOptions .= '</select>';

			if(isset($_POST['name'])){
				if(empty($name)){
					$status .= '<p class="red">VPS name cannot be blank.</p>';
				}
				if(empty($key)){
					$status .= '<p class="red">You must provide a API key.</p>';
				}
				if(empty($hash)){
					$status .= '<p class="red">You must provide a API hash.</p>';
				}
				if(!preg_match('/^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$/', gethostbyname($host))){
					$status .= '<p class="red">"' . $host . '" is not a valid host.</p>';
				}
				if(!empty($port) && !preg_match('/[0-9]+/', $port)){
					$status .= '<p class="red">"' . $port . '" is not a valid port.</p>';
				}

				if(empty($status)){
					$vps->update($id, array('vps_name'=>$name, 'key'=>$key, 'hash'=>$hash, 'protocol'=>$protocol, 'host'=>$host, 'port'=>$port, 'description'=>str_replace(array("\n", ';'), array('\n', '<semicolon>'), $description)));
					$_SESSION['status'] = '<p class="green">VPS "' . $name . '" updated.</p>';
					header('Location: ?p=home');
					exit;
				}
			}

			$output .= $status . '
			<form action="?action=edit&id=' . $id . '" method="post">
				<p>
					<label for="name">VPS Name</label>
					<input type="text" name="name" id="name" value="' . $name . '" size="64" /> <span class="red">*</span>
					<label>Added on</label>
					' . date('d M, Y', $result[0]['date_added']) . '
					<label for="key">API Key</label>
					<input type="text" name="key" id="key" value="' . $key . '" size="64" /> <span class="red">*</span>
					<label for="hash">API Hash</label>
					<input type="text" name="hash" id="hash" value="' . $hash . '" size="64" /> <span class="red">*</span>
					<label for="host">Host</label>
					' . $protocolOptions . ' <input type="text" name="host" id="host" value="' . $host . '" size="50" /> <span class="red">*</span>
					<label for="port">Port</label>
					<input type="text" name="port" id="port" value="' . $port . '" size="10" />
					<label for="description">Description</label>
					<textarea name="description" id="description">' . $description . '</textarea>
				</p>
				<p>
				<input class="button" type="submit" value="Update" /> <a href="' . $referer . '">Cancel</a>
			</p>
			</form>';
		}
		else{
			$output .= '<p class="red">No VPS is found with Id ' . $id . '.</p>';
		}
	break;

	case 'remove':
		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=home';
		$output .= '<h1>Remove VPS</h1>';

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');
		$result = $vps->select('vps_id', $id);

		if($result){
			if(isset($_POST['remove'])){
				$vps->delete($id);
				$_SESSION['status'] = '<p class="green">VPS "' . $result[0]['vps_name'] . '" removed.</p>';
				header('Location: ?p=home');
				exit;
			}

			$output .= '<form action="?action=remove&id=' . $id . '" method="post">
			<input type="hidden" name="remove" />
				<p>
					Confirm to remove "' . $result[0]['vps_name'] . '"?
				</p>
				<p>
				<input class="button" type="submit" value="Remove" /> <a href="' . $referer . '">Cancel</a>
			</p>
			</form>';
		}
		else{
			$output .= '<p class="red">No VPS is found with Id ' . $id . '.</p>';
		}
	break;

	default:
		$output .= '<h1>VPS List</h1>';
		$checkStatus = 0;

		if(isset($_SESSION['status'])){
			$output .= $_SESSION['status'];
			unset($_SESSION['status']);
		}

		$vps = new csvHandler(TABLES . VPS_TABLE, ';', 'vps_id');

		$result = $vps->select();

		if($result){
			$solus = new SolusVM;

			if(isset($_GET['t'])) unset($_SESSION['last_check']);
			$_SESSION['last_check'] = isset($_SESSION['last_check']) ? $_SESSION['last_check'] : 0;

			if($_SESSION['last_check'] < (time()-18000)) $checkStatus = 1;

			$output .= '<div class="table">
				<div class="th">
					<div class="td" style="width:8%;">Status</div>
					<div class="td" style="width:22%;">Name</div>
					<div class="td" style="width:35%;">Description</div>
					<div class="td" style="width:15%;">Action</div>
					<div class="td" style="width:10%;">&nbsp;</div>
					<div class="clear"></div>
				</div>';

			foreach($result as $r){
				$status = '<img src="images/error.png" border="0" alt="Error" title="Error" align="absMiddle" />';

				$solus->setKey($r['key']);
				$solus->setHash($r['hash']);
				$solus->setProtocol($r['protocol']);
				$solus->setHost($r['host']);
				if($r['port']) $solus->setPort($r['port']);

				if($checkStatus){
					$data = $solus->getStatus();

					if($data){
						$status = ($data['statusmsg'] == 'online') ? '<img src="images/online.png" border="0" alt="Online" title="Online" align="absMiddle" />' : '<img src="images/offline.png" border="0" alt="Offline" title="Offline" align="absMiddle" />';
						$_SESSION['vps' . $r['vps_id']] = $status;

					}
					$_SESSION['last_check'] = time();
				}
				else{
					$status = isset($_SESSION['vps' . $r['vps_id']]) ? $_SESSION['vps' . $r['vps_id']] : $status;
				}

				$output .= '<div class="tr">
					<div class="td" style="width:8%;"><a href="?action=view&id=' . $r['vps_id'] . '">' . $status . '</a></div>
					<div class="td" style="width:22%;">' . $r['vps_name'] . '</div>
					<div class="td" style="width:35%;">' . str_replace(array('\n', '<semicolon>'), array('', ';'), $r['description']) . '</div>
					<div class="td" style="width:15%;">
						<a href="?action=boot&id=' . $r['vps_id'] . '"><img src="images/boot.gif" border="0" alt="Boot" title="Boot" align="absMiddle" /></a>
						<a href="?action=shutdown&id=' . $r['vps_id'] . '"><img src="images/shutdown.gif" border="0" alt="Shutdown" title="Shutdown" align="absMiddle" /></a>
						<a href="?action=reboot&id=' . $r['vps_id'] . '"><img src="images/reboot.gif" border="0" alt="Reboot" title="Reboot" align="absMiddle" /></a>
					</div>
					<div class="td" style="width:10%;""><a href="?action=edit&id=' . $r['vps_id'] . '"><img src="images/edit.gif" border="0" alt="Edit" title="Edit" align="absMiddle" /></a> <a href="?action=remove&id=' . $r['vps_id'] . '"><img src="images/trash.gif" border="0" alt="Remove" title="Remove" align="absMiddle" /></a></div>
					<div class="clear"></div>
				</div>';
			}
			$output .= '</div>';
		}
		else{
			$output .= '<p class="red">There are no VPS available. Click <a href="?action=add">here</a> to add VPS.</p>';
		}
		if($checkStatus) $output .= '<p class="green" style="float:right;">Server status checked on ' . date('d M, Y H:i:s') . '.</p>';
	break;
}

$output .= '<p>&nbsp;</p>
	</div>';

$title = 'SolusVMController';
$showSidebar = 1;
include(INCLUDES . 'header.php');
echo $output;
include(INCLUDES . 'footer.php');
?>