<?php
ob_start();
include 'api/db_config.php';
session_start();
if($_SESSION['FLAG']=='1')
{
	?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
			<meta charset="utf-8" />
			<title>Advertise - Manage-Advertise</title>

			<meta name="description" content="Common form elements and layouts" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

			<!-- bootstrap & fontawesome -->
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

			<!-- page specific plugin styles -->
			<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
			<link rel="stylesheet" href="assets/css/chosen.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
			<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

			<!-- text fonts -->
			<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

			<!-- ace styles -->
			<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

			<!--[if lte IE 9]>
				<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
			<![endif]-->
			<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
			<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

			<!--[if lte IE 9]>
			  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
			<![endif]-->

			<!-- inline styles related to this page -->

			<!-- ace settings handler -->
			<script src="assets/js/ace-extra.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

			<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

			<!--[if lte IE 8]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
			<![endif]-->
<script>
	$(document).ready(function(e){
		$("#form").on('submit', function(e){
			e.preventDefault();
			$.ajax({
			    type: 'POST',
			    url: 'php/uploaddata.php',
			    data: new FormData(this),
			    contentType: false,
			    cache: false,
			    processData:false,
			    beforeSend: function()
			    {
			        $('#submit').attr("disabled","disabled");
			        $('#form').css("opacity",".5");
			    },
				success: function(msg){
				    $('.statusMsg').html('');
				    if(msg == 'ok'){
				        $('#form')[0].reset();
				        $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Form data submitted successfully.</span>');
				        window.open('add_advertise.php','_self');
				    }else{
				        $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Some problem occurred, please try again.</span>');
				    }
				    $('#form').css("opacity","");
				    $("#submit").removeAttr("disabled");
				}
		    });
    	});
    
	    //file type validation
	    $("#file").change(function() {
	        var file = this.files[0];
	        var imagefile = file.type;
	        var match= ["image/jpeg","image/png","image/jpg"];
	        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
	            alert('Please select a valid image file (JPEG/JPG/PNG).');
	            $("#file").val('');
	            return false;
	        }
	    });
	});
</script>
			
			
			
		</head>

		<body class="no-skin">
			<?php
			include 'includes/header.php';
			?>

			<div class="main-container ace-save-state" id="main-container">
				<script type="text/javascript">
					try{ace.settings.loadState('main-container')}catch(e){}
				</script>

				<?php
				include 'includes/left-sidebar.php';
				?>

				<div class="main-content">
					<div class="main-content-inner">
						<div class="breadcrumbs ace-save-state" id="breadcrumbs">
							<ul class="breadcrumb">
								<li>
									<i class="ace-icon fa fa-home home-icon"></i>
									<a href="#">Home</a>
								</li>

								<li>
									<a href="#">Advertise</a>
								</li>
								<li class="active">Add Advertise</li>
							</ul><!-- /.breadcrumb -->

							<div class="nav-search" id="nav-search">
								<form class="form-search">
									<span class="input-icon">
										<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
										<i class="ace-icon fa fa-search nav-search-icon"></i>
									</span>
								</form>
							</div><!-- /.nav-search -->
						</div>

						<div class="page-content">
							<?php include"includes/setting.php";?>
							<div class="page-header">
								<h1>
									<a onclick="history.back()"><button type="button" class="btn btn-primary">
									<i class="fa fa-arrow-left"></i>
									</button></a>
									Manage Advertise
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										Add Advertise
									</small>
									<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create-item">Add Advertise</button>
								</h1>
							</div><!-- /.page-header -->						

							<div>		
							<form method="GET" action="#">
								<span class="input-icon">
									<!-- <label>Search data</label> -->
									<input type="text" name="search" value="<?=@$_REQUEST['search']?>" placeholder="Search job category" class="nav-search-input" id="nav-search-input" autocomplete="off">
									<i class="ace-icon fa fa-search nav-search-icon"></i>
									</span>
								
							</form></div>
							<div style="height: 10px;"></div>
							
							<div class="panel1 panel-primary">
								<div class="panel-heading">Show Advertise</div>
								<div class="panel-body1 table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
											<th>Id</th>
											<th>Heading</th>
											<th>Name</th>
											<th>Email</th>	
											<th>Add Date</th>
											<th>Mod Date</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Post location</th>
											<th>Link</th>
											<th>Status</th>
											<th>Images</th>
											<th>Edit</th>
											<th>Delete</th>										
											
											</tr>
										</thead>

										
										<tbody>
											<!-- Fetch advertisement record -->
										<?php
										if(@$_REQUEST["change_statuss"]=='1' && isset($_REQUEST["status"]))
										{
											mysqli_query($db,"update cj_advertise set status='0' where id='".$_REQUEST["status"]."'");
											header("location:add_advertise.php");
											exit();
										}
										if(@$_REQUEST["change_statuss"]=='0' && isset($_REQUEST["status"]))
										{
											mysqli_query($db,"update cj_advertise set status='1' where id='".$_REQUEST["status"]."'");
											header("location:add_advertise.php");
											exit();
										}


										if(!isset($_REQUEST['per_page'])){
											$perpage = 10;
										}else{
											$perpage = $_REQUEST['per_page'];
										}
										if(isset($_GET['page']) & !empty($_GET['page'])){
											$curpage = $_GET['page'];
										}else{
											$curpage = 1;
										}
										$start = ($curpage * $perpage) - $perpage;
										$sql_page = "SELECT * FROM cj_advertise ";
										$sql_page_run = mysqli_query($db, $sql_page);
										$total_page = mysqli_num_rows($sql_page_run);

										$endpage = ceil($total_page/$perpage);
										$startpage = 1;
										$nextpage = $curpage + 1;
										$previouspage = $curpage - 1;

										$query = "SELECT * FROM `cj_advertise` where
										heading LIKE '%".@$_REQUEST["search"]."%' OR
										name LIKE '%".@$_REQUEST["search"]."%' OR
										email LIKE '%".@$_REQUEST["search"]."%' OR
										upload_time LIKE '%".@$_REQUEST["search"]."%' OR
										modification_time LIKE '%".@$_REQUEST["search"]."%' OR
										startdate LIKE '%".@$_REQUEST["search"]."%' OR 
										advertise_location LIKE '%".@$_REQUEST["search"]."%' OR 
										enddate LIKE '%".@$_REQUEST["search"]."%' OR 
										link LIKE '%".@$_REQUEST["search"]."%' LIMIT $start, $perpage";
										
										$run_query = mysqli_query($db, $query);
										while($row = mysqli_fetch_array($run_query))
										{
											$id = $row['id'];
											$heading = $row['heading'];
											$name= $row['name'];
											$email = $row['email'];
											$add_date= $row['upload_time'];
											$mod_date= $row['modification_time'];
											$startdate = $row['startdate'];
											$enddate = $row['enddate'];
											$ad_location =$row['advertise_location'];
											$link =$row['link'];
											$status =$row['status'];
											$image = $row['image'];								


										 ?>
											<tr>
												<td><?php echo $id; ?></td>
												<td><?php echo $heading; ?></td>
												<td><?php echo $name; ?></td>
												<td><?php echo $email; ?></td>
												<td><?php echo $add_date; ?></td>
												<td><?php echo $mod_date; ?></td>
												
												<td><?php echo $startdate; ?></td>
												<td><?php echo $enddate; ?></td>
												<td><?php echo $ad_location; ?></td>
												<td><?php echo $link; ?></td>
												<td>
												<div class="col-xs-3">
												<?php 
												if($status=='1')
												{
												?><a href="?status=<?=$id;?>&&change_statuss=<?=$status?>" class="btn btn-primary btn-xs"><i class="fa fa-check"></i></a><?php
												}else{
												?><a href="?status=<?=$id;?>&&change_statuss=<?=$status?>" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i></a><?php
												}?>
												</div>
												</td>
												<?php
												if (!file_exists("../cjobadmin/images/add/".$image) || $image=='')
												{?>
													<td><img src="../image/dp/profile.png ?>" height="60" width="100"></td>
													<?php
												}else { ?>
												<td><img src="images/add/<?php echo "$image" ?>" height="60" width="100"></td>
												<?php	} ?>
												
												<td><a href="" class="btn btn-success btn-xs" data-toggle="modal" data-target="#update-model<?php echo "$id"; ?>"><i class="fa fa-pencil"></i> Edit</a></td>
												<td><a href="php/uploaddata.php?delete=<?php echo "$id"; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i> Delete</a></td>

		
												<!-- ......................Update Advertise..................... -->

												<div class="modal fade" id="update-model<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												  <div class="modal-dialog" role="document">
													<div class="modal-content">
													  <div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h4 class="modal-title" id="myModalLabel">Update Advertise</h4>
													  </div>
													  <div class="modal-body">



															<form data-toggle="validator" id="update-form" method="POST" enctype="multipart/form-data">
																<input type="hidden" name="id_val" value="<?php echo "$id"; ?>">
																<div class="form-group">
																	<label class="control-label" for="title">Heading:</label>
																	<input type="text" name="heading" id="heading" class="form-control" data-error="Please Enter Heading" required="" value="<?php echo "$heading";?>">
																	<div class="help-block with-errors"></div>
																</div>

																<div class="form-group">
																	<label class="control-label" for="title">Name:</label>
																	<input type="name" name="name" id="name" class="form-control" data-error="Please enter name." required value="<?php echo "$name" ?>" />
																	<div class="help-block with-errors"></div>
																</div>
																<div class="form-group">
																	<label class="control-label" for="title">Email:</label>
																	<input type="email" required="" name="email" id="email" class="form-control" data-error="Please enter email." value="<?php echo "$email"; ?>" />
																	<div class="help-block with-errors"></div>
																</div>
																<div class="form-group">
																	<label class="control-label" for="title">Start Date:</label>
																	<input type="date" name="startdate" id="startdate" class="form-control" data-error="Please enter Start Date." value="<?php echo "$startdate" ?>"/>
																	<div class="help-block with-errors"></div>
																</div>
																<div class="form-group">
																	<label class="control-label" for="title">End Date:</label>
																	<input type="date" name="enddate" required="" id="enddate" class="form-control" data-error="Please enter End Date." value="<?php echo "$enddate"; ?>" />
																	<div class="help-block with-errors"></div>
																</div>
																<div class="form-group">
																<label class="control-label" for="post location">Select Post Location</label>

																
																<select class="form-control" id="ad_location" name="ad_location" data-placeholder="Choose a State...">
																	<option value="" <?php if($ad_location == "") echo "selected"; ?>>Select Position</option>
																	<option value="index" <?php if($ad_location == "index") echo "selected"; ?> >index</option>
																	<option value="admin" <?php if($ad_location == "admin") echo "selected"; ?> >admin</option>
																	<option value="user" <?php if($ad_location == "user") echo "selected"; ?> >user</option>
																	<option value="employer" <?php if($ad_location == "employer") echo "selected"; ?> >employer</option>
																	<option value="applicant" <?php if($ad_location == "applicant") echo "selected"; ?> >applicant</option>
																			
																</select>
																</div>
																<div class="form-group">
																	<label class="control-label" for="title">Link:</label>
																	<input type="url" name="link" id="link" class="form-control" data-error="Please enter Link." required value="<?php echo $link;?>" />
																	<div class="help-block with-errors"></div>
																</div>		

																			
																<!-- <div class="form-group">
																	<div class="col-xs-12">
																		<input type="file" id="file" name="file" class="form-control" />
																	</div>
																</div> -->

																<div class="form-group">
																	<label class="control-label" for="title">Upload image:</label>

																	<img id="img<?=$id;?>" src="images/add/<?php echo $image; ?>" height="60" width="100" onError="this.src='../image/dp/profile.png'"/>

																	<input class="form-control" type="file" name="image" id="file_name<?=$id;?>" alt="<?=$id;?>" accept="image/*" />
																	<script>
																	$("#file_name<?=$id;?>").on("change", function()
																		{
																			var files = !!this.files ? this.files : [];
																			if (!files.length || !window.FileReader) return;
																			if (/^image/.test( files[0].type)){
																				var reader = new FileReader();
																				reader.readAsDataURL(files[0]);
																				reader.onloadend = function(){ 
																					$("#img<?=$id;?>").attr('src',this.result);
																				}
																			}
																		});
																	</script>
																	
																</div>
																<label>
																	<!-- <input type="checkbox" name="file-format" id="id-file-format" class="ace"/> -->
																	<span class="lbl"> Allow only images</span>
																</label>								
																
																<div class="form-group">
																	<input type="submit" name="update" id="update" class="btn btn-success">
																	
																</div>
															</form>
															<p class="statusMsg1"></p>
														
													  </div>
													</div>
												  </div>
												</div>										

											</tr>
										
										</tbody>
									<?php } ?>
									</table>
									<ul id="pagination" class="pagination-sm"></ul>
								</div>


								<nav aria-label="Page navigation">
								<form method="GET">	
								<select name="per_page" onchange="submit();">
									<option <?=((@$_REQUEST['per_page']=='10')?'selected':'')?> value="10">10</option>
									<option <?=((@$_REQUEST['per_page']=='25')?'selected':'')?> value="25">25</option>
									<option <?=((@$_REQUEST['per_page']=='50')?'selected':'')?> value="50">50</option>
									<option <?=((@$_REQUEST['per_page']=='100')?'selected':'')?> value="100">100</option>
								</select>	
								</form>
								  <ul class="pagination pull-right">
								  <?php if($curpage != $startpage){ ?>
								    <li class="page-item">
								      <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
								        <span aria-hidden="true">&laquo;</span>
								        <span class="sr-only">First</span>
								      </a>
								    </li>
								    <?php } ?>
								    <?php if($curpage){ ?>
								    <li class="page-item">
								    	<a class="page-link" href="?page=<?php echo $previouspage ?>" tabindex="-1" aria-label="Previous">
								    	<span aria-hidden="true">&lt;</span>
								        <span class="sr-only">previous</span>
								    </a></li>
								    <?php } ?>
								    <?php if($curpage >= 2){ ?>
								    <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
								    <?php } ?>
								    <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
								    <?php if($curpage != $endpage){ ?>
								    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
								    <?php if($curpage){ ?>
								    <li class="page-item">
								    	<a class="page-link" href="?page=<?php echo $nextpage ?>" tabindex="-1" aria-label="Previous">
								    	<span aria-hidden="true">&gt;</span>
								        <span class="sr-only">Next</span>
								    </a></li>
								    <?php } ?>
								    <li class="page-item">
								      <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
								        <span aria-hidden="true">&raquo;</span>
								        <span class="sr-only">Last</span>
								      </a>
								    </li>
								    <?php } ?>
								  </ul>
								</nav>
							</div>

							

							<!-- Create Item Modal -->
							<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Add Advertise</h4>
								  </div>

								  <div class="modal-body">


									
										<form data-toggle="validator" id="form" action="" method="POST" enctype="multipart/form-data">

											<div class="form-group">
												<label class="control-label" for="title">Heading:</label>
												<input type="text" name="heading" id="heading" class="form-control" data-error="Please Enter Heading" required="">
												<div class="help-block with-errors"></div>
											</div>

											<div class="form-group">
												<label class="control-label" for="title">Name:</label>
												<input type="name" name="name" id="name" class="form-control" data-error="Please enter name." required />
												<div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<label class="control-label" for="title">Email:</label>
												<input type="email" name="email" id="email" class="form-control" data-error="Please enter email." required />
												<div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<label class="control-label" for="title">Start Date:</label>
												<input type="date" name="startdate" id="startdate" class="form-control" data-error="Please enter Start Date." required />
												<div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<label class="control-label" for="title">End Date:</label>
												<input type="date" name="enddate" id="enddate" class="form-control" data-error="Please enter End Date." required />
												<div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
											<label class="control-label" for="post location">Select Post Location</label>

											
											<select class="form-control" id="ad_location" name="ad_location" data-placeholder="Choose a State...">
											<option value="">Select Position</option>
											<option value="index">index</option>
											<option value="admin">admin</option>
											<option value="user">user</option>
											<option value="employer">employer</option>
											<option value="applicant">applicant</option>
														
											</select>
											</div>
											<div class="form-group">
												<label class="control-label" for="title">Link:</label>
												<input type="text" name="link" id="link" class="form-control" data-error="Please enter Link." required />
												<div class="help-block with-errors"></div>
											</div>									

											
														
											<!-- <div class="form-group">
												<div class="col-xs-12">
													<input type="file" id="file" name="file" class="form-control" />								
												</div>
											</div> -->

											<div class="form-group">
												<label class="control-label" for="title">Upload image:</label>
													<input multiple="" class="form-control" type="file" name="file" id="id-input-file-3" />
												
											</div>
											<label>													
												<span class="lbl"> Allow only images</span>
											</label>								
											<div class="form-group">
												<input type="submit" name="submit" id="submit" class="btn btn-success">
											</div>
										</form>
										<p class="statusMsg"></p>							  	
								  </div>
								</div>
							  </div>
							</div>



			
						</div><!-- /.page-content -->
					</div>
				</div><!-- /.main-content -->

				<?php
				include 'includes/footer.php';
				?>

				<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
					<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
				</a>
			</div><!-- /.main-container -->
			<!-- ajax base location start -->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
			<!-- ajax base location end -->
			
			
			<!-- basic scripts -->

			<!--[if !IE]> -->
			<script src="assets/js/jquery-2.1.4.min.js"></script>

			<!-- <![endif]-->

			<!--[if IE]>
			<script src="assets/js/jquery-1.11.3.min.js"></script>
			<![endif]-->

			<!-- ajax base location start -->
			<!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
			<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script-->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
			<script type="text/javascript" src="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
			<link href="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

			<script type="text/javascript">
				//var url = "http://localhost/seejob.in/cjobadmin/";
				var url = "http://seejob.in/cjobadmin/";
			</script>
			<style type="text/css">
				.modal-dialog, .modal-content{
				z-index:1051;
				}
			</style>

			<script src="js/item-ajax.js"></script>
			<!-- ajax base location end -->
			<script type="text/javascript">
				if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
			</script>
			<script src="assets/js/bootstrap.min.js"></script>

			<!-- page specific plugin scripts -->

			<!--[if lte IE 8]>
			  <script src="assets/js/excanvas.min.js"></script>
			<![endif]-->
			<script src="assets/js/jquery-ui.custom.min.js"></script>
			<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
			<script src="assets/js/chosen.jquery.min.js"></script>
			<script src="assets/js/spinbox.min.js"></script>
			<script src="assets/js/bootstrap-datepicker.min.js"></script>
			<script src="assets/js/bootstrap-timepicker.min.js"></script>
			<script src="assets/js/moment.min.js"></script>
			<script src="assets/js/daterangepicker.min.js"></script>
			<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
			<script src="assets/js/bootstrap-colorpicker.min.js"></script>
			<script src="assets/js/jquery.knob.min.js"></script>
			<script src="assets/js/autosize.min.js"></script>
			<script src="assets/js/jquery.inputlimiter.min.js"></script>
			<script src="assets/js/jquery.maskedinput.min.js"></script>
			<script src="assets/js/bootstrap-tag.min.js"></script>
			
			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<!-- <script>
				var j = 1;
				while(j<=10)
				{
					$("#file_name"+j+"").on("change", function()
					{
						var alt = $(this).attr("alt");
						var files = !!this.files ? this.files : [];
						if (!files.length || !window.FileReader) return;
						if (/^image/.test( files[0].type)){
							var reader = new FileReader();
							reader.readAsDataURL(files[0]);
							reader.onloadend = function(){ 
								$("#img"+alt+"").attr('src',this.result);
							}
						}
					});
					j++;
				}
			</script>	 -->
			<script>
				jQuery(function($) {
					$('#id-disable-check').on('click', function() {
						var inp = $('#form-input-readonly').get(0);
						if(inp.hasAttribute('disabled')) {
							inp.setAttribute('readonly' , 'true');
							inp.removeAttribute('disabled');
							inp.value="This text field is readonly!";
						}
						else {
							inp.setAttribute('disabled' , 'disabled');
							inp.removeAttribute('readonly');
							inp.value="This text field is disabled!";
						}
					});
				
				
					if(!ace.vars['touch']) {
						$('.chosen-select').chosen({allow_single_deselect:true}); 
						//resize the chosen on window resize
				
						$(window)
						.off('resize.chosen')
						.on('resize.chosen', function() {
							$('.chosen-select').each(function() {
								 var $this = $(this);
								 $this.next().css({'width': $this.parent().width()});
							})
						}).trigger('resize.chosen');
						//resize chosen on sidebar collapse/expand
						$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
							if(event_name != 'sidebar_collapsed') return;
							$('.chosen-select').each(function() {
								 var $this = $(this);
								 $this.next().css({'width': $this.parent().width()});
							})
						});
				
				
						$('#chosen-multiple-style .btn').on('click', function(e){
							var target = $(this).find('input[type=radio]');
							var which = parseInt(target.val());
							if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
							 else $('#form-field-select-4').removeClass('tag-input-style');
						});
					}
				
				
					$('[data-rel=tooltip]').tooltip({container:'body'});
					$('[data-rel=popover]').popover({container:'body'});
				
					autosize($('textarea[class*=autosize]'));
					
					$('textarea.limited').inputlimiter({
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				
					$.mask.definitions['~']='[+-]';
					$('.input-mask-date').mask('99/99/9999');
					$('.input-mask-phone').mask('(999) 999-9999');
					$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
					$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
					$( "#input-size-slider" ).css('width','200px').slider({
						value:1,
						range: "min",
						min: 1,
						max: 8,
						step: 1,
						slide: function( event, ui ) {
							var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
							var val = parseInt(ui.value);
							$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
						}
					});
				
					$( "#input-span-slider" ).slider({
						value:1,
						range: "min",
						min: 1,
						max: 12,
						step: 1,
						slide: function( event, ui ) {
							var val = parseInt(ui.value);
							$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
						}
					});
				
					//"jQuery UI Slider"
					//range slider tooltip example
					$( "#slider-range" ).css('height','200px').slider({
						orientation: "vertical",
						range: true,
						min: 0,
						max: 100,
						values: [ 17, 67 ],
						slide: function( event, ui ) {
							var val = ui.values[$(ui.handle).index()-1] + "";
				
							if( !ui.handle.firstChild ) {
								$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
								.prependTo(ui.handle);
							}
							$(ui.handle.firstChild).show().children().eq(1).text(val);
						}
					}).find('span.ui-slider-handle').on('blur', function(){
						$(this.firstChild).hide();
					});
					
					
					$( "#slider-range-max" ).slider({
						range: "max",
						min: 1,
						max: 10,
						value: 2
					});
					
					$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
						// read initial values from markup and remove that
						var value = parseInt( $( this ).text(), 10 );
						$( this ).empty().slider({
							value: value,
							range: "min",
							animate: true
							
						});
					});
					
					$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
				
					
					$('#id-input-file-1 , #id-input-file-2').ace_file_input({
						no_file:'No File ...',
						btn_choose:'Choose',
						btn_change:'Change',
						droppable:false,
						onchange:null,
						thumbnail:false //| true | large
						//whitelist:'gif|png|jpg|jpeg'
						//blacklist:'exe|php'
						//onchange:''
						//
					});
					//pre-show a file name, for example a previously selected file
					//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
				
				
					$('#id-input-file-3').ace_file_input({
						style: 'well',
						btn_choose: 'Drop files here or click to choose',
						btn_change: null,
						no_icon: 'ace-icon fa fa-cloud-upload',
						droppable: true,
						thumbnail: 'small'//large | fit
						//,icon_remove:null//set null, to hide remove/reset button
						/**,before_change:function(files, dropped) {
							//Check an example below
							//or examples/file-upload.php
							return true;
						}*/
						/**,before_remove : function() {
							return true;
						}*/
						,
						preview_error : function(filename, error_code) {
							//name of the file that failed
							//error_code values
							//1 = 'FILE_LOAD_FAILED',
							//2 = 'IMAGE_LOAD_FAILED',
							//3 = 'THUMBNAIL_FAILED'
							//alert(error_code);
						}
				
					}).on('change', function(){
						//console.log($(this).data('ace_input_files'));
						//console.log($(this).data('ace_input_method'));
					});
					
					
					//$('#id-input-file-3')
					//.ace_file_input('show_file_list', [
						//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
						//{type: 'file', name: 'hello.txt'}
					//]);
				
					//dynamically change allowed formats by changing allowExt && allowMime function
					$('#id-file-format').removeAttr('checked').on('change', function() {
						var whitelist_ext, whitelist_mime;
						var btn_choose
						var no_icon
						if(this.checked) {
							btn_choose = "Drop images here or click to choose";
							no_icon = "ace-icon fa fa-picture-o";
				
							whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
							whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
						}
						else {
							btn_choose = "Drop files here or click to choose";
							no_icon = "ace-icon fa fa-cloud-upload";
							
							whitelist_ext = null;//all extensions are acceptable
							whitelist_mime = null;//all mimes are acceptable
						}
						var file_input = $('#id-input-file-3');
						file_input
						.ace_file_input('update_settings',
						{
							'btn_choose': btn_choose,
							'no_icon': no_icon,
							'allowExt': whitelist_ext,
							'allowMime': whitelist_mime
						})
						file_input.ace_file_input('reset_input');
						
						file_input
						.off('file.error.ace')
						.on('file.error.ace', function(e, info) {
						});
						
						/**
						file_input
						.off('file.preview.ace')
						.on('file.preview.ace', function(e, info) {
							console.log(info.file.width);
							console.log(info.file.height);
							e.preventDefault();//to prevent preview
						});
						*/
					
					});
				
					$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
					.closest('.ace-spinner')
					.on('changed.fu.spinbox', function(){
						//console.log($('#spinner1').val())
					}); 
					$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
					$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
					$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
				
					//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
					//or
					//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
					//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
				
				
					//datepicker plugin
					//link
					$('.date-picker').datepicker({
						autoclose: true,
						todayHighlight: true
					})
					//show datepicker when clicking on the icon
					.next().on(ace.click_event, function(){
						$(this).prev().focus();
					});
				
					//or change it into a date range picker
					$('.input-daterange').datepicker({autoclose:true});
				
				
					//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
					$('input[name=date-range-picker]').daterangepicker({
						'applyClass' : 'btn-sm btn-success',
						'cancelClass' : 'btn-sm btn-default',
						locale: {
							applyLabel: 'Apply',
							cancelLabel: 'Cancel',
						}
					})
					.prev().on(ace.click_event, function(){
						$(this).next().focus();
					});
				
				
					$('#timepicker1').timepicker({
						minuteStep: 1,
						showSeconds: true,
						showMeridian: false,
						disableFocus: true,
						icons: {
							up: 'fa fa-chevron-up',
							down: 'fa fa-chevron-down'
						}
					}).on('focus', function() {
						$('#timepicker1').timepicker('showWidget');
					}).next().on(ace.click_event, function(){
						$(this).prev().focus();
					});
					if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
					 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
					 icons: {
						time: 'fa fa-clock-o',
						date: 'fa fa-calendar',
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down',
						previous: 'fa fa-chevron-left',
						next: 'fa fa-chevron-right',
						today: 'fa fa-arrows ',
						clear: 'fa fa-trash',
						close: 'fa fa-times'
					 }
					}).next().on(ace.click_event, function(){
						$(this).prev().focus();
					});
					
				
					$('#colorpicker1').colorpicker();
					//$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
				
					$('#simple-colorpicker-1').ace_colorpicker();
					//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
					//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
					//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
					//picker.pick('red', true);//insert the color if it doesn't exist
				
				
					$(".knob").knob();
					
					
					var tag_input = $('#form-field-tags');
					try{
						tag_input.tag(
						  {
							placeholder:tag_input.attr('placeholder'),
							//enable typeahead by specifying the source array
							source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
							/**
							//or fetch data from database, fetch those that match "query"
							source: function(query, process) {
							  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
							  .done(function(result_items){
								process(result_items);
							  });
							}
							*/
						  }
						)
				
						//programmatically add/remove a tag
						var $tag_obj = $('#form-field-tags').data('tag');
						$tag_obj.add('Programmatically Added');
						
						var index = $tag_obj.inValues('some tag');
						$tag_obj.remove(index);
					}
					catch(e) {
						//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
						tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
						//autosize($('#form-field-tags'));
					}
					
					$('#modal-form input[type=file]').ace_file_input({
						style:'well',
						btn_choose:'Drop files here or click to choose',
						btn_change:null,
						no_icon:'ace-icon fa fa-cloud-upload',
						droppable:true,
						thumbnail:'large'
					})
					
					//chosen plugin inside a modal will have a zero width because the select element is originally hidden
					//and its width cannot be determined.
					//so we set the width after modal is show
					$('#modal-form').on('shown.bs.modal', function () {
						if(!ace.vars['touch']) {
							$(this).find('.chosen-container').each(function(){
								$(this).find('a:first-child').css('width' , '210px');
								$(this).find('.chosen-drop').css('width' , '210px');
								$(this).find('.chosen-search input').css('width' , '200px');
							});
						}
					})
					/**
					//or you can activate the chosen plugin after modal is shown
					//this way select element becomes visible with dimensions and chosen works as expected
					$('#modal-form').on('shown', function () {
						$(this).find('.modal-chosen').chosen();
					})
					*/
					$(document).one('ajaxloadstart.page', function(e) {
						autosize.destroy('textarea[class*=autosize]')
						
						$('.limiterBox,.autosizejs').remove();
						$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
					});
				
				});
			</script>
		</body>
	</html>


	<!-- ............... php code to update advertise .................... -->
	<?php
	if(isset($_POST['update']))
	{
		$heading= $_POST['heading'];
		$name = $_POST['name'];
		$email = $_POST['email'];    
		$startdate = $_POST['startdate'];
		$enddate= $_POST['enddate'];
		$ad_location = $_POST['ad_location'];
		$link = $_POST['link'];
		$id = $_POST['id_val'];


		if($_FILES["image"]["name"]!='')
		{
			$img_nm1=mysqli_fetch_array(mysqli_query($db,"select image from cj_advertise where id='$id'"));
			@unlink("images/add/".$img_nm1['image']);
			$imagename = $_FILES["image"]["name"];
			$image=rand()."_".strtolower($imagename);
			$bits = explode('.',$imagename);
			$file_ext=strtolower(end($bits));
			$expensions= array("jpg","jpeg","png","gif");
			if(in_array($file_ext,$expensions)=== false)
			{
				$_SESSION["err"] = "Please select a valid file format.<br>Extension not allowed, please choose a JPG,JPEG,PNG or GIF Images.";

				echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div>';
			}
			else
			{
				move_uploaded_file($_FILES["image"]["tmp_name"],"images/add/".$image);
			}	
		}
		else
		{
			$img_nm1=mysqli_fetch_array(mysqli_query($db,"select image from cj_advertise where id='$id'"));
			$image=$img_nm1['image'];
		}
		mysqli_query($db,"UPDATE cj_advertise SET 
		heading='$heading',
		name='$name',
		email='$email',
		modification_time=NOW(),
		startdate='$startdate',
		enddate='$enddate',
		advertise_location='$ad_location',
		link = '$link',
		image='$image' WHERE id='$id' ");
		echo "<script>alert('successfully updated')</script>";
		echo '<script>window.location="add_advertise.php"</script>';
	}
}
else
{
	header('location:index.php');
}
?>
