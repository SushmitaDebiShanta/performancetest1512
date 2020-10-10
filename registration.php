<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="topnav">
  <a href="index.php">Home</a>

  <a href="registration.php">Registration</a>
  <a href="addbook.php">AddBook</a>
  <a href="borrowbook.php">Borrow Book</a>
  <a href="returnbook.php">Return Book</a>
</div>

<div class="row">
<h2 align='center'>Customer Registration Form</h2>
  <div class="container">
  <form action="registration.php" method="post" enctype="multipart/form-data">
  <div class="row">
   
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
   
    <div class="col-75">
      <select id="country" name="loc">
        <option value="street1">street1</option>
        <option value="street1">street1</option>
        <option value="street1">street1</option>
      </select>
    </div>
  </div>
  <div class="row">
   
    <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Your mobile no..">
	  </div>
  </div>
 
  <div class="row">
  
    <div class="col-75">
      <input type="text" id="age" name="age" placeholder="Your age">
	  </div>
  </div>
 
  
  
  <div class="row">
   
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Your password..">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>
</div>


</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$loc=$_POST['loc'];
	$mobile=$_POST['mobile'];
	$age=$_POST['age'];
	$pass=$_POST['pass'];
	//customer id generation
	$num=rand(10,100);
	$cus_id="c-".$num;
	
	
	
	$query="insert into registration values('$cus_id','$name','$loc',$mobile ,'$age','$email','$pass')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
	
    }
	else
	{
		echo "error!".mysqli_error($con);
	}
}
?>