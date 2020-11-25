<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>

<head>

<title>Registration form</title>

<style>
body
{
  background-color:black;
  background-image:url("12.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  color:white;
    font-size:20px;
  font-style:algerian;
}
</style>
</head>

<body>

<h2><center>Registration form</center></h2>


<form>

<fieldset>

<legend>
<h3>Personal information</h3>
</legend>

First name:<input type="text" placeholder= "Enter your first name" name="FirstName" required><br><br>


Last name:
<input type="text"placeholder="Enter your last name" name="LastName" required><br>
<br>
<br>

Date of Birth:
<input type="date" max="2000-01-01" name="dob" required>
<br>
<br>


Gender:
<input type="radio" name="gender" required >Male
<input type="radio" name="gender" required>Female
<span class="validity">
</span>
<br>
<br>


Age:
 <input type="number"min="18"placeholder="Enter age "max="100"name="age"required>
<br>
<br>

Contact information:
     <label for="phone">
Phone:</label>
<input type="tel" id="phone" name="phone"
 placeholder="1234567890"
 pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
 required >
    
<span class="validity"></span>
<br>
<br>
 
Email id:
<input type="email"
 placeholder="abcd@mail.com"
 name="email" required/ >
    
<span class="validity">
</span>

 


</fieldset>

<br>



<fieldset>

<legend><h3>Room Booking Information</h3></legend>

Date of Arrival:<input type="date" min="2019-05-2" max="2020-01-01" name="doj">
<br>
<br>


Date of Departure:<input type="date" min="2019-05-2" max="2020-01-01" name="doje">
<br>
<br>

Room Type:<select required>
<option value="">Garden View</option>
<option value="sv">Street view<br>
<option value="Quality Analyst">Swimming pool view<br>
<option value="Production">Balkani View<br>
<option value="Accounting and Finance">Front View<br>

</option>

</select>

<br>
<br>

Price per Room:<lable for"100$">
100$<br>
<br>

No.of Guest per Room:<input type="number"
 placeholder=""
 pattern="[0-1]{1}"
 name="nogpr" required />
    
<span class="validity">
</span> 
<br>
<br>

No.of Rooms:<input type="number"
 placeholder=""
 pattern="[0-1]{1}"
 name="nor" required />
    
<span class="validity">
</span> 
<br>
<br>


<input type="submit"value="Pay & Book">
 


</fieldset>
<br>

<input type="submit" value="Submit">

<input type="reset">


</form>


</body>

</html>


<?php
     if(isset($_POST["reg"]))
	 {
		 
	   $fname=$_POST["FirstName"];
           $lname=$_POST["LastName"];
           $dob=$_POST["dob"]
           $gen=$_POST["gender"];
           $age=$_POST["age"];
	   $mob=$_POST["phone"];
           $email=$_POST["email"];
           $adate=$_POST["doj"];
           $ddate=$_POST["doje"];
           $nogpr=$_POST["nogpr"];
           $nor=$_POST["nor"];
           
     
	  
       $insert="insert into customer1(fname,lname,dob,gen,age,mobno,adate,ddate,nogpr,nor) values('$fname','$lname','$dob','$gen','$age','$mob','$adate','$ddate','$nogpr','$nor')";
	   $run=mysql_query($insert);
	   if($run)
	   {
		   echo "data inserted succesfully..";
	   }
	   else
	   {
		   echo "data is not inserted";
	   }
	 }
	   
	   ?>