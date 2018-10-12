<?php
class saving_food extends CI_Model{
// Function To Fetch All food
function saving_food(){
$query = $this->db->get('food_items');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected food record
function show_food_id($data){
$this->db->select('*');
$this->db->from('food_items');
$this->db->where('SlNo', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected food
function update_food_id1($id,$data){
$this->db->where('SlNo', $SlNo);
$this->db->update('food_items', $data);
}
}
?>