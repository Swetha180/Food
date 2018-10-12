<?php

class Users_model extends CI_Model
{
    public function add_users($data)
    {    
       $this->load->database();
	   
	   $count=$this->db->insert('user_table',$data);
	   if($count>0)
	   {
	   return true;
	   }
	   else
	   {
	   return false;
	   }
    }   
}
?>