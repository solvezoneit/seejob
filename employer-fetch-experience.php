<?php
	include"php/main.php";
	if(isset($_POST['get_option']))
	{
		// echo "<option>Select</option>";
		$k = $_POST['get_option'];
		for($j=$k+1; $j<=20; $j++)
		{
			echo "<option value='".$j."'>".$j."</option>";
		}
		exit;
	}
	if(isset($_POST['get_salary']))
	{
		// echo "<option>Select</option>";
		$k = $_POST['get_salary']/1000;
		$am = "000";
		for($j=$k; $j<=99; $j++)
		{
			echo "<option value='".$j.$am."'>".$j.$am."</option>";
		}
		exit;
	}
	if(isset($_POST['get_age']))
	{
		// echo "<option>Select</option>";
		$k = $_POST['get_age'];
		for($j=$k+1; $j<=40; $j++)
		{
			echo "<option value='".$j."'>".$j."</option>";
		}
		exit;
	}
	if(isset($_POST['get_location']))
	{
		echo "<option value=''>Select Sub location</option>";
		$locsql = mysqli_query($db,"SELECT l2 FROM cj_location WHERE l1='".$_POST['get_location']."' GROUP BY l2") or die(mysqli_error($db));
		while($locarow = mysqli_fetch_array($locsql))
		{
			echo "<option value='".$locarow['l2']."'>".$locarow['l2']."</option>";
		}
		exit;
	}
	if(isset($_POST['get_job']))
	{
		echo "<option value=''>Select Job</option>";
		$locsql = mysqli_query($db,"SELECT job FROM cj_jobs WHERE job_cat='".$_POST['get_job']."' GROUP BY job") or die(mysqli_error($db));
		while($locarow = mysqli_fetch_array($locsql))
		{
			echo "<option value='".$locarow['job']."'>".$locarow['job']."</option>";
		}
		exit;
	}
?>
