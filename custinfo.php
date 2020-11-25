<?php
//connection with database
$connection=mysql_connect("localhost","root","")or die(mysql_error());

//select database
$sel=mysql_select_db("ankita")or die (mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
<title>table of informtion</title>
<style>
</style>
</head>
</html>

<?php
 $select="select *from customer";
 $run=mysql_query($select);
 $i=1;
 echo "<table border=1px  width='100%' height='600px' style='border-color:red'>";
 echo "<tr style='color:red'>";
 echo "<th>Sr.No</th>";
echo "<th> First Name</th>";
echo "<th> Last Name</th>";
echo "<th>Contact No</th>";
echo "<th> Email ID</th>";
echo "<th>Gender</th>";
echo"<th>Arrival Date</th>";
echo "<th>Departure Date</th>";
echo "<th>Number of adults</th>";
echo "<th> Number of children</th>";
 echo "</tr>";

 while($row=mysql_fetch_array($run))
 {
 
 echo "<tr style='background-color:skyblue'>";
 echo "<td align='center' width='10px'>".$i."</td>";
 echo "<td align='center'>".$row['fname']."</td>";
 echo "<td align='center'>".$row['lname']."</td>";
 echo "<td align='center'>".$row['mobno']."</td>";
 echo "<td align='center'>".$row['email']."</td>";
 echo "<td align='center'>".$row['gender']."</td>";
 echo "<td align='center'>".$row['adate']."</td>";
 echo "<td align='center'>".$row['ddate']."</td>";
 echo "<td align='center'>".$row['noa']."</td>";
 echo "<td align='center'>".$row['noc']."</td>";
 
 echo "</tr>";
  $i++;
  
 }
 
 echo "</table>";
?>
