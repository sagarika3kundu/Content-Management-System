<?php
	//include_once("conn.php");
	$con=mysqli_connect("localhost","root","","project");
	
	$fname=$_REQUEST['fname'];
	$email=$_REQUEST['email'];
	$mob=$_REQUEST['mob'];
	$msgg=$_REQUEST['msgg'];
	

	$qry="INSERT INTO `cont_acnt`(`id`, `fname`, `email`, `mob`, `msgg`) VALUES ('','".$fname."','".$email."','".$mob."','".$msgg."')";

	
	$sql=mysqli_query($con,$qry);
	if($sql)
		header('location:contact_us.php?msg=Successfully submitted!!!');
	else
		header('location:contact_us.php?msg=Could not submit');
	
?>