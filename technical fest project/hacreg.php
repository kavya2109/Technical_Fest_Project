<?php
require "dbconnection.php";
$n = $_POST['a'];
$r = $_POST['b'];
$e = $_POST['c'];
$ph = $_POST['d'];
echo $ph;
$query = "INSERT INTO hacreg(name,regno,email,phno)VALUES('$n','$r','$e','$ph')";
$sql=mysql_query($query,$conn);
if(!$sql){
	echo "not successfull";
}
else {
	echo "successfull";
}
?>
