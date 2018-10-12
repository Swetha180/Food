
    <?php  
       class retrieving_food extends CI_Model  
       {  
          function __construct()  
          {  
           // Call the Model constructor  
             parent::__construct();  
          }  
          //we will use the retrieving_food function  
          public function retrieving_food()  
          {  
             //data is retrived from this query  
             $query = $this->db->get('food_items');  
             return $query;  
          }  
       }  
    ?>  