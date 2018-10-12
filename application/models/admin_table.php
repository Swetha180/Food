<?php

class admin_table extends CI_Model
{
    public function add_food($data)
    {    
       $this->load->database();
	   
	   $count=$this->db->insert('food_items',$data);
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