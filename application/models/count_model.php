<?php
class count_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data(){
        $query=$this->db->query("SELECT st.*
                                 FROM food_items st 
                                 ORDER BY st.SlNo ASC");
        return $query->result_array();
    }


}