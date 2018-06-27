				<h2 class="text-center">Company logo</h2>
				<hr>
				<div class="col-md-12" >
					<?php
					$company_sql = mysqli_query($db,"select * from cj_company where user_id='".$_SESSION["user_id"]."' order by com_id desc");
					while($get_comp = mysqli_fetch_array($company_sql))
					{
						?>
						<div class="">
							<a onclick="document.getElementById('<?=$get_comp['com_id']?>').style.display='block'"><img src="image/company/<?=$get_comp['com_img']?>" alt="img" width="100%" height="100px;" style="border:1px solid lightgray;margin:2px;padding:20px;"></a>
						</div>
						<div id="<?=$get_comp['com_id']?>" class="w3-modal w3-animate-opacity">
							<div class="w3-modal-content w3-card-4" style="border:2px solid #2e6da4;">
							  <header class="w3-container"> 
								<span onclick="document.getElementById('<?=$get_comp['com_id']?>').style.display='none'" 
								class="w3-button w3-large w3-display-topright">&times;</span>
								<h2 class="apply-heading"></h2>
							  </header>
							  <div class="w3-container description_box">
								<h2 class="text-center">Company detail</h2>
								<hr>
								<div class="form-group pull-right">
									<a href="?editlogocompany=<?=$get_comp['com_id']?>" class="button_index buttonine"  ><i class="fas fa-edit"></i>&nbsp;Edit</a>
									<!--form id="company-delete-form" action="php/company.php" method="POST">
										<input type="hidden" name="deletelogocompany" value="<?=$get_comp['com_id']?>">
										<button type="submit" class="button_index buttonind"><i class="fas fa-trash"></i>&nbsp;Delete</button>
									<form-->
								</div>
								<h4>Company's name: <?=$get_comp['com_name']?></h4>
								<h4>Company's Email ID:<?=$get_comp['com_address']?><h4>
								<h4>Company's add:<?=$get_comp['com_address']?><h4>
								<h4 class="description">Job Description</h4>
								<hr>
								<p><?=html_entity_decode($get_comp['com_desc'])?></p>							
								<hr>
							  </div>
							  
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<script>
				$("#company-delete-form").submit(function(event){
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
					}).done(function(response){ //
						$("#company-view").html(response);
					});
				});
				</script>
