<?php

include('lib/neotek/db/objectType.php');
//include('lib/neotek/db/connection.php');
include('lib/neotek/db/common.php');

class record
{
	var $recordData;
	var $tableName;
	var $recordFields;
	var $noFields;
	function record($tableN)
	{
		$this->tableName = $tableN;
		$objType = new objectType($tableN);
		$objType->getFields();
		$this->recordFields = $objType->recordFields;
		
	}
	function get_info($id)
	{
		$sql = "select * from $this->tableName where $field = $id";
		$info = get_result(sql);
		foreach($this->recordFields as $value)
			$this->recordData[$value] = $info[$value];
	}
	function update($id, $values)
	{
		$k = 0;
		$IDfield = $this->recordFields[0];
		foreach($this->recordFields as $value)
		{
			$sql = "update $this->tableName set $value = " . $values[$k] . " where $IDfield = $id";
			$this->recordData[$value] = $values[$k];
			$k = $k+1;
		}	
	}
	function insert($values)
	{
		$Ifields = "";
		foreach($this->recordFields as $value)
			$Ifields = $Ifields . (string)$value . ",";
		$fields = rtrim($Ifields,",");	
		
		$EqValue = "";
		foreach($values as $value)
			if(gettype($value) == "string")
				$EqValue = $EqValue . "\"".$value."\",";                   
			else
				$EqValue = $EqValue . $value.",";                       
		$EqValues = rtrim($EqValue, ",");		
		
		$sql = "insert into $this->tableName ($fields) values (".$EqValues.")";
		$insert = dbinsert($sql);
		
		$this->recordData = $values;
		
	}
	function delete($id)
	{
		$field = $this->recordFields[0];
		$sql = "delete from $this->tableName where $field = $id limit 1";
		$delete = dbdelete($sql);
	}	
	function updateValues(&$fieldsArr, $recData)
	{
		$k = 0;
		foreach($recData as $value)
		{	
			$fieldsArr[$k] = $value;
			$k = $k+1;
		}	
		
	}	
	function loadData($array)
	{
		//print($array);
		$this->recordData = $array;
	}	

}	
	
	

?>