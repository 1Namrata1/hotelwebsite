<!DOCTYPE html>
<html>
<?php
   session_start();
?>
<head>
	<title>
	  login page
	</title>
	<style>
	
.menu
{
width:100%;
height:auto;
position:absolute;
font-size:100;
top:0;
left:400;
color:white;
}

.login{
background-color:black;
color:white;
height:150px;
width:250px;
opacity:0.7;
position:absolute;
top:30%;
left:40%;
padding:8%;
padding-left:50px;
}

.g{
background-color:black;
top:70%;
left:05%;
opacity:0.7;
height:200px;
width:350px;
}

body
{
 background-color:black;
  background-image:url("hotel.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}

</style>
</head>
<body>
<div class="menu">
<center><h1>Hotel Maharaja</h1></center>
</div>
 <div class="login">
 <center><h2>Admin Login</h2></center>
 <form action="" method="post">
 
    <label> Username:</label>
     <input type="text" name="uname"  required /> 
	 </br></br>
	 <label>Password:</label>
	  <input type="password" name="psw" required /> 
	  </br></br>
	  <p><input type="submit" name="log" value="Login Here" /></p>
	  </br></br>
</form>	
</body>
</div>
</html>

<?php
if(isset($_POST["log"]))
{
 $user=$_POST["uname"];
 $pass=$_POST["psw"];
if(($user=="admin") && ($pass=="hotelmaharaja"))
{
echo "<script>window.alert('Login done successfully....')</script>";
    header("location:pp.php");
}
else
{
echo "<script>window.alert('Enter valid username and password')</script>";
}
}
?>



