<?php
	include"php/main.php";
	if(isset($_POST["limit"],$_POST["start"]))
	{
		$fquery = "select * from cj_job_post WHERE flag='1' && user_id='$_SESSION[user_id]' ";
		if(!empty($_POST["job_cat"]))
		{
			$fquery .= " && job_cat = '".$_POST["job_cat"]."' ";
		}
		if(!empty($_POST["company_name"]) && count($_REQUEST['company_name']))
		{
			$fquery .= " && company_name in ({$_POST["company_name"]}) ";
		}
		if(!empty($_POST["location"]) && count($_REQUEST['location']))
		{
			$fquery .= " && location in ({$_POST["location"]}) ";
		}
		if(!empty($_POST["job_type"]) && count($_REQUEST['job_type']))
		{
			$fquery .= " && job_type in ({$_POST["job_type"]}) ";
		}
		if(!empty($_POST["work_shifts"]) && count($_REQUEST['work_shifts']))
		{
			$fquery .= " && work_shifts in ({$_POST["work_shifts"]}) ";
		}
		if(!empty($_POST["salary"]))
		{
			$salarys = explode('-',$_POST['salary']);
			$fquery .= " && salary_min >= '".$salarys[0]."' && salary_max <= '".$salarys[1]."' ";
		}
		if(!empty($_POST["odr"]))
		{
			if($_POST["odr"]=='hl')
			{
				$fquery .= "ORDER BY salary_max DESC ";
			}else{
				$fquery .= "ORDER BY salary_min ";
			}
		}
		$fquery .= " LIMIT ".$_POST["start"].", ".$_POST["limit"]." ";
		$equery = mysqli_query($db,$fquery);
		// $fquery = mysqli_query($db,"select * from cj_job_post 
		// where user_id='$_SESSION[user_id]' 
		// ORDER BY job_post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."");
		while($srow = mysqli_fetch_array($equery))
		{
			?>
			<div class="apply_box row" style="margin-bottom:5px;">
				<div class="col-md-12 apply_content1">
					<h5 class="apjob_heading1"><!--Hiring for-->
						<a href="employer-job-details.php?url=<?=$srow["url"]?>" style="text-decoration:none;" target="_blank">
							<?=$srow["job_title"].'/'.$srow["job"]?> ( <?=$srow["job_cat"]?> ),<?=$srow["location"].', '.$srow["sub_location"]?>
						</a>
						<form action="php/job.php" method="POST">
							<input type="hidden" name="job_post_id" value="<?=$srow["job_post_id"]?>">
							<select name="jobclosestatus" class="form-control1 btn-<?=(($srow["status"]=='1')?'success':'danger')?> pull-right" style="border-radius:20px;" onchange="submit();">
								<option value="1" <?=(($srow["status"]=='1')?'selected':'')?> style="background-color:#fff;color:green;">Open</option>
								<option value="0" <?=(($srow["status"]=='0')?'selected':'')?> style="background-color:#fff;color:red;">Close</option>
							</select>
						</form>
					</h5>
				</div>
				<div class="col-md-12">
					<div class="col-md-9 apjob_container">
						<div class="col-md-12">
							<div class="col-md-6 apjob_incontainer">
								<div class="col-md-12 apjob_subcontainer">
									<div class="col-md-6 text-center apjob_subincontainer1">
										<span><i class="fas fa-flask"></i></span><br>
										<span>Experiance</span><br>
										<span><?=$srow["exp_min"].'-'.$srow["exp_max"]?>- years</span>
									</div>
									
									<div class="col-md-6 text-center apjob_subincontainer1">
										<span><i class="fas fa-rupee-sign"></i></span><br>
										<span>Monthly</span><br>
										<span><?=$srow["salary_min"].'-'.$srow["salary_max"]?></span>
									</div>
								</div>
							</div>
							<div class="col-md-6 apjob_sec_container">
								<div class="col-md-12 apjob_sec_incontainer">
									<div class="col-md-6 text-center apjob_subincontainer1">
										<span><i class="fa fa-clock"></i></span><br>
										<span >Shift Timing</span><br>
										<span><?=$srow["work_shifts"]?></span>
									</div>
									
									<div class="col-md-6 text-center">
										<span><i class="far fa-building"></i></span><br>
										<span >Compony</span><br>
										<span><?=$srow["company_name"]?></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 apjob_bottom">
								<div class="col-md-1">
									<span><i class="fas fa-snowflake"></i></span>
								</div>
								<div class="col-md-11">
									<span>Keyskills-</span>
									<span><?=$srow["job_desc"]?></span>
								</div>	
							</div>
							<div class="col-md-12">
								<div class="col-md-1 apjob_inbottom">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="col-md-11 apjob_inbottom">
									<span> <?=$srow["location"].', '.$srow["sub_location"]?></span>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="1apply_box2 row">
							<div class="row apjob_subbottom">
								<div class="col-md-12">
									<span>Posted by Individual<br>
										<?=date("d M Y, h:i A",strtotime($srow["add_date"]))?>
									</span>
								</div>
								
								<!--div class="col-md-12 apjob_subinbottom">
									<i class="fa fa-check-circle"></i><span>Phone Verified</span>
								</div-->
								<?php
								$can_sql = mysqli_query($db,"select * from cj_apply_job where job_post_id='".$srow['job_post_id']."'");
								if(mysqli_num_rows($can_sql)>0){
									?>
									<div class="col-md-12">
										<a href="employer-apply-job-view.php?job_post_id=<?=$srow['job_post_id']?>" class="btn btn-primary btn-sm btn-block"><?= mysqli_num_rows($can_sql);?> Candidates Applied</a>
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}
?>
