<?php
	session_start();
	include"../cjobadmin/api/db_config.php";
	if(isset($_POST["can_status"]))
	{
		$id = $_REQUEST["id"];
		$can_status = $_REQUEST["can_status"];
		mysqli_query($db,"UPDATE cj_apply_job SET 
		status='$can_status',
		mod_date=Now() WHERE id='".$id."' ");
		header("location:".$_SERVER['HTTP_REFERER']);
		// $_SESSION["msg"] = "Privacy Setting Has been Update Suuccessfully!";
		// echo '<script>window.location="employer-post-job-view.php"</script>';
	}
	// elseif(@$_POST["postjob"]=="Post")
	// {
		// $job_title = $_REQUEST["job_title"];
		// $job_titles = $_REQUEST["job_title"].'-'.$_REQUEST["job"].'('.$_REQUEST["optradioname"].')'.$_REQUEST["location"].' '.$_REQUEST["sub_location"].' '.$_REQUEST["exp_min"].' '.$_REQUEST["exp_max"].' year of experience';
		
		// # Prep string with some basic normalization
		// $url = strtolower($job_titles);
		// $url = strip_tags($url);
		// $url = stripslashes($url);
		// $url = html_entity_decode($url);

		// # Remove quotes (can't, etc.)
		// $url = str_replace('\'', '', $url);

		// # Replace non-alpha numeric with hyphens
		// $match = '/[^a-z0-9]+/';
		// $replace = '-';
		// $url = preg_replace($match, $replace, $url);

		// $url = trim($url, '-');
		// $tt = time();
		// $url = $url.'-'.$tt;
		
		// $job_cat = $_REQUEST["optradioname"];
		// $job = $_REQUEST["job"];
		// $job_type = $_REQUEST["job_type"];
		// $comp = mysqli_fetch_array(mysqli_query($db,"select com_id,com_name from cj_company where com_id='".$_REQUEST["company_name"]."'"));
		
		// $location = $_REQUEST["location"];
		// $sub_location = $_REQUEST["sub_location"];
		// $exp_min = $_REQUEST["exp_min"];
		// $exp_max = $_REQUEST["exp_max"];
		// $education = $_REQUEST["education"];
		// $salary_min = $_REQUEST["salary_min"];
		// $salary_max = $_REQUEST["salary_max"];
		// $work_shifts = $_REQUEST["work_shifts"];
		// $gender = $_REQUEST["gender"];
		// $age_min = $_REQUEST["age_min"];
		// $age_max = $_REQUEST["age_max"];
		// $job_desc = $_REQUEST["job_desc"];
		// $remail = $_REQUEST["remail"];
		// $rcontact = $_REQUEST["rcontact"];
		
		// for($i = 0; $i<count($job); $i++)
		// {
			// $job_cat_row = mysqli_fetch_array(mysqli_query($db,"SELECT job_cat FROM cj_jobs WHERE job='".$job[$i]."'"));
			// $registered = mysqli_query($db,"INSERT INTO cj_job_post (
			// user_id,
			// job_title,
			// url,
			// page_title,
			// page_desc,
			// page_keyword,
			// job_cat,
			// job,
			// job_type,
			// company_id,
			// company_name,
			// location,
			// sub_location,
			// exp_min,
			// exp_max,
			// education,
			// salary_min,
			// salary_max,
			// work_shifts,
			// gender,
			// age_min,
			// age_max,
			// job_desc,
			// remail,
			// rcontact,
			// add_date
			// ) VALUES (
			// '$_SESSION[user_id]',
			// '$job_title',
			// '$url',
			// '$job_title',
			// '$job_title',
			// '$job_title',
			// '$job_cat_row[job_cat]',
			// '$job[$i]',
			// '$job_type',
			// '$comp[com_id]',
			// '$comp[com_name]',
			// '$location',
			// '$sub_location',
			// '$exp_min',
			// '$exp_max',
			// '$education',
			// '$salary_min',
			// '$salary_max',
			// '$work_shifts',
			// '$gender',
			// '$age_min',
			// '$age_max',
			// '$job_desc',
			// '$remail',
			// '$rcontact',
			// Now())") or die(mysqli_error($db));
		// }
		// $_SESSION["msg"] = "Job has been post.";
		// echo'<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div>'; 
	// }
?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
