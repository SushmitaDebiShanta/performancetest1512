<!DOCTYPE html>
<html>
<head>

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
<br>
  <div class="container">
  <form action="returnbook.php" method="post" enctype="multipart/form-data">
  <div class="row">
    
    <div class="col-75">
      <input type="text" id="bid" name="bid" placeholder="book id..">
    </div>
  </div>
  <br>
  <div class="row">
   
    <div class="col-75">
      <input type="text" id="cus_id" name="cus_id" placeholder="Your member Id..">
    </div>
  </div>
  <br>

  <div class="row">
    
    <div class="col-75">
      <input type="date" id="fine_day" name="fine_day" placeholder="Your fine day..">
	  </div>
  </div>
<br>
 
 
  
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
	$bid=$_POST['bid'];
	$cus_id=$_POST['cus_id'];
	$fine_day=$_POST['fine_day'];
	
	
	
	$query="insert into retu values('$bid','$cus_id','$fine_day')";
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