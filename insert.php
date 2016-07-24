<?php
	include_once('connect.php');

	$jobId = $_POST['jobId'];
	$company = $_POST['company'];
	$position = $_POST['position'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	$location = $_POST['location'];
	$recruiterCompany = $_POST['recruiterCompany'];
	$accountId = 3;


	if(mysql_query("INSERT INTO job_opportunities Values('$jobId','$accountId','$company','$position','$description','$status','$location','$recruiterCompany')"))
		echo "Successfully Inserted";	
	else
		echo "Insertion Failed";
	


?>