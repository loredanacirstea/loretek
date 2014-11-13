<?php


class objectType
{
	var $tableName;
	var $recordFields;
	var $noFields;
	function objectType($tableN)
	{
		$this->tableName = $tableN;
	}
	function getFields()
	{
		if($this->tableName == "neo_intltxt")
		{
			$this->recordFields[0] =  "id";
			$this->recordFields[1] =  "no";
			$this->recordFields[2] = "lang";
			$this->recordFields[3] = "title";
			$this->recordFields[4] = "txt";
			$this->noFields = 5;
		}
                if($this->tableName == "neo_sballoon")
		{
			$this->recordFields[0] = "id";
			$this->recordFields[1] = "ordering";
			$this->recordFields[2] = "frame_id";
			$this->recordFields[3] = "type";
			$this->recordFields[4] = "text_no";
			$this->recordFields[5] = "srcX";
			$this->recordFields[6] = "srcY";
			$this->recordFields[7] = "posX";
			$this->recordFields[8] = "posY";
			$this->noFields = 9;
		}
		if($this->tableName == "neo_frame")
		{
			$this->recordFields[0] = "id";
			$this->recordFields[1] = "row";
			$this->recordFields[2] = "ordering";
			$this->recordFields[3] = "URL";
			$this->recordFields[4] = "cachloc";
			$this->recordFields[5] = "cachebal";
			$this->recordFields[6] = "text_no";
			$this->recordFields[7] = "cstrip_id";
			$this->noFields = 8;
		}
		if($this->tableName== "neo_cstrip")
		{
			$this->recordFields[0] = "id";
			$this->recordFields[1] = "text_no";
			$this->recordFields[2] = "rows";
			$this->recordFields[3] = "tags";
			$this->noFields = 4;
		}	
        }

}




?>