<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Client extends CI_Controller{
    public function login(){
        $this->load->view('login');
    }
    public function appointment(){
        $this->load->view('appointment');
    }
    public function load_appointment_form(){
             
            $username=$this->input->post('username');
            $password=$this->input->post('password');
             
            $this->load->model('client_model');
            $login=$this->client_model->can_login($username,$password);
            if($login){
                $user_data=array(
                    'user_id'=>login[0],
                    'username'=>$username,
                    'logged_in'=>true

                );
                $this->session->set_userdata($user_data);
                redirect('/client/appointment');

                
            }
            else{
                redirect('/client/login');
            }
            
    }
 }
?>