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

			<meta name="description" content="based on widget boxes with 2 different styles" />
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
									<a href="#">More Pages</a>
								</li>
								<li class="active">Timeline</li>
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
									Timeline
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										based on widget boxes with 2 different styles
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="align-right">
										<span class="green middle bolder">Choose timeline: &nbsp;</span>

										<div class="btn-toolbar inline middle no-margin">
											<div data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow active">
													<span class="bigger-110">1</span>

													<input type="radio" value="1" />
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">2</span>

													<input type="radio" value="2" />
												</label>
											</div>
										</div>
									</div>

									<div id="timeline-1">
										<div class="row">
											<div class="col-xs-12 col-sm-10 col-sm-offset-1">
												<div class="timeline-container">
													<div class="timeline-label">
														<span class="label label-primary arrowed-in-right label-lg">
															<b>Today</b>
														</span>
													</div>

													<div class="timeline-items">
														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<img alt="Susan't Avatar" src="assets/images/avatars/avatar1.png" />
																<span class="label label-info label-sm">16:22</span>
															</div>

															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller">
																		<a href="#" class="blue">Susan</a>
																		<span class="grey">reviewed a product</span>
																	</h5>

																	<span class="widget-toolbar no-border">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		16:22
																	</span>

																	<span class="widget-toolbar">
																		<a href="#" data-action="reload">
																			<i class="ace-icon fa fa-refresh"></i>
																		</a>

																		<a href="#" data-action="collapse">
																			<i class="ace-icon fa fa-chevron-up"></i>
																		</a>
																	</span>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		Anim pariatur cliche reprehenderit, enim eiusmod
																		<span class="red">high life</span>

																		accusamus terry richardson ad squid &hellip;
																		<div class="space-6"></div>

																		<div class="widget-toolbox clearfix">
																			<div class="pull-left">
																				<i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
																				<a href="#" class="bigger-110">Click to read &hellip;</a>
																			</div>

																			<div class="pull-right action-buttons">
																				<a href="#">
																					<i class="ace-icon fa fa-check green bigger-130"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-pencil blue bigger-125"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-times red bigger-125"></i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-cutlery btn btn-success no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main">
																		Going to cafe for lunch
																		<div class="pull-right">
																			<i class="ace-icon fa fa-clock-o bigger-110"></i>
																			12:30
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-star btn btn-warning no-hover green"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller">New logo</h5>

																	<span class="widget-toolbar no-border">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		9:15
																	</span>

																	<span class="widget-toolbar">
																		<a href="#" data-action="reload">
																			<i class="ace-icon fa fa-refresh"></i>
																		</a>

																		<a href="#" data-action="collapse">
																			<i class="ace-icon fa fa-chevron-up"></i>
																		</a>
																	</span>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		Designed a new logo for our website. Would appreciate feedback.
																		<div class="space-6"></div>

																		<div class="widget-toolbox clearfix">
																			<div class="pull-right action-buttons">
																				<div class="space-4"></div>

																				<div>
																					<a href="#">
																						<i class="ace-icon fa fa-heart red bigger-125"></i>
																					</a>

																					<a href="#">
																						<i class="ace-icon fa fa-facebook blue bigger-125"></i>
																					</a>

																					<a href="#">
																						<i class="ace-icon fa fa-reply light-green bigger-130"></i>
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-flask btn btn-default no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main"> Took the final exam. Phew! </div>
																</div>
															</div>
														</div>
													</div><!-- /.timeline-items -->
												</div><!-- /.timeline-container -->

												<div class="timeline-container">
													<div class="timeline-label">
														<span class="label label-success arrowed-in-right label-lg">
															<b>Yesterday</b>
														</span>
													</div>

													<div class="timeline-items">
														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-beer btn btn-inverse no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller">Haloween party</h5>

																	<span class="widget-toolbar">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		1 hour ago
																	</span>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<div class="clearfix">
																			<div class="pull-left">
																				Lots of fun at Haloween party.
																				<br />
																				Take a look at some pics:
																			</div>

																			<div class="pull-right">
																				<i class="ace-icon fa fa-chevron-left blue bigger-110"></i>

																				&nbsp;
																				<img alt="Image 4" width="36" src="assets/images/gallery/thumb-4.jpg" />
																				<img alt="Image 3" width="36" src="assets/images/gallery/thumb-3.jpg" />
																				<img alt="Image 2" width="36" src="assets/images/gallery/thumb-2.jpg" />
																				<img alt="Image 1" width="36" src="assets/images/gallery/thumb-1.jpg" />
																				&nbsp;
																				<i class="ace-icon fa fa-chevron-right blue bigger-110"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-trophy btn btn-pink no-hover green"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller">Lorum Ipsum</h5>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		Anim pariatur cliche reprehenderit, enim eiusmod
																		<span class="green bolder">high life</span>
																		accusamus terry richardson ad squid &hellip;
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-cutlery btn btn-success no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main"> Going to cafe for lunch </div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-bug btn btn-danger no-hover"></i>
															</div>

															<div class="widget-box widget-color-red2">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller">Critical security patch released</h5>

																	<span class="widget-toolbar no-border">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		9:15
																	</span>

																	<span class="widget-toolbar">
																		<a href="#" data-action="reload">
																			<i class="ace-icon fa fa-refresh"></i>
																		</a>

																		<a href="#" data-action="collapse">
																			<i class="ace-icon fa fa-chevron-up"></i>
																		</a>
																	</span>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		Please download the new patch for maximum security.
																	</div>
																</div>
															</div>
														</div>
													</div><!-- /.timeline-items -->
												</div><!-- /.timeline-container -->

												<div class="timeline-container">
													<div class="timeline-label">
														<span class="label label-grey arrowed-in-right label-lg">
															<b>May 17</b>
														</span>
													</div>

													<div class="timeline-items">
														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<i class="timeline-indicator ace-icon fa fa-leaf btn btn-primary no-hover green"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h5 class="widget-title smaller">Lorum Ipsum</h5>

																	<span class="widget-toolbar no-border">
																		<i class="ace-icon fa fa-clock-o bigger-110"></i>
																		10:22
																	</span>

																	<span class="widget-toolbar">
																		<a href="#" data-action="reload">
																			<i class="ace-icon fa fa-refresh"></i>
																		</a>

																		<a href="#" data-action="collapse">
																			<i class="ace-icon fa fa-chevron-up"></i>
																		</a>
																	</span>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		Anim pariatur cliche reprehenderit, enim eiusmod
																		<span class="blue bolder">high life</span>
																		accusamus terry richardson ad squid &hellip;
																	</div>
																</div>
															</div>
														</div>
													</div><!-- /.timeline-items -->
												</div><!-- /.timeline-container -->
											</div>
										</div>
									</div>

									<div id="timeline-2" class="hide">
										<div class="row">
											<div class="col-xs-12 col-sm-10 col-sm-offset-1">
												<div class="timeline-container timeline-style2">
													<span class="timeline-label">
														<b>Today</b>
													</span>

													<div class="timeline-items">
														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">11:15 pm</span>

																<i class="timeline-indicator btn btn-info no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<span class="bigger-110">
																			<a href="#" class="purple bolder">Susan</a>
																			reviewed a product
																		</span>

																		<br />
																		<i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
																		<a href="#">Click to read &hellip;</a>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">12:30 pm</span>

																<i class="timeline-indicator btn btn-info no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		Going to
																		<span class="green bolder">veg cafe</span>
																		for lunch
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">11:15 pm</span>

																<i class="timeline-indicator btn btn-info no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		Designed a new logo for our website. Would appreciate feedback.
																		<a href="#">
																			Click to see
																			<i class="ace-icon fa fa-search-plus blue bigger-110"></i>
																		</a>

																		<div class="space-2"></div>

																		<div class="action-buttons">
																			<a href="#">
																				<i class="ace-icon fa fa-heart red bigger-125"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-facebook blue bigger-125"></i>
																			</a>

																			<a href="#">
																				<i class="ace-icon fa fa-reply light-green bigger-130"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">9:00 am</span>

																<i class="timeline-indicator btn btn-info no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding"> Took the final exam. Phew! </div>
																</div>
															</div>
														</div>
													</div><!-- /.timeline-items -->
												</div><!-- /.timeline-container -->

												<div class="timeline-container timeline-style2">
													<span class="timeline-label">
														<b>Yesterday</b>
													</span>

													<div class="timeline-items">
														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">9:00 am</span>

																<i class="timeline-indicator btn btn-success no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<div class="clearfix">
																			<div class="pull-left">
																				<span class="orange2 bolder">Haloween party</span>

																				Lots of fun at Haloween party.
																				<br />
																				Take a look at some pics:
																			</div>

																			<div class="pull-right">
																				<i class="ace-icon fa fa-chevron-left blue bigger-110"></i>

																				&nbsp;
																				<img alt="Image 4" width="36" src="assets/images/gallery/thumb-4.jpg" />
																				<img alt="Image 3" width="36" src="assets/images/gallery/thumb-3.jpg" />
																				<img alt="Image 2" width="36" src="assets/images/gallery/thumb-2.jpg" />
																				<img alt="Image 1" width="36" src="assets/images/gallery/thumb-1.jpg" />
																				&nbsp;
																				<i class="ace-icon fa fa-chevron-right blue bigger-110"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">9:00 am</span>

																<i class="timeline-indicator btn btn-success no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		Anim pariatur cliche reprehenderit, enim eiusmod
																		<span class="pink2 bolder">high life</span>
																		accusamus terry richardson ad squid &hellip;
																	</div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">9:00 am</span>

																<i class="timeline-indicator btn btn-success no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding"> Going to cafe for lunch </div>
																</div>
															</div>
														</div>

														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">9:00 am</span>

																<i class="timeline-indicator btn btn-success no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<span class="red bolder">Critical security patch released</span>

																		<br />
																		Please download the new patch for maximum security.
																	</div>
																</div>
															</div>
														</div>
													</div><!-- /.timeline-items -->
												</div><!-- /.timeline-container -->

												<div class="timeline-container timeline-style2">
													<span class="timeline-label">
														<b>May 17</b>
													</span>

													<div class="timeline-items">
														<div class="timeline-item clearfix">
															<div class="timeline-info">
																<span class="timeline-date">9:00 am</span>

																<i class="timeline-indicator btn btn-grey no-hover"></i>
															</div>

															<div class="widget-box transparent">
																<div class="widget-body">
																	<div class="widget-main no-padding">
																		<span class="bolder blue">Lorum Ipsum</span>
																		Anim pariatur cliche reprehenderit, enim eiusmod
																		<span class="purple bolder">high life</span>
																		accusamus terry richardson ad squid &hellip;
																	</div>
																</div>
															</div>
														</div>
													</div><!-- /.timeline-items -->
												</div><!-- /.timeline-container -->
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
			<script type="text/javascript">
				jQuery(function($) {
					$('[data-toggle="buttons"] .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						$('[id*="timeline-"]').addClass('hide');
						$('#timeline-'+which).removeClass('hide');
					});
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
