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

			<meta name="description" content="This is page-header (.page-header &gt; h1)" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

			<!-- bootstrap & fontawesome -->
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

			<!-- page specific plugin styles -->
			<link rel="stylesheet" href="assets/css/prettify.min.css" />

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
								<li class="active">Typography</li>
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
									Typography
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										This is page-header (.page-header &gt; h1)
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="row">
										<div class="col-sm-6">
											<h4>Headings & Paragraphs</h4>

											<hr />
											<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  h1. Heading 1</h1>
											<p class="lead">
												Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
											</p>
											<h2>h2. Heading 2</h2>
											<p>
												Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
											</p>
											<h3>h3. Heading 3</h3>
											<p>
												Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
											</p>
											<h4>h4. Heading 4</h4>
											<h5>h5. Heading 5</h5>
											<h6>h6. Heading 6</h6>
										</div><!-- /.col -->

										<div class="col-sm-6">
											<div class="widget-box">
												<div class="widget-header widget-header-flat">
													<h4 class="widget-title">Lists</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="row">
															<div class="col-sm-6">
																<ul>
																	<li>Unordered List Item</li>

																	<li>
																		<small>List Item in small tag</small>
																	</li>

																	<li>
																		<b>List Item in bold tag</b>
																	</li>

																	<li>
																		<i>List Item in italics tag</i>
																	</li>

																	<li>
																		<ul class="list-unstyled">
																			<li>
																				<i class="ace-icon fa fa-caret-right blue"></i>
																				Nested List Item
																			</li>

																			<li>
																				<i class="ace-icon fa fa-caret-right blue"></i>
																				Nested List Item
																			</li>

																			<li>
																				<i class="ace-icon fa fa-caret-right blue"></i>
																				Nested List Item
																			</li>
																		</ul>
																	</li>
																	<li>Unordered List Item which is a longer item and may break into more lines.</li>

																	<li>
																		<strong>List Item in strong tag</strong>
																	</li>

																	<li>
																		<em>List Item in emphasis tag</em>
																	</li>
																</ul>
															</div>

															<div class="col-sm-6">
																<ol>
																	<li>Ordered List Item</li>
																	<li class="text-primary">.text-primary Ordered List Item</li>
																	<li class="text-danger">.text-danger Ordered List Item</li>

																	<li class="text-success">
																		<b>.text-success</b>
																		Ordered List Item
																	</li>
																	<li class="text-warning">.text-warning Ordered List Item</li>
																	<li class="text-muted">.text-muted Ordered List Item</li>
																</ol>
															</div>
														</div>

														<hr />
														<div class="row">
															<div class="col-xs-12">
																<ul class="list-unstyled spaced">
																	<li>
																		<i class="ace-icon fa fa-bell-o bigger-110 purple"></i>
																		List with custom icons and more space
																	</li>

																	<li>
																		<i class="ace-icon fa fa-check bigger-110 green"></i>
																		Unordered List Item # 2
																	</li>

																	<li>
																		<i class="ace-icon fa fa-times bigger-110 red"></i>
																		Unordered List Item # 3
																	</li>
																</ul>

																<ul class="list-unstyled spaced2">
																	<li>
																		<i class="ace-icon fa fa-circle green"></i>
																		Even more space
																	</li>

																	<li class="text-warning bigger-110 orange">
																		<i class="ace-icon fa fa-exclamation-triangle"></i>
																		Unordered List Item # 5
																	</li>

																	<li class="muted">
																		<i class="ace-icon fa fa-angle-right bigger-110"></i>
																		Unordered List Item # 6
																	</li>

																	<li>
																		<ul class="list-inline">
																			<li>
																				<i class="ace-icon fa fa-share green bigger-110"></i>
																				Inline List Item # 1
																			</li>
																			<li>List Item # 2</li>
																			<li>List Item # 3</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /.col -->
									</div>

									<hr />
									<div class="row">
										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header widget-header-flat">
													<h4 class="widget-title smaller">
														<i class="ace-icon fa fa-quote-left smaller-80"></i>
														BlockQuote & Address
													</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="row">
															<div class="col-xs-12">
																<blockquote class="pull-right">
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

																	<small>
																		Someone famous
																		<cite title="Source Title">Source Title</cite>
																	</small>
																</blockquote>
															</div>
														</div>

														<div class="row">
															<div class="col-xs-12">
																<blockquote>
																	<p class="lighter line-height-125">
																		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
																	</p>

																	<small>
																		Someone famous
																		<cite title="Source Title">Source Title</cite>
																	</small>
																</blockquote>
															</div>
														</div>

														<hr />
														<address>
															<strong>Twitter, Inc.</strong>

															<br />
															795 Folsom Ave, Suite 600
															<br />
															San Francisco, CA 94107
															<br />
															<abbr title="Phone">P:</abbr>
															(123) 456-7890
														</address>

														<address>
															<strong>Full Name</strong>

															<br />
															<a href="mailto:#">first.last@example.com</a>
														</address>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-8">
											<div class="row">
												<div class="col-xs-12">
													<div class="widget-box">
														<div class="widget-header widget-header-flat">
															<h4 class="widget-title smaller">Definition List</h4>

															<div class="widget-toolbar">
																<label>
																	<small class="green">
																		<b>Horizontal</b>
																	</small>

																	<input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
																	<span class="lbl middle"></span>
																</label>
															</div>
														</div>

														<div class="widget-body">
															<div class="widget-main">
																<code class="pull-right" id="dt-list-code">&lt;dl&gt;</code>

																<dl id="dt-list-1">
																	<dt>Description lists</dt>
																	<dd>A description list is perfect for defining terms.</dd>
																	<dt>Euismod</dt>
																	<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
																	<dd>Donec id elit non mi porta gravida at eget metus.</dd>
																	<dt>Malesuada porta</dt>
																	<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
																	<dt>Felis euismod semper eget lacinia</dt>
																	<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
																</dl>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="row">
												<div class="col-xs-12">
													<div class="widget-box">
														<div class="widget-header widget-header-flat">
															<h4 class="smaller">
																<i class="ace-icon fa fa-code"></i>
																Code view
															</h4>
														</div>

														<div class="widget-body">
															<div class="widget-main">
																<pre class="prettyprint linenums">&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
	&lt;p class="text-warning"&gt;Etiam porta sem malesuada.&lt;/p&gt;
	&lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
	&lt;p class="text-info"&gt;Aenean eu leo quam.&lt;/p&gt;
	&lt;p class="text-success"&gt;Duis mollis.&lt;/p&gt;</pre>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- PAGE CONTENT ENDS -->
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
			<script src="assets/js/prettify.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				jQuery(function($) {
				
					window.prettyPrint && prettyPrint();
					$('#id-check-horizontal').removeAttr('checked').on('click', function(){
						$('#dt-list-1').toggleClass('dl-horizontal').prev().php(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
					});
				
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
