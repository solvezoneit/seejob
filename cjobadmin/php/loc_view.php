									<div class="col-xs-7">

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Results for "Latest Registered Domains"
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="single-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">#</th>
														<th>Domain</th>
														<th>Price</th>
														<th></th>
													</tr>
												</thead>

												<tbody>
												<?php
												$query_locview = mysqli_query($db,"select * from cj_location order by id desc limit 300") or die(mysqli_error($db));
												$i = 1;
												while($row_locview = mysqli_fetch_array($query_locview))
												{
													?>
													<tr>
														<td class="center"><?=$i++?></td>

														<td><?=$row_locview["l1"]?></td>
														<td><?=$row_locview["l2"]?></td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<!--a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a-->

																<!--a class="red" href="php/location.php?delete=<?=$row_locview['id'];?>" onclick="deleteidloc" -->
																	<i id='del_<?=$row_locview['id'];?>' class="delete ace-icon fa fa-trash-o bigger-130" style="color:red"></i>
																<!--/a-->
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<!--li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li-->

																		<li>
																			<!--a href="location.php?delete=<?=$row_locview['id'];?>" onclick="return confirm('Are You sure want to delete')" class="tooltip-error" data-rel="tooltip" title="Delete"-->
																				<span class="red">
																					<i id='del_<?=$row_locview['id'];?>' class="ace-icon fa fa-trash-o bigger-120" style="color:red"></i>
																				</span>
																			<!--/a-->
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php
												}
												?>


												</tbody>
											</table>
										</div>
									</div>
									<script>
									// Delete 
									$('.delete').click(function(){
										// var el = this;
										var id = this.id;
										var splitid = id.split("_");

										// Delete id
										var deleteid = splitid[1];
										if(confirm("Are you sure want to Delete")==true)
										{
											// AJAX Request
											$.ajax({
												url: 'php/location.php',
												type: 'POST',
												data: { deleteid:deleteid },
												cache:false,
												success:function(feedback){
													$("#location_message").html(feedback);
												}
												// success: function(response){
													// // Removing row from HTML Table
													// $(el).closest('tr').css('background','tomato');
													// $(el).closest('tr').fadeOut(800, function(){ 
														// $(this).remove();
													// });
												// }
											});
										}
									});				
									
									</script>