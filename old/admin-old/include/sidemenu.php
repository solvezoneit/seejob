<!--slider menu-->
	<div class="sidebar-menu">
		<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			  <!--<img id="logo" src="" alt="Logo"/>--> 
		  </a> </div>		  
		<div class="menu">
		  <ul id="menu">
			<li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
			<li id="menu-comunicacao" ><a href="#"><i class="fa fa-user"></i><span>Admin</span><span class="fa fa-angle-right" style="float: right"></span></a>
			  <ul id="menu-comunicacao-sub">
				<!--  <li id="menu-arquivos" ><a href="rergistration.php">New Admin Detail</a></li> -->
				<li id="menu-arquivos" ><a href="admin.php">Admin Detail</a></li>
			  </ul>
			</li>
			
			<!--
			<li id="menu-comunicacao" ><a href="#"><i class="glyphicon glyphicon-user"></i><span>User Registration</span><span class="fa fa-angle-right" style="float: right"></span></a>
			  <ul id="menu-comunicacao-sub" >
				<li id="menu-arquivos" ><a href="user-rergistration.php">New User Detail</a></li>
				<li id="menu-arquivos" ><a href="view-user-rergistration.php">All User Detail</a></li>
			  </ul>
			</li>
			-->
			
			<li id="menu-comunicacao">
			<a href="#">
			<i class="fa fa-map-marker"></i>
			<span>Location</span><span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-comunicacao-sub">
				<li id="menu-mensagens"><a href="add-country.php">Add Country</a></li>
				<li id="menu-mensagens"><a href="add-state.php">Add State</a>	</li>
				<li id="menu-arquivos" ><a href="add-district.php">Add District</a></li>
				<li id="menu-  " ><a href="add-city.php">Add Location</a></li>
				<!--
				<li id="menu-arquivos" ><a href="add-sub-city.php"> City | Town | Sector</a></li>
				<li id="menu-arquivos" ><a href="live-search-district-state-city.php">Live Search</a></li>
				-->
			</ul>
			</li>
			<!--
			<li><a href="#"><i class="glyphicon glyphicon-education"></i><span>Qualification</span><span class="fa fa-angle-right" style="float: right"></span></a>
				 <ul id="menu-academico-sub" >
					<li id="menu-academico-avaliacoes" ><a href="highest-qualification.php">Highest Qualification</a></li>
					<li id="menu-academico-boletim" ><a href="qualification-course.php">Course</a></li>
					<li id="menu-academico-boletim" ><a href="qualification-course-pecialization.php">Specialization</a></li>
					<li id="menu-academico-boletim" ><a href="all-qualification.php">All Qualification</a></li>
				 </ul>
			</li>
			-->
			<!--<li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>-->
			<li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Add Skills</span><span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-boletim"><a href="skills.php">Skills</a></li>
				</ul>
			</li>
		  </ul>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->

<script>
var toggle = true;
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
  toggle = !toggle;
});
</script>