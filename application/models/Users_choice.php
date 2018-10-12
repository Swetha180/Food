<?php

class Users_choice extends CI_Model
{
    public function add_foods($data)
    {    
       $this->load->database();
	   
	   $count=$this->db->insert('foodtable',$data);
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