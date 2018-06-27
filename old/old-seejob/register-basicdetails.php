<!DOCTYPE HTML>
<html>
<?php include("include/head.php"); ?>
<body>


<?php include("include/header.php"); ?>
<div class="clearfix"></div>
<section>
	<div class="container">
		<!--  top link -->
    	<?php include("include/toplink.php"); ?><br>
		<!--  top link end -->
		 <form  action="register-basicdetails.php" method="post">
		 <div class="row">
			<div class="col-md-6 col-xs-12">
			<div class="with-box"> 
			 <h4 style="border-bottom:solid 1px; padding:10px;">Personal Details</h4>
				 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="firstName">First Name</label>
                <div class="col-md-8">
                    <input type="text" path="firstName" id="firstName" class="form-control input-sm" placeholder="Enter your First Name">
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="lastName">Last Name</label>
                <div class="col-md-8">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter your Last Name"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="lastName"> Password</label>
                <div class="col-md-8">
                    <input type="password" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter your password"/>
                </div>
            </div>
        </div>
    <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="lastName">Confirm Password</label>
                <div class="col-md-8">
                    <input type="password" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter Confirm Password"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-8">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter your Mobile Number"/>
                </div>
            </div>
        </div>
        
        
  <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="country">Location</label>
                <div class="col-md-8">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select Country</option>
                        <option value="">Japan</option>
                        <option value="">Kenya</option>
                        <option value="">Dubai</option>
                        <option value="">Italy</option>
                        <option value="">Greece</option> 
                        <option value="">Iceland</option> 
                        <option value="">China</option> 
                        <option value="">Doha</option> 
                        <option value="">Irland</option> 
                        <option value="">Srilanka</option> 
                        <option value="">Russia</option> 
                        <option value="">Hong Kong</option> 
                        <option value="">Germany</option>
                        <option value="">Canada</option>  
                        <option value="">Mexico</option> 
                        <option value="">Nepal</option>
                        <option value="">Norway</option> 
                        <option value="">Oman</option>
                        <option value="">Pakistan</option>  
                        <option value="">Kuwait</option> 
                        <option value="">Indonesia</option>  
                        <option value="">Spain</option>
                        <option value="">Thailand</option>  
                        <option value="">Saudi Arabia</option> 
                        <option value="">Poland</option> 
                    </select>
                    
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="email">Upload Resume</label>
                <div class="col-md-8">
                    <input type="file" path="email" id="email" class="" placeholder="Enter Location"/>
                </div>
            </div>
        </div>  
			</div>
        </div>
		<div class="col-md-6 col-xs-12">
			<div class="with-box"> 
			 <h4  style="border-bottom:solid 1px; padding:10px;">Employment Details</h4>
			  	 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="country">Education</label>
                <div class="col-md-8">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="">Bsc</option>
                        <option value="">BTech</option>
                        <option value="">Mca</option>
                        <option value="">BCA</option>
                        <option value="">Diploma</option> 
                        <option value="">Other</option> 
                    </select>
               </div>
            </div>
        </div>
               <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="subjects">Subjects</label>
                <div class="col-md-8 sm_1">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter Subjects"/>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="lastName">Specialization</label>
                <div class="col-md-8">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter  Specialization"/>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="lastName">University/College</label>
                <div class="col-md-8">
                    <input type="text" path="lastName" id="lastName" class="form-control input-sm" placeholder="Enter  University/College"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="sex">Course Type</label>
                <div class="col-md-8" class="form-control input-sm">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" checked=""> Full Time
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio"> Part Time
				        </label>

	                </div>
                </div>
            </div>
        </div>
     <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="country">Passing Year</label>
                <div class="col-md-8">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select</option>
                        <option value="">Fresher</option>

                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option> 
                        <option value="">4</option> 
                        <option value="">5</option> 
                        <option value="">6</option> 
                        <option value="">7</option> 
                        <option value="">8</option> 
                        <option value="">9</option> 
                        <option value="">10</option> 
                        <option value="">11</option>
                        <option value="">12</option>  
                        <option value="">13</option>
                        <option value="">14</option>
                        <option value="">15</option>      
                    </select>
                    
                </div>
            </div>
			<div class="form-group col-md-12">
                <label class="col-md-4 control-lable" for="country">Skills</label>
                <div class="col-md-8">
                     <input type="text" path="email" id="email" class="form-control input-sm" placeholder="skill"/>
                    
                </div>
            </div>
     
			</div>
        </div>
		
		</div>
		<!--col-md-2-->        
            
          <div class="row">
				<div class="with-box"> 
				 <center><input  type="submit" value="Register" class="btn btn-primary btn-sm"></center>
			   </div>
        	</div>  
        <!--row-->
    </div>
		</form>
	<!--container--><br>
</section>

<?php include("include/footer.php");  ?>
</body>
</html>	