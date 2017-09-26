<?php
	include_once("conn.php");


	$fname=$_POST['fname'];
	$addr=$_POST['addr'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$msgg=$_POST['msgg'];
	

	$qry="INSERT INTO `enq_acnt`(`id`, `fname`, `addr`, `mob`, `email`, `msgg`) VALUES ('','".$fname."','".$addr."','".$mob."','".$email."','".$msgg."')";

	
	$sql=mysqli_query($con,$qry);
	if($sql)
		header('location:enquiry.php?msg=Successfully submitted!!!');
	else
		header('location:enquiry.php?msg=Could not submit');
	
?>