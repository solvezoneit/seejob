<?php
$title="Home";
$bntCap="Submit";
include("include/head.php");
$state_detail_id="";
$state_detail_name="";
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  
  <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
  
<div class="page-container" >	
   <div class="left-content">
	   <div class="mother-grid-inner">
         <?php include("include/header.php"); ?>   

<!-- main Content Start --->

<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<!---Start -->
	<table class="table table-bordered">
			<tr>
				
				<th>
					<form action="" method="post" enctype="multipart/form-data">
					<input type="text" id="skills" name="state_detail_name" placeholder=" Live Search" required="" class="form-control">
					
				</form>
				</th>
			</tr>
		</table>
	  


<!--- end -->
    
	<br />	
		
    </div>
</div>
<!--inner block end here-->
	

<!-- ----main Content End  --->
<?php include("include/footer.php"); ?>
</div>
</div>
<?php include("include/sidemenu.php"); ?>

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     