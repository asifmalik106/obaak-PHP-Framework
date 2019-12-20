<?php
include 'system/Controller.php';
class home extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data = array(
			'title'=> 'obaak'
			);
		$this->load->view('index',$data);
  }
}