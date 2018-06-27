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
			<link rel="stylesheet" href="assets/css/bootstrap-duallistbox.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-multiselect.min.css" />
			<link rel="stylesheet" href="assets/css/select2.min.css" />

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
									<a href="#">Forms</a>
								</li>
								<li class="active">Form Elements 2</li>
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
								<h1><a onclick="history.back()"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-arrow-left"></i>&nbsp;  Back</button></a>&nbsp;  More Elements </h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<form class="form-horizontal" role="form">
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-top"> Star Rating </label>

											<div class="col-sm-9">
												<div class="rating inline"></div>

												<div class="hr hr-16 hr-dotted"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right">Typeahead.js</label>

											<div class="col-sm-9">
												<div class="pos-rel">
													<input class="typeahead scrollable" type="text" placeholder="States of USA" />
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="form-group">
											<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Bootstrap Multiselect</label>

											<div class="col-xs-12 col-sm-9">
												<select id="food" class="multiselect" multiple="">
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
												</select>
											</div>
										</div>

										<div class="hr hr-16 hr-dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-top" for="duallist"> Dual listbox </label>

											<div class="col-sm-8">
												<select multiple="multiple" size="10" name="duallistbox_demo1[]" id="duallist">
													<option value="option1">Option 1</option>
													<option value="option2">Option 2</option>
													<option value="option3" selected="selected">Option 3</option>
													<option value="option4">Option 4</option>
													<option value="option5">Option 5</option>
													<option value="option6" selected="selected">Option 6</option>
													<option value="option7">Option 7</option>
													<option value="option8">Option 8</option>
													<option value="option9">Option 9</option>
													<option value="option0">Option 10</option>
												</select>

												<div class="hr hr-16 hr-dotted"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-xs-12 col-sm-3 no-padding-right"> Select2 </label>

											<div class="col-xs-12 col-sm-9">
												<select multiple="" id="state" name="state" class="select2" data-placeholder="Click to Choose...">
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

												<span class="inline pull-right">
													<span class="grey">style:</span>

													<span class="btn-toolbar inline middle no-margin">
														<span id="select2-multiple-style" data-toggle="buttons" class="btn-group no-margin">
															<label class="btn btn-xs btn-yellow active">
																1
																<input type="radio" value="1" />
															</label>

															<label class="btn btn-xs btn-yellow">
																2
																<input type="radio" value="2" />
															</label>
														</span>
													</span>
												</span>
											</div>
										</div>
									</form>

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
			<script src="assets/js/jquery.bootstrap-duallistbox.min.js"></script>
			<script src="assets/js/jquery.raty.min.js"></script>
			<script src="assets/js/bootstrap-multiselect.min.js"></script>
			<script src="assets/js/select2.min.js"></script>
			<script src="assets/js/jquery-typeahead.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				jQuery(function($){
					var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});
					var container1 = demo1.bootstrapDualListbox('getContainer');
					container1.find('.btn').addClass('btn-white btn-info btn-bold');
				
					/**var setRatingColors = function() {
						$(this).find('.star-on-png,.star-half-png').addClass('orange2').removeClass('grey');
						$(this).find('.star-off-png').removeClass('orange2').addClass('grey');
					}*/
					$('.rating').raty({
						'cancel' : true,
						'half': true,
						'starType' : 'i'
						/**,
						
						'click': function() {
							setRatingColors.call(this);
						},
						'mouseover': function() {
							setRatingColors.call(this);
						},
						'mouseout': function() {
							setRatingColors.call(this);
						}*/
					})//.find('i:not(.star-raty)').addClass('grey');
					
					
					
					//////////////////
					//select2
					$('.select2').css('width','200px').select2({allowClear:true})
					$('#select2-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('.select2').addClass('tag-input-style');
						 else $('.select2').removeClass('tag-input-style');
					});
					
					//////////////////
					$('.multiselect').multiselect({
					 enableFiltering: true,
					 enableHTML: true,
					 buttonClass: 'btn btn-white btn-primary',
					 templates: {
						button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> &nbsp;<b class="fa fa-caret-down"></b></button>',
						ul: '<ul class="multiselect-container dropdown-menu"></ul>',
						filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
						filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
						li: '<li><a tabindex="0"><label></label></a></li>',
						divider: '<li class="multiselect-item divider"></li>',
						liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
					 }
					});
				
					
					///////////////////
						
					//typeahead.js
					//example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
					var substringMatcher = function(strs) {
						return function findMatches(q, cb) {
							var matches, substringRegex;
						 
							// an array that will be populated with substring matches
							matches = [];
						 
							// regex used to determine if a string contains the substring `q`
							substrRegex = new RegExp(q, 'i');
						 
							// iterate through the pool of strings and for any string that
							// contains the substring `q`, add it to the `matches` array
							$.each(strs, function(i, str) {
								if (substrRegex.test(str)) {
									// the typeahead jQuery plugin expects suggestions to a
									// JavaScript object, refer to typeahead docs for more info
									matches.push({ value: str });
								}
							});
				
							cb(matches);
						}
					 }
				
					 $('input.typeahead').typeahead({
						hint: true,
						highlight: true,
						minLength: 1
					 }, {
						name: 'states',
						displayKey: 'value',
						source: substringMatcher(ace.vars['US_STATES']),
						limit: 10
					 });
						
						
					///////////////
					
					
					//in ajax mode, remove remaining elements before leaving page
					$(document).one('ajaxloadstart.page', function(e) {
						$('[class*=select2]').remove();
						$('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
						$('.rating').raty('destroy');
						$('.multiselect').multiselect('destroy');
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
