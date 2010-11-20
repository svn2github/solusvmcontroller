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

function getPageURL(){
	$s = empty($_SERVER['HTTPS']) ? '' : ($_SERVER['HTTPS'] == 'on') ? 's' : '';
	$protocol = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0, strpos(strtolower($_SERVER['SERVER_PROTOCOL']), '/')) . $s;
	$port = ($_SERVER['SERVER_PORT'] == '80') ? '' : (':' . $_SERVER['SERVER_PORT']);
	return $protocol . '://' . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

function isRewritable($path){
	if($path{strlen($path)-1} == DIRECTORY_SEPARATOR){
		return isRewritable($path . uniqid(mt_rand()) . '.tmp');
	}elseif(is_dir($path)){
		return isRewritable($path . DIRECTORY_SEPARATOR . uniqid(mt_rand()) . '.tmp');
	}

	$rm = file_exists($path);
	$f = @fopen($path, 'a');
	if($f === false) return false;
	fclose($f);

	if(!$rm) @unlink($path);
	return true;
}

// Get timestamp
function getTimestamp($timestamp='', $timeZone=0, $dst=0){
	$timestamp = ($timestamp) ? $timestamp : time() - date('Z');
	$h = ($timeZone < 0) ? $timeZone*-1 : $timeZone;
	if($dst) $h = ($timeZone < 0) ? $h-1 : $h+1;
	$ms = $h * 3600;

	return ($timeZone < 0) ? $timestamp-$ms : $timestamp+$ms;
}

// Calculate the duration between two timestamp
function duration($timeStart, $timeEnd, $level=1){
	$periods = array('second', 'minute', 'hour', 'day', 'week', 'month', 'year', 'decade');
	$lengths = array(1, 60, 3600, 86400, 604800, 2630880, 31570560, 315705600);

	$difference = ($timeEnd > $timeStart) ? ($timeEnd - $timeStart) : ($timeStart - $timeEnd);
	$level = ($level < 1) ? 1 : $level;

	$i = sizeof($lengths) - 1;
	$duration = '';

	while($i >= $level){
		if($difference > $lengths[$i-1]){
			$val = floor($difference / $lengths[$i-1]);
			$duration .= $val . ' ' . $periods[$i-1] . ($val > 1 ? 's ' : ' ');
			$difference -= ($val * $lengths[$i-1]);
		}
		$i--;
	}
	return ($duration == '') ? '-' : $duration;
}
?>