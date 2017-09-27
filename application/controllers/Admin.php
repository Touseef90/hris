<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Admin
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('front_model');
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function all_employees()
	{
		$data['employees'] = $this->front_model->employees();

		$this->load->view('all_employees_view', $data);
	}

	public function add_employee()
	{
		$this->load->view('add_employee_view');
	}

	public function add_new_employee()
	{
		if ($this->front_model->add_new_employee($this->input->post())) {
			redirect('admin/all_employees');
		} else {
			echo "Unable to add an employee";
		}
	}

	public function edit_employee($id)
	{
		$data['emp'] = $this->front_model->single_employee($id);

		$this->load->view('edit_employee_view', $data);
	}

	public function update_employee($id)
	{
		if ($this->front_model->update_employee($id, $this->input->post())) {
			redirect('admin/all_employees');
		} else {
			echo "Unable to update an employee";
		}
	}

	public function delete_employee($id)
	{
		if ($this->front_model->delete_employee($id)) {
			redirect('admin/all_employees');
		} else {
			echo "Unable to delete an employee";
		}
	}

	public function all_students()
	{
		$this->load->view('all_students_view');
	}

	public function add_student()
	{
		$this->load->view('add_student_view');
	}

}