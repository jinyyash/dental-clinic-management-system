<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Admin_model extends CI_Model{
	public function add_doctor($data){
		$this->load->database("");
		$this->db->insert('doctor', $data);
	}
	public function search_doctor($search){
		$this->load->database("");
		$this->db->select("*");
		$this->db->from("doctor");
		$this->db->like('name',$search);
		$result = $this->db->get();
		return $result->result();
	}
	public function delete_doctor($id){
		$this->load->database("");
		$this->db->where('did', $id);
  		$this->db->delete('doctor');
	}
	public function add_employee($data){
		$this->load->database("");
		$this->db->insert('employee', $data);
	}
	public function search_employee($search){
		$this->load->database("");
		$this->db->select("*");
		$this->db->from("employee");
		$this->db->like('name',$search);
		$result = $this->db->get();
		return $result->result();
	}
	public function delete_employee($id){
		$this->load->database("");
		$this->db->where('eid', $id);
		$this->db->delete('employee');
	}

	public function add_service($data){
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
	public function delete_service($id){
		$this->load->database("");
		$this->db->where('sid', $id);
		$this->db->delete('service');
	}


}
