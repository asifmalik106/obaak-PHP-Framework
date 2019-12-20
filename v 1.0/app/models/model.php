<?php
include 'system/Model.php';
class model extends Model
{

	public function getData()
	{
		$sql 	= "SELECT * FROM info";
		return $this->db->execute($sql);
	}
}
