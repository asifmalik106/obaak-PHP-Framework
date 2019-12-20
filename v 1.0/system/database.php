<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'dolochfi_test');
	define('DB_USER', 'dolochfi_test');
	define('DB_PASS', 'asif.sadiq106');
/**
* 
*/
class Database
{
	private $conn;

	function __construct()
	{
		$this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		// Check connection
		if ($this->conn->connect_error) {
   			die("Connection failed: " . $this->conn->connect_error);
		} 
		echo "Connected successfully";
	}

	public function execute($sql)
	{
		return $this->conn->query($sql);
	}

	public function selectDB($db){
		mysqli_select_db($this->conn,$db);
	}
	
}