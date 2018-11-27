<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Client extends CI_Controller{
    public function login(){
        $this->load->view('login');
    }
    public function load_appointment_form(){
        $this->load->library('form_validation';
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model('client_model');
        }
        else{
            $this->load->login();
        }
    }
 }
?>