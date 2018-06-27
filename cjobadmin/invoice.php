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
									<a href="#">More Pages</a>
								</li>
								<li class="active">Invoice</li>
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
							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="space-6"></div>

									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="widget-box transparent">
												<div class="widget-header widget-header-large">
													<h3 class="widget-title grey lighter">
														<i class="ace-icon fa fa-leaf green"></i>
														Customer Invoice
													</h3>

													<div class="widget-toolbar no-border invoice-info">
														<span class="invoice-info-label">Invoice:</span>
														<span class="red">#121212</span>

														<br />
														<span class="invoice-info-label">Date:</span>
														<span class="blue">04/04/2014</span>
													</div>

													<div class="widget-toolbar hidden-480">
														<a href="#">
															<i class="ace-icon fa fa-print"></i>
														</a>
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main padding-24">
														<div class="row">
															<div class="col-sm-6">
																<div class="row">
																	<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																		<b>Company Info</b>
																	</div>
																</div>

																<div>
																	<ul class="list-unstyled spaced">
																		<li>
																			<i class="ace-icon fa fa-caret-right blue"></i>Street, City
																		</li>

																		<li>
																			<i class="ace-icon fa fa-caret-right blue"></i>Zip Code
																		</li>

																		<li>
																			<i class="ace-icon fa fa-caret-right blue"></i>State, Country
																		</li>

																		<li>
																			<i class="ace-icon fa fa-caret-right blue"></i>
	Phone:
																			<b class="red">111-111-111</b>
																		</li>

																		<li class="divider"></li>

																		<li>
																			<i class="ace-icon fa fa-caret-right blue"></i>
																			Paymant Info
																		</li>
																	</ul>
																</div>
															</div><!-- /.col -->

															<div class="col-sm-6">
																<div class="row">
																	<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																		<b>Customer Info</b>
																	</div>
																</div>

																<div>
																	<ul class="list-unstyled  spaced">
																		<li>
																			<i class="ace-icon fa fa-caret-right green"></i>Street, City
																		</li>

																		<li>
																			<i class="ace-icon fa fa-caret-right green"></i>Zip Code
																		</li>

																		<li>
																			<i class="ace-icon fa fa-caret-right green"></i>State, Country
																		</li>

																		<li class="divider"></li>

																		<li>
																			<i class="ace-icon fa fa-caret-right green"></i>
																			Contact Info
																		</li>
																	</ul>
																</div>
															</div><!-- /.col -->
														</div><!-- /.row -->

														<div class="space"></div>

														<div>
															<table class="table table-striped table-bordered">
																<thead>
																	<tr>
																		<th class="center">#</th>
																		<th>Product</th>
																		<th class="hidden-xs">Description</th>
																		<th class="hidden-480">Discount</th>
																		<th>Total</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td class="center">1</td>

																		<td>
																			<a href="#">google.com</a>
																		</td>
																		<td class="hidden-xs">
																			1 year domain registration
																		</td>
																		<td class="hidden-480"> --- </td>
																		<td>$10</td>
																	</tr>

																	<tr>
																		<td class="center">2</td>

																		<td>
																			<a href="#">yahoo.com</a>
																		</td>
																		<td class="hidden-xs">
																			5 year domain registration
																		</td>
																		<td class="hidden-480"> 5% </td>
																		<td>$45</td>
																	</tr>

																	<tr>
																		<td class="center">3</td>
																		<td>Hosting</td>
																		<td class="hidden-xs"> 1 year basic hosting </td>
																		<td class="hidden-480"> 10% </td>
																		<td>$90</td>
																	</tr>

																	<tr>
																		<td class="center">4</td>
																		<td>Design</td>
																		<td class="hidden-xs"> Theme customization </td>
																		<td class="hidden-480"> 50% </td>
																		<td>$250</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="hr hr8 hr-double hr-dotted"></div>

														<div class="row">
															<div class="col-sm-5 pull-right">
																<h4 class="pull-right">
																	Total amount :
																	<span class="red">$395</span>
																</h4>
															</div>
															<div class="col-sm-7 pull-left"> Extra Information </div>
														</div>

														<div class="space-6"></div>
														<div class="well">
															Thank you for choosing Ace Company products.
					We believe you will be satisfied by our services.
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
