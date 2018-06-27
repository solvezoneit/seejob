				<div class="col-md-3 apply_box 1filter_box sticky1" style="position:sticky;top:80px;padding-left:0px;padding-right:0px;padding-top:0px;">
					<form class="example" action="" method="GET">
						<div id="accordion" class="panel panel-primary behclick-panel" style="border:1px solid #;">
							<div class="panel-heading">
								<h3 class="panel-title">Search Filter Job</h3>
							</div>
							<div class="panel-body" >
								<!--div class="panel-heading " >
									<h4 class="panel-title1">
										<a data-toggle="collapse" href="#collapse00">
											<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Salary Per Month
										</a>
									</h4>
								</div>
								<div id="collapse00" class="panel-collapse collapse in" >
									
								</div-->
								<div class="panel-heading " >
									<h4 class="panel-title1">
										<a data-toggle="collapse" href="#collapse0">
											<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Salary Per Month
										</a>
									</h4>
								</div>
								<div id="collapse0" class="panel-collapse collapse in" >
									<ul class="list-group">
										<li class="list-group-item">
											<div class="radio">
												<label>
													<input type="radio" name="salary" value="0-1000" <?=((@$_REQUEST['salary']=='0-1000')?'checked':'')?> onChange="submit();" >
													<i class="fa fa-rupee-sign"></i> 0 - <i class="fa fa-rupee-sign"></i> 10000
												</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="radio" >
												<label>
													<input type="radio" name="salary" value="10000-15000" <?=((@$_REQUEST['salary']=='10000-15000')?'checked':'')?> onChange="submit();" >
													<i class="fa fa-rupee-sign"></i> 10,000 - <i class="fa fa-rupee-sign"></i> 15,000
												</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="radio"  >
												<label>
													<input type="radio" name="salary" value="15000-20000" <?=((@$_REQUEST['salary']=='15000-20000')?'checked':'')?> onChange="submit();" >
													<i class="fa fa-rupee-sign"></i> 15,000 - <i class="fa fa-rupee-sign"></i> 20,000
												</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="radio"  >
												<label>
													<input type="radio" name="salary" value="20000-30000" <?=((@$_REQUEST['salary']=='20000-30000')?'checked':'')?> onChange="submit();" >
													<i class="fa fa-rupee-sign"></i> 20,000 - <i class="fa fa-rupee-sign"></i> 30,000
												</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="radio"  >
												<label>
													<input type="radio" name="salary" value="30000-40000" <?=((@$_REQUEST['salary']=='30000-40000')?'checked':'')?> onChange="submit();" >
													<i class="fa fa-rupee-sign"></i> 30,000 - <i class="fa fa-rupee-sign"></i> 40,000
												</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="radio"  >
												<label>
													<input type="radio" name="salary" value="40000-500000" <?=((@$_REQUEST['salary']=='40000-500000')?'checked':'')?> onChange="submit();" >
													More Than <i class="fa fa-rupee-sign"></i> 40000
												</label>
											</div>
										</li>
									</ul>
								</div>

								<div class="panel-heading " >
									<h4 class="panel-title1">
										<a data-toggle="collapse" href="#collapse01">
											<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Job Type
										</a>
									</h4>
								</div>
								<div id="collapse01" class="panel-collapse collapse in" >
									<ul class="list-group">
									<?php
										if(isset($_REQUEST['job_type'])){ 
											foreach($_REQUEST['job_type'] as $job_typess)
											{ @$job_types .= "'".$job_typess."',"; }
											$job_types = trim($job_types,',');
										}
										$job_type = mysqli_query($db,"select * from cj_job_post GROUP BY job_type");
										while($get_job_type = mysqli_fetch_array($job_type))
										{
											?>
											<li class="list-group-item">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="job_type[]" value="<?=$get_job_type['job_type'];?>" <?=((@$_REQUEST['job_type']==$get_job_type['job_type'])?'checked':'')?> onChange="submit();" <?php if(strpos(@$job_types,$get_job_type['job_type'])!==false){ echo 'checked'; } ?>  >
														<?=$get_job_type['job_type'];?>
													</label>
												</div>
											</li>
											<?php
										}
									?>
									</ul>
								</div>

								<div class="panel-heading " >
									<h4 class="panel-title1">
										<a data-toggle="collapse" href="#collapse1">
											<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Company
										</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in" >
									<ul class="list-group">
									<?php
										if(isset($_REQUEST['company_name'])){ 
											foreach(@$_REQUEST['company_name'] as $company_namess)
											{ @$company_names .= "'".$company_namess."',"; }
											$company_names = trim($company_names,',');
										}
										$company_name = mysqli_query($db,"select * from cj_job_post GROUP BY company_name");
										while($get_company_name = mysqli_fetch_array($company_name))
										{
											?>
											<li class="list-group-item">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="company_name[]" value="<?=$get_company_name['company_name'];?>" <?=((@$_REQUEST['company_name']==$get_company_name['company_name'])?'checked':'')?> onChange="submit();" <?php if(strpos(@$company_names,$get_company_name['company_name'])!==false){ echo 'checked'; } ?>  >
														<?=$get_company_name['company_name'];?>
													</label>
												</div>
											</li>
											<?php
										}
									?>
									</ul>
								</div>
								<div class="panel-heading" >
									<h4 class="panel-title1">
										<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Shift</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse in">
									<ul class="list-group">
									<?php
										if(isset($_REQUEST['work_shifts'])){ 
											foreach(@$_REQUEST['work_shifts'] as $work_shiftsss)
											{ @$work_shiftss .= "'".@$work_shiftsss."',"; }
											@$work_shiftss = trim(@$work_shiftss,',');
										}
										$shift = mysqli_query($db,"select * from cj_job_post GROUP BY work_shifts");
										while($get_shift = mysqli_fetch_array($shift))
										{
											?>
											<li class="list-group-item">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="work_shifts[]" value="<?=$get_shift["work_shifts"]?>" <?=((@$_REQUEST['work_shifts']==$get_shift['work_shifts'])?'checked':'')?> onChange="submit();" <?php if(strpos(@$work_shiftss,$get_shift['work_shifts'])!==false){ echo 'checked'; } ?>  >
														<?=$get_shift["work_shifts"]?>
													</label>
												</div>
											</li>
											<?php
										}
									?>
									</ul>
								</div>
								<div class="panel-heading" >
									<h4 class="panel-title1">
										<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Location</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse in">
								<!--div id="collapse2" class="panel-collapse collapse"--><!--auto close-->
									<ul class="list-group">
									<?php
										if(isset($_REQUEST['location'])){ 
											foreach(@$_REQUEST['location'] as $locationss)
											{ @$locations .= "'".$locationss."',"; }
											$locations = trim($locations,',');
										}
										$location = mysqli_query($db,"select * from cj_job_post GROUP BY location");
										while($get_location = mysqli_fetch_array($location))
										{
											?>
											<li class="list-group-item">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="location[]"  value="<?=$get_location['location'];?>" <?php if(@$_REQUEST['location']==$get_location['location']){echo"checked";}?> onChange="submit();" <?php if(strpos(@$locations,$get_location['location'])!==false){ echo 'checked'; } ?>  >
														<?=$get_location['location'];?>
													</label>
												</div>
											</li>
											<?php
										}
									?>
									</ul>
								</div>
							</div>
						</div>
					</form>
				</div>

				
				
				<!--div class="col-md-3 filter_box">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
						  <div class="col-md-12">
							<h4 style="color:#fff;padding:10px;background-color:#2e6da4;">Filter - for quick search </h4>
						  </div>
						</div>
						<div class="panel-group" id="accordion" style="display:none;">

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Jobs</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
									
											<div class="form-group1">
												<input type="text" placeholder="Search job" name="search" id="myInput" onkeyup="myFunction()" style="width:100%;padding:6px;">
												<div class="col-md-12 1filter_role" style="height:250px;overflow-y:scroll;">
													<table id="myTable" border="0" style="width:100%;">
													<?php
													$equerycat = mysqli_query($db,"select * from cj_job_post group by job_cat");
													while($srowcat = mysqli_fetch_array($equerycat))
													{
														?>
														<tr><td>
														<div>
															<div class="radio">
																<label  class="post_li">
																	<input type="radio" name="catname" <?php $fgfd = str_replace('-----',' ',@$_REQUEST['job_cat']); (($fgfd==$srowcat['job_cat'])? ' checked':'')?> value="<?=str_replace(' ','-----',$srowcat['job_cat']);?>"><?=$srowcat['job_cat']?>
																</label>
															</div>
														</div>
														<div class="post_div hideoptradio" style="display:none;" id="<?=str_replace(' ','-----',$srowcat['job_cat']);?>">
															<div>
															<?php
															$equeryjob = mysqli_query($db,"select * from cj_job_post where job='".$srowcat['job']."' group by job");
															while($srowjob = mysqli_fetch_array($equeryjob))
															{
																?>
																<label class="box"><?=$srowjob['job']?>
																	<input type="checkbox" >
																	<span class="checkmark"></span>
																</label>
																<?php
															}?>
															</div>
														</div>
														</td></tr>
														<?php
													}?>
													</table>
												</div>
											</div>
										
										
									</div>
								</div>
							</div>
						</div>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Company</a>
									</h4>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse">
									<div class="panel-body">
										<?php
										$equerycomp = mysqli_query($db,"select * from cj_job_post where company_name!='' group by company_name");
										while($srowcomp = mysqli_fetch_array($equerycomp))
										{
											?><label><input type="radio" name="company_name" <?=((@$_REQUEST['company_name']==$srowcomp['company_name'])? ' selected':'')?> value="<?=$srowcomp['company_name']?>">&nbsp;&nbsp;<span><?=$srowcomp['company_name']?></span></label><br><?php
										}?>
									</div>
								</div>
							</div>
						</div>
	
						<div class="form-group">        
						  <div class="col-md-12">
							<div class="location-padding">
								<div>
									<h4>Location</h4>
									<hr class="filter_hr">
									<div>
										<select class="form-control js-example-basic-single livesearch_location" name="location" onchange="fetch_select_location(this.value);">
											<option value="">Select location </option>
											<?php
											$equeryloc = mysqli_query($db,"select location from cj_job_post group by location");
											while($srowloc = mysqli_fetch_array($equeryloc))
											{
												?><option <?=((@$_REQUEST['location']==$srowloc['location'])? ' selected':'')?> value="<?=$srowloc['location']?>"><span><?=$srowloc['location']?></span></option><?php
											}?>
										</select>
										<script>
										  $(".livesearch_location").chosen();
										</script>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="form-group">        
						  <div class="col-md-12">
							<div class="location-padding">
								<div>
									<h4>Sub Location</h4>
									<hr class="filter_hr">
									<div>
										<select name="sub_location" id="new_select_location" class="form-control js-example-basic-single 1livesearch_sublocation" >
											<option value="">Select Sub location</option>
										</select>
										<script>
											$(".livesearch_sublocation").chosen();
										</script>
									</div>
								</div>
							</div>
						  </div>
						</div>

						<div class="col-md-12"style="padding:0px;">
							<h4>Salary</h4>
							<hr class="filter_hr">
							<div class="col-md-6 post_col6" style="padding:0px;">
								<div>
									<label>Min</label>
									<select class="post_select" name="salary_min" onchange="fetch_select_salary(this.value);">
										<option value="">Select Salary</option>
										<?php
										$am = "000";
										for($s=8; $s<50; $s++)
										{
											?><option <?=((@$_REQUEST['salary_min']==$s.$am)? ' selected':'')?> value='<?=$s.$am?>'><?=$s.$am?></option><?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6 post_col6" style="padding:0px;">
								<div>
									<label>Max</label>
									<select class="post_select" name="salary_max" id="new_select_salary">
										<option value="">Select Salary</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12"style="padding:0px;">
							<h4>Experiance</h4>
							<hr class="filter_hr">
							<div class="col-md-6 post_col6" style="padding:0px;">
								<div>
									<label>Min (in Year)</label>
									<select class="post_select" name="exp_min" onchange="fetch_select(this.value);" >
										<option value="">Select</option>
										<?php
										for($i=0; $i<20; $i++)
										{
											?><option <?=((@$_REQUEST['exp_min']==$i)? ' selected':'')?> value='<?=$i;?>' ><?=$i;?></option><?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6 post_col6" style="padding:0px;">
								<div>
									<label>Max (in Year)</label>
									<select class="post_select" name="exp_max" id="new_select" >
										<option value="">Select</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12"style="padding:0px; margin-top:10px;">
							<div class="btn-group btn-group-justified">
								<div class="btn-group">
								  <button type="button" class="btn btn-warning">Reset</button>
								</div>
								<div class="btn-group">
								  <button type="submit" class="btn btn-info">Update</button>
								</div>
							</div>
						</div>
					</form> 
				</div-->
				