<?php

include('lib/neotek/db/record.php');

class view
{
	var $tableName;
	var $recordsArray;
	var $noRecords;
	function view($tableN)
	{
		$this->tableName = $tableN;
	}	
	function search($query)
	{
		$sql = "select * from " . $this->tableName . " where " . $query;
		$infoo = get_results($sql);
		$k = 0;
		foreach ($infoo as $info)
		{
			$this->recordsArray[$k] = new record($this->tableName);
			$this->recordsArray[$k]->loadData($info);
			$k = $k+1;
		}
		$this->noRecords = $k;
	}	
	function browse()
	{
		$sql = "select * from " . $this->tableName . " order by id ASC";
		$infoo = get_results($sql);
		$k = 0;
		foreach ($infoo as $info) {
			$this->recordsArray[$k] = new record($this->tableName);
			//print($this->tableName . "->browse ");
			$this->recordsArray[$k]->loadData($info);
			//var_dump($this->recordsArray[$k]->recordData);
			$k = $k+1;
		}
		$this->noRecords = $k;
	}	
	function updateValues(&$fieldsArr, $recData)
	{
		foreach($fieldsArr as $key=>$value)
			$fieldsArr[$key] = $recData[$key];
	}	

}

?>