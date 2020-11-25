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
	 #b1
    {
	  margin-left:500px;
	  margin-top:100px;
	  padding-top:10px;
	  padding-left:30px;
	  width:30%;
	  height:200px;
	  background-color:white;
      border:1px solid;
     }
     
     #b1 input[type="submit"]
		{
		   margin-left:150px;
		}
		
	#b1 input[type="submit"]:hover
{ 
  color:orange;
}	
	#b1 input[type="text"]
	    {
		   margin-left:30px;
		}
		#b1 input[type="password"]
	    {
		   margin-left:20px;
		}
		
		#b1 lable
		{
		  color:blue;
		  font-size:15px;
		}
		
body
{
 background-color:black;
  background-image:url("hotel.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}
#b1 h2{
 color:orange;
 text-align:center;
}

	
	 
	</style>
</head>
<body>

<div id="b1">
<h2>LOGIN</h2>
  <form action="" method="post" >
	<lable>Enter UserID</lable>
	<input type="text" name="uid" required/>
	<br /><br />
	<lable>Enter Password</lable>
	<input type="password" name="pass" required/>
	<br /><br /><br/>
	<input type="submit" name="log" value="Login Now" />
</form>	
</body>
</div>
</html>
<?php
if(isset($_POST["log"]))
{
$uid=$_POST["uid"];
$pass=$_POST["pass"];
if(($uid=="admin")&&($pass=="12345678"))
{
header("Location:al.php");

}
else
{

}
}
?>