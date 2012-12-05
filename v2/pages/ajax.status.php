<?php
defined('INDEX') or die('Access is denied.');
if(!isset($_SESSION['user_id'])) die('<img src="images/icons/connect_unknown.png" border="0" width="16" height="16" alt="' . UNKNOWN . '" title="' . UNKNOWN . '" align="absMiddle" />');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$vps = new csvHandler(TABLES . SVMC_CODE . 'vps.tab', '|', 'vps_id');
$result = $vps->select('vps_id', $id);

if(!$result){
	$_SESSION['vps_' . $id] = '<img src="images/icons/connect_unknown.png" border="0" width="16" height="16" alt="' . UNKNOWN . '" title="' . UNKNOWN . '" align="absMiddle" />';
	die($_SESSION['vps_' . $id]);
}

$solus = new SolusVM;
$solus->setKey($result[0]['key']);
$solus->setHash($result[0]['hash']);
$solus->setProtocol($result[0]['protocol']);
$solus->setHost($result[0]['host']);
if($result[0]['port']) $solus->setPort($result[0]['port']);
$data = $solus->getStatus();

if(!$data){
	$_SESSION['vps_' . $id] = '<img src="images/icons/connect_error.png" border="0" width="16" height="16" alt="' . ERROR . '" title="' . ERROR . '" align="absMiddle" />';
	die($_SESSION['vps_' . $id]);
}

$_SESSION['vps_' . $id] = ($data['statusmsg'] == 'online') ? '<img src="images/icons/connect_online.png" border="0" width="16" height="16" alt="' . ONLINE . '" title="' . ONLINE . '" align="absMiddle" />' : '<img src="images/icons/connect_offline.png" border="0" width="16" height="16" alt="' . OFFLINE . '" title="' . OFFLINE . '" align="absMiddle" />';

echo $_SESSION['vps_' . $id];
$_SESSION['last_check'] = time();
?>