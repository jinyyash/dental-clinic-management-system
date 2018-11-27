<?php 



class Service extends CI_Controller {
    public function allservices() {
		$data['service'] = $this->project_model->get_service();
		$data['main_view'] = "service/index";

		$this->load->view('service_view', $data);
    }
    public function services()
	{
		$this->load->view('service_view');
    }
    public function manage_service(){
		$this->load->model("admin_model");
		$search=$this->input->post('doc_name');
		$data['docData']=$this->admin_model->search_service($search);
		$this->load->view('manageservice',$data);
	}
	public function add_service(){
		$this->load->model("admin_model");
		$data = array(
			'did' => $this->input->post('id'),
			'name' => $this->input->post('dname'),
			'address' => $this->input->post('address'),
			'speciality' => $this->input->post('spec'),
			'qualification' => $this->input->post('qf'),
			'contact_no' => $this->input->post('cno')
		);
		$this->admin_model->add_service($data);
		redirect('index.php/admin/manage_service');
	}
	public function search_service(){
		$this->load->model("admin_model");
		$search=$this->input->post('doc_name');
		$data['docData']=$this->admin_model->search_service($search);
		$this->load->view('manageservice',$data);
	}
	public function delete_service(){
		$this->load->model("admin_model");
		$id=$this->input->get('id');
		$this->admin_model->delete_service($id);
		redirect('index.php/admin/manage_service');
	}
}
?>