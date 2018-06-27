<?php
$con =mysqli_connect("localhost","root","","cjobcjob");
$sql = "SELECT * FROM `cj_advertise`";
$run = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap pagination</title>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
	<script>
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>
</head>
<body>
	<div class="container">
<h1 align="center">Database jquery plugin with php mysql boostrap</h1><br/>
<div class="table-responsive">
<table id="example" class="table table-bordered">
	<thead>
		<tr>
			<td>name</td>
			<td>email</td>
			<td>advertise_location</td>
			<td>image</td>
			<td>Action</td>
		</tr>
	</thead>
	<?php
	while ($row = mysqli_fetch_array($run)) 
	{
		$name =$row["name"];
		$email =$row["email"];
		$ad =$row["advertise_location"];
		$image =$row['image'];
		?>
		<tr>
			<td><?php echo "$name";?></td>
			<td><?php echo "$email";?></td>
			<td><?php echo "$ad";?></td>
			<td><img src="images/add/<?php echo "$image" ?>" height="60" width="100"></td>
			<td><a href="" class="btn btn-success btn-xs" data-toggle="modal" data-target="#job_edit<?php echo "$id"; ?>"><i class="fa fa-pencil"></i> Edit</a>
			<a href="job_view.php?delete=<?php echo "$id"; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i> Delete</a></td>
			
		</tr>
	<?php	
	}
	?>
</table>
</div>
</div>
</body>
</html>
