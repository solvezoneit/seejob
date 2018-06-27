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

			<meta name="description" content="bootstrap grid sizing" />
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
			<style>
				/* styling the grid page's grid elements */
	.center {
		text-align: center;
	}
	.center [class*="col-"] {
		margin-top: 2px;
		margin-bottom: 2px;

		position: relative;
		text-overflow: ellipsis;
	}
	.center [class*="col-"]  div{
	  position: relative;
	  z-index: 2;
	  
		padding-top: 4px;
		padding-bottom: 4px;
		
	  display: block;
	  overflow: hidden;
	  text-overflow: ellipsis;
	  white-space: nowrap;

	  width: 100%;
	}
	.center [class*="col-"]  div span{
	  position: relative;
	  z-index: 2;
	}
	.center [class*="col-"] div:before {
		display: block;
		content: "";
		
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		z-index: 1;
		
		border: 1px solid #DDD;
	}

	.center [class*="col-"] div:hover:before {
		background-color: #FCE6A6;
		border-color: #EFD27A;
	}
			</style>

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
									<a href="#">Other Pages</a>
								</li>
								<li class="active">Grid</li>
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
									Grid
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										bootstrap grid sizing
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="center">
										<div class="row">
											<div class="col-xs-12">
												<div>
													<span>.col-xs-12</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-1">
												<div>
													<span>.col-xs-1</span>
												</div>
											</div>

											<div class="col-xs-11">
												<div>
													<span>.col-xs-11</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-2">
												<div>
													<span>.col-xs-6.col-sm-2</span>
												</div>
											</div>

											<div class="col-xs-6 col-sm-10">
												<div>
													<span>.col-xs-6.col-sm-10</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12 col-lg-6">
												<div>
													<span>.col-xs-12.col-lg-6</span>
												</div>
											</div>

											<div class="col-xs-12 col-lg-6">
												<div>
													<span>.col-xs-12.col-lg-6</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-4">
												<div>
													<span>.col-xs-4</span>
												</div>
											</div>

											<div class="col-xs-8">
												<div>
													<span>.col-xs-8</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-5">
												<div>
													<span>.col-xs-5</span>
												</div>
											</div>

											<div class="col-xs-7">
												<div>
													<span>.col-xs-7</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6">
												<div>
													<span>.col-xs-6</span>
												</div>
											</div>

											<div class="col-xs-6">
												<div>
													<span>.col-xs-6</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-7">
												<div>
													<span>.col-xs-7</span>
												</div>
											</div>

											<div class="col-xs-5">
												<div>
													<span>.col-xs-5</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-8">
												<div>
													<span>.col-xs-8</span>
												</div>
											</div>

											<div class="col-xs-4">
												<div>
													<span>.col-xs-4</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-9">
												<div>
													<span>.col-xs-9</span>
												</div>
											</div>

											<div class="col-xs-3">
												<div>
													<span>.col-xs-3</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-10">
												<div>
													<span>.col-xs-10</span>
												</div>
											</div>

											<div class="col-xs-2">
												<div>
													<span>.col-xs-2</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-11">
												<div>
													<span>.col-xs-11</span>
												</div>
											</div>

											<div class="col-xs-1">
												<div>
													<span>.col-xs-1</span>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12">
												<div>
													<span>.col-xs-12</span>
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

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
		</body>
	</html>
	<?php	
}
else
{
	header('location:index.php');
}
?>
