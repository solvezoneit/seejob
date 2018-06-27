<div class="col-md-2 sticky text-center" style="padding-left:0px;padding-right:0px;">
<?php
$add_query = mysqli_query($db,"select * from `cj_advertise` where status='1'");
while($get_add = mysqli_fetch_array($add_query))
{
	?>
	<div style="margin-bottom:20px;">
		<a href="<?=$get_add['link']?>" target="_blank">
			<img src="cjobadmin/images/add/<?=$get_add['image']?>" alt="<?=$get_add['name']?>" width="100%" class="img-responsive">
		</a>
	</div>
	<?php
}
?>
</div>
