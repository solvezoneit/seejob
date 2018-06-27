<?php
	include"php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>test</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href=""/>
		<meta charset="UTF-8" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="description" content=""/>
		<meta name="robots" content="noindex, nofollow">
		<meta name="google-site-verification" content="" />
		<meta name="keywords" content=""/>
		<meta http-equiv="Content-Language" content="en-us" > 
		<meta name="revisit-after" content="1 days" > 
		<meta name="RATING" content="General" > 
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="socicon/social_media.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="seejob.css">
		<!-- page specific plugin styles -->
		<script src="js/3.2.1-jquery.min.js"></script>
		<script src="js/3.3.7-js-bootstrap.min.js"></script>
		<script defer src="js/fontawesome.com.js"></script>
		<!--- data table start --->	
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
		<script src="//code.jquery.com/jquery-3.3.1.js"></script>
		<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
		<script src="//cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
		<script src="//cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
		<!--- data table End --->	
	</head>
	
<body style="background-color:#e7e7e7;">

	<div class="">
	<!-- Header Menu Start-->
	<?php include"employer-header.php"?>
	<!-- Header Menu End -->

	 <div class="container">
		<div class="row" style="margin-top:20px;">
			<!--Employer Job-->
			<div class="col-md-12">
				<div class="apply_box row" style="margin-bottom:5px;">
					<div id="accordion" class="panel panel-default behclick-panel" style="border:1px solid #;">
						<div class="panel-heading">
							<div class="row">
								<form action="" method="GET">
								<div class="col-md-6">	
									<select name="job_post_id" class="form-control1 btn-primary" style="border-radius:5px;padding:10px;" onchange="submit();">
									<option value="">All</option>
									<?php
									$jobs_sql = mysqli_query($db,"select * from cj_job_post 
									inner join cj_apply_job ON cj_job_post.job_post_id=cj_apply_job.job_post_id where cj_job_post.user_id='".$_SESSION["user_id"]."' group by job");
									while($get_jobs = mysqli_fetch_array($jobs_sql))
									{
										?>
										<option value="<?=$get_jobs['job_post_id']?>" <?=(($get_jobs['job_post_id']==@$_REQUEST['job_post_id'])?'selected':'')?> style="background-color:#fff;color:green;"><?=$get_jobs['job']?></option>
										<?php
									}
									?>
									</select>
								</div>
								<div class="col-md-6">
									<select name="can_status_search" class="form-control1 btn-<?php if(@$_REQUEST["can_status_search"]=='1'){echo 'success';}elseif(@$_REQUEST["can_status_search"]=='2'){echo'warning';}elseif($get_can["can_status_search"]=='0'){echo 'danger';}else{echo 'default';}?> pull-right" style="border-radius:5px;padding:10px;"  onchange="submit();">
										<option value="">All</option>
										<option value="1" <?=((@$_REQUEST["can_status_search"]=='1')?'selected':'')?> style="background-color:#fff;color:green;">Open</option>
										<option value="2" <?=((@$_REQUEST["can_status_search"]=='2')?'selected':'')?> style="background-color:#fff;color:#f0ad4e;">Paused</option>
										<option value="0" <?=((@$_REQUEST["can_status_search"]=='0')?'selected':'')?> style="background-color:#fff;color:red;">Close</option>
									</select>
								</div>
								</form>
							</div>
						</div>
					</div>
					<table id="example" class="table table-striped table-bordered1 dt-responsive nowrap" style="width:100%"> 
						<thead> 
							<tr> 
								<th>Name</th>
								<th>Status</th>
								<th>Location</th>
								<th>Created</th>
							</tr> 
						</thead>
						<tbody>
							<?php
							$query = "select * from cj_job_post 
							inner join cj_apply_job ON cj_job_post.job_post_id=cj_apply_job.job_post_id where cj_job_post.user_id='".$profilerow["user_id"]."' ";
							if(@$_REQUEST["job_post_id"]!='')
							{
								$query .=" And cj_apply_job.job_post_id = '".@$_REQUEST["job_post_id"]."'";
							}
							if(@$_REQUEST["can_status_search"]!='')
							{
								$query .=" And cj_apply_job.status='".@$_REQUEST["can_status_search"]."'";
							}
							if(isset($_REQUEST["fcan"]))
							{
								$query .=" And cj_apply_job.name Like '%".@$_REQUEST["fcan"]."%'";
							}
							$can_sql = mysqli_query($db,$query);
							while($get_can = mysqli_fetch_array($can_sql))
							{
								$get_candidates = mysqli_fetch_array(mysqli_query($db,"select * from cj_user where id='".$get_can["jobseeker_id"]."'"));
								?>
								<tr> 
									<td style="font-size:20px;color:#000;"><b><u><?=ucwords($get_candidates['name'])?></u></b></td>
									<td>
										<form action="php/candidates.php" method="POST" class="pull-left">
											<input type="hidden" name="id" value="<?=$get_can["id"]?>">
											<select name="can_status" class="form-control1 btn-<?php if($get_can["status"]=='1'){echo 'success';}elseif($get_can["status"]=='2'){echo'warning';}elseif($get_can["status"]=='0'){echo 'danger';}else{echo 'default';}?> pull-right" style="border-radius:20px;" onchange="submit();">
												<option value="1" <?=(($get_can["status"]=='1')?'selected':'')?> style="background-color:#fff;color:green;">Open</option>
												<option value="2" <?=(($get_can["status"]=='2')?'selected':'')?> style="background-color:#fff;color:#f0ad4e;">Paused</option>
												<option value="0" <?=(($get_can["status"]=='0')?'selected':'')?> style="background-color:#fff;color:red;">Close</option>
											</select>
										</form>
									</td>
									<td><?=$get_candidates['location']?></td> 
									<td><?=date("d-M, Y (h:s A)",strtotime($get_can['add_date']))?></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
					<table border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td class="gutter">
									<div class="line number1 index0 alt2" style="display: none;">1</div>
								</td>
								<td class="code">
									<div class="container" style="display: none;">
										<div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>	
				</div>
			</div>
			<!--Employer Job-->
			
			<!-- Advertisement -->
			<?php //include"right-add.php"?>
			<!-- Advertisement -->
		</div>
	 </div>
	</div>
	<!--Footer-->
	<?php include"footer.php"; ?>
	<!--Footer-->
	<!-- inline scripts related to this page -->
	
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>
</body>
</html>				