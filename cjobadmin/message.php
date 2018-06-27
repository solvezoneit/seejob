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

			<meta name="description" content="Common form elements and layouts" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

			<!-- bootstrap & fontawesome -->
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
			<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

			<!-- page specific plugin styles -->
			<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
			<link rel="stylesheet" href="assets/css/chosen.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
			<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
			<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

			<!-- text fonts -->
			<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

			<!-- ace styles -->
			<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

			<!--[if lte IE 9]>
				<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
			<![endif]-->
			<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
			<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

			<!-- ace settings handler -->
			<script src="assets/js/ace-extra.min.js"></script>

			<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
			<!-- <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script> -->
			<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.9/adapters/jquery.js"></script> -->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
									<a href="#">Messages</a>
								</li>
								<li class="active">Manage</li>
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
									Manage Messages
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										Messages
									</small>
								</h1>
							</div><!-- /.page-header -->


							<div class="row">
							    <div class="card-alert col-md-10 col-md-offset-1" id="inline_content">
							        <h2>Admin</h2>
							        <p>
							           select one to send Message:<i class="material-icons" style="font-size:10px;color:red">star</i>
							        </p>

							        <?php
										// if(!empty($_SESSION['msg']))
										// { 
										// 	echo '<div class="box-body"><div class="pull-left1 alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Success!</h4>'.$_SESSION['msg'].'</div></div>';
										// 	unset($_SESSION['msg']);
										// }
										// if(!empty($_SESSION['err']))
										// {
										// 	echo'<div class="box-body"><div class="pull-left1 alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Warning!</h4>'.$_SESSION['err'].'</div></div>'; 
										// 	unset($_SESSION['err']);
										// }
									?>
							        <form id="msg-form">

							        	<div class="row">
							                <div class="col-sm-12 form-group">
							                    <label class="radio-inline">
												      <input type="radio" name="chk" required="required" value="Employer"><b>Employer</b>
												    </label>
												    <label class="radio-inline">
												      <input type="radio" name="chk" required="required" value="Job Seeker"><b>Job Seeker</b>
												    </label>												    
											</div>
							            </div>

							            <div class="row">
							                <div class="col-sm-8 form-group">
							                    <label for="message" class="pull-left">Select User Email:<i class="material-icons" style="font-size:10px;color:red">star</i></label>
							                    <select id="user-email" name="user-email[]" class="selectpicker form-control" data-show-subtext="true" data-actions-box="true" data-live-search="true" multiple data-selected-text-format="count" required >
												    <option value="" disabled>Choose Jobseeker/Employer Any one</option>
												</select>										
							                </div>
							            </div>

							            <div class="row">
							                <div class="col-sm-8 form-group">
							                    <label for="message" class="pull-left">Select Subject:<i class="material-icons" style="font-size:10px;color:red">star</i></label>
							                    <select id="temp_sub" name="temp_sub[]" class="selectpicker form-control" data-show-subtext="true" data-live-search="true" required="required" >
												    <option selected="" disabled>Select Subject to display template</option>
												    <?php
												    	$sql = "Select * from cj_template";
												    	$run_sql =mysqli_query($db, $sql);
												    	while($row = mysqli_fetch_array($run_sql))
												    	{
												    		$sub_id = $row['id'];
												    		$sub = $row['subject'];
												    		?><option value="<?=$sub_id?>"><?=$sub?></option>
												    		<?php
												    	}
												    ?>
												</select>										
							                </div>							                
							                <div class="col-sm-4 form-group">
							                    <label for="Subject" style="color: white;">
							                        Crete Template:</label>
							                    <a href="template.php" class="btn btn-info form-control">Click here to create new template</a>
							                </div>
							            </div>

							        	
							            <div class="row">
							                <div class="col-sm-12 form-group">
							                    <label for="Subject">
							                        Subject:<i class="material-icons" style="font-size:10px;color:red">star</i></label>
							                    <input type="text" class="form-control" id="subject" name="subject" required="required">
							                </div>							                
							            </div>

							            <div class="row">
							                <div class="col-sm-12 form-group">
							                	<label for="form-field-mask-2">Message:<i class="material-icons" style="font-size:10px;color:red">star</i></label>
												<textarea class="ckeditor form-control" id="editor1" rows="30" name="editor1" required="required"></textarea>
												<!-- <textarea name="editor1" id="editor1" rows="10"> </textarea>-->
											</div>
							            </div>
							            <div id="server-pages-view"></div>
							           
							            <div class="row">
							                <div class="col-sm-12 form-group">
							                	<input type="submit" class="submitBtn btn btn-lg btn-success pull-right" name="sendmsg" id="sendmsg" value="Send →">
							                	<!-- <input type="hidden" class="submitBtn btn btn-lg btn-success pull-right" name="sendmsg" id="sendmsg" value="Send →"> -->							                   
							                </div>
							            </div>
							        </form>							        
							    </div>
						</div>
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

			<script type="text/javascript">
				if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
			</script>
			<script src="assets/js/bootstrap.min.js"></script>

			<!-- page specific plugin scripts -->

			<!--[if lte IE 8]>
			  <script src="assets/js/excanvas.min.js"></script>
			<![endif]-->
			<script src="assets/js/jquery.dataTables.min.js"></script>
			<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
			<script src="assets/js/jquery-ui.custom.min.js"></script>
			<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
			<script src="assets/js/chosen.jquery.min.js"></script>
			<script src="assets/js/spinbox.min.js"></script>
			<script src="assets/js/bootstrap-datepicker.min.js"></script>
			<script src="assets/js/bootstrap-timepicker.min.js"></script>
			<script src="assets/js/moment.min.js"></script>
			<script src="assets/js/daterangepicker.min.js"></script>
			<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
			<script src="assets/js/bootstrap-colorpicker.min.js"></script>
			<script src="assets/js/jquery.knob.min.js"></script>
			<script src="assets/js/autosize.min.js"></script>
			<script src="assets/js/jquery.inputlimiter.min.js"></script>
			<script src="assets/js/jquery.maskedinput.min.js"></script>
			<script src="assets/js/bootstrap-tag.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

			<!-- (Optional) Latest compiled and minified JavaScript translation files -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->
			<script type="text/javascript">$('.selectpicker').selectpicker({style: 'btn-info', size: 4});</script>

			<script>				
			    $(document).ready(function(){
			        $('#temp_sub').change(function(){
			            var sub_id = $(this).val();
			            //console.log(sub_id);
			            $.ajax({
			                url:"php/msg.php",
			                method:"POST",
			                data:{sub_id:sub_id},
			                success:function(data)
			                {
			                    //console.log(data);
			                    //$('#editor1').remove();			                    
			                    CKEDITOR.instances.editor1.setData(data);
			                    // $('#editor1').val(data);			                   		                    
			                }
			            });
			        });
			    });			
			</script>

			<script type="text/javascript">
				$("#inline_content input[name='chk']").click(function()
				{				    
				    if($('input:radio[name=chk]:checked').val() == "Employer")
				    {
				        var emp=$('input:radio[name=chk]:checked').val();
				        $.ajax({
			                method: "POST",
			                url: "php/msg.php",
			                data:{ employ: emp}			        
            			})
	                	.done(function(data)// capture the return from process.php
	                	{  
	                  		var result = JSON.parse(data);	
		                    $('#user-email').children().remove().end();
		                    $.each(result, function(key, value)
		                    {   
							    $('#user-email').append($("<option></option>").attr("value",value).text(value));
		                    	$(".selectpicker").selectpicker('refresh');
							});		                    
					    })
					}
				    else if($('input:radio[name=chk]:checked').val() == "Job Seeker")
				    {
				        var job_seeker=$('input:radio[name=chk]:checked').val();
				        $.ajax({
			                method: "POST",
			                url: "php/msg.php",
			                data:{ job_seeker1: job_seeker}			        
            			}).done(function(data)// capture the return from process.php
	                	{  
	                		var result = JSON.parse(data);
		                    $('#user-email').children().remove().end();		
		                    $.each(result, function(key, value)
		                    {   
							    $('#user-email').append($("<option></option>").attr("value",value).text(value));
		                    	$(".selectpicker").selectpicker('refresh'); 
							});		                    
					    })
				    }
				});
			</script>
			<script>
				$(document).ready(function(){
					var enableSubmit = function(ele) {
				    $(ele).removeAttr("disabled");
				}
				// CKEDITOR.replace( 'editor1' );
		            $("#sendmsg").click(function(){
		            	var myEditor= CKEDITOR.instances['editor1'].getData();
                    	//alert(" your data is :"+myEditor);
                    	var email = $('select[name="user-email[]"]').val();
		                var subject=$("#subject").val();
		                var that = this;
    					$(this).attr("disabled", true);
		                $.ajax({
		                    url:'php/msg.php',
		                    method:'POST',
		                    data:{
		                    	insert :"ins",
		                    	email1:email,
		                        subject1:subject,
		                        myEditor1:myEditor
		                    },
		                   success:function(data){
		                   	$("#server-pages-view").html(data);
		                   	setTimeout(function() { enableSubmit(that) }, 3000);		                       
		                   }
		                });
		            });
		        });

			</script>
			<!-- <script>			
				$("#msg-form").submit(function(event){
					event.preventDefault(); //prevent default action 
					var post_url = $(this).attr("action"); //get form action url
					var request_method = $(this).attr("method"); //get form GET/POST method
					var form_data = new FormData(this); //Creates new FormData object						
					$.ajax({
						url : post_url,
						type: request_method,
						data : form_data,
						contentType: false,
						cache: false,
						processData:false
					}).done(function(response)
					{	
						$("#server-pages-view").html(response);
						
					});
				});
			</script> -->

		</body>
	</html>
	<?php

	// if(isset($_POST['sendmsg']))
	// {
	// 	//echo "<script>alert('yaaaaaa i am working')</script>";
	// 	$sub = $_POST['subject'];
	// 	$msg = $_POST['message'];
	// 	$admin_email = $_SESSION['EMAIL'];
	// 	foreach ($_POST['user-email'] as $u_id)
	// 	{
	// 		$sql = "INSERT INTO cj_message (`from`, `to`, `subject`, `message`, `date`) VALUES ('$admin_email','$u_id','$sub','$msg',NOW())";
	// 		$result = $db->query($sql);
	// 	}
	// 	if($result)
	// 	{
	// 		$_SESSION['msg']= "Job inserted Successfully...!!!";
	// 		header("location: message.php");
	// 		exit;
	// 	}
	// 	else
	// 	{
	// 		$_SESSION['err'] = "OOPS some error occured...!!!";
	// 		header("location: message.php");
	// 		exit;
	// 	}
	// }
}
else
{
	header('location:index.php');
}
?>
	

