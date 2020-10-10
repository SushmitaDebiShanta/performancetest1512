<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Library Managemant</title>
  </head>
  <body>
    
<div class="topnav">
  <a href="index.php">Home</a>

  <a href="registration.php">Registration</a>
  <a href="addbook.php">AddBook</a>
  <a href="borrowbook.php">Borrow Book</a>
  <a href="returnbook.php">Return Book</a>
</div>
<form action="" method="post">
    
    <input class="form-control mr-sm-2" type="text" name="isbn" placeholder="Enter number......">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="delete" >Delete</button>
</form>
    <form action="" method="post">
                                <div class="container box pb-3">
                                    <div class=" d-flex justify-content-center"><p class="pt-5 font-weight-bolder userfont">ADD BOOK</p>
                                    </div>
                                    <div class="my-2 boxinfo ">
                                        <input type="text"  placeholder="Enter Your Book Name" name="bookName" id="userName" autocomplete="off">
                                        <span id="userNameMess" class="text-danger"></span>
                                    </div>
                                    <div class="my-2 boxinfo ">
                                        <input type="text"  placeholder="Enter Publisher name" name="pbname"  >
                                        <span id="userEmailMess" class="text-danger"></span>
                                    </div>
        
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Author Name" name="pbdate" >
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Subject Name" name="sub" >
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    <div class="my-2 boxinfo" >
                                        <input type="text" placeholder="Enter editin" name="edition" id="" >
                                        <span id="userpassMess" class="text-danger"></span>
                                    </div>
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Enter ISBN number" name="isbn">
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Enter Number of copieees" name="ncopy">
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    
                                    <div class="my-2 d-flex" >
                                        <input type="submit" class="btn btn-sm btn-outline-danger btnSin px-5 font-weight-bolder mt-3" value="ADD" name="add" required>
                                    </div>
                                    
                                </div>
                            </form>
                            <form action="" method="post">
    
            
<?php

     $con = mysqli_connect("localhost","root","","test");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



          if(isset($_POST['delete'])){
            $on1=$_POST['isbn'];
            $query1 = "DELETE FROM addbook WHERE isbn='$on1'";
            $data=mysqli_query($con,$query1);
            if($data == TRUE)
            {
                echo "<script>alert('Data Deleted successfully..!');window.location='';</script>";   
            }
	else{echo mysqli_error($con);}
            
        
        }
            
        

if(isset($_POST['add'])){
	$name=$_POST['bookName'];
	$pbname=$_POST['pbname'];
    $pbdate=$_POST['pbdate'];
    $sub=$_POST['sub'];
    $edition=$_POST['edition'];
    $isbn=$_POST['isbn'];
    $ncopy=$_POST['ncopy'];
    
	if($name=="" || $pbname=="" || $pbdate=="" || $edition==""  || $isbn==""  || $ncopy=="" || $sub==""  ){
		echo "All fields should be filled.Either one or many fields are empty.";
		}

	$inst="INSERT INTO addbook(name,pbname,pbdate,sub,edition,isbn,ncopy) VALUES('$name','$pbname','$pbdate','$sub','$edition','$isbn','$ncopy')"; 
	$data=mysqli_query($con,$inst);
	if($data == TRUE)
            {
                echo "<script>alert('Data updated successfully..!');window.location='';</script>";   
            }
	else{echo mysqli_error($con);}
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>