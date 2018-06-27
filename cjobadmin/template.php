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
			<title>See Job</title>

			<meta name="description" content="and Validation" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

			<!-- bootstrap & fontawesome -->
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

			<!-- page specific plugin styles -->
			<link rel="stylesheet" href="assets/css/select2.min.css" />

			<!-- text fonts -->
			<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

			<!-- ace styles -->
			<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

			<!--[if lte IE 9]>
				<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
			<![endif]-->
			<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
			<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

			<!-- ace settings handler -->
			<script src="assets/js/ace-extra.min.js"></script>			

			<!-- Text editor cdn -->
			<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

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
									<a href="#">Templates</a>
								</li>
								<!-- <li class="active"></li> -->
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
								<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  
									Templates
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										manage Templates
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">

								<div class="col-md-6">
												<div class="widget-box">
													<div class="widget-header">
														<h4 class="widget-title">Create Template</h4>

														<span class="widget-toolbar">
															<a href="#" data-action="settings">
																<i class="ace-icon fa fa-cog"></i>
															</a>

															<a href="#" data-action="reload">
																<i class="ace-icon fa fa-refresh"></i>
															</a>

															<a href="#" data-action="collapse">
																<i class="ace-icon fa fa-chevron-up"></i>
															</a>

															<a href="#" data-action="close">
																<i class="ace-icon fa fa-times"></i>
															</a>
														</span>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<?php
																if(!empty($_SESSION['msg']))
																{ 
																	echo '<div class="box-body"><div class="pull-left1 alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>';
																	unset($_SESSION['msg']);
																}
																if(!empty($_SESSION['err']))
																{
																	echo'<div class="box-body"><div class="pull-left1 alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div></div>'; 
																	unset($_SESSION['err']);
															}?>
															<?php
																$mysql ="SELECT * FROM `cj_template` where id='".@$_GET['temp_id']."'";
																$run_mysql = mysqli_query($db, $mysql);
																$data = mysqli_fetch_array($run_mysql);
																$subject = $data['subject'];
																$template = $data['template'];
															
															?>	
															<form method="post" action="#">
																<div class="form-group">
																	<label for="form-field-mask-1">Subject</label>		
																	<input class="form-control" required="required" type="text" id="form-field-mask-1" name="subject" value="<?=$subject?>"/>
																</div>
																<hr />
																
																<div class="form-group">
																	<label for="form-field-mask-2">template</label>
																	<textarea class="ckeditor form-control" id="myEditor" required="required" rows="50" name="template"><?=$template?></textarea>
																</div>
																
																<hr />
																<div class="row">
																	<?php
																	if(isset($_GET['temp_id']))
																	{	?>
																		<div class="col-sm-12 form-group">
													                	<input type="submit" name="update" class="btn btn-lg btn-success pull-right" value="update"/>
													                </div>
													                <?php
													            	}else
													            	{	?>
													            		<div class="col-sm-12 form-group">
													                	<input type="submit" name="submit" class="btn btn-lg btn-success pull-right" value="Submit"/>
													                </div>
													                <?php
																	}
																	?>
													                
													            </div>
													        </form>
														</div>
													</div>
												</div>
											</div><!-- /.span -->

											<div class="col-md-6">
												<div class="widget-box">
													<div class="widget-header">
														<h4 class="widget-title">View Template</h4>

														<span class="widget-toolbar">
															<a href="#" data-action="settings">
																<i class="ace-icon fa fa-cog"></i>
															</a>

															<a href="#" data-action="reload">
																<i class="ace-icon fa fa-refresh"></i>
															</a>

															<a href="#" data-action="collapse">
																<i class="ace-icon fa fa-chevron-up"></i>
															</a>

															<a href="#" data-action="close">
																<i class="ace-icon fa fa-times"></i>
															</a>
														</span>
													</div>

													<div class="widget-body">
														<div class="widget-main">
															<form method="post" action="#">						
															 
															  <div class="table-responsive">
															  <table id="example" class="table table-striped">
															    <thead>
															      <tr>
															        <th>#</th>
															        <th>Subject</th>
															        <th>Action</th>
															      </tr>
													           		
													           		
															    </thead>
															    <tbody>
															    <?php
															    	
															    	$i=0;
															    	$admin_id =$_SESSION['USERID'];
															    	$query = "select * from cj_template where admin_id='$admin_id'";
															    	$run_query = mysqli_query($db, $query);
															    	while($rows=mysqli_fetch_array($run_query))
															    	{
															    		$sub = $rows['subject'];
															    		$id = $rows['id'];
															    		
															    		$i++;			    	
													           ?>
															      <tr>
															        <td><?=$i?></td>
															        <td><?=$sub?></td>
															        <td><a href="" class="btn btn-success btn-xs" data-toggle="modal" data-target="#view-template<?php echo "$id"; ?>"><i class="fa fa-eye"></i> </a>&nbsp;&nbsp;
															        <a class="btn btn-info btn-xs" href="template.php?temp_id=<?=$id?>"><i class="menu-icon fa fa-pencil"></i></a>
															       </td>
															      </tr>
												 <!-- ......................View CV..................... -->

																<div id="view-template<?php echo "$id"; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
																  <div class="modal-dialog modal-lg" role="document">
																	<div class="modal-content">
																	  <div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																		<h4 class="modal-title" id="myModalLabel">Templates Details</h4>
																	  </div>
																	  <div class="modal-body">

																		<!--   <h2>Panel Headi</h2> -->
																		<?php
																			$sql="Select * from cj_template where id='$id'";
																			$run_sql =mysqli_query($db, $sql);
																			while($data = mysqli_fetch_array($run_sql))
																			{
																				$template = $data['template'];
																				$subj = $data['subject'];
																				$add_date =$data['add_date'];		
																			}

																		?>
																		<div class="panel-group">
													 					  <div class="panel panel-primary">
																		    <div class="panel-heading"><h5><b><?=$subj?></b></h5></div>
																		    <div class="panel-body">
																		    	<label class="control-label" for="title"><b>Template: </b><span><?php echo $template; ?></span></label><br>
																		    	<label class="control-label" for="title"><b>Add Date: </b><span><?php echo $add_date; ?></span></label><br>
																		    	
																		    	<br>
																		    </div>
																		  </div>
																		  </div>
																		</div>
																	  </div>
																	</div>
																  </div>
															    <?php } ?>
															    </tbody>
															
															  </table>
															</div>
															
														</form>
														</div>
													</div>
												</div>
											</div><!-- /.span -->

							</div><!-- /.row -->
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

			<!-- basic scripts -->

			<!--[if !IE]> -->
			<!-- <script src="assets/js/jquery-2.1.4.min.js"></script> -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<!-- .................CDN FOR TABLE PAGINATION................. -->

			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
			<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
			
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>


			<script type="text/javascript">
				if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
			</script>
			<!-- <script src="assets/js/bootstrap.min.js"></script> -->

			<!-- page specific plugin scripts -->
			<script src="assets/js/wizard.min.js"></script>
			<script src="assets/js/jquery.validate.min.js"></script>
			<script src="assets/js/jquery-additional-methods.min.js"></script>
			<script src="assets/js/bootbox.js"></script>
			<script src="assets/js/jquery.maskedinput.min.js"></script>
			<script src="assets/js/select2.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>


			<!-- ...............CDN FOR SELECT OPTION BOX................... -->

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

			<!-- (Optional) Latest compiled and minified JavaScript translation files -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->
			<script type="text/javascript">$('.selectpicker').selectpicker({style: 'btn-info', size: 4});</script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				$(document).ready(function() {
				    $('#example').DataTable();
				} );
			</script>
		</body>
	</html>
	<?php
	if(isset($_POST['submit']))
	{
		$sub = $_POST['subject'];
		$template = $_POST['template'];
		$admin_id = $_SESSION['USERID'];
		$sql = "INSERT INTO `cj_template`(`admin_id`, `subject`, `template`, `add_date`) VALUES ('$admin_id','$sub','$template',NOW())";
		$result = $db->query($sql);
		if($result)
		{
			$_SESSION['msg']= "inserted Successfully...!!!";
			header("location: template.php");
			exit;
		}
		else
		{
			$_SESSION['err'] = "OOPS some error occured...!!!";
			header("location: template.php");
			exit;
		}
	}
	if(isset($_POST['update']))
	{
		$sub = $_POST['subject'];
		$template = $_POST['template'];
		$admin_id = $_SESSION['USERID'];
		$update_query =mysqli_query($db,"UPDATE cj_template SET subject='$sub', template='$template', mod_date=NOW() WHERE id='".$_GET['temp_id']."' ");
		if($update_query)
		{
			$_SESSION['msg']= "Updated Successfully...!!!";
			header("location: template.php");
			exit;
		}
		else
		{
			$_SESSION['err'] = "OOPS some error occured...!!!";
			header("location: template.php");
			exit;
		}
	}		
}
else
{
	header('location:index.php');
}
?>
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
		});
	}, 4000);
</script>