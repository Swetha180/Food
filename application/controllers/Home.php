<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

//loading home page
public function index()
	{
	//loading the view of the HomePage
	$this->load->view('Home_Page');
	$this->load->helper('url'); 
		
	}

	
public function register()
   {
     //loading the view for the registration page
     $this->load->view('Registration_form.php');
   }

//storing user or admin data in database
public function add_User()
{
      $firstName = $this->input->post('FirstName'); //getting the data from the view
      $lastName = $this->input->post('LastName');
      $email = $this->input->post('Email');
      $gender = $this->input->post('Gender');
      $age = $this->input->post('Age');
      $place = $this->input->post('Place');
      $contactno = $this->input->post('ContactNo');
      $password = $this->input->post('Password');
      $usertype = $this->input->post('UserType');
      $cpassword=$this->input->post('cpassword');
	      //checking if password matches with the confirm password
          if($cpassword==$password){
		  //storing the array of values from the view into the variable data
            $data=array('FirstName'=>$firstName,
            'LastName'=>$lastName,
			'Email'=>$email,
			'Gender'=>$gender,
			'Age'=>$age,
			'Place'=>$place,
			'ContactNo'=>$contactno,
			'Password'=>$password,
			'UserType'=>$usertype);
	//loading the model		
     $this->load->model('Users_model');
	 //loading the method of the model
     if($this->Users_model->add_users($data))
         {
         if($usertype==1)
           {
           header("Location:display_Ufood");
           }
         else
          {
          header("Location:display_Countfood");
          }
        }
     else
        {
        echo "password dont match";
        }
        }
}

//User or Admin login Page
    public function login()
    {
      if($this->input->post('login'))
		{
		$email=$this->input->post('email');
		$pass=$this->input->post('password');
		$query=$this->db->query("select * from user_table where Email='$email' and Password='$pass'");
		$row = $query->num_rows();
		if($row){
                 $row = $query->row();
                 $usertype= $row->UserType;
				 $this->display_Ufood($data);
				 if($usertype==1)
				 {
				header("Location:display_Ufood");
				 }
				 else
				{
				header("Location:display_Countfood");
				}
				}
        else
	    {
	     echo "invalid details";
	    }
			
	 }  
 $this->load->view('Login_form.php');
}

//adding food items into the list and also in database
public function storing_food()
{
     $FoodName = $this->input->post('FoodName');
     $data=array('FoodName'=>$FoodName,
            'Likes'=>'0',
			'Dislikes'=>'0',
			);
    $this->load->model('admin_table');
    if($this->admin_table->add_food($data))
    {
    echo '<script>alert("You Have Successfully updated this Record!");window.location.href = "display_Countfood";</script>';      
    }
    else
   { 
   echo "data not inserted";
   }
}

public function display_Ufood()
{   //load the database  
    $this->load->database();  
    //load the model  
    $this->load->model('retrieving_food');  
    //load the method of model 
    $data['h']=$this->retrieving_food->retrieving_food();  
    //return the data in view  
    $this->load->view('User_Welcome', $data);  
  }


//add values of each food items
public function update_foodValues()
 {
   $data=array($this->input->post('op'));
	foreach($data[0] as $key=>$val)
	{
	if($val==0)
	{
	$query=$this->db->query("update food_items set Likes=Likes+1 where SlNo=$key");
	}
	else
	{
	$query=$this->db->query("update food_items set Dislikes=Dislikes+1 where SlNo=$key");
	}
	echo '<script>alert("You Have Successfully updated this Record!");window.location.href = "display_Ufood";</script>';      
	}
}

public function display_Countfood()
{
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('display_count');  
         //load the method of model  
         $data['t']=$this->display_count->display_count();  
         //return the data in view  
         $this->load->view('Admin_Welcome', $data);  	
		 
  }


}

?>