<?php

class Admin extends CI_Controller {
	public function manage_doctor(){
		$this->load->model("admin_model");
		$search=$this->input->post('doc_name');
		$data['docData']=$this->admin_model->search_doctor($search);
		$this->load->view('manageDoctor',$data);
	}
	public function all_doctors() {
		$this->load->model("admin_model");
		$data['docData']=$this->admin_model->get_doctor();
		$this->load->view('doctor_view', $data);
    }
	public function add_doctor(){
		$this->load->model("admin_model");
		$data = array(
			'did' => $this->input->post('id'),
			'name' => $this->input->post('dname'),
			'address' => $this->input->post('address'),
			'speciality' => $this->input->post('spec'),
			'qualification' => $this->input->post('qf'),
			'contact_no' => $this->input->post('cno')
		);
		$this->admin_model->add_doctor($data);
		redirect('index.php/admin/manage_doctor');
	}
	public function search_doctor(){
		$this->load->model("admin_model");
		$search=$this->input->post('doc_name');
		$data['docData']=$this->admin_model->search_doctor($search);
		$this->load->view('manageDoctor',$data);
	}
	public function delete_doctor(){
		$this->load->model("admin_model");
		$id=$this->input->get('id');
		$this->admin_model->delete_doctor($id);
		redirect('index.php/admin/manage_doctor');
	}
	public function edit_doctor(){

	}
	public function manage_patient(){
		$this->load->model("admin_model");
		$search=$this->input->post('pid');
		$data['pData']=$this->admin_model->search_patient1($search);
		$this->load->view('managePatient',$data);
	}

	public function add_patient(){
		$this->load->model("admin_model");
		$data = array(
			'pid' => $this->input->post('pid'),
			'name' => $this->input->post('pname'),
			'gender' => $this->input->post('gender'),
			'address' => $this->input->post('paddress'),
			'birthday' => $this->input->post('dob'),
			'contact_num' => $this->input->post('cno'),
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pswrd')
		);
		$this->admin_model->add_patient($data);
		redirect('index.php/admin/manage_patient');
	}
	public function search_patient(){
		$this->load->model("admin_model");
		$search=$this->input->post('pid');
		$data['pData']=$this->admin_model->search_patient($search);
		$this->load->view('managePatient',$data);
	}
}