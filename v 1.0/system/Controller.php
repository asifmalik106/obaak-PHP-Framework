<?php
include 'system/Load.php';
include 'system/Main.php';

class Controller
{
	protected $load;
	function __construct(){
		$this->load = new Load();
	}
	
}