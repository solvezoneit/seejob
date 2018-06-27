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

			<meta name="description" content="" />
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
								<li class="active">Content Sliders</li>
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
								<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  Content sliders based on Bootstrap modals
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="alert alert-info">
										<button class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
										You can use any button to toggle sliders!
									</div>

									<div id="top-menu" class="modal aside" data-fixed="true" data-placement="top" data-background="true" data-backdrop="invisible" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body container">
													<div class="row">
														<div class="col-sm-5 col-sm-offset-1 white">
															<h3 class="lighter">Bootstrap Grid &amp; Elements</h3>
															With invisible backdrop
														</div>

														<div class="col-sm-5 text-center line-height-2">
															<a class="btn btn-app btn-Default no-radius" href="#">
																<i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
																Default
																<span class="label label-light arrowed-in-right badge-left">11</span>
															</a>

															&nbsp; &nbsp;
															<a class="btn btn-info btn-app no-radius" href="#">
																<i class="ace-icon fa fa-cog bigger-230"></i>
																Mailbox
																<span class="label label-danger arrowed-in">6+</span>
															</a>

															&nbsp; &nbsp;
															<a class="btn btn-app btn-light no-radius" href="#">
																<i class="ace-icon fa fa-print bigger-230"></i>
																Print
															</a>
														</div>
													</div>
												</div>
											</div><!-- /.modal-content -->

											<button class="btn btn-inverse btn-app btn-xs ace-settings-btn aside-trigger" data-target="#top-menu" data-toggle="modal" type="button">
												<i data-icon1="fa-chevron-down" data-icon2="fa-chevron-up" class="ace-icon fa fa-chevron-down bigger-110 icon-only"></i>
											</button>
										</div><!-- /.modal-dialog -->
									</div>

									<div id="bottom-menu" class="modal aside" data-fixed="true" data-placement="bottom" data-background="true" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body container">
													<div class="row">
														<div class="col-sm-5 col-sm-offset-1 white">
															<h3 class="lighter">Bootstrap Grid &amp; Elements</h3>
															With dark modal backdrop
														</div>
													</div>
												</div>
											</div><!-- /.modal-content -->

											<button class="btn btn-yellow btn-app btn-xs ace-settings-btn aside-trigger" data-target="#bottom-menu" data-toggle="modal" type="button">
												<i data-icon2="fa-chevron-down" data-icon1="fa-chevron-up" class="ace-icon fa fa-chevron-up bigger-110 icon-only"></i>
											</button>
										</div><!-- /.modal-dialog -->
									</div>

									<div id="right-menu" class="modal aside" data-body-scroll="false" data-offset="true" data-placement="right" data-fixed="true" data-backdrop="false" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header no-padding">
													<div class="table-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
															<span class="white">&times;</span>
														</button>
														Based on Modal boxes
													</div>
												</div>

												<div class="modal-body">
													<h3 class="lighter">Custom Elements and Content</h3>

													<br />
													With no modal backdrop
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													1
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													2
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													<br />
													3
												</div>
											</div><!-- /.modal-content -->

											<button class="aside-trigger btn btn-info btn-app btn-xs ace-settings-btn" data-target="#right-menu" data-toggle="modal" type="button">
												<i data-icon1="fa-plus" data-icon2="fa-minus" class="ace-icon fa fa-plus bigger-110 icon-only"></i>
											</button>
										</div><!-- /.modal-dialog -->
									</div>
									<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
										&nbsp; Content Slider inside Modal Box &nbsp;
									</a>

									<div id="my-modal" class="modal fade" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h3 class="smaller lighter blue no-margin">A modal with a slider in it!</h3>
												</div>

												<div class="modal-body">
													Some content
													<br />
													<br />
													<br />
													<br />
													<br />
													1
													<br />
													<br />
													<br />
													<br />
													<br />
													2
												</div>

												<div class="modal-footer">
													<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
														<i class="ace-icon fa fa-times"></i>
														Close
													</button>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div>

									<div id="aside-inside-modal" class="modal" data-placement="bottom" data-background="true" data-backdrop="false" tabindex="-1">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-body">
													<div class="row">
														<div class="col-xs-12 white">
															<h3 class="lighter no-margin">Inside another modal</h3>

															<br />
															<br />
														</div>
													</div>
												</div>
											</div><!-- /.modal-content -->

											<button class="btn btn-default btn-app btn-xs ace-settings-btn aside-trigger" data-target="#aside-inside-modal" data-toggle="modal" type="button">
												<i data-icon2="fa-arrow-down" data-icon1="fa-arrow-up" class="ace-icon fa fa-arrow-up bigger-110 icon-only"></i>
											</button>
										</div><!-- /.modal-dialog -->
									</div>

									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />
									<br />

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
			<script type="text/javascript">
				jQuery(function($) {
					$('.modal.aside').ace_aside();
					
					$('#aside-inside-modal').addClass('aside').ace_aside({container: '#my-modal > .modal-dialog'});
					
					//$('#top-menu').modal('show')
					
					$(document).one('ajaxloadstart.page', function(e) {
						//in ajax mode, remove before leaving page
						$('.modal.aside').remove();
						$(window).off('.aside')
					});
					
					
					//make content sliders resizable using jQuery UI (you should include jquery ui files)
					//$('#right-menu > .modal-dialog').resizable({handles: "w", grid: [ 20, 0 ], minWidth: 200, maxWidth: 600});
				})
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
