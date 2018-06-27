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

			<meta name="description" content="Drag &amp; drop file upload with image preview" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

			<!-- bootstrap & fontawesome -->
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

			<!-- page specific plugin styles -->
			<link rel="stylesheet" href="assets/css/dropzone.min.css" />

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
								<li class="active">Dropzone File Upload</li>
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
									Dropzone.js
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										Drag &amp; drop file upload with image preview
									</small>
								</h1>
							</div><!-- /.page-header -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="alert alert-info">
										<i class="ace-icon fa fa-hand-o-right"></i>

										Please note that demo server is not configured to save uploaded files, therefore you may get an error message.
										<button class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
									</div>

									<div>
										<form action="./dummy.php" class="dropzone well" id="dropzone">
											<div class="fallback">
												<input name="file" type="file" multiple="" />
											</div>
										</form>
									</div>

									<div id="preview-template" class="hide">
										<div class="dz-preview dz-file-preview">
											<div class="dz-image">
												<img data-dz-thumbnail="" />
											</div>

											<div class="dz-details">
												<div class="dz-size">
													<span data-dz-size=""></span>
												</div>

												<div class="dz-filename">
													<span data-dz-name=""></span>
												</div>
											</div>

											<div class="dz-progress">
												<span class="dz-upload" data-dz-uploadprogress=""></span>
											</div>

											<div class="dz-error-message">
												<span data-dz-errormessage=""></span>
											</div>

											<div class="dz-success-mark">
												<span class="fa-stack fa-lg bigger-150">
													<i class="fa fa-circle fa-stack-2x white"></i>

													<i class="fa fa-check fa-stack-1x fa-inverse green"></i>
												</span>
											</div>

											<div class="dz-error-mark">
												<span class="fa-stack fa-lg bigger-150">
													<i class="fa fa-circle fa-stack-2x white"></i>

													<i class="fa fa-remove fa-stack-1x fa-inverse red"></i>
												</span>
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
			<script src="assets/js/dropzone.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- inline scripts related to this page -->
			<script type="text/javascript">
				jQuery(function($){
				
				try {
				  Dropzone.autoDiscover = false;
				
				  var myDropzone = new Dropzone('#dropzone', {
					previewTemplate: $('#preview-template').php(),
					
					thumbnailHeight: 120,
					thumbnailWidth: 120,
					maxFilesize: 0.5,
					
					//addRemoveLinks : true,
					//dictRemoveFile: 'Remove',
					
					dictDefaultMessage :
					'<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload \
					<span class="smaller-80 grey">(or click)</span> <br /> \
					<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>'
				,
					
					thumbnail: function(file, dataUrl) {
					  if (file.previewElement) {
						$(file.previewElement).removeClass("dz-file-preview");
						var images = $(file.previewElement).find("[data-dz-thumbnail]").each(function() {
							var thumbnailElement = this;
							thumbnailElement.alt = file.name;
							thumbnailElement.src = dataUrl;
						});
						setTimeout(function() { $(file.previewElement).addClass("dz-image-preview"); }, 1);
					  }
					}
				
				  });
				
				
				  //simulating upload progress
				  var minSteps = 6,
					  maxSteps = 60,
					  timeBetweenSteps = 100,
					  bytesPerStep = 100000;
				
				  myDropzone.uploadFiles = function(files) {
					var self = this;
				
					for (var i = 0; i < files.length; i++) {
					  var file = files[i];
						  totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));
				
					  for (var step = 0; step < totalSteps; step++) {
						var duration = timeBetweenSteps * (step + 1);
						setTimeout(function(file, totalSteps, step) {
						  return function() {
							file.upload = {
							  progress: 100 * (step + 1) / totalSteps,
							  total: file.size,
							  bytesSent: (step + 1) * file.size / totalSteps
							};
				
							self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
							if (file.upload.progress == 100) {
							  file.status = Dropzone.SUCCESS;
							  self.emit("success", file, 'success', null);
							  self.emit("complete", file);
							  self.processQueue();
							}
						  };
						}(file, totalSteps, step), duration);
					  }
					}
				   }
				
				   
				   //remove dropzone instance when leaving this page in ajax mode
				   $(document).one('ajaxloadstart.page', function(e) {
						try {
							myDropzone.destroy();
						} catch(e) {}
				   });
				
				} catch(e) {
				  alert('Dropzone.js does not support older browsers!');
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
