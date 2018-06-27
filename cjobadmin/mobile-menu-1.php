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

				<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
					<script type="text/javascript">
						try{ace.settings.loadState('sidebar')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="ace-icon fa fa-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="ace-icon fa fa-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="ace-icon fa fa-users"></i>
							</button>

							<button class="btn btn-danger">
								<i class="ace-icon fa fa-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- /.sidebar-shortcuts -->
					<?php
					include 'includes/left-sidebar.php';
					?>

					<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
						<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
					</div>
				</div>

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

								<li>
									<a href="#">Layouts</a>
								</li>
								<li class="active">Default Mobile Menu</li>
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
								<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  Default Responsive(mobile) Menu </h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="alert alert-info hidden-sm hidden-xs">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
										Please note that
										<span class="blue bolder">mobile menu</span>
										is visible only when window size is less than
										<span class="blue bolder">992px</span>
										,which you can change using CSS builder tool.
									</div>

									<div class="alert alert-info hidden-md hidden-lg">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
										When device is smaller than
										<span class="blue bolder">992px</span>
										wide, side menu is hidden and will be visible by clicking on the toggle button.
									</div>

									<div class="hidden-md hidden-lg">
										<a href="#" class="btn btn-primary btn-white btn-bold" id="id-change-style">
											<i class="ace-icon fa fa-exchange"></i>
											Show older Ace toggle button
										</a>

										<div class="space-4"></div>

										<div>
											<label>
												Push Content :
												<input type="checkbox" class="ace ace-switch ace-switch-6" id="id-push-content" />
												<span class="lbl middle"></span>
											</label>
										</div>

										<div class="hr hr-16"></div>
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
					$('#id-change-style').on(ace.click_event, function() {
						var toggler = $('#menu-toggler');
						var fixed = toggler.hasClass('fixed');
						var display = toggler.hasClass('display');
						
						if(toggler.closest('.navbar').length == 1) {
							$('#menu-toggler').remove();
							toggler = $('#sidebar').before('<a id="menu-toggler" data-target="#sidebar" class="menu-toggler" href="#">\
								<span class="sr-only">Toggle sidebar</span>\
								<span class="toggler-text"></span>\
							 </a>').prev();
				
							 var ace_sidebar = $('#sidebar').ace_sidebar('ref');
							 ace_sidebar.set('mobile_style', 2);
				
							 var icon = $(this).children().detach();
							 $(this).text('Hide older Ace toggle button').prepend(icon);
							 
							 $('#id-push-content').closest('div').hide();
							 $('#id-push-content').removeAttr('checked');
							 $('.sidebar').removeClass('push_away');
						 } else {
							$('#menu-toggler').remove();
							toggler = $('.navbar-brand').before('<button data-target="#sidebar" id="menu-toggler" class="three-bars pull-left menu-toggler navbar-toggle" type="button">\
								<span class="sr-only">Toggle sidebar</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>\
							</button>').prev();
							
							 var ace_sidebar = $('#sidebar').ace_sidebar('ref');
							 ace_sidebar.set('mobile_style', 1);
							
							var icon = $(this).children().detach();
							$(this).text('Show older Ace toggle button').prepend(icon);
							
							$('#id-push-content').closest('div').show();
						 }
				
						 if(fixed) toggler.addClass('fixed');
						 if(display) toggler.addClass('display');
						 
						 $('.sidebar[data-sidebar-hover=true]').ace_sidebar_hover('reset');
						 $('.sidebar[data-sidebar-scroll=true]').ace_sidebar_scroll('reset');
				
						 return false;
					});
					
					$('#id-push-content').removeAttr('checked').on('click', function() {
						$('.sidebar').toggleClass('push_away');
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
