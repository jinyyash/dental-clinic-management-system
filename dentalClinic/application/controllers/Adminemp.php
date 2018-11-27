<?php

class Adminemp extends CI_Controller
{
	public function manage_employee()
	{
		$this->load->model("admin_model");
		$search = $this->input->post('emp_name');
		$data['empData'] = $this->admin_model->search_employee($search);
		$this->load->view('manageEmployee', $data);
	}

	public function add_employee()
	{
		$this->load->model("admin_model");
		$data = array(
			'eid' => $this->input->post('id'),
			'name' => $this->input->post('ename'),
			'address' => $this->input->post('address'),
			'contact_num' => $this->input->post('cn'),
			'position' => $this->input->post('ps')

		);
		$this->admin_model->add_employee($data);
		redirect('index.php/adminemp/manage_employee');

	}
	public function search_employee()
	{
		$this->load->model("admin_model");
		$search = $this->input->post('emp_name');
		$data['empData'] = $this->admin_model->search_employee($search);
		$this->load->view('manageEmployee', $data);
	}
	public function delete_employee()
	{
		$this->load->model("admin_model");
		$id = $this->input->get('id');
		$this->admin_model->delete_employee($id);
		redirect('index.php/adminemp/manage_employee');
	}
	public function edit_employee()
	{


	}



}


