<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("ankita");
if($con)
{
	 echo "";
}
else
{
	echo "connection failed";
}
?>