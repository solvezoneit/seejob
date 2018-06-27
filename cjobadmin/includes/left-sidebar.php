<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="dashboard.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'manage-location.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="manage-location.php">
							<i class="menu-icon fa fa-map-o"></i>
							<span class="menu-text"> Location </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'location.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="location.php">
							<i class="menu-icon fa fa-map-marker"></i>
							<span class="menu-text">Manage Location </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'add_advertise.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="add_advertise.php">
							<i class="menu-icon fa fa-table"></i>
							<span class="menu-text">Add Advertise </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'slider.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="slider.php">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text">Add Slider </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'job_view.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="job_view.php">
							<i class="menu-icon fa fa-graduation-cap"></i>
							<span class="menu-text">job </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'job_post.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="job_post.php">
							<i class="menu-icon fa fa-black-tie"></i>
							<span class="menu-text">Job Post </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'user_detail.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="user_detail.php">
							<i class="menu-icon fa fa-user" aria-hidden="true"></i>
							<span class="menu-text">User Details </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'cv_detail.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="cv_detail.php">
							<i class="menu-icon fa fa-file" aria-hidden="true"></i>
							<span class="menu-text">CV Details </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'apply_job.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="apply_job.php">
							<i class="menu-icon fa fa-hand-o-right" aria-hidden="true"></i>
							<span class="menu-text">Apply Job Details </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'company.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="company.php">
							<i class="menu-icon fa fa-building-o" aria-hidden="true"></i>
							<span class="menu-text">Company </span>
						</a>
						<b class="arrow"></b>
					</li>
					
					
					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'message.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="message.php">
							<i class="menu-icon fa fa-comments" aria-hidden="true"></i>
							<span class="menu-text">Message </span>
						</a>
						<b class="arrow"></b>
					</li>

					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'template.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="template.php">
							<i class="menu-icon fa fa-star-o" aria-hidden="true"></i>
							<span class="menu-text">Template </span>
						</a>
						<b class="arrow"></b>
					</li>					


					<li class="<?php 
						if(
							basename($_SERVER['SCRIPT_NAME']) == 'manage-services.php' ||
							basename($_SERVER['SCRIPT_NAME']) == 'add-servicecategory.php'
							){echo 'active'; }else { echo ''; } ?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Services </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'manage-services.php'){echo 'active'; }else { echo ''; } ?>">
								<a href="manage-services.php"><i class="menu-icon fa fa-caret-right"></i>Manage Services</a>
								<b class="arrow"></b>
							</li>
							<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'add-servicecategory.php'){echo 'active'; }else { echo ''; } ?>">
								<a href="add-servicecategory.php"><i class="menu-icon fa fa-caret-right"></i>Add Services</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>">
						<a href="contact.php">
							<i class="menu-icon fa fa-phone" aria-hidden="true"></i>
							<span class="menu-text">Contact Us </span>
						</a>
						<b class="arrow"></b>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-text"></i>
							<span class="menu-text"> Page </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<?php
							$page_sql = mysqli_query($db, "select * from cj_pages order by name");
							while($get_page = mysqli_fetch_array($page_sql))
							{
								?>
								<li class="">
									<a href="manage-page.php?id=<?=$get_page['id']?>">
										<i class="menu-icon fa fa-caret-right"></i>
										<?=$get_page['name']?>
									</a>
									<b class="arrow"></b>
								</li>
								<?php
							}
							?>
							<li class="">
								<a href="manage-page.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Add New Page
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					
					
					<!--li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Merchant </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="form-elements.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Merchant
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-elements-2.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Merchant Service
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Service </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="form-elements.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Services
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-elements-2.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Manage Sub Services
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li> -->
					
					<!-- <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								UI &amp; Elements
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Layouts
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="top-menu.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Top Menu
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="two-menu-1.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Two Menus 1
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="two-menu-2.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Two Menus 2
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-1.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Default Mobile Menu
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-2.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Mobile Menu 2
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="mobile-menu-3.php">
											<i class="menu-icon fa fa-caret-right"></i>
											Mobile Menu 3
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="typography.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Typography
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="elements.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Elements
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="buttons.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Buttons &amp; Icons
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="content-slider.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Content Sliders
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="treeview.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Treeview
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jquery-ui.php">
									<i class="menu-icon fa fa-caret-right"></i>
									jQuery UI
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="nestable-list.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Nestable Lists
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Three Level Menu
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="#">
											<i class="menu-icon fa fa-leaf green"></i>
											Item #1
										</a>

										<b class="arrow"></b>
									</li>

									<li class="">
										<a href="#" class="dropdown-toggle">
											<i class="menu-icon fa fa-pencil orange"></i>

											4th level
											<b class="arrow fa fa-angle-down"></b>
										</a>

										<b class="arrow"></b>

										<ul class="submenu">
											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-plus purple"></i>
													Add Product
												</a>

												<b class="arrow"></b>
											</li>

											<li class="">
												<a href="#">
													<i class="menu-icon fa fa-eye pink"></i>
													View Products
												</a>

												<b class="arrow"></b>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="tables.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Simple &amp; Dynamic
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jqgrid.php">
									<i class="menu-icon fa fa-caret-right"></i>
									jqGrid plugin
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li-->

				 <!--<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Forms </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="form-elements.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Form Elements
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-elements-2.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Form Elements 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-wizard.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Wizard &amp; Validation
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="wysiwyg.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Wysiwyg &amp; Markdown
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dropzone.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Dropzone File Upload
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>-->
					<!--li class="">
						<a href="widgets.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Widgets </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="calendar.php">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="gallery.php">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> Gallery </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-tag"></i>
							<span class="menu-text"> More Pages </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="profile.php">
									<i class="menu-icon fa fa-caret-right"></i>
									User Profile
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="inbox.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Inbox
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="pricing.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Pricing Tables
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="invoice.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Invoice
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="timeline.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Timeline
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="search.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Search Results
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="email.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Email Templates
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="index.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Login &amp; Register
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="faq.php">
									<i class="menu-icon fa fa-caret-right"></i>
									FAQ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-404.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 404
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="error-500.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Error 500
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="grid.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Grid
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="blank.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Blank Page
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul> --><!-- /.nav-list -->
				
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>