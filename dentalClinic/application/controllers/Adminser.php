<?php

class Adminser extends CI_Controller
{


	public function manage_service()
	{
		$this->load->model("admin_model");
		$search = $this->input->post('service_name');
		$data['serData'] = $this->admin_model->search_employee($search);
		$this->load->view('manageServices', $data);
	}

	public function add_service()
	{
		$this->load->model("admin_model");
		$data = array(
			'sid' => $this->input->post('id'),
			'name' => $this->input->post('sname'),
			'discription' => $this->input->post('des'),
			'process_time' => $this->input->post('pt'),
			'price' => $this->input->post('pri'),
			'url' => $this->input->post('ima'),

		);
		$this->admin_model->add_service($data);
		redirect('index.php/adminser/manage_service');

	}

	public function search_service()
	{
		$this->load->model("admin_model");
		$search = $this->input->post('service_name');
		$data['serData'] = $this->admin_model->search_service($search);
		$this->load->view('manageServices', $data);
	}

	public function delete_service()
	{
		$this->load->model("admin_model");
		$id = $this->input->get('sid');
		$this->admin_model->delete_service($id);
		redirect('index.php/adminser/manage_service');
	}

	public function edit_service()
	{


	}
}



