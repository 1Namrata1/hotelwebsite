<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
 <title>Hotel bill</title>
 <style>
 body
{
 
  background-image:url("images/hotel.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}
   #b1
   { 
     width:60%;
	 height:auto;
	 background-color:white;
	 border:1px solid red;
	 margin:0px auto;
	 padding:30px;
	 margin-left:230px;
	 color:black;
	 }
	
	 
   #b1 label
   {
     color:orange;
	 margin-left:30px;
   }
    #b1 input[type="text"]
	{
	  margin-left:25px;
	  padding:7px;
	 
	}
	
	#b1 input[type="number"]
	{
	   margin-left:75px;
	  padding:7px;
	}
	#b1 input[type="submit"]
	{
	   margin-left:240px;
	  
	  padding:7px;
	}
	#b1 input[type="select"]
	{
	   margin-left:100px;
	  padding:7px;
	}
	#b1 input[type="date"]
	{
	   margin-left:50px;
	  width:19%;
	  padding:7px;
	}
	
	#b1 input[type="submit"]:hover
	{
	   color:red;
	    
	}
	#b1 input[type="button"]
	{
	   margin-left:75px;
	  
	  padding:7px;
	}
h3{
	color:black;
	font-family:times new roman;
}
h3
{
	color:black;
}
#b1 select
{
	 margin-left:50px;
	 padding:7px;
	 width:19%;
	 }

 </style>
 <script>
 function valid()
 {
 var x=document.forms["myform"]["cname"].value;
 if(x=="")
 {
 alert("Name must be filled out");
 return false;
 }
 }
if (window.print) 
{
   alert("Print Succesfully.....");
}


 </script>
</head>
<body>
 <div id="b1">
  <center><h1><u>HOTEL MAHARAJA</u></h1></center>
 <center><h3>AP:Satara pin:415-015 Mob:9589732741</h3></center>
 <center><h3>Email id:hotelmaharaja@gmail.com</h3></center>
 

 
 <form name="myform" action="" method="post" onsubmit="return valid()">
 <label>Custmer Name:</label>
 <input type="text" name="cname"  />
 <br /><br />
<label>Arrival Date:</label>
<input type="date" name="adate" required />
 
 <label>Departure Date:</label>
 <input type="date" name="ddate" required />
 <br /><br /> 
 
 <label>Room Type:</label>
 <select name="items">
 <option value="tea">single bed</option>
 <option value="vadapav">Duplex</option>
 <option value="pattis">AC Room</option>
 <option value="Misal">Non AC Room</option>
 <option value="Edli">Double bed</option>
 </select>
 <label>Room Price:</label>
 <input type="text" id="pr" name="pri" required checked onclick="javascript:clickme();" />
 <br /><br />
<label>No. of Rooms:</label>
 <input type="number" name="qunty" required />
 
 <label>TotalBill:</label>
 <input type="text" name="total" required />
 <br /><br />
 
 <label>Payment billpay:</label>
 <input type="text" name="payam" required />
 
 <label>Remain:</label>
 <input type="text" name="rem" required />
 <br /><br />
 <input type="submit" name="pay" value="Payment Done" required />
<input type="button" value="PrintBill" onClick="window.print()">
 </form>
 </div>
</body>
</html>
<?php

?>
