<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
  
  <h1>Library Database Management Project</h1>

</div>
<div class="topnav">
  <a href="index.php">Home</a>

  <a href="registration.php">Registration</a>
  <a href="addbook.php">Add Book</a>
  <a href="">DeleteBook</a>
  <a href="borrowbook.php">Borrow Book</a>
  <a href="returnbook.php">Return Book</a>
  
</div>


<div class="row">
<br>

<h2 align='center'>Borrow Book</h2>
  <div class="container">
  <form action="borrowbook.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-75">
      <input type="text" id="bid" name="bid" placeholder="book id..">
    </div>
  </div>
  <br>
  <div class="row">
  
    <div class="col-75">
      <input type="text" id="cus_id" name="cus_id" placeholder="Your customer Id..">
    </div>
  </div>
  <br>

  <div class="row">
  
    <div class="col-75">
      <input type="date" id="current_date" name="current_date" placeholder="Your current date..">
	  </div>
  </div>
 
 <br>
  
  <div class="row">
    
    <div class="col-75">
      <input type="date" id=" return_date" name=" return_date" placeholder="Your return date..">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>
</div>

<div>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$bid=$_POST['bid'];
	$cus_id=$_POST['cus_id'];
	$current_date=$_POST['current_date'];
	$return_date=$_POST['return_date'];
	
	
	$query="insert into borrow values('$bid','$cus_id','$current_date','$return_date')";
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