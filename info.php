<!DOCTYPE html>
<html>
 <link href='https://fonts.googleapis.com/css?family=B612' rel='stylesheet'>
 
 <head>
  <title> Response Form </title>
 </head>

 <style>
 body
  {
   font-family: B612;
   background-color: #f2f4f7
  }
 
 .form
  {
   text-align:center;
   color:red;
   font-style:italics;
   top:30px;
  }
  
 footer
  {
   background-color:red;
   color:white;
  }
 </style>

 <body>
  <center> <img src="Logo.png"> </center><br>
  
  <br><br><br><br><br><br>
  
  <div class="form">
   <h2>Your response is successfully recorded!!!</h2>
  </div>
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
  <center><b><i><footer> &copy;Empezar Group, All Rights Reserved </footer></i></b></center>
  
  <meta http-equiv="refresh" content="3; url=Home/Home.html" />

 </body>
</html>




<?php
 session_start();
 $db = mysqli_connect ("localhost","root","","contact") or die(mysqli_error($db));

 if (isset($_POST['submit']))
	echo 'hi';
	$first_name=$_POST['first_name'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$comment=$_POST['message'];

	
	$result= mysqli_query($db, "INSERT INTO data(first_name,lname,email,comment) VALUES('$first_name','$lname','$email','$comment')")
 or die(mysqli_error($db));
?>