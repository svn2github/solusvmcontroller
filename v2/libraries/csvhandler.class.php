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

class csvHandler{
	private $separator;
	private $data;
	private $primaryKey;
	private $header;
	private $itemsList;
	private $totalColumn;
	private $totalRow;

	public function __construct($data, $separator, $primaryKey){
		$this->data = $data;
		$this->primaryKey = $primaryKey;
		$this->separator = $separator;

		$this->readCSV();
	}

	public function __destruct(){}

	private function readCSV(){
		$this->totalRow = 0;
		$this->itemsList = array();
		$item = array();

		$fp = fopen($this->data, 'r');

		if($fp){
			$this->header = fgetcsv($fp, 2048, $this->separator);
			$this->totalColumn = count($this->header);

			while($buffer = fgetcsv($fp, 2048, $this->separator)){
				for($i=0; $i<$this->totalColumn; $i++) $item[$this->header[$i]] = $buffer[$i];
				array_push($this->itemsList, $item);
				$this->totalRow++;
			}
			fclose($fp);
		}
	}

	private function writeCSV(){
		reset($this->itemsList);

		$output = implode($this->separator, $this->header) . "\n";

		foreach($this->itemsList as $key=>$value){
			for($i=0; $i<$this->totalColumn; $i++){
				$writeKey = $this->header[$i];
				$item[$writeKey] = $value[$writeKey];
			}
			$output .= implode($this->separator, $item) . "\n";
		}

		$fp = fopen($this->data, 'w');

		if($fp){
			flock($fp, 2);
			fputs($fp, $output);
			flock($fp, 3);
			fclose($fp);

			return true;
		}

		return false;
	}

	public function select($column='*', $needle='*'){
		if($needle=='*') return $this->itemsList;

		$result = array();

		if($column=='*'){
			foreach($this->itemsList as $key=>$value){
				if(stristr(implode('', $value), $needle)) array_push($result, $value);
			}
		}
		else{
			foreach($this->itemsList as $key=>$value){
				if($value[$column] == $needle) array_push($result, $value);
			}
		}
		return $result;
	}

	public function sort($array, $index, $order='asc', $natSort=FALSE, $caseSensitive=FALSE){
		if(is_array($array) && count($array)>0){
			foreach(array_keys($array) as $key)
				$temp[$key]=$array[$key][$index];

			if(!$natSort)
				($order=='asc')? asort($temp) : arsort($temp);
			else{
				($caseSensitive)? natsort($temp) : natcasesort($temp);
				if($order!='asc')
					$temp=array_reverse($temp, TRUE);
			}
			foreach(array_keys($temp) as $key)
				(is_numeric($key))? $sorted[]=$array[$key] : $sorted[$key]=$array[$key];

			return $sorted;
		}
		return $array;
	}

	public function add($data){
		$newItem = array();

		foreach($this->header as $key=>$value){
			$newItem[$value] = isset($data[$value]) ? $data[$value] : '';
		}

		array_push($this->itemsList, $newItem);
		$this->writeCSV();
	}

	public function update($key, $data){
		for($i=0; $i<count($this->itemsList); $i++){
			if($this->itemsList[$i][$this->primaryKey]==$key){
				foreach($this->header as $key=>$value){
					if(isset($data[$value])) $this->itemsList[$i][$value] = $data[$value];
				}
			}
		}

		return $this->writeCSV();
	}

	public function delete($deleteKey){
		$tmp = array();

		foreach($this->itemsList as $key=>$value){
			if($value[$this->primaryKey] != $deleteKey) array_push($tmp, $value);
		}

		$this->itemsList = $tmp;

		return $this->writeCSV();
	}

	public function getLastId(){
		if(empty($this->itemsList)) return 0;

		sort($this->itemsList);
		return $this->itemsList[count($this->itemsList)-1][$this->primaryKey];
	}
}
?>
