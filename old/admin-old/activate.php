<?php
include("include/conection.php");
if($_REQUEST['country_id'])
{
	$id=$_REQUEST['country_id'];
	$q1=mysqli_query($conn,"select * from country_tbl where country_id='$id'");
	$row = $q1->fetch_assoc();
	if($row['status']==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$q=mysqli_query($conn,"update country_tbl set status='$status' where country_id='$id'")or die(mysql_error());
	if($q)
	{
		header("location:add-country.php");
	}
}

if($_REQUEST['state_id'])
{
	$id2=$_REQUEST['state_id'];
	$q12=mysqli_query($conn,"select * from state_tbl where state_id='$id2'");
	$row2 = $q12->fetch_assoc();

	if($row2['status']==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$q2=mysqli_query($conn,"update state_tbl set status='$status' where state_id='$id2'")or die(mysql_error());
	if($q2)
	{
		header("location:add-state.php");
	}
}

if($_REQUEST['district_id'])
{
	$id2=$_REQUEST['district_id'];
	$q12=mysqli_query($conn,"select * from district_tbl where district_id='$id2'");
	$row2 = $q12->fetch_assoc();

	if($row2['status']==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$q2=mysqli_query($conn,"update district_tbl set status='$status' where district_id='$id2'")or die(mysql_error());
	if($q2)
	{
		header("location:add-district.php");
	}
}

if($_REQUEST['district_id'])
{
	$id2=$_REQUEST['district_id'];
	$q12=mysqli_query($conn,"select * from district_tbl where district_id='$id2'");
	$row2 = $q12->fetch_assoc();

	if($row2['status']==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}
	$q2=mysqli_query($conn,"update district_tbl set status='$status' where district_id='$id2'")or die(mysql_error());
	if($q2)
	{
		header("location:add-district.php");
	}
}
?>
