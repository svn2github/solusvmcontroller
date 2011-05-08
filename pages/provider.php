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
		$title = ADD_PROVIDER;

		$status = '';
		$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
		$website = isset($_POST['website']) ? $_POST['website'] : '';
		$supportPage = isset($_POST['supportPage']) ? $_POST['supportPage'] : '';

		if(isset($_POST['name'])){
			if(empty($name)){
				$status .= '<p class="red">' . PROVIDER_NAME_CANNOT_BE_BLANK .'</p>';
			}
			if(strlen($name) > 50){
				$status .= '<p class="red">' . PROVIDER_NAME_CANNOT_EXCEED_50_CHARACTERS . '</p>';
			}
			if(!empty($website) && !preg_match('/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $website)){
				$status .= '<p class="red">' . PROVIDER_WEBSITE_MUST_BE_A_VALID_URL . '</p>';
			}
			if(!empty($supportPage) && !preg_match('/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $supportPage)){
				$status .= '<p class="red">' . PROVIDER_SUPPORT_PAGE_MUST_BE_A_VALID_URL . '</p>';
			}

			if(empty($status)){
				$provider = new csvHandler(TABLES . SVMC_CODE . 'provider.tab', '|', 'provider_id');

				$result = $provider->select('provider_name', $name);

				if($result) $status = '<p class="red">' . str_replace('%name%', $name, PROVIDER_NAME_ALREADY_EXISTED) . '</p>';
			}

			if(empty($status)){
				$provider = new csvHandler(TABLES . SVMC_CODE . 'provider.tab', '|', 'provider_id');
				$provider->add(array('provider_id'=>$provider->getLastId()+1, 'provider_name'=>$name, 'website_url'=>$website, 'support_url'=>$supportPage));
				$_SESSION['status'] = '<p class="green">' . str_replace('%name%', $name, PROVIDER_HAS_BEEN_ADDED) . '</p>';
				header('Location: ?q=provider');
				exit;
			}
		}

		$output .= '<h1>' . ADD_PROVIDER . '</h1>
		<form action="?q=provider&action=add" method="post">
			' . $status . '
			<label for="name">' . PROVIDER_NAME . '</label>
			<input type="text" name="name" id="name" value="' . $name . '" maxlength="50" size="64" class="text" /> <span class="red">*</span>
			<label for="website">' . WEBSITE . '</label>
			<input type="text" name="website" id="website" value="' . $website . '" maxlength="255" size="64" class="text" />
			<label for="supportPage">' . SUPPORT_PAGE . '</label>
			<input type="text" name="supportPage" id="supportPage" value="' . $supportPage . '" maxlength="255" size="64" class="text" />
			<p>&nbsp;</p>
			<input class="button" type="submit" value="' . ADD_PROVIDER . '" /> <a href="?q=provider">' . CANCEL . '</a>
		</form>';
	break;

	case 'edit':
		$title = EDIT_PROVIDER;

		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=provider';

		$provider = new csvHandler(TABLES . SVMC_CODE . 'provider.tab', '|', 'provider_id');
		$result = $provider->select('provider_id', $id);

		$output .= '<h1>' . EDIT_PROVIDER . '</h1>';

		if($result){
			$status = '';
			$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : $result[0]['provider_name'];
			$website = isset($_POST['website']) ? $_POST['website'] : $result[0]['website_url'];
			$supportPage = isset($_POST['supportPage']) ? $_POST['supportPage'] : $result[0]['support_url'];

			if(isset($_POST['name'])){
				if(empty($name)){
					$status .= '<p class="red">' . PROVIDER_NAME_CANNOT_BE_BLANK .'</p>';
				}
				if(strlen($name) > 50){
					$status .= '<p class="red">' . PROVIDER_NAME_CANNOT_EXCEED_50_CHARACTERS . '</p>';
				}
				if(!empty($website) && !preg_match('/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $website)){
					$status .= '<p class="red">' . PROVIDER_WEBSITE_MUST_BE_A_VALID_URL . '</p>';
				}
				if(!empty($supportPage) && !preg_match('/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $supportPage)){
					$status .= '<p class="red">' . PROVIDER_SUPPORT_PAGE_MUST_BE_A_VALID_URL . '</p>';
				}

				if(empty($status)){
					$provider = new csvHandler(TABLES . SVMC_CODE . 'provider.tab', '|', 'provider_id');

					$result = $provider->select('provider_name', $name);

					if($result && $result[0]['provider_id'] != $id) $status = '<p class="red">' . str_replace('%name%', $name, PROVIDER_NAME_ALREADY_EXISTED) . '</p>';
				}

				if(empty($status)){
					$provider->update($id, array('provider_name'=>$name, 'website_url'=>$website, 'support_url'=>$supportPage));
					$_SESSION['status'] = '<p class="green">' . str_replace('%name%', $name, PROVIDER_HAS_BEEN_UPDATED) . '</p>';
					header('Location: ?q=provider');
					exit;
				}
			}


			$output .= '<form action="?q=provider&action=edit&id=' . $id . '" method="post">
				' . $status . '
				<label for="name">' . PROVIDER_NAME . '</label>
				<input type="text" name="name" id="name" value="' . $name . '" maxlength="50" size="64" class="text" /> <span class="red">*</span>
				<label for="website">' . WEBSITE . '</label>
				<input type="text" name="website" id="website" value="' . $website . '" maxlength="255" size="64" class="text" />
				<label for="supportPage">' . SUPPORT_PAGE . '</label>
				<input type="text" name="supportPage" id="supportPage" value="' . $supportPage . '" maxlength="255" size="64" class="text" />
				<p>&nbsp;</p>
				<input class="button" type="submit" value="' . UPDATE . '" /> <a href="' . $referer . '">' . CANCEL . '</a>
			</form>';
		}
		else{
			$output .= '<p class="red">' . str_replace('%id%', htmlspecialchars($id), NO_PROVIDER_IS_FOUND_WITH_ID) . '</p>';
		}
	break;

	case 'remove':
		$title = REMOVE_PROVIDER;

		$referer = isset($_GET['ref']) ? $_GET['ref'] : '?q=provider';

		$provider = new csvHandler(TABLES . SVMC_CODE . 'provider.tab', '|', 'provider_id');
		$result = $provider->select('provider_id', $id);

		$output .= '<h1>' . REMOVE_PROVIDER . '</h1>';

		if($result){
			if(isset($_POST['remove'])){
				$_SESSION['status'] = '<p class="green">' . str_replace('%name%', $result[0]['provider_name'], PROVIDER_HAS_BEEN_REMOVED) . '</p>';

				$provider->delete($id);
				$vps = new csvHandler(TABLES . SVMC_CODE . 'vps.tab', '|', 'vps_id');
				$result = $vps->select('provider_id', $id);
				if($result) foreach($result as $r) $vps->update($r['vps_id'], array('provider_id'=>0));

				header('Location: ?q=provider');
				exit;
			}

			$output .= '<form action="?q=provider&action=remove&id=' . $id . '" method="post">
				<input type="hidden" name="remove" />
				' . str_replace('%name%', $result[0]['provider_name'], CONFIRM_TO_REMOVE_PROVIDER) . '
				<p>&nbsp;</p>
				<input class="button" type="submit" value="' . REMOVE . '" /> <a href="' . $referer . '">' . CANCEL . '</a>
			</form>';
		}
		else{
			$output .= '<p class="red">' . str_replace('%id%', htmlspecialchars($id), NO_PROVIDER_IS_FOUND_WITH_ID) . '</p>';
		}
	break;

	default:
		$title = PROVIDER_LIST;

		$output .= '<h1>' . PROVIDER_LIST . '</h1>';

		if(isset($_SESSION['status'])){
			$output .= $_SESSION['status'];
			unset($_SESSION['status']);
		}

		$provider = new csvHandler(TABLES . SVMC_CODE . 'provider.tab', '|', 'provider_id');

		$result = $provider->select();

		if($result){
			$vps = new csvHandler(TABLES . SVMC_CODE . 'vps.tab', '|', 'vps_id');

			$index = 0;
			foreach($result as $r){
				$amount = $vps->select('provider_id', $r['provider_id']);
				$result[$index]['total'] = count($amount);
				$index++;
			}

			$linkProviderName = '<a href="?q=provider&sort=name" class="sorting">' . GROUP_NAME . '</a>';
			$linkTotal = '<a href="?q=provider&sort=total" class="sorting">' . TOTAL_VPS . '</a>';

			$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

			switch($sort){
				case 'name-desc':
					$result = $provider->sort($result, 'provider_name', 'desc');
					$linkProviderName = '<a href="?q=provider&sort=name" class="sorting desc">' . PROVIDER_NAME . '</a>';
				break;

				case 'total':
					$result = $provider->sort($result, 'total');
					$linkTotal = '<a href="?q=provider&sort=total-desc" class="sorting asc">' . VPS . '</a>';
				break;

				case 'total-desc':
					$result = $provider->sort($result, 'total', 'desc');
					$linkTotal = '<a href="?q=provider&sort=total" class="sorting desc">' . VPS . '</a>';
				break;

				default:
					$result = $provider->sort($result, 'provider_name');
					$linkProviderName = '<a href="?q=provider&sort=name-desc" class="sorting asc">' . PROVIDER_NAME . '</a>';
				break;
			}

			$output .= '<div class="table">
				<div class="th">
					<div class="td" style="width:20%;">' . $linkProviderName . '</div>
					<div class="td" style="width:25%;">' . WEBSITE . '</div>
					<div class="td" style="width:28%;">' . SUPPORT_PAGE . '</div>
					<div class="td" style="width:6%;">' . $linkTotal . '</div>
					<div class="td" style="width:8%;">&nbsp;</div>
					<div class="clear"></div>
				</div>';

			foreach($result as $r){
				$output .= '<div class="tr">
					<div class="td" style="width:20%;">' . $r['provider_name'] . '</div>
					<div class="td" style="width:25%;"><a href="' . $r['website_url'] . '" target="_blank">' . $r['website_url'] . '</a></div>
					<div class="td" style="width:30%;"><a href="' . $r['support_url'] . '" target="_blank">' . $r['support_url'] . '</a></div>
					<div class="td" style="width:6%;">' . ($r['total'] > 0 ? '<a href="?q=vps&pvdr=' . $r['provider_id'] . '">' . $r['total'] . '</a>' : $r['total']) . '</div>
					<div class="td" style="width:8%;""><a href="?q=provider&action=edit&id=' . $r['provider_id'] . '"><img src="images/icons/page_white_edit.png" border="0" alt="' . EDIT . '" title="' . EDIT . '" align="absMiddle" /></a> <a href="?q=provider&action=remove&id=' . $r['provider_id'] . '"><img src="images/icons/bin.png" border="0" alt="' . REMOVE . '" title="' . REMOVE . '" align="absMiddle" /></a></div>
					<div class="clear"></div>
				</div>';
			}
			$output .= '</div>';
		}
		else{
			$output .= '<p class="red">' . str_replace('%link%', '?q=provider&action=add', YOUR_PROVIDER_LIST_IS_EMPTY) . '</p>';
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