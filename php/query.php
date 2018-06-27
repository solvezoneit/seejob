<?php
	session_start();
	include"../cjobadmin/api/db_config.php";
	if(isset($_POST["employer_data_query"]))
	{
		$name = $_REQUEST["name"];
		$email = $_REQUEST["email"];
		$contact = $_REQUEST["contact"];
		$location = $_REQUEST["location"];
		$message = $_REQUEST["message"];
		mysqli_query($db,"insert into cj_query (name,email,contact,location,message,add_date) 
						values ('$name','$email','$contact','$location','$message',Now())");
		// header("location:".$_SERVER['HTTP_REFERER']);
		// $_SESSION["msg"] = "Privacy Setting Has been Update Suuccessfully!";
		// echo '<script>window.location="employer-post-job-view.php"</script>';
		echo'<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>Query has been send</div>'; 
	}
?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
