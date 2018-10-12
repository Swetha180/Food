<html>
<style>

#Homepage{
	position:fixed;
    right:10px;
    top:5px;	
    color:#7027E4;
    }
body{
	 background:white url(http://graphicdesignjunction.com/wp-content/uploads/2011/02/background-pattern-design-77.jpg) repeat fixed;
	 width:1300px;height:1300px;";
     }
</style>

<body>
<link rel = "stylesheet" type = "text/css" 
href = "<?php echo base_url(); ?>assets/css/style.css">

<h2 style="text-align: center;text-shadow: 3px 2px pink;font-size: 30px;">Fill the Form</h2>

<a id="Homepage" href="index" class="btn btn-info btn-lg>
<span class="glyphicon glyphicon-log-out">Go to Homepage</span>
</a>

<div class="reg">
<?php echo form_open('Home/add_User');?>
  
    First Name</br>
    <input type="text" id="FirstName" name="FirstName" placeholder="Your name.." required>
    </br>
	
    Last Name</br>
    <input type="text"  id="LastName" name="LastName" placeholder="Your last name.." required>
    </br>
	
    Email</br>
	<input type="text" id="Email" name="Email" placeholder="Your email..." required>
    </br>
	
    Gender</br>
    <input type="radio" name="Gender" value="0"> Male</br>
    <input type="radio" name="Gender" value="1"> Female</br>
    </br>
	
    Age</br>
    <input type="text"  id="Age" name="Age" placeholder="Your age..." required>
	</br>
	
	Place</br>
    <input type="text" id="Place" name="Place" placeholder="Your place..." required>
	</br>
	
	Contact No</br>
    <input type="text"  id="ContactNo" name="ContactNo" placeholder="Your Contact No..." required>
    </br>
	
    Password</br>
    <input type="password"  id="Password" name="Password" placeholder="Your password..." required>
    </br>
	
    Confirm Password</br>
    <input type="password"  name="cpassword" placeholder="Confirm Password..." required>
	</br>
	
	Type of User</br>
    <input type="radio" name="UserType" value="0"> Admin</br>
    <input type="radio" name="UserType" value="1"> Normal User</br>
    </br>
	
    <input type="Submit" value="Submit">
    <input type="Reset" value="Reset"></br>
 </form>
</div>
</body>
</html>
