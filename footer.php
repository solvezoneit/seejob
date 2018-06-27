<div class="text-left" style="background-color:#000;">
	<div class="container">
		<div class="col-md-3" >
			<ul class="f_list f_list index_footul">
				<li class="footer_heading">Information</li>
				<?php
				$footer_pages_sql = mysqli_query($db,"select name,url from cj_pages where id!='6'");
				while($footer_pages_row = mysqli_fetch_array($footer_pages_sql))
				{
					?><li><a href="<?=$url?>/company-<?=$footer_pages_row["url"]?>" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<?=$footer_pages_row['name']?></a></li><?php
				}
				?>  
				<!--li><a href="index.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;About Us</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Terms&Conditions</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Privacy Policy</a></li>
				<li><a href="about.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Careers with Us</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Contact Us</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Fraud Alert</a></li>
				<li><a href="about.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;FAQs</a></li>
				<li><a href="index.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Summons / Notices</a></li-->
			</ul>
		</div>

		<div class="col-md-3">
			 <ul class="f_list f_list index_footul">
			<li class="footer_heading">Job Seeker</li>
				<li><a href="index.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Resume Writing</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Resume Display </a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Resume Forwording</a></li>
				<li><a href="about.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Connect to Recruiter</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Cover Letter</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Job Search </a></li>
			</ul>
		</div>

		<div class="col-md-3">
			<ul class="f_list f_list index_footul">
				<li class="footer_heading">Employer Zone</li>
				<li><a href="index.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Post Jobs</a></li>
				<li><a href="login.php" class="footer_content"><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;Find CV </a></li>
				<form class="example employer_exp" action="/action_page.php">
					<div> 
						<h4 class="index_news">Subscribe Our Newsletter</h4>
						<input type="text" placeholder="Enter your email-id" name="search2" style="background-color:#fff; padding:5px; width:70%">
						<button type="submit" style="background: -webkit-linear-gradient(top,#f8e3ad,#eeba37); padding:auto;"><i class="fas fa-envelope"></i></button>
					</div>
				</form>
			</ul>
		</div>
		  
		<div class="col-md-3 ">
			<ul class="f_list f_list index_footul">
				<li class="footer_heading">Contact Us</li>
				<li>
					<div class="col-sm-6 index_footer">
						<input type="text" class="form-control " placeholder="Enter Name" name="name" style="background-color:#fff;">
					</div>
					<div class="col-sm-6 index_footer">
						<input type="email" class="form-control " placeholder="Enter email" name="Name" style="background-color:#fff;">
					</div>
					<div class="col-sm-12 index_footer">
						<textarea class="form-control " rows="5" id="comment" placeholder="Type your msg..." style="background-color:#fff;"></textarea>
					</div>
					<div class="text-center">
						<button type="button" class="btn btn-warning btn-block">Submit</button>
					</div>
					<div class="">
						<ul class="soc index_social text-center">
							<li><a class="soc-twitter" href="<?=$profilerow["twitter"]?>" target="_blank"></a></li>
							<li><a class="soc-facebook" href="<?=$profilerow["facebook"]?>" target="_blank"></a></li>
							<li><a class="soc-googleplus" href="<?=$profilerow["googleplus"]?>" target="_blank"></a></li>
							<li><a class="soc-linkedin" href="<?=$profilerow["linkedin"]?>" target="_blank"></a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<div style="padding:10px;text-align:center;color:#fff;border:0px solid #fff;">©2018 Seejob.com. All Rights Reserved.</div>
	</div>
</div>
<!--Model Form-->
<?php include"model.php"; ?>
<!--Model Form-->
	
