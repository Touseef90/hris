<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Login
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('front_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function time_in()
	{
		$data['emp'] = $this->front_model->find_employee($this->input->post('password'));

		$value = ['date'=>date('Y-m-d'), 'day'=>date('l'), 'time_in'=>date('h:i'), 'time_out'=>date('h:i'), 'remarks'=>'None', 'empid'=>$data['emp']['id']];

		if ($this->front_model->time_in($value)) {
			redirect('login');
		} else {
			echo "There was an error";
		}
	}
}