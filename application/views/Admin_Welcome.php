<html>
<head>
<style>
input[type=submit] {
     background: #B9DFFF;
     color: #fff;
     border: 1px solid #eee;
     border-radius: 20px;
     box-shadow: 5px 5px 5px #eee;
     text-shadow:none;
     position:absolute;
     transition: .5s ease;
     top: 80%;
     left: 50%;
}
input[type=submit]:hover {
     background: #016ABC;
     color: #fff;
     border: 1px solid #eee;
     border-radius: 20px;
     box-shadow: 5px 5px 5px #eee;
     text-shadow:none;
     position:absolute;
     transition: .5s ease;
     top: 80%;
     left: 50%;
}


table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

input[type=text]
{
    position:absolute;
    transition: .5s ease;
    top: 80%;
    left: 38%;
}
 h1{
	color:#F59B3A;
	text-align:center;
              }
a{
    position:fixed;
    right:10px;
    top:5px;	
    color:#CD5C5C;
 }
 body{
	background:white url(http://gdj.graphicdesignjunction.com/wp-content/uploads/2014/05/001+background+pattern+designs.jpg) repeat fixed;
	width:1300px;height:1300px;";
     }
#atdesign{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}
#atdesign td, #atdesign th
{
	border: 1px solid #ddd;
    padding: 10px;
}
#atdesign tr:nth-child(even){background-color: #f2f2f2;}
#atdesign th
{
	padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #CCB296;
    color: white;
}
#atdesign tr:hover {background-color: #ddd;}
	
#atdesign
 {
     align-self: center;
 }  
</style>
</head>
<body>
<h1>Welcome Admin</h1>
<div>

<?php echo form_open('Home/display_Countfood');?>
<table id="atdesign"  align="center" border="1">  
          <tbody>  
             <tr>  
                <th>SlNo</th>  
                <th>Food Name</th>  
				<th>Likes</th>  
				<th>Dislikes</th>  
             </tr>  
             <?php  
             foreach($t->result() as $row)  
             {  
                ?><tr>  
				<?php echo form_open('Home/update_foodValues');?>
                <td><?php echo $row->SlNo;?></td>  
                <td><?php echo $row->FoodName;?></td>  
				<td><?php echo $row->Likes;?></td>
				<td><?php echo $row->Dislikes;?></td>
			  </tr>  
			  
			  <?php }  
             ?>  
  
  </form>
<?php echo form_open('Home/storing_food');?>
<input type="text" id="FoodName" name="FoodName" placeholder="Enter food item..." required>
<input class="submit" type="submit" name="submit" value="Add" onfocus="this.blur()" />

 </form>
 </table>
 </div>

<a href="login">Logout</a></br></br>
</body>
</html>