<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Logout
*/
class Logout extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('front_model');
	}

	public function index()
	{
		$this->load->view('logout');
	}
}