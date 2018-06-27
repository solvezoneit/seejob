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

			<meta name="description" content="top menu &amp; navigation" />
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
						<div class="page-content">
							<?php include"includes/setting.php";?>
							<div class="page-header">
								<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  
									Top Menu Style
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										top menu &amp; navigation
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="alert alert-info visible-sm visible-xs">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
										Please note that
										<span class="blue bolder">top menu style</span>
										is visible only in devices larger than
										<span class="blue bolder">991px</span>
										which you can change using CSS builder tool.
									</div>

									<div class="well well-sm visible-sm visible-xs">
										Top menu can become any of the 3 mobile view menu styles:
										<em>default</em>
	,
										<em>collapsible</em>
										or
										<em>minimized</em>.
									</div>

									<div class="hidden-sm hidden-xs">
										<button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
											<i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
											Collapse/Expand Menu
										</button>
									</div>

									<div class="center">
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
				 var $sidebar = $('.sidebar').eq(0);
				 if( !$sidebar.hasClass('h-sidebar') ) return;
				
				 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
					if( event_name !== 'sidebar_fixed' ) return;
				
					var sidebar = $sidebar.get(0);
					var $window = $(window);
				
					//return if sidebar is not fixed or in mobile view mode
					var sidebar_vars = $sidebar.ace_sidebar('vars');
					if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
						$sidebar.removeClass('lower-highlight');
						//restore original, default marginTop
						sidebar.style.marginTop = '';
				
						$window.off('scroll.ace.top_menu')
						return;
					}
				
				
					 var done = false;
					 $window.on('scroll.ace.top_menu', function(e) {
				
						var scroll = $window.scrollTop();
						scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
						if (scroll > 17) scroll = 17;
				
				
						if (scroll > 16) {			
							if(!done) {
								$sidebar.addClass('lower-highlight');
								done = true;
							}
						}
						else {
							if(done) {
								$sidebar.removeClass('lower-highlight');
								done = false;
							}
						}
				
						sidebar.style['marginTop'] = (17-scroll)+'px';
					 }).triggerHandler('scroll.ace.top_menu');
				
				 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
				
				 $(window).on('resize.ace.top_menu', function() {
					$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
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
