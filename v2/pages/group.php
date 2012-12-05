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
		$title = ADD_GROUP;

		$status = '';
		$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';

		if(isset($_POST['name'])){
			if(empty($name)){
				$status .= '<p class="red">' . GROUP_NAME_CANNOT_BE_BLANK .'</p>';
			}
			if(strlen($name) > 50){
				$status .= '<p class="red">' . GROUP_NAME_CANNOT_EXCEED_50_CHARACTERS . '</p>';
			}

			if(empty($status)){
				$group = new csvHandler(TABLES . SVMC_CODE . 'group.tab', '|', 'group_id');

				$result = $group->select('group_name', $name);

				if($result) $status = '<p class="red">' . str_replace('%name%', $name, GROUP_NAME_ALREADY_EXISTED) . '</p>';
			}

			if(empty($status)){
				$group = new csvHandler(TABLES . SVMC_CODE . 'group.tab', '|', 'group_id');
				$group->add(array('group_id'=>$group->getLastId()+1, 'group_name'=>$name));
				$_SESSION['status'] = '<p class="green">' . str_replace('%name%', $name, GROUP_HAS_BEEN_ADDED) . '</p>';
				header('Location: ?q=group');
				exit;
			}
		}

		$output .= '<h1>' . ADD_GROUP . '</h1>
		<form action="?q=group&action=add" method="post">
			' . $status . '
			<label for="name">' . GROUP_NAME . '</label>
			<input type="text" name="name" id="name" value="' . $name . '" maxlength="50" size="64" class="text" /> <span class="red">*</span>
			<p>&nbsp;</p>
			<input class="button" type="submit" value="' . ADD_GROUP . '" /> <a href="?q=group">' . CANCEL . '</a>
		</form>';
	break;

	case 'edit':
		$title = EDIT_GROUP;

		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=group';

		$group = new csvHandler(TABLES . SVMC_CODE . 'group.tab', '|', 'group_id');
		$result = $group->select('group_id', $id);

		$output .= '<h1>' . EDIT_GROUP . '</h1>';

		if($result){
			$status = '';
			$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : $result[0]['group_name'];

			if(isset($_POST['name'])){
				if(empty($name)){
					$status .= '<p class="red">' . GROUP_NAME_CANNOT_BE_BLANK .'</p>';
				}
				if(strlen($name) > 50){
					$status .= '<p class="red">' . GROUP_NAME_CANNOT_EXCEED_50_CHARACTERS . '</p>';
				}

				if(empty($status)){
					$group = new csvHandler(TABLES . SVMC_CODE . 'group.tab', '|', 'group_id');

					$result = $group->select('group_name', $name);

					if($result && $result[0]['group_id'] != $id ) $status = '<p class="red">' . str_replace('%name%', $name, GROUP_NAME_ALREADY_EXISTED) . '</p>';
				}

				if(empty($status)){
					$group->update($id, array('group_name'=>$name));
					$_SESSION['status'] = '<p class="green">' . str_replace('%name%', $name, GROUP_HAS_BEEN_UPDATED) . '</p>';
					header('Location: ?q=group');
					exit;
				}
			}


			$output .= '<form action="?q=group&action=edit&id=' . $id . '" method="post">
				' . $status . '
				<label for="name">' . GROUP_NAME . '</label>
				<input type="text" name="name" id="name" value="' . $name . '" maxlength="50" size="64" class="text" /> <span class="red">*</span>
				<p>&nbsp;</p>
				<input class="button" type="submit" value="' . UPDATE . '" /> <a href="' . $referer . '">' . CANCEL . '</a>
			</form>';
		}
		else{
			$output .= '<p class="red">' . str_replace('%id%', htmlspecialchars($id), NO_GROUP_IS_FOUND_WITH_ID) . '</p>';
		}
	break;

	case 'remove':
		$title = REMOVE_GROUP;

		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=group';

		$group = new csvHandler(TABLES . SVMC_CODE . 'group.tab', '|', 'group_id');
		$result = $group->select('group_id', $id);

		$output .= '<h1>' . REMOVE_PROVIDER . '</h1>';

		if($result){
			if(isset($_POST['remove'])){
				$_SESSION['status'] = '<p class="green">' . str_replace('%name%', $result[0]['group_name'], GROUP_HAS_BEEN_REMOVED) . '</p>';

				$group->delete($id);
				$vps = new csvHandler(TABLES . SVMC_CODE . 'vps.tab', '|', 'vps_id');
				$result = $vps->select('group_id', $id);
				if($result) foreach($result as $r) $vps->update($r['vps_id'], array('group_id'=>0));

				header('Location: ?q=group');
				exit;
			}

			$output .= '<form action="?q=group&action=remove&id=' . $id . '" method="post">
				<input type="hidden" name="remove" />
				' . str_replace('%name%', $result[0]['group_name'], CONFIRM_TO_REMOVE_GROUP) . '
				<p>&nbsp;</p>
				<input class="button" type="submit" value="' . REMOVE . '" /> <a href="' . $referer . '">' . CANCEL . '</a>
			</form>';
		}
		else{
			$output .= '<p class="red">' . str_replace('%id%', htmlspecialchars($id), NO_GROUP_IS_FOUND_WITH_ID) . '</p>';
		}
	break;

	default:
		$title = GROUP_LIST;

		$output .= '<h1>' . GROUP_LIST . '</h1>';

		if(isset($_SESSION['status'])){
			$output .= $_SESSION['status'];
			unset($_SESSION['status']);
		}

		$group = new csvHandler(TABLES . SVMC_CODE . 'group.tab', '|', 'group_id');

		$result = $group->select();

		if($result){
			$vps = new csvHandler(TABLES . SVMC_CODE . 'vps.tab', '|', 'vps_id');

			$index = 0;
			foreach($result as $r){
				$amount = $vps->select('group_id', $r['group_id']);
				$result[$index]['total'] = count($amount);
				$index++;
			}

			$linkGroupName = '<a href="?q=group&sort=name" class="sorting">' . GROUP_NAME . '</a>';
			$linkTotal = '<a href="?q=group&sort=total" class="sorting">' . TOTAL_VPS . '</a>';

			$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

			switch($sort){
				case 'name-desc':
					$result = $group->sort($result, 'group_name', 'desc');
					$linkGroupName = '<a href="?q=group&sort=name" class="sorting desc">' . GROUP_NAME . '</a>';
				break;

				case 'total':
					$result = $group->sort($result, 'total');
					$linkTotal = '<a href="?q=group&sort=total-desc" class="sorting asc">' . TOTAL_VPS . '</a>';
				break;

				case 'total-desc':
					$result = $group->sort($result, 'total', 'desc');
					$linkTotal = '<a href="?q=group&sort=total" class="sorting desc">' . TOTAL_VPS . '</a>';
				break;

				default:
					$result = $group->sort($result, 'group_name');
					$linkGroupName = '<a href="?q=group&sort=name-desc" class="sorting asc">' . GROUP_NAME . '</a>';
				break;
			}

			$output .= '<div class="table">
				<div class="th">
					<div class="td" style="width:54%;">' . $linkGroupName . '</div>
					<div class="td" style="width:28%;">' . $linkTotal . '</div>
					<div class="td" style="width:8%;">&nbsp;</div>
					<div class="clear"></div>
				</div>';

			foreach($result as $r){
				$output .= '<div class="tr">
					<div class="td" style="width:58%;">' . $r['group_name'] . '</div>
					<div class="td" style="width:28%;">' . ($r['total']>0 ? '<a href="?q=vps&grp=' . $r['group_id'] . '">' . $r['total'] . '</a>' : $r['total']) . '</div>
					<div class="td" style="width:8%;""><a href="?q=group&action=edit&id=' . $r['group_id'] . '"><img src="images/icons/page_white_edit.png" border="0" alt="' . EDIT . '" title="' . EDIT . '" align="absMiddle" /></a> <a href="?q=group&action=remove&id=' . $r['group_id'] . '"><img src="images/icons/bin.png" border="0" alt="' . REMOVE . '" title="' . REMOVE . '" align="absMiddle" /></a></div>
					<div class="clear"></div>
				</div>';
			}
			$output .= '</div>';
		}
		else{
			$output .= '<p class="red">' . str_replace('%link%', '?q=group&action=add', YOUR_GROUP_LIST_IS_EMPTY) . '</p>';
		}
	break;
}

$output .= '<p>&nbsp;</p>
	</div>';

$showSidebar = 1;
include(INCLUDES . 'header.php');
echo $output;
include(INCLUDES . 'footer.php');
?>