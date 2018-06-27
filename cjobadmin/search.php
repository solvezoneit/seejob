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
			<link rel="stylesheet" href="assets/css/select2.min.css" />
			<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />

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
								<li class="active">Search Results</li>
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
								<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  Search Results </h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="clearfix">
										<div class="pull-right">
											<span class="green middle bolder">Choose result page type: &nbsp;</span>

											<div class="btn-toolbar inline middle no-margin">
												<div id="toggle-result-page" data-toggle="buttons" class="btn-group no-margin">
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
									</div>

									<div class="hr dotted"></div>

									<div>
										<div class="row search-page" id="search-page-1">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-12 col-sm-3">
														<div class="search-area well well-sm">
															<div class="search-filter-header bg-primary">
																<h5 class="smaller no-margin-bottom">
																	<i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; Refine your Search
																</h5>
															</div>

															<div class="space-10"></div>

															<form>
																<div class="row">
																	<div class="col-xs-12 col-sm-11 col-md-10">
																		<div class="input-group">
																			<input type="text" class="form-control" name="keywords" placeholder="Look within results" />
																			<div class="input-group-btn">
																				<button type="button" class="btn btn-default no-border btn-sm">
																					<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																				</button>
																			</div>
																		</div>
																	</div>
																</div>
															</form>

															<div class="hr hr-dotted"></div>

															<h4 class="blue smaller">
																<i class="fa fa-tags"></i>
																Category
															</h4>

															<div class="tree-container">
																<ul id="cat-tree"></ul>
															</div>

															<div class="hr hr-dotted"></div>

															<h4 class="blue smaller">
																<i class="fa fa-map-marker light-orange bigger-110"></i>
																Location
															</h4>

															<div>
																<select multiple="" name="state" class="select2 tag-input-style" data-placeholder="Click to Choose...">
																	<option value="">&nbsp;</option>
																	<option value="AL">Alabama</option>
																	<option value="AK">Alaska</option>
																	<option value="AZ">Arizona</option>
																	<option value="AR">Arkansas</option>
																	<option value="CA">California</option>
																	<option value="CO">Colorado</option>
																	<option value="CT">Connecticut</option>
																	<option value="DE">Delaware</option>
																	<option value="FL">Florida</option>
																	<option value="GA">Georgia</option>
																	<option value="HI">Hawaii</option>
																	<option value="ID">Idaho</option>
																	<option value="IL">Illinois</option>
																	<option value="IN">Indiana</option>
																	<option value="IA">Iowa</option>
																	<option value="KS">Kansas</option>
																	<option value="KY">Kentucky</option>
																	<option value="LA">Louisiana</option>
																	<option value="ME">Maine</option>
																	<option value="MD">Maryland</option>
																	<option value="MA">Massachusetts</option>
																	<option value="MI">Michigan</option>
																	<option value="MN">Minnesota</option>
																	<option value="MS">Mississippi</option>
																	<option value="MO">Missouri</option>
																	<option value="MT">Montana</option>
																	<option value="NE">Nebraska</option>
																	<option value="NV">Nevada</option>
																	<option value="NH">New Hampshire</option>
																	<option value="NJ">New Jersey</option>
																	<option value="NM">New Mexico</option>
																	<option value="NY">New York</option>
																	<option value="NC">North Carolina</option>
																	<option value="ND">North Dakota</option>
																	<option value="OH">Ohio</option>
																	<option value="OK">Oklahoma</option>
																	<option value="OR">Oregon</option>
																	<option value="PA">Pennsylvania</option>
																	<option value="RI">Rhode Island</option>
																	<option value="SC">South Carolina</option>
																	<option value="SD">South Dakota</option>
																	<option value="TN">Tennessee</option>
																	<option value="TX">Texas</option>
																	<option value="UT">Utah</option>
																	<option value="VT">Vermont</option>
																	<option value="VA">Virginia</option>
																	<option value="WA">Washington</option>
																	<option value="WV">West Virginia</option>
																	<option value="WI">Wisconsin</option>
																	<option value="WY">Wyoming</option>
																</select>
															</div>

															<div class="hr hr-dotted"></div>

															<h4 class="blue smaller">
																<i class="fa fa-location-arrow light-grey bigger-110"></i>
																Distance
															</h4>

															<div class="search-filter-element">
																<span>within</span>
	&nbsp;
																<div id="slider-range" class="inline"></div>
																&nbsp;
																<span>miles</span>
															</div>

															<div class="hr hr-dotted hr-24"></div>

															<div class="text-center">
																<button type="button" class="btn btn-default btn-round btn-sm btn-white">
																	<i class="ace-icon fa fa-remove red2"></i>
																	Reset
																</button>

																<button type="button" class="btn btn-default btn-round btn-white">
																	<i class="ace-icon fa fa-refresh green"></i>
																	Update
																</button>
															</div>

															<div class="space-4"></div>
														</div>
													</div>

													<div class="col-xs-12 col-sm-9">
														<div class="row">
															<div class="search-area well col-xs-12">
																<div class="pull-left">
																	<b class="text-primary">Display</b>

																	&nbsp;
																	<div id="toggle-result-format" class="btn-group btn-overlap" data-toggle="buttons">
																		<label title="Thumbnail view" class="btn btn-lg btn-white btn-success active" data-class="btn-success" aria-pressed="true">
																			<input type="radio" value="2" autocomplete="off" />
																			<i class="icon-only ace-icon fa fa-th"></i>
																		</label>

																		<label title="List view" class="btn btn-lg btn-white btn-grey" data-class="btn-primary">
																			<input type="radio" value="1" checked="" autocomplete="off" />
																			<i class="icon-only ace-icon fa fa-list"></i>
																		</label>

																		<label title="Map view" class="btn btn-lg btn-white btn-grey" data-class="btn-warning">
																			<input type="radio" value="3" autocomplete="off" />
																			<i class="icon-only ace-icon fa fa-crosshairs"></i>
																		</label>
																	</div>
																</div>

																<div class="pull-right">
																	<b class="text-primary">Order</b>

																	&nbsp;
																	<select>
																		<option>Relevance</option>
																		<option>Newest First</option>
																		<option>Rating</option>
																	</select>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-xs-6 col-sm-4 col-md-3">
																<div class="thumbnail search-thumbnail">
																	<span class="search-promotion label label-success arrowed-in arrowed-in-right">Sponsored</span>

																	<img class="media-object" data-src="holder.js/100px200?theme=gray" />
																	<div class="caption">
																		<div class="clearfix">
																			<span class="pull-right label label-grey info-label">London</span>

																			<div class="pull-left bigger-110">
																				<i class="ace-icon fa fa-star orange2"></i>

																				<i class="ace-icon fa fa-star orange2"></i>

																				<i class="ace-icon fa fa-star orange2"></i>

																				<i class="ace-icon fa fa-star-half-o orange2"></i>

																				<i class="ace-icon fa fa-star light-grey"></i>
																			</div>
																		</div>

																		<h3 class="search-title">
																			<a href="#" class="blue">Thumbnail label</a>
																		</h3>
																		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p>
																	</div>
																</div>
															</div>

															<div class="col-xs-6 col-sm-4 col-md-3">
																<div class="thumbnail search-thumbnail">
																	<img class="media-object" data-src="holder.js/100px200?theme=gray" />
																	<div class="caption">
																		<div class="clearfix">
																			<span class="pull-right label label-grey info-label">Tokyo</span>
																		</div>

																		<h3 class="search-title">
																			<a href="#" class="blue">Thumbnail label</a>
																		</h3>
																		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p>
																	</div>
																</div>
															</div>

															<div class="col-xs-6 col-sm-4 col-md-3">
																<div class="thumbnail search-thumbnail">
																	<img class="media-object" data-src="holder.js/100px200?theme=gray" />
																	<div class="caption">
																		<div class="clearfix">
																			<span class="pull-right label label-grey info-label">Istanbul</span>
																		</div>

																		<h3 class="search-title">
																			<a href="#" class="blue">Thumbnail label</a>
																		</h3>
																		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p>
																	</div>
																</div>
															</div>

															<div class="col-xs-6 col-sm-4 col-md-3">
																<div class="thumbnail search-thumbnail">
																	<img class="media-object" data-src="holder.js/100px200?theme=social" />
																	<div class="caption">
																		<div class="clearfix">
																			<span class="pull-right label label-grey info-label">Chicago</span>
																		</div>

																		<h3 class="search-title">
																			<a href="#" class="blue">Thumbnail label</a>
																		</h3>
																		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam ...</p>
																	</div>
																</div>
															</div>
														</div>

														<div class="space-12"></div>

														<div class="row">
															<div class="col-xs-12">
																<div class="media search-media">
																	<div class="media-left">
																		<a href="#">
																			<img class="media-object" data-src="holder.js/72x72" />
																		</a>
																	</div>

																	<div class="media-body">
																		<div>
																			<h4 class="media-heading">
																				<a href="#" class="blue">Media heading</a>
																			</h4>
																		</div>
																		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>

																		<div class="search-actions text-center">
																			<span class="text-info">$</span>

																			<span class="blue bolder bigger-150">300</span>

																			monthly
																			<div class="action-buttons bigger-125">
																				<a href="#">
																					<i class="ace-icon fa fa-phone green"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-heart red"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-star orange2"></i>
																				</a>
																			</div>
																			<a class="search-btn-action btn btn-sm btn-block btn-info">Book it!</a>
																		</div>
																	</div>
																</div>

																<div class="media search-media disabled">
																	<div class="media-left">
																		<a href="#">
																			<img class="media-object" data-src="holder.js/72x72" />
																		</a>
																	</div>

																	<div class="media-body">
																		<div>
																			<h4 class="media-heading">
																				<a href="#" class="blue">Media heading</a>
																			</h4>
																		</div>
																		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>

																		<div class="search-actions text-center">
																			<span class="grey">$</span>

																			<span class="grey bolder bigger-125">250</span>

																			monthly
																			<div class="action-buttons bigger-125">
																				<a href="#">
																					<i class="ace-icon fa fa-phone green"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-heart red"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-star orange2"></i>
																				</a>
																			</div>
																			<a class="search-btn-action btn btn-sm btn-block btn-grey disabled">Unavailable!</a>
																		</div>
																	</div>
																</div>

																<div class="media search-media">
																	<div class="media-left">
																		<a href="#">
																			<img class="media-object" data-src="holder.js/72x72" />
																		</a>
																	</div>

																	<div class="media-body">
																		<div>
																			<h4 class="media-heading">
																				<a href="#" class="blue">Media heading</a>
																			</h4>
																		</div>
																		<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis ...</p>

																		<div class="search-actions text-center">
																			<span class="text-info">$</span>

																			<span class="blue bolder bigger-150">220</span>

																			monthly
																			<div class="action-buttons bigger-125">
																				<a href="#">
																					<i class="ace-icon fa fa-phone green"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-heart red"></i>
																				</a>

																				<a href="#">
																					<i class="ace-icon fa fa-star orange2"></i>
																				</a>
																			</div>
																			<a class="search-btn-action btn btn-sm btn-block btn-info">Book it!</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="hide">
										<div class="row search-page" id="search-page-2">
											<div class="col-xs-12 col-md-10 col-md-offset-1">
												<div class="search-area well no-margin-bottom">
													<form>
														<div class="row">
															<div class="col-md-6">
																<div class="input-group">
																	<input type="text" class="form-control" name="search" value="Hello World" />
																	<div class="input-group-btn">
																		<button type="button" class="btn btn-primary btn-sm">
																			<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																		</button>
																	</div>
																</div>
															</div>
														</div>
													</form>

													<div class="space space-6"></div>
													<span class="grey">About 263,000,000 results (0.74 seconds)</span>
												</div>

												<div class="search-results">
													<div class="search-result">
														<h5 class="search-title">
															<a href="#">&quot;Hello, World!&quot; - Wikipedia, the free encyclopedia</a>
														</h5>
														<a class="text-success" href="#">en.wikipedia.org</a>

														<p class="search-content">
															A &quot;
															<b>Hello</b>
	,
															<b>World</b>
	!&quot; program is a computer program that outputs &quot;
															<b>Hello</b>
	,
															<b>World</b>!&quot; (or some variant thereof) on a display device. Because it is typically one of the ...
														</p>
													</div>

													<div class="search-result">
														<h5 class="search-title">
															<a href="#">Hello World! - GNU Project</a>
														</h5>
														<a class="text-success" href="#">www.gnu.org</a>

														<p class="search-content">
															<b>Hello World</b>
	! How the way people code “
															<b>Hello World</b>” varies depending on their age and job ...
														</p>
													</div>

													<div class="search-result">
														<h5 class="search-title">
															<a href="#">HelloWorld.java - Introduction to Programming in Java</a>
														</h5>
														<a class="text-success" href="#">introcs.cs.princeton.edu</a>

														<p class="search-content">
															<b>HelloWorld</b>
															code in Java. ...
															<b>HelloWorld</b>
	.java. Below is the syntax highlighted version of
															<b>HelloWorld</b>.java from ...
														</p>
													</div>

													<div class="search-result">
														<h5 class="search-title">
															<a href="#">Hello, World! - Learn Python - Free Interactive Python Tutorial</a>
														</h5>
														<a class="text-success" href="#">www.learnpython.org</a>

														<p class="search-content">
															<b>Hello</b>
	,
															<b>World</b>! Python is a very simple language, and has a very straightforward syntax. It encourages programmers to program without boilerplate (prepared) ...
														</p>
													</div>

													<div class="search-result">
														<h5 class="search-title">
															<a href="#">Hello World · GitHub Guides</a>
														</h5>
														<a class="text-success" href="#">guides.github.com</a>

														<p class="search-content">
															The
															<b>Hello World</b>
															project is a time-honored tradition in computer programming. It is a simple exercise that gets you started when learning something new. Let's get ...
														</p>
													</div>
												</div>

												<div class="search-area well well-sm text-center">
													<ul class="pagination">
														<li class="disabled">
															<a href="#">
																<i class="ace-icon fa fa-angle-double-left"></i>
															</a>
														</li>

														<li class="active">
															<a href="#">1</a>
														</li>

														<li>
															<a href="#">2</a>
														</li>

														<li>
															<a href="#">3</a>
														</li>

														<li>
															<a href="#">4</a>
														</li>

														<li>
															<a href="#">5</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-angle-double-right"></i>
															</a>
														</li>
													</ul>
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
			<script src="assets/js/select2.min.js"></script>
			<script src="assets/js/jquery-ui.custom.min.js"></script>
			<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
			<script src="assets/js/holder.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				jQuery(function($) {
				
					//data for tree element
					var category = {
						'for-sale' : {text: 'For Sale', type: 'folder'}	,
						'vehicles' : {text: 'Vehicles', type: 'item'}	,
						'rentals' : {text: 'Rentals', type: 'item'}	,
						'real-estate' : {text: 'Real Estate', type: 'item'}	,
						'pets' : {text: 'Pets', type: 'item'}	,
						'tickets' : {text: 'Tickets', type: 'item'}
					}
					category['for-sale']['additionalParameters'] = {
						'children' : {
							'appliances' : {text: 'Appliances', type: 'item'},
							'arts-crafts' : {text: 'Arts & Crafts', type: 'item'},
							'clothing' : {text: 'Clothing', type: 'item'},
							'computers' : {text: 'Computers', type: 'item'},
							'jewelry' : {text: 'Jewelry', type: 'item'},
							'office-business' : {text: 'Office', type: 'item'},
							'sports-fitness' : {text: 'Sports & Fitness', type: 'item'}
						}
					}
					
					var dataSource1 = function(options, callback){
						var $data = null
						if(!("text" in options) && !("type" in options)){
							$data = category;//the root tree
							callback({ data: $data });
							return;
						}
						else if("type" in options && options.type == "folder") {
							if("additionalParameters" in options && "children" in options.additionalParameters)
								$data = options.additionalParameters.children || {};
							else $data = {}//no data
						}
						
						callback({ data: $data })
					}
					
					$('#cat-tree').ace_tree({
						dataSource: dataSource1,
						multiSelect: true,
						cacheItems: true,
						'open-icon' : 'ace-icon tree-minus',
						'close-icon' : 'ace-icon tree-plus',
						'itemSelect' : true,
						'folderSelect': false,
						'selected-icon' : 'ace-icon fa fa-check',
						'unselected-icon' : 'ace-icon fa fa-times',
						loadingHTML : '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
					});
					
				
					$('.tree-container').ace_scroll({size: 250, mouseWheelLock: true});
					$('#cat-tree').on('closed.fu.tree disclosedFolder.fu.tree', function() {
						$('.tree-container').ace_scroll('reset').ace_scroll('start');	
					});
					
					
					
					//select2 location element
					$('.select2').css('min-width', '150px').select2({allowClear:true});
					
					
					//jQuery ui distance slider
					$( "#slider-range" ).css('width','150px').slider({
						range: true,
						min: 0,
						max: 100,
						values: [ 17, 67 ],
						slide: function( event, ui ) {
							var val = ui.values[$(ui.handle).index()-1] + "";
				
							if( !ui.handle.firstChild ) {
								$("<div class='tooltip bottom in' style='display:none;left:-6px;top:14px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
								.prependTo(ui.handle);
							}
							$(ui.handle.firstChild).show().children().eq(1).text(val);
						}
					}).find('span.ui-slider-handle').on('blur', function(){
						$(this.firstChild).hide();
					});
					
				
					//this is for demo only
					$('.thumbnail').on('mouseenter', function() {
						$(this).find('.info-label').addClass('label-primary');
					}).on('mouseleave', function() {
						$(this).find('.info-label').removeClass('label-primary');
					});
					
				
					//toggle display format buttons
					$('#toggle-result-format .btn').tooltip({container: 'body'}).on('click', function(e){
						$(this).siblings().each(function() {
							$(this).removeClass($(this).attr('data-class')).addClass('btn-grey');
						});
						$(this).removeClass('btn-grey').addClass($(this).attr('data-class'));
					});
					
					////////////////////
					//show different search page
					$('#toggle-result-page .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						$('.search-page').parent().addClass('hide');
						$('#search-page-'+which).parent().removeClass('hide');
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
