
    <?php  
       class display_count extends CI_Model  
       {  
          function __construct()  
          {  
             // Call the Model constructor  
             parent::__construct();  
          }  
          //we will use the display_food function  
          public function display_count()  
          {  
             //data is retrived from this query  
             $query = $this->db->get('food_items');  
             return $query;  
          }  
       }  
    ?>  