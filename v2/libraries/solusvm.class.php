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

final class SolusVM{
	private $ch ;
	private $protocol = 'http';
	private $host = '';
	private $port = '';
	private $key = '';
	private $hash = '';
	private $errors = array();

	public function __construct(){}

	public function __destruct(){}

	public function getErrors(){
		return implode("\n", $this->errors);
	}

	public function setHost($host){
		$host = gethostbyname($host);

		if(!preg_match('/^[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+$/', $host)){
			$this->errors[] = '"' . $host . '" is not a valid host.';
			return;
		}
		$this->host = $host;
		return true;
	}

	public function setPort($port){
		if(!preg_match('/^[0-9]+$/', $port)){
			$this->errors[] = '"' . $port . '" is not a valid port.';
			return;
		}
		$this->port = $port;
		return true;
	}

	public function setProtocol($protocol){
		if($protocol == 'https') $this->protocol = $protocol;
	}

	public function setKey($key){
		$this->key = $key;
	}

	public function setHash($hash){
		$this->hash = $hash;
	}

	public function reboot(){
		return $this->get('reboot');
	}

	public function boot(){
		return $this->get('boot');
	}

	public function shutdown(){
		return $this->get('shutdown');
	}

	public function getStatus(){
		return $this->get('status');
	}

	public function getInfo(){
		return $this->get('info');
	}

	private function get($action){
		if(empty($this->host)){
			$this->errors[] = 'No host specified.';
			return;
		}

		if(empty($this->key)){
			$this->errors[] = 'No key value is provided.';
			return;
		}

		if(empty($this->hash)){
			$this->errors[] = 'No hash value is provided.';
			return;
		}

		$url = $this->protocol . '://' . $this->host . (!empty($this->port) ? ':' . $this->port : '') . '/api/client/command.php?key=' . $this->key . '&hash=' . $this->hash . '&action=' . $action . '&ipaddr=true&hdd=true&mem=true&&bw=true';

		if(function_exists('curl_init')){
			$data = $this->curlGet($url);
		}
		elseif(function_exists('fsockopen')){
			$data = $this->socketGet($url);
		}
		elseif(ini_get('allow_url_fopen')){
			$data = $this->fileGet($url);
		}
		else{
			return;
		}

		if(preg_match_all('/<(.*?)>([^<]+)<\/\\1>/i', $data, $matches)){
			$result = array();

			foreach($matches[1] as $x => $y){
				$result[$y] = $matches[2][$x];
			}

			if(!isset($result['status'])) return;
			if($result['status'] != 'success') return;

			return $result;
		}
		return;
	}

	private function fileGet($url){
		$ctx = stream_context_create(array('http'=>array('timeout'=>5)));
		return file_get_contents($url, 0, $ctx);
	}

	private function socketGet($url){
		$url = parse_url($url);
		$port = 80;

		if($url['scheme'] == 'https'){
			$url['host'] = 'ssl://' . $url['host'];
			$port = 443;
		}

		if(isset($url['port'])) $port = $url['port'];

		$conn = fsockopen ($url['host'], $port, $errorNo, $errorStr, 5);
		if($conn){
			$buffer = '';

			fputs($conn, 'GET ' . $url['path'] . '?' . $url['query'] . ' HTTP/1.1' . "\r\n" . 'Host: ' . str_replace('ssl://', '', $url['host']) . "\r\n\r\n");

			while(!feof($conn)) $buffer .= fgets($conn, 1024);

			fclose($conn);

			return $buffer;
		}
		return;
	}

	private function curlGet($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$data = curl_exec($ch);
		curl_close($ch);

		return $data;
	}
}
?>