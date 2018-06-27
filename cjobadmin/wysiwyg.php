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
									<a href="#">Forms</a>
								</li>
								<li class="active">Wysiwyg &amp; Markdown</li>
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
								<h1>Wysiwyg &amp; Markdown Editor </h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<h4 class="header green clearfix">
										Bootstrap Lightweight Editor
										<span class="block pull-right">
											<small class="grey middle">Choose style: &nbsp;</small>

											<span class="btn-toolbar inline middle no-margin">
												<span data-toggle="buttons" class="btn-group no-margin">
													<label class="btn btn-sm btn-yellow">
														1
														<input type="radio" value="1" />
													</label>

													<label class="btn btn-sm btn-yellow active">
														2
														<input type="radio" value="2" />
													</label>

													<label class="btn btn-sm btn-yellow">
														3
														<input type="radio" value="3" />
													</label>

													<label class="btn btn-sm btn-yellow">
														4
														<input type="radio" value="4" />
													</label>
												</span>
											</span>
										</span>
									</h4>

									<div class="wysiwyg-editor" id="editor1"></div>

									<div class="hr hr-double dotted"></div>

									<div class="row">
										<div class="col-sm-5">
											<h4 class="header blue">Inside Widget</h4>

											<div class="widget-box widget-color-green">
												<div class="widget-header widget-header-small">  </div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<div class="wysiwyg-editor" id="editor2"></div>
													</div>

													<div class="widget-toolbox padding-4 clearfix">
														<div class="btn-group pull-left">
															<button class="btn btn-sm btn-default btn-white btn-round">
																<i class="ace-icon fa fa-times bigger-125"></i>
																Cancel
															</button>
														</div>

														<div class="btn-group pull-right">
															<button class="btn btn-sm btn-danger btn-white btn-round">
																<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																Save
															</button>

															<button class="btn btn-sm btn-success btn-white btn-round">
																<i class="ace-icon fa fa-globe bigger-125"></i>

																Publish
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-125"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-7">
											<h4 class="header green">Markdown Editor</h4>

											<div class="widget-box widget-color-blue">
												<div class="widget-header widget-header-small">  </div>

												<div class="widget-body">
													<div class="widget-main no-padding">
														<textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10">**Markdown Editor** inside a *widget box*

	- list item 1
	- list item 2
	- list item 3</textarea>
													</div>

													<div class="widget-toolbox padding-4 clearfix">
														<div class="btn-group pull-left">
															<button class="btn btn-sm btn-info">
																<i class="ace-icon fa fa-times bigger-125"></i>
																Cancel
															</button>
														</div>

														<div class="btn-group pull-right">
															<button class="btn btn-sm btn-purple">
																<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																Save
															</button>
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
			<script src="assets/js/jquery-ui.custom.min.js"></script>
			<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
			<script src="assets/js/markdown.min.js"></script>
			<script src="assets/js/bootstrap-markdown.min.js"></script>
			<script src="assets/js/jquery.hotkeys.index.min.js"></script>
			<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
			<script src="assets/js/bootbox.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				jQuery(function($){
		
		$('textarea[data-provide="markdown"]').each(function(){
			var $this = $(this);

			if ($this.data('markdown')) {
			  $this.data('markdown').showEditor();
			}
			else $this.markdown()
			
			$this.parent().find('.btn').addClass('btn-white');
		})
		
		
		
		function showErrorAlert (reason, detail) {
			var msg='';
			if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
			else {
				//console.log("error uploading file", reason, detail);
			}
			$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
			 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
		}

		//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

		//but we want to change a few buttons colors for the third style
		$('#editor1').ace_wysiwyg({
			toolbar:
			[
				'font',
				null,
				'fontSize',
				null,
				{name:'bold', className:'btn-info'},
				{name:'italic', className:'btn-info'},
				{name:'strikethrough', className:'btn-info'},
				{name:'underline', className:'btn-info'},
				null,
				{name:'insertunorderedlist', className:'btn-success'},
				{name:'insertorderedlist', className:'btn-success'},
				{name:'outdent', className:'btn-purple'},
				{name:'indent', className:'btn-purple'},
				null,
				{name:'justifyleft', className:'btn-primary'},
				{name:'justifycenter', className:'btn-primary'},
				{name:'justifyright', className:'btn-primary'},
				{name:'justifyfull', className:'btn-inverse'},
				null,
				{name:'createLink', className:'btn-pink'},
				{name:'unlink', className:'btn-pink'},
				null,
				{name:'insertImage', className:'btn-success'},
				null,
				'foreColor',
				null,
				{name:'undo', className:'btn-grey'},
				{name:'redo', className:'btn-grey'}
			],
			'wysiwyg': {
				fileUploadError: showErrorAlert
			}
		}).prev().addClass('wysiwyg-style2');

		
		/**
		//make the editor have all the available height
		$(window).on('resize.editor', function() {
			var offset = $('#editor1').parent().offset();
			var winHeight =  $(this).height();
			
			$('#editor1').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
		}).triggerHandler('resize.editor');
		*/
		

		$('#editor2').css({'height':'200px'}).ace_wysiwyg({
			toolbar_place: function(toolbar) {
				return $(this).closest('.widget-box')
					   .find('.widget-header').prepend(toolbar)
					   .find('.wysiwyg-toolbar').addClass('inline');
			},
			toolbar:
			[
				'bold',
				{name:'italic' , title:'Change Title!', icon: 'ace-icon fa fa-leaf'},
				'strikethrough',
				null,
				'insertunorderedlist',
				'insertorderedlist',
				null,
				'justifyleft',
				'justifycenter',
				'justifyright'
			],
			speech_button: false
		});
		
		


		$('[data-toggle="buttons"] .btn').on('click', function(e){
			var target = $(this).find('input[type=radio]');
			var which = parseInt(target.val());
			var toolbar = $('#editor1').prev().get(0);
			if(which >= 1 && which <= 4) {
				toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
				if(which == 1) $(toolbar).addClass('wysiwyg-style1');
				else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
				if(which == 4) {
					$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
				} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
			}
		});


		

		//RESIZE IMAGE
		
		//Add Image Resize Functionality to Chrome and Safari
		//webkit browsers don't have image resize functionality when content is editable
		//so let's add something using jQuery UI resizable
		//another option would be opening a dialog for user to enter dimensions.
		if ( typeof jQuery.ui !== 'undefined' && ace.vars['webkit'] ) {
			
			var lastResizableImg = null;
			function destroyResizable() {
				if(lastResizableImg == null) return;
				lastResizableImg.resizable( "destroy" );
				lastResizableImg.removeData('resizable');
				lastResizableImg = null;
			}

			var enableImageResize = function() {
				$('.wysiwyg-editor')
				.on('mousedown', function(e) {
					var target = $(e.target);
					if( e.target instanceof HTMLImageElement ) {
						if( !target.data('resizable') ) {
							target.resizable({
								aspectRatio: e.target.width / e.target.height,
							});
							target.data('resizable', true);
							
							if( lastResizableImg != null ) {
								//disable previous resizable image
								lastResizableImg.resizable( "destroy" );
								lastResizableImg.removeData('resizable');
							}
							lastResizableImg = target;
						}
					}
				})
				.on('click', function(e) {
					if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
						destroyResizable();
					}
				})
				.on('keydown', function() {
					destroyResizable();
				});
			}

			enableImageResize();

			/**
			//or we can load the jQuery UI dynamically only if needed
			if (typeof jQuery.ui !== 'undefined') enableImageResize();
			else {//load jQuery UI if not loaded
				//in Ace demo ./components will be replaced by correct components path
				$.getScript("assets/js/jquery-ui.custom.min.js", function(data, textStatus, jqxhr) {
					enableImageResize()
				});
			}
			*/
		}


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
