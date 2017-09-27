<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Adminlogin
*/
class Adminlogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('front_model');
	}

	public function index()
	{
		$this->load->view('adminlogin');
	}
}