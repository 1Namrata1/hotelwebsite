<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>First page</title>
<style>
body
{
 background-color:yellow;
  background-image:url("hotel.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}
h4
{
  color:red;
  font-size:60px;
  font-style:algerian;
  text-align:center;
}
#b1
{
 width:25%;
 height:500px;
 background-color:white;
 border:1px solid black;
 
 padding-top:10px;
 padding-left:15px;
 margin-left:480px;
 margin-top:30px;
 margin-bottom:20px;
}
#b1 lable
{
color:orange;
}

#b1 input[type="text"]
{
  margin-left:10px;
}

#b1 input[type="radio"]
{
 margin-left:10px;
}

#b1 input[type="submit"]:hover
{
  color:Orange;
  
  
}
#b1 input[type="submit"]
{
margin-left:110px;
}
</style>
</head>
<body>
 <h4> Registration</h4>
 <div id="b1">
 <form action="" method="post">
 
    <label>First Name:</label>
    <input type="text" name="FName"  required /> 
	 </br></br>

     <label>Last Name:</label>
     <input type="text" name="LName"  required /> 
	 </br></br>

    <label>Contact No:</label>
    <input type="text" name="Mobno" required /> 
	  </br></br>

   <label>Email ID:</label>
    <input type="text" name="Email" required /> 
	  </br></br>
      
                 <label>Gender:</label>
	  <input type="radio" name="gender" value="Female" />Female
	  <input type="radio"  name="gender" value="Male">Male
	  </br></br>

         <label>Arrival Date:</label>
         <input type="date" name="Adate" required />
         <br /><br /> 
   
        <label>Departure Date:</label>
        <input type="date" name="Ddate" required />
        <br /><br /> 
    
        <label>Number of adults:</label>
        <input type="number" name="Noa" required />
        <br /><br /> 

        <label>Number of children:</label>
        <input type="number" name="Noc" required>
        <br /><br /> 
 
        <label>Questions/Comments:</label>
        <input type="textarea" name="Qc">
        <br /><br /> 
	 
        <input type="submit" name="reg" value="Submit" />
        </br></br>
	 
 </form>
 </div>
</body>
</html>


<?php
     if(isset($_POST["reg"]))
	 {
		 
	   $fname=$_POST["FName"];
                   $lname=$_POST["LName"];
	   $mob=$_POST["Mobno"];
                   $email=$_POST["Email"];
                   $gen=$_POST["gender"];
                   $adate=$_POST["Adate"];
                   $ddate=$_POST["Ddate"];
                   $noa=$_POST["Noa"];
                   $noc=$_POST["Noc"];
                   $qc=$_POST["Qc"];
     
	  
       $insert="insert into customer(fname,lname,mobno,email,gender,adate,ddate,noa,noc,qc) values('$fname','$lname','$mob','$email','$gen','$adate','$ddate','$noa','$noc','$qc')";
	   $run=mysql_query($insert);
	   if($run)
	   {
		   echo "Registration done succesfully..";
	   }
	   else
	   {
		   echo "data is not inserted";
	   }
	 }
	   
	   ?>