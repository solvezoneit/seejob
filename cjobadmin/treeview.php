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

			<meta name="description" content="with selectable elements and custom icons" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

			<!-- bootstrap & fontawesome -->
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

			<!-- page specific plugin styles -->

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
									<a href="#">UI &amp; Elements</a>
								</li>
								<li class="active">Treeview</li>
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
									Treeview
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										with selectable elements and custom icons
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->

									<div class="row">
										<div class="col-sm-6">
											<div class="widget-box widget-color-blue2">
												<div class="widget-header">
													<h4 class="widget-title lighter smaller">Choose Categories</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<ul id="tree1"></ul>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="widget-box widget-color-green2">
												<div class="widget-header">
													<h4 class="widget-title lighter smaller">
														Browse Files
														<span class="smaller-80">(with selectable folders)</span>
													</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<ul id="tree2"></ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- PAGE CONTENT ENDS -->
								</div><!-- /.col -->
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
			<script src="assets/js/jquery-2.1.4.min.js"></script>

			<!-- <![endif]-->

			<!--[if IE]>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<![endif]-->
			<script type="text/javascript">
				if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
			</script>
			<script src="assets/js/bootstrap.min.js"></script>

			<!-- page specific plugin scripts -->
			<script src="assets/js/tree.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				jQuery(function($){
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