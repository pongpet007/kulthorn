<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	
	public function index()
	{	
		$data = array();
		$this->load->view('2021_theme_1/index2',$data);	

	}
}
