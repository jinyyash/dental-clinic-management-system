<?php 


class Project_model extends CI_Model {
    public function add_dservice($data){
		$this->load->database("");
		$this->db->insert('service', $data);
	}
	public function search_service($search){
		$this->load->database("");
		$this->db->select("*");
		$this->db->from("service");
		$this->db->like('name',$search);
		$result = $this->db->get();
		return $result->result();
	}
	public function delete_doctor($id){
		$this->load->database("");
		$this->db->where('sid', $id);
  		$this->db->delete('service');
	}


	public function get_service_id($sid) {

		$this->db->where('sid', $sid);

		$get_data  = $this->db->get('service');

		return $get_data->row();


	}

}
public function get_service() {

    $query = $this->db->get('service');

    return $query->result();




}

?>