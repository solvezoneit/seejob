<?php
ob_start();
include 'api/db_config.php';
session_start();
if($_SESSION['FLAG']=='1')
{
	if(isset($_REQUEST['edit']))
	{			  
		$id=$_REQUEST['edit'];
		$sql=mysqli_query($db, "select * from cj_servicescategory where s_id='$id'");
		$row=mysqli_fetch_assoc($sql);
	}
	if(@$_POST['addservices']=='ADD')
	{			
		$s_name=$_REQUEST['s_name'];
		$icon=$_REQUEST['icon'];
		$title=$_REQUEST['title'];
		$keyword=$_REQUEST['keyword'];
		$description=$_REQUEST['description'];
		$s_url= strtolower(str_replace(" ","-",trim($s_name)));	
		$s_quick=$_REQUEST['s_quick'];
		$s_status=$_REQUEST['s_status'];
		$image=rand()._.strtolower($_FILES["image"]["name"]);
		$s_desc=htmlspecialchars($_REQUEST['s_desc'],ENT_QUOTES);				
		$s_order = $_REQUEST['s_order'];
		
		$image1=rand()._.strtolower($_FILES["image1"]["name"]);
		$image2=rand()._.strtolower($_FILES["image2"]["name"]);
		$image3=rand()._.strtolower($_FILES["image3"]["name"]);
		$image4=rand()._.strtolower($_FILES["image4"]["name"]);
		$image5=rand()._.strtolower($_FILES["image5"]["name"]);
		$image6=rand()._.strtolower($_FILES["image6"]["name"]);
		
		/*	Check Services Already Exists */
		$check = mysqli_query($db,"SELECT s_name FROM cj_servicescategory WHERE s_name ='$s_name'") or die(mysqli_error($db));
		if (mysqli_num_rows($check)>0)
		{
			$err= "Services already exists";
		}
		else
		{		
			mysqli_query($db, "INSERT INTO `cj_servicescategory` (`icon`, `s_name`, `s_image`, `s_image1`, `s_image2`, `s_image3`, `s_image4`, `s_image5`, `s_image6`, `s_url`, `s_desc`, `s_quick`, `s_status`,`s_order`,`title`, `keyword`, `description`,`add_date`, `mod_date`) 
			VALUES ( '$icon', '$s_name', '$image', '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', '$s_url', '$s_desc', '$s_quick', '$s_status','$s_order','$title', '$keyword','$description', Now(), Now())") or die(mysqli_error($db));
			
			$last=mysqli_insert_id($db);
			
			move_uploaded_file($_FILES['image']["tmp_name"],"images/services/" . $image);
			move_uploaded_file($_FILES['image1']["tmp_name"],"images/services/" . $image1);
			move_uploaded_file($_FILES['image2']["tmp_name"],"images/services/" . $image2);
			move_uploaded_file($_FILES['image3']["tmp_name"],"images/services/" . $image3);
			move_uploaded_file($_FILES['image4']["tmp_name"],"images/services/" . $image4);
			move_uploaded_file($_FILES['image5']["tmp_name"],"images/services/" . $image5);
			move_uploaded_file($_FILES['image6']["tmp_name"],"images/services/" . $image6);
			
			/* Insert Service Features */
			for ($i=0; $i<count($_POST['features']); $i++)
			{
				$features=mysqli_real_escape_string($db,$_POST['features'][$i]);
				
				mysqli_query($db, "INSERT INTO `cj_servicecategoryfeatures` (`s_id`, `sf_name`, `sf_add`, `af_mod`) 
				VALUES ('$last', '$features', Now(), Now())") or die(mysqli_error($db));				
			} 
			
			/* Insert Service specifications */
			for ($i=0; $i<count($_POST['specifications']); $i++)
			{
				$specifications=mysqli_real_escape_string($db,$_POST['specifications'][$i]);
				
				mysqli_query($db, "INSERT INTO `cj_servicecategoryspecifications` (`s_id`, `ss_name`, `ss_add`, `ss_mod`) 
				VALUES ('$last', '$specifications', Now(), Now())") or die(mysqli_error($db));				
			} 
			
			$_SESSION['msg']="Added Successfully";
			header("location: manage-services.php");
			exit;
		}
	}
	if(@$_POST['addservices']=='SAVE')
	{	
		$s_name=$_REQUEST['s_name'];
		$icon=$_REQUEST['icon'];
		$title=$_REQUEST['title'];
		$keyword=$_REQUEST['keyword'];
		$description=$_REQUEST['description'];
		$s_quick=$_REQUEST['s_quick'];
		$s_status=$_REQUEST['s_status'];
		$s_desc=htmlspecialchars($_REQUEST['s_desc'],ENT_QUOTES);				
		$s_order = $_REQUEST['s_order'];
		if($_FILES[image][name]!='')
		{
			$img_nm=mysqli_fetch_array(mysqli_query($db,"select s_image from cj_servicescategory where s_id='$id'"));
			@unlink("images/services/".$img_nm['s_image']);
			$image=rand()._.strtolower($_FILES["image"]["name"]);
			move_uploaded_file($_FILES['image']["tmp_name"],"images/services/" . $image);
		}
		else
		{
			$img_nm=mysqli_fetch_array(mysqli_query($db,"select s_image from cj_servicescategory where s_id='$id'"));
			$image=$img_nm['s_image'];
		}
		if($_FILES[image1][name]!='')
		{
			@unlink("images/services/".$row['s_image1']);
			$image1=rand()._.strtolower($_FILES["image1"]["name"]);
			move_uploaded_file($_FILES['image1']["tmp_name"],"images/services/".$image1);
			}
			else{
			$image1=$row['s_image1'];
		}
		if($_FILES[image2][name]!='')
		{
			@unlink("images/services/".$row['s_image2']);
			$image2=rand()._.strtolower($_FILES["image2"]["name"]);
			move_uploaded_file($_FILES['image2']["tmp_name"],"images/services/".$image2);
			}
			else{
			$image2=$row['s_image2'];
		}
		if($_FILES[image3][name]!='')
		{
			@unlink("images/services/".$row['s_image3']);
			$image3=rand()._.strtolower($_FILES["image3"]["name"]);
			move_uploaded_file($_FILES['image3']["tmp_name"],"images/services/".$image3);
			}
			else{
			$image3=$row['s_image3'];
		}
		if($_FILES[image4][name]!='')
		{
			@unlink("images/services/".$row['s_image4']);
			$image4=rand()._.strtolower($_FILES["image4"]["name"]);
			move_uploaded_file($_FILES['image4']["tmp_name"],"images/services/".$image4);
			}
			else{
			$image4=$row['s_image4'];
		}
		if($_FILES[image5][name]!='')
		{
			@unlink("images/services/".$row['s_image5']);
			$image5=rand()._.strtolower($_FILES["image5"]["name"]);
			move_uploaded_file($_FILES['image5']["tmp_name"],"images/services/".$image5);
			}
			else{
			$image5=$row['s_image5'];
		}
		if($_FILES[image6][name]!='')
		{
			@unlink("images/services/".$row['s_image6']);
			$image6=rand()._.strtolower($_FILES["image6"]["name"]);
			
			move_uploaded_file($_FILES['image6']["tmp_name"],"images/services/".$image6);
			}
			else{
			$image6=$row['s_image6'];
		}
		mysqli_query($db, "UPDATE `cj_servicescategory` SET `icon` = '$icon',  `s_name` = '$s_name', `s_image` = '$image', `s_image1` = '$image1', `s_image2` = '$image2', `s_image3` = '$image3', `s_image4` = '$image4', `s_image5` = '$image5', `s_image6` = '$image6', `s_desc` = '$s_desc', `s_quick` = '$s_quick', `s_status` = '$s_status',`s_order`='$s_order',`title`='$title', `keyword`='$keyword', `description`='$description',`mod_date` = Now() WHERE `s_id` ='$id'") or die(mysqli_error($db));
		for ($i=0; $i<count($_POST['features']); $i++)
		{
			$sf_id=$_POST['sf_id'][$i];
			$features=mysqli_real_escape_string($db,$_POST['features'][$i]);
			if(!empty($sf_id))	
			{
				mysqli_query($db, "UPDATE `cj_servicecategoryfeatures` SET `sf_name` = '$features', `af_mod` = Now() WHERE `sf_id` = '$sf_id' And `s_id`='$id'") or die(mysqli_error($db));
			}		
			else	
			{
				mysqli_query($db, "INSERT INTO `cj_servicecategoryfeatures` (`s_id`, `sf_name`, `sf_add`, `af_mod`) VALUES ('$id', '$features', Now(), Now())") or die(mysqli_error($db));	
			}					
		} 
		for ($i=0; $i<count($_POST['specifications']); $i++)
		{
			$ss_id=$_POST['ss_id'][$i];
			$specifications=mysqli_real_escape_string($db,$_POST['specifications'][$i]);
			if(!empty($ss_id))	
			{
				mysqli_query($db, "UPDATE `cj_servicecategoryspecifications` SET `ss_name` = '$specifications', `ss_mod` = Now()  WHERE `ss_id` = '$ss_id' And `s_id`='$id'") or die(mysqli_error($db));
			}		
			else	
			{
				mysqli_query($db, "INSERT INTO `cj_servicecategoryspecifications` (`s_id`, `ss_name`, `ss_add`, `ss_mod`) VALUES ('$id', '$specifications', Now(), Now())") or die(mysqli_error($db));	
			}					
		} 
		$_SESSION['msg']="Updated Successfully";
		header("location: manage-services.php");
		exit;
	}
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
			<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

			<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

			<!--[if lte IE 8]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
			<![endif]-->
			
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
									<a href="#">Services Category Table</a>
								</li>
								<li class="active">View Services Category details</li>
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
									Manage Services Category
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										View Services Category
									</small>
									<!-- <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create-item">Add Advertise</button> -->
								</h1>
							</div><!-- /.page-header -->
							




							<?php if(!empty($err)){	echo $err;	}?></h3>
							<div class="table-responsive">
								<script>
								function validate()
								{
									if(document.getElementById('s_status').value=='x')
									{
											alert("Please Select Status.");
											return false;
									}
								}
								</script>
								<form name="addpage" method="post" enctype="multipart/form-data" onSubmit="return validate();">
									<table id="example1" class="table table-bordered table-striped">
										<tbody>
											<tr>
											  <td>
												<table width="100%">
													<tr>
														<td width="46%">
															<div class="form-group">
																<label for="exampleInputText">Service Name</label>
																<div class="input-group">
																	<div class="input-group-addon"><i class="fa fa-edit"></i></div>
																	<input type="text" class="form-control" required id="exampleInputText" name="s_name" value="<?php echo @$row['s_name']; ?>">
																</div>
															</div>
														</td>
														<td width="5%"></td>
														<td width="46%">
															<div class="form-group">
																<label>Order (Assign numeric Values)</label>
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-edit"></i>
																	</div>
																	<input type="text" class="form-control" id="exampleInputText" onkeypress="return isNumberKey(event)" placeholder="order" name="s_order" required value="<?php echo @$row['s_order']; ?>">
																</div>
															</div>  
														</td>
													</tr>                      
												</table>                    
											  </td>
											</tr>
											<tr>
											  <td>
												<table>
													<tr>
														<td width="45%">
															<div class="form-group">
																<label>FONTAWESOME ICONS</label>
																<div style="height:200px;overflow-y:scroll;">
																	<div class="input-group">
																		<table class="table table-bordered table-striped">
																			<?php 
																			$sqlfa=mysqli_query($db, "Select icon from cj_favicon") or die(mysqli_error($db));
																			while($rowfa=mysqli_fetch_assoc($sqlfa))
																			{?>
																			<tr><td><input type="radio" name="icon" <?php if(@$row['icon']==@$rowfa['icon']){ echo "checked"; }?> value="<?php if($_REQUEST['edit']==''){ echo @@$row['icon']; } else{ echo @@$rowfa['icon']; } ?>"></td><td><i class="<?php echo @@$rowfa['icon'].' fa-2x'; ?>"></i></td><td><?php echo @@$rowfa['icon']; ?></td></tr>
																			<?php
																			}?>
																		</table>
																	</div>
																</div>
															</div>  
														</td>
														<td width="10%"></td>
														<td width="45%">
															<div class="form-group">
																<label>ET-LINE ICONS</label>
																<div style="height:200px;overflow-y:scroll;">
																	<div class="input-group">
																		<table class="table table-bordered table-striped">
																			<?php 
																			$sqlicon=mysqli_query($db, "Select icon from cj_icon") or die(mysqli_error($db));
																			while($rowicon=mysqli_fetch_assoc($sqlicon))
																			{?>
																			<tr><td><input type="radio" name="icon" <?php if(@$row['icon']==@$rowicon['icon']){ echo "checked"; }?> value="<?php if(@$_REQUEST['edit']==''){ echo @$row['icon']; } else{ echo @$rowicon['icon']; } ?>"></td><td><i class="<?php echo @$rowicon['icon'].'fa-2x'; ?>"></i></td><td><?php echo @$rowicon['icon']; ?></td></tr>
																			<?php
																			}?>
																		</table>
																	</div>
																</div>
															</div>  
														</td>
													</tr>
												</table>
											  </td>
											</tr>
											<tr>
											  <td>
												<table width="100%">
													<tr>
														<td width="46%">
															<div class="form-group">
																<label>Mark as Quick Link</label>
																<div class="input-group">
																	<div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
																	<select class="form-control" name="s_quick" id="s_quick">
																		<option value="x">-Please Select-</option>
																		<option value="1" <?php if(@$row['s_quick']=='1'){ echo "selected"; }?> >Yes</option>
																		<option value="2" <?php if(@$row['s_quick']=='2'){ echo "selected"; }?> >No</option>
																	</select>
																</div>
															</div>  
														</td>
														<td width="5%"></td>
														<td width="46%">
															<div class="form-group">
																<label>Status</label>
																<div class="input-group">
																	<div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
																	<select class="form-control" name="s_status" id="s_status">
																		<option value="x">-Select Status-</option>
																		<option value="1" <?php if(@$row['s_status']=='1'){ echo "selected"; }?> >Available</option>
																		<option value="2" <?php if(@$row['s_status']=='2'){ echo "selected"; }?> >Not Available</option>
																	</select>
																</div>
															</div>  
														</td>
													</tr>                      
												</table>                    
											  </td>
											</tr>
											<tr>
												<td>
												    <div class="form-group">
														<label>Product Page Title</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
															<input type="text" class="form-control" id="exampleInputText" placeholder="Enter Title" name="title" required value="<?php echo @$row['title']; ?>">
														</div>
													</div>               
												    <div class="form-group">
														<label>Product Page keyword</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
															<input type="text" class="form-control" id="exampleInputText" placeholder="Enter keyword" name="keyword" required value="<?php echo @$row['keyword']; ?>">
														</div>
													</div>               
												    <div class="form-group">
														<label>Product Page Description</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-hand-o-right"></i></div>
															<input type="text" class="form-control" id="exampleInputText" placeholder="Enter Description" name="description" required value="<?php echo @$row['description']; ?>">
														</div>
													</div>               
												</td>
											</tr>
											<tr>
												<td>
													<table width="100%">
														<tr>
															<td width="70%">
																<div class="form-group">
																	<label for="exampleInputText">Features</label>
																	<div class="input_fields_wrap">
																		<?php 
																		$feat=mysqli_query($db, "Select * from cj_servicecategoryfeatures where s_id='".@$id."' order by sf_id ASC") or die(mysqli_error($db));
																		if(mysqli_num_rows($feat)>0)
																		{
																			while($getfeatures=mysqli_fetch_assoc($feat))
																			{?>
																				<input type="hidden" name="sf_id[]" value="<?php echo $getfeatures['sf_id'];?>">
																				<div class="form-group">
																					<div class="row">
																						<div class="col-lg-11">
																							<input type="text" required class="form-control" id="exampleInputText" name="features[]" value="<?=$getfeatures['sf_name'];?>">
																						</div>
																						<div class="col-lg-1">
																						</div>
																					</div>
																				</div>
																				<?php
																			}
																		}
																		else
																		{?>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-11">
																						<input type="text" required class="form-control" id="exampleInputText" name="features[]">
																					</div>
																					<div class="col-lg-1">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-11">
																						<input type="text" required class="form-control" id="exampleInputText" name="features[]">
																					</div>
																					<div class="col-lg-1">
																					</div>
																				</div>
																			</div>
																			<?php
																		}?>
																	</div>  
																</div>  
															</td>
															<td width="5%"></td>
															<td width="25%" valign="bottom">
																<div class="form-group">
																	<button class="add_field_button btn btn-info">Add More Features</button>
																</div>  
															</td>
														</tr>                      
													</table>  
												</td>
											</tr>
											<tr>
												<td>
													<table width="100%">
														<tr>
															<td width="70%">
																<div class="form-group">
																	<label for="exampleInputText">Specifications</label>
																	<div class="input_fields_wrap1">
																		<?php 
																		$specifi=mysqli_query($db, "Select * from cj_servicecategoryspecifications where s_id='".@$id."' order by ss_id ASC") or die(mysqli_error($db));
																		if(mysqli_num_rows($specifi)>0)
																		{
																			while($getspecifications=mysqli_fetch_assoc($specifi))
																			{?>
																				<input type="hidden" name="ss_id[]" value="<?php echo $getspecifications['ss_id'];?>">
																				<div class="form-group">
																					<div class="row">
																						<div class="col-lg-11">
																							<input type="text" required class="form-control" id="exampleInputText" name="specifications[]" value="<?=$getspecifications['ss_name'];?>">
																						</div>
																						<div class="col-lg-1">
																						</div>
																					</div>
																				</div>
																				<?php
																			}
																		}
																		else
																		{?>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-11">
																						<input type="text" required class="form-control" id="exampleInputText" name="specifications[]">
																					</div>
																					<div class="col-lg-1">
																					</div>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="row">
																					<div class="col-lg-11">
																						<input type="text" required class="form-control" id="exampleInputText" name="specifications[]">
																					</div>
																					<div class="col-lg-1">
																					</div>
																				</div>
																			</div>
																			<?php
																		}?>
																	</div>  
																</div>  
															</td>
															<td width="5%"></td>
															<td width="25%" valign="bottom">
																<div class="form-group">
																	<button class="add_field_button1 btn btn-info">Add More Specifications</button>
																</div>  
															</td>
														</tr>                      
													</table>  
												</td>
											</tr>
											<tr>
												<td>
													<table width="100%">
														<tr>
															<td width="46%">
																<div class="form-group">
																	<div class="form-group" align="left">
																		<label for="exampleInputFile" style="margin-left: -25%;">Service Architecture Image</label>
																		<input type="file" id="file_name10" name="image" alt="10">
																	</div>
																	<img id="img10" src="images/services/<?php echo @$row['s_image'];?>" width="100%" height="300" onError="this.src='images/imgerror.jpg'"/>
																</div>
															</td>
															<td width="5%"></td>
															<td width="46%">
																<div class="form-group">
																	<label for="exampleInputText">Details</label>
																	<textarea name="s_desc" class="ckeditor" id="myEditor" rows="10" style="width:100%;"><?php echo @$row['s_desc'];?></textarea>
																</div>
															</td>
														</tr>                      
													</table>   
												</td>
											</tr>
											<tr>
												<td>
													<table width="100%">
														<tr>
															<td width="51%">
																<div class="form-group">
																	<div class="inpupro_fields_wrap" style="width:50%;">
																		<?php for($i = 1; $i <= 6; $i++)
																		{?>
																			<div style="margin-top:5px;">
																				<img id="img<?php echo $i;?>" src="images/services/<?php echo @$row['s_image'.$i];?>" width="60" height="50" style="margin-left:38px; margin-bottom:-10px; margin-top:13px;"  onError="this.src='images/imgerror.jpg'"/>	
																				<input type="file" id="file_name<?php echo $i;?>" name="image<?php echo $i;?>" alt="<?php echo $i;?>" style="margin-left:106px; margin-top:-26px;">
																			</div>
																			<?php
																		}?>
																	</div>																	
																</div>
															</td>
															<td width="5%"></td>
															<td width="44%">
																<div class="box-footer">
																	<input type="submit" class="btn btn-primary" name="addservices" value="<?php if(@$_REQUEST['edit']==''){?>ADD<?php } else{?>SAVE<?php } ?>">
																</div>
															</td>
														</tr>                      
													</table>   
												</td>
											</tr>
										</tbody>                      
									</table>
								</form>							
							
							
							
							

						</div>
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
			<script>
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
			</script>	
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
							//console.log(info.file_count);//number of selected files
							//console.log(info.invalid_count);//number of invalid files
							//console.log(info.error_list);//a list of errors in the following format
							
							//info.error_count['ext']
							//info.error_count['mime']
							//info.error_count['size']
							
							//info.error_list['ext']  = [list of file names with invalid extension]
							//info.error_list['mime'] = [list of file names with invalid mimetype]
							//info.error_list['size'] = [list of file names with invalid size]
							
							
							/**
							if( !info.dropped ) {
								//perhapse reset file field if files have been selected, and there are invalid files among them
								//when files are dropped, only valid files will be added to our file array
								e.preventDefault();//it will rest input
							}
							*/
							
							
							//if files have been selected (not dropped), you can choose to reset input
							//because browser keeps all selected files anyway and this cannot be changed
							//we can only reset file field to become empty again
							//on any case you still should check files with your server side script
							//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
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
					
					
					/////////
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
				
				
				// feature and specification add delete
				$(document).ready(function() {
				var max_fields      = 20; //maximum input boxes allowed
				var wrapper         = $(".input_fields_wrap"); //Fields wrapper
				var add_button      = $(".add_field_button"); //Add button ID
				
				var x = 1; //initlal text box count
				$(add_button).on("click",function(e){ //on add input button click
					e.preventDefault();
					if(x < max_fields){ //max input box allowed
						x++; //text box increment
						$(wrapper).append('<div class="form-group"><div class="row"><div class="col-lg-11"><input type="text" class="form-control" id="exampleInputText" name="features[]"></div><a href="#" class="remove_field"><img src="images/remove.png" height="40" width="40"></a></div></div>'); //add input box
					}
				});
				
				$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); x--;
				})
				
				
				
				var wrapper1         = $(".input_fields_wrap1"); //Fields wrapper
					var add_button1      = $(".add_field_button1"); //Add button ID
					
					var x = 1; //initlal text box count
					$(add_button1).on("click",function(e){ //on add input button click
						e.preventDefault();
						if(x < max_fields){ //max input box allowed
							x++; //text box increment
							$(wrapper1).append('<div class="form-group"><div class="row"><div class="col-lg-11"><input type="text" class="form-control" id="exampleInputText" name="specifications[]"></div><a href="#" class="remove_field1"><img src="images/remove.png" height="40" width="40"></a></div></div>'); //add input box
						}
					});
					
					$(wrapper1).on("click",".remove_field1", function(e){ //user click on remove text
						e.preventDefault(); $(this).parent('div').remove(); x--;
					})
				});
				
				
				
				
			</script>


		</body>
	</html>
<?php 
}
else
{
	header('location:index.php');
}
?>
