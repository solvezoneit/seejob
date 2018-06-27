<?php
$title="Home";
$bntCap="Submit";
include("include/head.php");
$highest_qualification_id="";
$highest_qualification_name="";
if(array_key_exists("edit",$_REQUEST))
	{
		$bntCap="Update";
		$sql = "SELECT * from  highest_qualification where highest_qualification_id='$_REQUEST[edit]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$highest_qualification_id=$row['highest_qualification_id'];
		$highest_qualification_name=$row['highest_qualification_name'];
	} 
?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<div class="page-container" >	
   <div class="left-content">
	   <div class="mother-grid-inner">
         <?php include("include/header.php"); ?>   

<!-- main Content Start --->

<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<?php
				if(array_key_exists("msg",$_REQUEST))
				{
				?>
					<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span></button>
						<p class="text-center"><?php echo $_REQUEST['msg']; ?></p>
					</div>
				<?php
				} 
		?>
		
    
	<br />	
	<form action="include/query.php" method="post" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr>
				<th class="text-center">Highest Qualification</th>
				<th ><input type="text" name="highest_qualification_name" value="<?php echo $highest_qualification_name; ?>" placeholder="Highest Qualification" required="" class="form-control"></th>
				<th>
					<input class="btn btn-success" type="submit" name="add_highest_qualification" value="<?php echo $bntCap; ?>">
					<input type="hidden" value="<?php echo $highest_qualification_id ?>" name="highest_qualification_id">	
					</form>
				</th>
			</tr>
			</table>
			<table id="myTable1" class="table table-striped resposive"  width="100%">  
			 <thead>  
          <tr>
		  		<td>Sr. No.</td>
				<td>Highest Qualification</td>
				<td>Action</td>
		  </tr>
		  </thead>
		  <?php
$sr="1";
$sql = "SELECT * from  highest_qualification ORDER BY highest_qualification_id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
?>
		 <tr>
		  		<td><?php echo $sr; ?></td>
				<td><?php echo  $row['highest_qualification_name']; ?></td>
				<td class="text-center">
				<a href="highest-qualification.php?edit=<?php echo  $row['highest_qualification_id']; ?>"><label class="glyphicon glyphicon-edit"></label></a>
				<a href="#" onClick="delRecord('<?php echo  $row['highest_qualification_id']; ?>')"> <label class="glyphicon glyphicon-trash"></label></a>
				</td>
		  </tr>
<?php
$sr++;
    }
}
$conn->close();

?>
		</table>
    </div>
</div>
<!--inner block end here-->

</form>
<form name="admin" action="include/query.php" method="get">       	
<input type="hidden" name="delete_highest_qualification">
</form>
<script>
function delRecord(id)
{
	if(confirm("Are you Soure you want to delete"))
	{
		document.admin.delete_highest_qualification.value=id;
		document.admin.submit();
	}
}
</script>	

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
<script>
$(document).ready(function(){
    $('#myTable1').dataTable();
});
</script>
</html>                     