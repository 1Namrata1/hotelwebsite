<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
 <title>mess bill</title>
 <style>
 body
{
 
  background-image:url("images/can.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}
   #b1
   { 
     width:60%;
	 height:auto;
	 background-color:black;
	 border:1px solid red;
	 margin:0px auto;
	 padding:30px;
	 margin-left:230px;
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
h1{
	color:white;
	font-family:times new roman;
}
h3
{
	color:white;
}
#b1 select
{
	 margin-left:50px;
	 padding:7px;
	 width:19%;
	 }

 </style>
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
    
    <script>
        function bill()
        {
            var a=document.getElementById("pr").value;
            var b=document.getElementById("qty").value;
          var z=a*b;
            //alert (z);
            document.getElementById("total").value=z;
        };
        function xyz()
        {
            var w=document.getElementById("total").value;
            var q=document.getElementById("ptm").value;
            var d=w-q;
            //alert (d);
            document.getElementById("re").value=d;
        };
    </script>
    <script>
     $(document).ready(function(){
    $("select.name").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
        document.getElementById("pr").value=selectedCountry;
    });
});
    </script>
</head>
<body>
 <div id="b1">
 <center><h1><u>Harshv Canteen</u></h1></center>
 <center><h3>AP:Satara pin:415-015 Mob:9284462991</h3></center>
 <center><h3>Email id:harshvinns07@gmail.com</h3></center>
 
 <form name="myform" action="" method="post" onsubmit="return valid()">
 <label>Custmer Name:</label>
 <input type="text" name="cname"  />
 <label>Date:</label>
 <input type="date" name="date" required />
 <br /><br /> 
 <label>FoodIteams:</label>
 <select name="items" class="name" >
 <option value="10">Tea</option>
 <option value="10">Vadapav</option>
 <option value="10">Pattis</option>
 <option value="40">Misal</option>
 <option value="40">Edali</option>
 <option value="20">Lassi</option>
 <option value="10">Samosa</option>
 <option value="25">Bhel</option>
 
 </select>
 
 <label>Dishprice:</label>
 <input type="text" id="pr" name="pri" onblur="new()" required checked />
 
 <br /><br />
 <label>Quntity:</label>
 <input type="number" name="qunty" id="qty" required onblur="bill()" />
 <label>TotalBill:</label>
 <input type="text" name="total" id="total" required  >
 <br /><br />
 <label>Payment bilpay:</label>
 <input type="text" name="payam" id="ptm" required onblur="xyz()"  >
 
 <label>Remain:</label>
 <input type="text" name="rem" required id="re" />
 <br /><br />


 <input type="submit" name="pay" value="Payment Done" required />
<input type="button" value="PrintBill" onClick="window.print()">
 </form>
 </div>
</body>
</html>
<?php

?>
