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

			<meta name="description" content="frequently asked questions using tabs and accordions" />
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
									<a href="#">Other Pages</a>
								</li>
								<li class="active">FAQ</li>
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
									FAQ
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										frequently asked questions using tabs and accordions
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="tabbable">
										<ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
											<li class="active">
												<a data-toggle="tab" href="#faq-tab-1">
													<i class="blue ace-icon fa fa-question-circle bigger-120"></i>
													General
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="#faq-tab-2">
													<i class="green ace-icon fa fa-user bigger-120"></i>
													Account
												</a>
											</li>

											<li>
												<a data-toggle="tab" href="#faq-tab-3">
													<i class="orange ace-icon fa fa-credit-card bigger-120"></i>
													Payments
												</a>
											</li>

											<li class="dropdown">
												<a data-toggle="dropdown" class="dropdown-toggle" href="#">
													<i class="purple ace-icon fa fa-magic bigger-120"></i>

													Misc
													<i class="ace-icon fa fa-caret-down"></i>
												</a>

												<ul class="dropdown-menu dropdown-lighter dropdown-125">
													<li>
														<a data-toggle="tab" href="#faq-tab-4"> Affiliates </a>
													</li>

													<li>
														<a data-toggle="tab" href="#faq-tab-4"> Merchants </a>
													</li>
												</ul>
											</li><!-- /.dropdown -->
										</ul>

										<div class="tab-content no-border padding-24">
											<div id="faq-tab-1" class="tab-pane fade in active">
												<h4 class="blue">
													<i class="ace-icon fa fa-check bigger-110"></i>
													General Questions
												</h4>

												<div class="space-8"></div>

												<div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">
													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-1-1" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

																<i class="ace-icon fa fa-user bigger-130"></i>
																&nbsp; High life accusamus terry richardson ad squid?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-1-1">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-1-2" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

																<i class="ace-icon fa fa-sort-amount-desc"></i>
																&nbsp; Can I have nested questions?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-1-2">
															<div class="panel-body">
																<div id="faq-list-nested-1" class="panel-group accordion-style1 accordion-style2">
																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<a href="#faq-list-1-sub-1" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
																				<i class="ace-icon fa fa-plus smaller-80 middle" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
										   Enim eiusmod high life accusamus terry?
																			</a>
																		</div>

																		<div class="panel-collapse collapse" id="faq-list-1-sub-1">
																			<div class="panel-body">
																				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
																			</div>
																		</div>
																	</div>

																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<a href="#faq-list-1-sub-2" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
																				<i class="ace-icon fa fa-plus smaller-80 middle" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
										  Food truck quinoa nesciunt laborum eiusmod?
																			</a>
																		</div>

																		<div class="panel-collapse collapse" id="faq-list-1-sub-2">
																			<div class="panel-body">
																				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
																			</div>
																		</div>
																	</div>

																	<div class="panel panel-default">
																		<div class="panel-heading">
																			<a href="#faq-list-1-sub-3" data-parent="#faq-list-nested-1" data-toggle="collapse" class="accordion-toggle collapsed">
																				<i class="ace-icon fa fa-plus smaller-80 middle" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
										  Cupidatat skateboard dolor brunch?
																			</a>
																		</div>

																		<div class="panel-collapse collapse" id="faq-list-1-sub-3">
																			<div class="panel-body">
																				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-1-3" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

																<i class="ace-icon fa fa-credit-card bigger-130"></i>
																&nbsp; Single-origin coffee nulla assumenda shoreditch et?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-1-3">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-1-4" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

																<i class="ace-icon fa fa-files-o bigger-130"></i>
																&nbsp; Sunt aliqua put a bird on it squid?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-1-4">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-1-5" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>

																<i class="ace-icon fa fa-cog bigger-130"></i>
																&nbsp; Brunch 3 wolf moon tempor sunt aliqua put?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-1-5">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>
												</div>
											</div>

											<div id="faq-tab-2" class="tab-pane fade">
												<h4 class="blue">
													<i class="green ace-icon fa fa-user bigger-110"></i>
													Account Questions
												</h4>

												<div class="space-8"></div>

												<div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
							Enim eiusmod high life accusamus terry richardson?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-2-1">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-2-2" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
						  Single-origin coffee nulla assumenda shoreditch et?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-2-2">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-2-3" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-right middle smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
						  Sunt aliqua put a bird on it squid?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-2-3">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-2-4" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
						  Brunch 3 wolf moon tempor sunt aliqua put?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-2-4">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>
												</div>
											</div>

											<div id="faq-tab-3" class="tab-pane fade">
												<h4 class="blue">
													<i class="orange ace-icon fa fa-credit-card bigger-110"></i>
													Payment Questions
												</h4>

												<div class="space-8"></div>

												<div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
							Enim eiusmod high life accusamus terry richardson?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-3-1">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
						  Single-origin coffee nulla assumenda shoreditch et?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-3-2">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
						  Sunt aliqua put a bird on it squid?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-3-3">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-3-4" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
						  Brunch 3 wolf moon tempor sunt aliqua put?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-3-4">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>
												</div>
											</div>

											<div id="faq-tab-4" class="tab-pane fade">
												<h4 class="blue">
													<i class="purple ace-icon fa fa-magic bigger-110"></i>
													Miscellaneous Questions
												</h4>

												<div class="space-8"></div>

												<div id="faq-list-4" class="panel-group accordion-style1 accordion-style2">
													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-4-1" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-hand-o-right" data-icon-hide="ace-icon fa fa-hand-o-down" data-icon-show="ace-icon fa fa-hand-o-right"></i>&nbsp;
							Enim eiusmod high life accusamus terry richardson?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-4-1">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-4-2" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-frown-o bigger-120" data-icon-hide="ace-icon fa fa-smile-o" data-icon-show="ace-icon fa fa-frown-o"></i>&nbsp;
						  Single-origin coffee nulla assumenda shoreditch et?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-4-2">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-4-3" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
						  Sunt aliqua put a bird on it squid?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-4-3">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
													</div>

													<div class="panel panel-default">
														<div class="panel-heading">
															<a href="#faq-4-4" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
																<i class="ace-icon fa fa-plus smaller-80" data-icon-hide="ace-icon fa fa-minus" data-icon-show="ace-icon fa fa-plus"></i>&nbsp;
						  Brunch 3 wolf moon tempor sunt aliqua put?
															</a>
														</div>

														<div class="panel-collapse collapse" id="faq-4-4">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
															</div>
														</div>
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
