<?php 

class Prices extends CI_Controller {
    public function allservices() {
		$data['service'] = $this->project_model->get_service();
		$data['main_view'] = "service/index";
		$this->load->view('service_view', $data);
    }
    public function price()
	{
		$this->load->view('prices_view');
    }
    public function manage_service(){
		$this->load->model("service_model");
		$search=$this->input->post('doc_name');
		$data['docData']=$this->admin_model->search_service($search);
		$this->load->view('manageservice',$data);
	}
	public function add_service(){
		$this->load->model("service_model");
		$data = array(
			'sid' => $this->input->post('sid'),
			'discription' => $this->input->post('discription'),
			'process_time' => $this->input->post('process_time'),
			'price' => $this->input->post('price'),
			'url' => $this->input->post('url'),
			
		);
		$this->admin_model->add_service($data);
		redirect('index.php/admin/manage_service');
	}
	public function search_service(){
		$this->load->model("service_model");
		$search=$this->input->post('doc_name');
		$data['docData']=$this->admin_model->search_service($search);
		$this->load->view('manageservice',$data);
	}
	public function delete_service(){
		$this->load->model("service_model");
		$id=$this->input->get('id');
		$this->admin_model->delete_service($id);
		redirect('index.php/admin/manage_service');
	}
}
?>