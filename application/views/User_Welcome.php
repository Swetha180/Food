<html>  
<head>  
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
   </head>  
<style>
body {
	   background:white url(//www.html.am/images/backgrounds/background-image-2.gif) repeat fixed;
	   width:1300px;height:1300px;";
      }
h1{
	color:#F59B3A;
	text-align:center;
   }
   
#Homepage{
	position:fixed;
    right:10px;
    top:5px;	
    color:#CD5C5C;
}
button[type=submit] {
    position:absolute;
    bottom:0px;
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

#tdesign{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
	}
	
#tdesign td, #tdesign th
	{
	border: 1px solid #ddd;
    padding: 10px;
	}
	
#tdesign tr:nth-child(even){background-color: #f2f2f2;}
#tdesign th
	{
	padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	}
#tdesign tr:hover {background-color: #ddd;}
	
.design
   {
	display: flex;
    justify-content: center;
   } 
 #tdesign
 {
  align-self: center;
 }
</style>
<h1>Welcome User</h1>
	  <?php echo form_open('Home/update_foodValues');?>
	  <div class="container">
	  <div class="design">
       <table id="tdesign" align="center" border="1">  
          <tbody>  
             <tr>  
                <th>SlNo</td>  
                <th>Food Name</td>  
				<th>Likes</td>  
				<th>Dislikes</td>  
             </tr>  
             <?php  
             foreach($h->result() as $row)  
             {  
                ?><tr>  
				<?php echo form_open('Home/update_foodValues');?>
                <td><?php echo $row->SlNo;?></td>  
                <td><?php echo $row->FoodName;?></td>  
				
				<td><input type="radio" name="op[<?php echo $row->SlNo;?>]" value="0"</td>
				<td><input type="radio" name="op[<?php echo $row->SlNo;?>]" value="1"></td>
				
                </tr>  
             <?php }  
             ?>  
			 <?php echo form_open('Home/update_foodValues');?>
			 <button type="submit" class="btn btn-primary"  >Submit Survey</button>
			 </form>
          </tbody>  
       </table>  
	  </div>
	  </div>
       </form>  
<a id="Homepage" href="login" class="btn btn-info btn-lg>
 <span class="glyphicon glyphicon-log-out">Log out</span>
</a>
</body>  
 </html>  