<?php
	include 'connect.php';
	mysql_select_db("users");
	//fetching all values present in the fields
	$id=$_POST['e_mail'];
	$fn=$_POST['f_name'];
	$ln=$_POST['l_name'];
	$pwd=$_POST['p_wd'];
	$addr=$_POST['address'];
	$city=$_POST['city_name'];
	$mob=$_POST['mob_num'];
	$pin=$_POST['pin_code'];
	$query=mysql_query("SELECT * from signup where email='$id'");
	$val = mysql_num_rows($query);
	if($val)
		echo "0"; //email id already exists
	else
	{
		mysql_query("insert into signup values('$fn','$ln','$id','$pwd','$addr','$mob','$city','$pin')");
		echo "1";
	}
?>