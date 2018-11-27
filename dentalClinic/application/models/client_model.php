<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class client_model extends CI_Model{
        public function can_login($username,$password){
            $this->db->select("*");
            $this->db->from("patient");
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $result=$this->db->get();
            if($result->num_rows()>0){
                $db_password=$result->row(0)->password;
                $id=$result->row(0)->pid;
                $arr=array($id);
                if(strcmp($db_password,$password)==0){
                    return $arr;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
            
            
            

        }
    } 
?>