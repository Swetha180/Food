<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
body{
background-color: #4444;  
background:white url(https://thumbs.dreamstime.com/z/healthy-food-background-fresh-vegetables-wood-52096152.jpg) repeat fixed;
}
.vertical-offset-100{
    padding-top:100px;
}
#Homepage{
  position:fixed;
  right:10px;
  top:5px;	
  color:#CD5C5C;
}
</style>
</head>

<a id="Homepage" href="index" class="btn btn-info btn-lg>
<span class="glyphicon glyphicon-log-out">Go to Homepage</span>
</a>
</br></br>
    <div class="container">
    <div class="row vertical-offset-100">
    <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
	<div class="panel-heading">
    <h3 class="panel-title">Login</h3>
	</div>
	<div class="panel-body">
	<form method="post">
			    	<?php echo form_open('Home/login');?>
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" required>
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login">
						 <input class="btn btn-lg btn-success btn-block" type="reset"  value="Reset"></br>
			    	</fieldset>
					<p>Not Registered? <a  href="register">Click Here</a></p>
					</form>
    </div>
	</div>
	</div>
	</div>
</div>

</html>