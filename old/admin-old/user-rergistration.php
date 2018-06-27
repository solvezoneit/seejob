<?php
$title="Home";
$bntCap="Submit";
$pgtitle ="Sign Up";
$admin_reg_id="";
$admin_reg_name="";
$admin_reg_email="";
$admin_reg_password="";
if(array_key_exists("edit",$_REQUEST))
	{
		$pgtitle ="Edit Sign Up";
		$bntCap="Update";
		$sql = "SELECT * from  admin_reg where admin_reg_id='$_REQUEST[edit]'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$admin_reg_id=$row['admin_reg_id'];
		$admin_reg_name=$row['admin_reg_name'];
		$admin_reg_email=$row['admin_reg_email'];
	}
?>
<?php include("include/head.php"); ?>
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
         <?php include("include/header.php"); ?>   

<!-- main Content Start --->

<!--inner block start here-->
<div class="inner-block">
    <div class="blank">  	
    	 <table width="100%" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th colspan="2">
			<h1>Complete Your Profile</h1><hr />
			<h6>Make your profile attractive to recruiters. Provide us the following details</h6>
		</th>
		
	</tr>
	<tr>
		<td colspan="2">
			<h4> Contact Details<hr /></h4>
		</td>
	</tr>
	<tr>
		<td>Your Name</td>
		<td> <input type="text" /></td>
	</tr>
		<td>Email Address</td>
		<td><input type="text" disabled="disabled" /></td>
	</tr>
	<tr>
		<td>Current Location</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td colspan="2">
			*Contact Numbers: At least one among Mobile and Landline numbers is mandatory
		</td>
	</tr>
	<tr>
		<td>Mobile:</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td colspan="2">Current Professional Details <hr /></td>
	</tr>
	<tr>
		<td>Total Experience:</td>
		<td><select name="experienceYear" id="experienceYear" errId="rawTotalExperienceErr" formRowId="experienceFormRow" onchange="isUserFresher();checkExpCtc();hideExpMonth();">
 					<option value="-1" >Year</option>  
					<option value="99" selected>Fresher</option>  
					<option value="00" >0</option>  
					<option value="01" >1</option>  
					<option value="02" >2</option>  
					<option value="03" >3</option>  
					<option value="04" >4</option>  
					<option value="05" >5</option>  
					<option value="06" >6</option>  
					<option value="07" >7</option>  
					<option value="08" >8</option>  
					<option value="09" >9</option>  
					<option value="10" >10</option>  
					<option value="11" >11</option>  
					<option value="12" >12</option>  
					<option value="13" >13</option>  
					<option value="14" >14</option>  
					<option value="15" >15</option>  
					<option value="16" >16</option>  
					<option value="17" >17</option>  
					<option value="18" >18</option>  
					<option value="19" >19</option>  
					<option value="20" >20</option>  
					<option value="21" >21</option>  
					<option value="22" >22</option>  
					<option value="23" >23</option>  
					<option value="24" >24</option>  
					<option value="25" >25</option>  
					<option value="26" >26</option>  
					<option value="27" >27</option>  
					<option value="28" >28</option>  
					<option value="29" >29</option>  
					<option value="30" >30</option>  
					<option value="31" >30+</option>  
				</select> Years &nbsp;
				<select name="experienceMonth" id="experienceMonth" errId="rawTotalExperienceErr" formRowId="experienceFormRow">
 					<option value="-1" >Month</option>  
					<option value="00" >0</option>  
					<option value="01" >1</option>  
					<option value="02" >2</option>  
					<option value="03" >3</option>  
					<option value="04" >4</option>  
					<option value="05" >5</option>  
					<option value="06" >6</option>  
					<option value="07" >7</option>  
					<option value="08" >8</option>  
					<option value="09" >9</option>  
					<option value="10" >10</option>  
					<option value="11" >11</option> 
				</select> Months
			</td>
	</tr>
	<tr>
		<td>Current Industry:</td>
		<td>
			<select id="industryTypeId" name="industryTypeId" valtype="industryTypeId" onchange="toggleTipDisplayIndustry();" class="w350">
 					<option value="-1" >Select</option>  
					<option value="8" >Accounting/Finance</option>  
					<option value="32" >Advertising/PR/MR/Events</option>  
					<option value="33" >Agriculture/Dairy</option>  
					<option value="56" >Animation</option>  
					<option value="30" >Architecture/Interior Designing</option>  
					<option value="4" >Auto/Auto Ancillary</option>  
					<option value="46" >Aviation / Aerospace Firms</option>  
					<option value="14" >Banking/Financial Services/Broking</option>  
					<option value="7" >BPO/ITES</option>  
					<option value="50" >Brewery / Distillery</option>  
					<option value="65" >Broadcasting</option>  
					<option value="60" >Ceramics /Sanitary ware</option>  
					<option value="6" >Chemicals/PetroChemical/Plastic/Rubber</option>  
					<option value="12" >Construction/Engineering/Cement/Metals</option>  
					<option value="10" >Consumer Durables</option>  
					<option value="18" >Courier/Transportation/Freight</option>  
					<option value="42" >Defence/Government</option>  
					<option value="26" >Education/Teaching/Training</option>  
					<option value="55" >Electricals / Switchgears</option>  
					<option value="13" >Export/Import</option>  
					<option value="47" >Facility Management</option>  
					<option value="41" >Fertilizers/Pesticides</option>  
					<option value="9" >FMCG/Foods/Beverage</option>  
					<option value="57" >Food Processing</option>  
					<option value="31" >Fresher/Trainee</option>  
					<option value="35" >Gems &amp; Jewellery</option>  
					<option value="49" >Glass</option>  
					<option value="61" >Heat Ventilation Air Conditioning</option>  
					<option value="2" >Hotels/Restaurants/Airlines/Travel</option>  
					<option value="16" >Industrial Products/Heavy Machinery</option>  
					<option value="17" >Insurance</option>  
					<option value="63" >Internet/Ecommerce</option>  
					<option value="15" >IT-Hardware &amp; Networking</option>  
					<option value="25" >IT-Software/Software Services</option>  
					<option value="48" >KPO / Research /Analytics</option>  
					<option value="66" >Leather</option>  
					<option value="36" >Legal</option>  
					<option value="19" >Media/Dotcom/Entertainment</option>  
					<option value="20" >Medical/Healthcare/Hospital</option>  
					<option value="67" >Medical Devices / Equipments</option>  
					<option value="54" >Mining</option>  
					<option value="37" >NGO/Social Services</option>  
					<option value="21" >Office Equipment/Automation</option>  
					<option value="23" >Oil and Gas/Power/Infrastructure/Energy</option>  
					<option value="43" >Paper</option>  
					<option value="22" >Pharma/Biotech/Clinical Research</option>  
					<option value="38" >Printing/Packaging</option>  
					<option value="58" >Publishing</option>  
					<option value="39" >Real Estate/Property</option>  
					<option value="34" >Recruitment</option>  
					<option value="24" >Retail</option>  
					<option value="40" >Security/Law Enforcement</option>  
					<option value="28" >Semiconductors/Electronics</option>  
					<option value="44" >Shipping/Marine</option>  
					<option value="53" >Steel</option>  
					<option value="52" >Strategy /Management Consulting Firms</option>  
					<option value="64" >Sugar</option>  
					<option value="27" >Telcom/ISP</option>  
					<option value="3" >Textiles/Garments/Accessories</option> 
					<option value="45" >Tyres</option>  
					<option value="51" >Water Treatment / Waste Management</option>  
					<option value="59" >Wellness / Fitness / Sports / Beauty</option>  
					<option value="29" >Other</option>  
				</select>
		</td>
	</tr>
	<tr>
		<td>Functional Area</td>
		<td>
			<select name="funcAreaId" id="funcAreaId" valtype="funcAreaId" class="w350">
 				<option value="-1" >Select</option>  
				<option value="1" >Accounts / Finance / Tax / CS / Audit</option>  
				<option value="46" >Agent</option>  
				<option value="81" >Analytics &amp; Business Intelligence</option>  
				<option value="2" >Architecture / Interior Design</option>  
				<option value="6" >Banking / Insurance</option>  
				<option value="84" >Beauty / Fitness / Spa Services</option>  
				<option value="5" >Content / Journalism</option>  
				<option value="7" >Corporate Planning / Consulting</option>  
				<option value="83" >CSR &amp; Sustainability</option>  
				<option value="21" >Engineering Design / R&amp;D</option>  
				<option value="10" >Export / Import / Merchandising</option>  
				<option value="42" >Fashion / Garments / Merchandising</option>  
				<option value="45" >Guards / Security Services</option>  
				<option value="4" >Hotels / Restaurants</option>  
				<option value="12" >HR / Administration / IR</option> 
				 <option value="62" >IT Software - Client Server</option>  
				 <option value="72" >IT Software - Mainframe</option>  
				 <option value="74" >IT Software - Middleware</option>  
				 <option value="73" >IT Software - Mobile</option>  
				 <option value="75" >IT Software - Other</option>  
				 <option value="68" >IT Software - System Programming</option>  
				 <option value="69" >IT Software - Telecom Software</option>  
				 <option value="61" >IT Software - Application Programming / Maintenance</option>  
				 <option value="63" >IT Software - DBA / Datawarehousing</option>  
				 <option value="71" >IT Software - E-Commerce / Internet Technologies</option>  
				 <option value="65" >IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</option>  
				 <option value="64" >IT Software - ERP / CRM</option>  
				 <option value="66" >IT Software - Network Administration / Security</option>  
				 <option value="67" >IT Software - QA &amp; Testing</option>  
				 <option value="70" >IT Software - Systems / EDP / MIS</option>  
				 <option value="37" >IT- Hardware / Telecom / Technical Staff / Support</option>  
				 <option value="8" >ITES / BPO / KPO / Customer Service / Operations</option>  
				 <option value="13" >Legal</option>  <option value="15" >Marketing / Advertising / MR / PR</option>  
				 <option value="18" >Packaging</option>  
				 <option value="16" >Pharma / Biotech / Healthcare / Medical / R&amp;D</option>  
				 <option value="19" >Production / Maintenance / Quality</option>  
				 <option value="14" >Purchase / Logistics / Supply Chain</option>  
				 <option value="22" >Sales / BD</option>  <option value="11" >Secretary / Front Office / Data Entry</option>  
				 <option value="9" >Self Employed / Consultants</option>  
				 <option value="82" >Shipping</option>  
				 <option value="20" >Site Engineering / Project Management</option>  
				 <option value="36" >Teaching / Education</option>  
				 <option value="44" >Ticketing / Travel / Airlines</option>  
				 <option value="39" >Top Management</option>  
				 <option value="43" >TV / Films / Production</option>  
				 <option value="3" >Web / Graphic Design / Visualiser</option>  
				 <option value="41" >Other</option>  
			</select>

		</td>
	</tr>
	<tr>
		<td>Key Skills</td>
		<td><input type="text"</td>
	</tr>
	<tr>
		<td>Resume Headline:</td>
		<td> <textarea></textarea></td>
	</tr>
	<tr>
		<td colspan="2">
			Education Details<hr />
		</td>
	</tr>
	<tr>
		<td>Basic/Graduation</td>
		<td>
			<select name="ugcourseId" id="ugcourseId" onchange="notPursuingGraduationForNewProfile();showHideOtherBox('ugcourseId','ougCid','ougcourse');" class="w180">
      			 <option value="-1" >Select</option>      
				  <option value="1" >Not Pursuing Graduation</option>       
				  <option value="2" >B.A</option>       
				  <option value="3" >B.Arch</option>       
				  <option value="40" >B.Des.</option>       
				  <option value="37" >B.El.Ed</option>       
				  <option value="38" >B.P.Ed</option>       
				  <option value="42" >B.U.M.S</option>       
				  <option value="35" >BAMS</option>       
				  <option value="4" >BCA</option>       
				  <option value="5" >B.B.A/ B.M.S</option>       
				  <option value="6" >B.Com</option>       
				  <option value="7" >B.Ed</option>      
				  <option value="8" >BDS</option>       
				  <option value="41" >BFA</option>       
				  <option value="9" >BHM</option>       
				  <option value="10" >B.Pharma</option>       
				  <option value="11" >B.Sc</option>       
				  <option value="12" >B.Tech/B.E.</option>       
				  <option value="36" >BHMS</option>       
				  <option value="13" >LLB</option>       
				  <option value="14" >MBBS</option>       
				  <option value="15" >Diploma</option>       
				  <option value="16" >BVSC</option>       
				  <option value="9999" >Other</option>     
			</select>
		</td>
	</tr>
	<tr>
		<td>Post Graduation</td>
		<td>
			<select name="pgcourseId" id="pgcourseId" valtype="pgcourseId_nm" onchange = "showHideOtherBox('pgcourseId','opgCid','opgcourse');" class="w180">
				<option value="-1" >Select</option>    
				<option value="1" >CA</option>    
				<option value="2" >CS</option>    
				<option value="37" >DM</option>    
				<option value="3" >ICWA (CMA)</option>    
				<option value="4" >Integrated PG</option>    
				<option value="5" >LLM</option>    
				<option value="6" >M.A</option>    
				<option value="7" >M.Arch</option>    
				<option value="38" >M.Ch</option>    
				<option value="8" >M.Com</option>    
				<option value="36" >M.Des.</option>    
				<option value="9" >M.Ed</option>    
				<option value="10" >M.Pharma</option>    
				<option value="34" >MDS</option>    
				<option value="35" >MFA</option>    
				<option value="11" >MS/M.Sc(Science)</option>    
				<option value="12" >M.Tech</option>    
				<option value="13" >MBA/PGDM</option>    
				<option value="14" >MCA</option>    
				<option value="15" >Medical-MS/MD</option>    
				<option value="16" >PG Diploma</option>    
				<option value="17" >MVSC</option>    
				<option value="18" >MCM</option>    
				<option value="9999" >Other</option>  
		    </select>

		</td>
	</tr>
	<tr>
		<td>Ph.D/Doctorat</td>
		<td>
			 <select name="pgcourseId" id="pgcourseId" valtype="pgcourseId_nm" onchange = "showHideOtherBox('pgcourseId','opgCid','opgcourse');" class="w180">
			 	<option value="-1" >Select</option>    
				<option value="1" >CA</option>    
				<option value="2" >CS</option>    
				<option value="37" >DM</option>    
				<option value="3" >ICWA (CMA)</option>    
				<option value="4" >Integrated PG</option>    
				<option value="5" >LLM</option>    
				<option value="6" >M.A</option>    
				<option value="7" >M.Arch</option>    
				<option value="38" >M.Ch</option>    
				<option value="8" >M.Com</option>    
				<option value="36" >M.Des.</option>    
				<option value="9" >M.Ed</option>    
				<option value="10" >M.Pharma</option>    
				<option value="34" >MDS</option>    
				<option value="35" >MFA</option>    
				<option value="11" >MS/M.Sc(Science)</option>    
				<option value="12" >M.Tech</option>    
				<option value="13" >MBA/PGDM</option>    
				<option value="14" >MCA</option>    
				<option value="15" >Medical-MS/MD</option>    
				<option value="16" >PG Diploma</option>    
				<option value="17" >MVSC</option>    
				<option value="18" >MCM</option>    
				<option value="9999" >Other</option>  
			</select>

		</td>
	</tr>
	<tr>
		<td>Doctorate/Phd</td>
		<td>
			<select name="ppgcourseId" id="ppgcourseId" valtype="ppgcourseId_nm" onchange = "showHideOtherBox('ppgcourseId','oppgCid','oppgcourse');" class="w180">
				<option value="-1" >Select</option>    
				<option value="1" >Ph.D/Doctorate</option>    
				<option value="2" >MPHIL</option>    
				<option value="9999" >Other</option>  
			</select>
		</td>
	</tr>
	<tr>
		<td>Other Certifications<hr /><br />
			Diploma/Certificate:
		</td>
		<td>
			<input type="text" />	
		</td>
	</tr>
	</tr>
		<td>Diploma/Certificate</td>
		<td><input type="text" /></td>
	</tr>
	</tr>
		<td>Diploma/Certificate</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>
			Upload Resume
		</td>
		<td>
				<input type="file" />
		</td>
	</tr>
</table>
<h1>Complete Your Profile(Seconed pages)</h1>
<table border="1">
	<tr>
		<td>
			Course Name
		</td>
		<td>
			<select name="ugcourseId" id="ugcourseId" valtype="ugcourseId" class="mr10 w251" onchange="populateSpec('ugcourseId','ugspecId','ug');notPursuingGraduationForNewProfile();showHideOtherBox('ugcourseId','ougCid');showHideOtherBox('ugcourseId','ougSid');">
            	<option value="-1" >Select</option>  <option value="1" >Not Pursuing Graduation</option>  
				<option value="2" >B.A</option>  
				<option value="3" >B.Arch</option>  
				<option value="40" >B.Des.</option>  
				<option value="37" >B.El.Ed</option>  
				<option value="38" >B.P.Ed</option>  
				<option value="42" >B.U.M.S</option>  
				<option value="35" >BAMS</option>  
				<option value="4" selected>BCA</option>  
				<option value="5" >B.B.A/ B.M.S</option>  
				<option value="6" >B.Com</option>  
				<option value="7" >B.Ed</option>  
				<option value="8" >BDS</option>  
				<option value="41" >BFA</option>  
				<option value="9" >BHM</option>  
				<option value="10" >B.Pharma</option>  
				<option value="11" >B.Sc</option>  
				<option value="12" >B.Tech/B.E.</option>  
				<option value="36" >BHMS</option>  
				<option value="13" >LLB</option>  
				<option value="14" >MBBS</option>  
				<option value="15" >Diploma</option>  
				<option value="16" >BVSC</option>  
				<option value="9999" >Other</option> 
			</select> 
		</td>
	</tr>
	<tr>
		<td>
			Specialization
		</td>
		<td>
			<select name="ugspecId" id="ugspecId" valtype="ugspecId" onchange="showHideOtherBox('ugspecId','ougSid');" class="w251">
            	<option value="-1" >Select</option>  
				<option value="1" >Computers</option>  
				<option value="9999" >Other</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			University / Institute
		</td>
		<td>
			<input type="text" />
		</td>
	</tr>
	<tr>
		<td>
			Graduated in
		</td>
		<td>
			 <select name="ugyearOfCompletion" id="ugyearOfCompletion" valtype="ugyearOfCompletion">
             	<option value="-1" >Year</option>  
				<option value="2021" >2021</option>  
				<option value="2020" >2020</option>  
				<option value="2019" >2019</option>  
				<option value="2018" >2018</option>  
				<option value="2017" >2017</option>  
				<option value="2016" >2016</option>  
				<option value="2015" >2015</option>  
				<option value="2014" >2014</option>  
				<option value="2013" >2013</option>  
				<option value="2012" >2012</option>  
				<option value="2011" >2011</option>  
				<option value="2010" >2010</option>  
				<option value="2009" >2009</option>  
				<option value="2008" >2008</option>  
				<option value="2007" >2007</option>  
				<option value="2006" >2006</option>  
				<option value="2005" >2005</option>  
				<option value="2004" >2004</option>  
				<option value="2003" >2003</option>  
				<option value="2002" >2002</option>  
				<option value="2001" >2001</option>  
				<option value="2000" >2000</option>  
				<option value="1999" >1999</option>  
				<option value="1998" >1998</option>  
				<option value="1997" >1997</option>  
				<option value="1996" >1996</option>  
				<option value="1995" >1995</option>  
				<option value="1994" >1994</option>  
				<option value="1993" >1993</option>  
				<option value="1992" >1992</option>  
				<option value="1991" >1991</option>  
				<option value="1990" >1990</option>  
				<option value="1989" >1989</option>  
				<option value="1988" >1988</option>  
				<option value="1987" >1987</option>  
				<option value="1986" >1986</option>  
				<option value="1985" >1985</option>  
				<option value="1984" >1984</option>  
				<option value="1983" >1983</option>  
				<option value="1982" >1982</option>  
				<option value="1981" >1981</option>  
				<option value="1980" >1980</option>  
				<option value="1979" >1979</option>  
				<option value="1978" >1978</option>  
				<option value="1977" >1977</option>  
				<option value="1976" >1976</option>  
				<option value="1975" >1975</option>  
				<option value="1974" >1974</option>  
				<option value="1973" >1973</option>  
				<option value="1972" >1972</option>  
				<option value="1971" >1971</option>  
				<option value="1970" >1970</option>  
				<option value="1969" >1969</option>  
				<option value="1968" >1968</option>  
				<option value="1967" >1967</option>  
				<option value="1966" >1966</option>  
				<option value="1965" >1965</option>  
				<option value="1964" >1964</option>  
				<option value="1963" >1963</option>  
				<option value="1962" >1962</option>  
				<option value="1961" >1961</option>  
				<option value="1960" >1960</option>  
				<option value="1959" >1959</option>  
				<option value="1958" >1958</option>  
				<option value="1957" >1957</option>  
				<option value="1956" >1956</option>  
				<option value="1955" >1955</option>  
				<option value="1954" >1954</option>  
				<option value="1953" >1953</option>  
				<option value="1952" >1952</option>  
				<option value="1951" >1951</option>  
				<option value="1950" >1950</option>  
				<option value="1949" >1949</option>  
				<option value="1948" >1948</option>  
				<option value="1947" >1947</option>  
				<option value="1946" >1946</option>  
				<option value="1945" >1945</option>  
				<option value="1944" >1944</option>  
				<option value="1943" >1943</option>  
				<option value="1942" >1942</option>  
				<option value="1941" >1941</option>  
				<option value="1940" >1940</option>                             
			</select>

		</td>
	</tr>
	<tr>
		<td>
			Employment Details<hr /><br />Functional Area
		</td>
		<td>
			<select name="funcAreaId" id="funcAreaId" valtype="funcAreaId" onchange="populateRole();" class="w350">
            	<option value="-1" >Select</option>  
				<option value="1" >Accounts / Finance / Tax / CS / Audit</option>  
				<option value="46" >Agent</option>  
				<option value="81" >Analytics &amp; Business Intelligence</option>  
				<option value="2" >Architecture / Interior Design</option>  
				<option value="6" >Banking / Insurance</option>  
				<option value="84" >Beauty / Fitness / Spa Services</option>  
				<option value="5" >Content / Journalism</option>  
				<option value="7" >Corporate Planning / Consulting</option>  
				<option value="83" >CSR &amp; Sustainability</option>  
				<option value="21" >Engineering Design / R&amp;D</option>  
				<option value="10" >Export / Import / Merchandising</option>  
				<option value="42" >Fashion / Garments / Merchandising</option>  
				<option value="45" >Guards / Security Services</option>  
				<option value="4" >Hotels / Restaurants</option>  
				<option value="12" >HR / Administration / IR</option>  
				<option value="62" >IT Software - Client Server</option>  
				<option value="72" >IT Software - Mainframe</option>  
				<option value="74" >IT Software - Middleware</option>  
				<option value="73" >IT Software - Mobile</option>  
				<option value="75" selected>IT Software - Other</option>  
				<option value="68" >IT Software - System Programming</option>  
				<option value="69" >IT Software - Telecom Software</option>  
				<option value="61" >IT Software - Application Programming / Maintenance</option>  
				<option value="63" >IT Software - DBA / Datawarehousing</option>  
				<option value="71" >IT Software - E-Commerce / Internet Technologies</option>  
				<option value="65" >IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</option>  
				<option value="64" >IT Software - ERP / CRM</option>  
				<option value="66" >IT Software - Network Administration / Security</option>  
				<option value="67" >IT Software - QA &amp; Testing</option>  
				<option value="70" >IT Software - Systems / EDP / MIS</option>  
				<option value="37" >IT- Hardware / Telecom / Technical Staff / Support</option>  
				<option value="8" >ITES / BPO / KPO / Customer Service / Operations</option>  
				<option value="13" >Legal</option>  
				<option value="15" >Marketing / Advertising / MR / PR</option>  
				<option value="18" >Packaging</option>  
				<option value="16" >Pharma / Biotech / Healthcare / Medical / R&amp;D</option>  
				<option value="19" >Production / Maintenance / Quality</option>  
				<option value="14" >Purchase / Logistics / Supply Chain</option>  
				<option value="22" >Sales / BD</option>  <option value="11" >Secretary / Front Office / Data Entry	</option>  
				<option value="9" >Self Employed / Consultants</option>
				<option value="82" >Shipping</option>  
				<option value="20" >Site Engineering / Project Management</option>  
				<option value="36" >Teaching / Education</option>  
				<option value="44" >Ticketing / Travel / Airlines</option>  
				<option value="39" >Top Management</option>  
				<option value="43" >TV / Films / Production</option>  
				<option value="3" >Web / Graphic Design / Visualiser</option>  
				<option value="41" >Other</option>                             
			</select>
		</td>
	</tr><tr>
		<td>
			Role
		</td>
		<td>
			<select name="roleId" id="roleId" valtype="roleId" class="w350">
               <option value="-1" >Select</option>      
			   		<optgroup id="optg_1" class="optGrp" label="------Programming &amp; Design------" ></optgroup>     
						<option value="75.1" >Software Developer</option>      
						<option value="75.2" >Team Lead/Tech Lead</option>      
						<option value="75.3" >System Analyst</option>      
						<option value="75.4" >Tech Architect</option>      
						<option value="75.5" >Database Architect/Designer</option>      
						<option value="75.6" >Project Lead</option>      
						<option value="75.7" >Testing Engnr</option>      
						<option value="75.8" >Product Mgr</option>      
						<option value="75.9" >Graphic/Web Designer</option>      
						<option value="75.10" >Release Mgr</option>      
				  <optgroup id="optg_2" class="optGrp" label="------Admin/Maintenance/Security/Datawarehousing------"></optgroup>     
				  		<option value="75.11" >DBA</option>      
						<option value="75.12" >Network Admin</option>      
						<option value="75.13" >System Admin</option>      
						<option value="75.14" >System Security</option>      
						<option value="75.15" >Tech Support Engnr</option>      
						<option value="75.16" >Maintenance Engnr</option>      
						<option value="75.17" >Webmaster</option>      
						<option value="75.18" >IT/Networking-Mgr</option>      
						<option value="75.19" >Information Systems(MIS)-Mgr</option>      
				<optgroup id="optg_3" class="optGrp" label="------System Design/Implementation/ERP/CRM------"></optgroup>     
						<option value="75.20" >System Integration Technician</option>      
						<option value="75.21" >Business Analyst</option>      
						<option value="75.22" >Datawarehousing Technician</option>      
						<option value="75.23" >Outside Technical Consultant</option>      
						<option value="75.24" >Functional Outside Consultant</option>      
						<option value="75.25" >EDP Analyst</option>      
						<option value="75.41" >Solution Architect  /  Enterprise Architect</option>      
						<option value="75.42" >Subject Matter Expert</option>      
						<option value="75.43" >ERP Consultant</option>      
			   <optgroup id="optg_4" class="optGrp" label="------QA/Testing/Documentation------"></optgroup>     
			   			<option value="75.26" >Technical Writer</option>      
						<option value="75.27" >Instructional Designer</option>      
						<option value="75.28" >Technical Documentor</option>      
						<option value="75.29" >QA/QC Exec.</option>      
						<option value="75.30" >QA/QC Mgr</option>      
			  <optgroup id="optg_5" class="optGrp" label="------Project Management------"></optgroup>     
			  			<option value="75.31" >Project Mgr-IT/Software</option>      
			  <optgroup id="optg_6" class="optGrp" label="------Senior Management------"></optgroup>     
			  			<option value="75.32" >Program Mgr</option>      
						<option value="75.33" >Head/VP/GM-Quality</option>      
						<option value="75.34" >Head/VP/GM-Technology(IT)/CTO</option>      
						<option value="75.35" >CIO</option>      
						<option value="75.44" >Practice Head  /  Practice Manager</option>      
			  <optgroup id="optg_7" class="optGrp" label="------Other------"></optgroup>     
			  			<option value="75.36" >Trainer/Faculty</option>      
						<option value="75.37" >Trainee</option>      
						<option value="75.38" >Fresher</option>      
						<option value="75.39" >Outside Consultant</option>      
						<option value="75.40" >IT/Technical Content Developer</option>                               
		</select>

		</td>
	</tr>
	<tr>
		<td>Profile Summary</td>
		<td>
			<textarea></textarea>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td colspan="2">Complete Your Profile( thired page (Complete Your Profile) )</td>
	</tr>
	<tr>
		<td>Preferred Location</td>
		<td>
			<select class="mr10" name="locationPrefId[]" size="5" valtype = "locationPrefId1" multiple="multiple" id="locationPrefId">
				<option>Preferred Location</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Job Type</td>
		<td>
			<input type="checkbox" class="chkRadio" id="curEmp" name="jobType_P"  value="P">
		   <label for="curEmp">Permanent</label> &nbsp; &nbsp;
		   <input type="checkbox" class="chkRadio" id="pEmp" name="jobType_T"  value="T">
		   <label for="pEmp">Temporary/Contractual</label>

		</td>
	</tr>
	<tr>
		<td>Employment Status</td>
		<td>
			 <input  type="checkbox" class="chkRadio"  id="ftime" name="employmentStatus_F"  value="F"> <label for="ftime">Full Time</label> &nbsp; &nbsp;
             <input  type="checkbox" class="chkRadio"  id="ptime" name="employmentStatus_P"  value="P" > <label for="ptime">Part Time</label>

		</td>
	</tr>
	<tr>
		<td colspan="2">IT Skills</td>
	</tr>
	<tr>
		<td colspan="2">
			<table width="650" border="0" cellspacing="0" cellpadding="0" class="skillTable">
                        <tbody id="skillTb_id">
                            <tr>
                                <td width="206"><strong>Skill</strong></td>
                                <td width="84"><strong>Version</strong></td>
                                <td width="95"><strong>Last Used</strong></td>
                                <td width="240"><strong>Experience</strong></td>
                            </tr>

                                                                                                                                                <tr>
                                  <td><input type="text" name="skill[]"  value="" class="w180" maxlength="40" autocomplete="off" tooltip='Please enter only one IT skill per box.'></td>
                                  <td><input type="text" name="version[]"  value="" class="w70" maxlength="10"></td>
                                  <td>
                                      <select name="lastUsed[]">
                                           <option value="-1">Select</option>  <option value="2017">2017</option>  <option value="2016">2016</option>  <option value="2015">2015</option>  <option value="2014">2014</option>  <option value="2013">2013</option>  <option value="2012">2012</option>  <option value="2011">2011</option>  <option value="2010">2010</option>  <option value="2009">2009</option>  <option value="2008">2008</option>  <option value="2007">2007</option>  <option value="2006">2006</option>  <option value="2005">2005</option>  <option value="2004">2004</option>  <option value="2003">2003</option>  <option value="2002">2002</option>  <option value="2001">2001</option>  <option value="2000">2000</option>  <option value="1999">1999</option>  <option value="1998">1998</option>  <option value="1997">1997</option>  <option value="1996">1996</option>  <option value="1995">1995</option>  <option value="1994">1994</option>  <option value="1993">1993</option>  <option value="1992">1992</option>  <option value="1991">1991</option>  <option value="1990">1990</option>  <option value="1989">1989</option>  <option value="1988">1988</option>  <option value="1987">1987</option>  <option value="1986">1986</option>  <option value="1985">1985</option>  <option value="1984">1984</option>  <option value="1983">1983</option>  <option value="1982">1982</option>  <option value="1981">1981</option>  <option value="1980">1980</option>  <option value="1979">1979</option>  <option value="1978">1978</option>  <option value="1977">1977</option>  <option value="1976">1976</option>  <option value="1975">1975</option>  <option value="1974">1974</option>  <option value="1973">1973</option>  <option value="1972">1972</option>  <option value="1971">1971</option>  <option value="1970">1970</option>  <option value="1969">1969</option>  <option value="1968">1968</option>  <option value="1967">1967</option>  <option value="1966">1966</option>  <option value="1965">1965</option>  <option value="1964">1964</option>  <option value="1963">1963</option>  <option value="1962">1962</option>  <option value="1961">1961</option>  <option value="1960">1960</option>  <option value="1959">1959</option>  <option value="1958">1958</option>  <option value="1957">1957</option>  <option value="1956">1956</option>  <option value="1955">1955</option>  <option value="1954">1954</option>  <option value="1953">1953</option>  <option value="1952">1952</option>  <option value="1951">1951</option>  <option value="1950">1950</option>  <option value="1949">1949</option>  <option value="1948">1948</option>  <option value="1947">1947</option>  <option value="1946">1946</option>                                      </select>
                                  </td>
                                  <td>
                                    <select name="expYear[]">
                                            <option value="-1">Year</option>  <option value="0">0</option>  <option value="1">1</option>  <option value="2">2</option>  <option value="3">3</option>  <option value="4">4</option>  <option value="5">5</option>  <option value="6">6</option>  <option value="7">7</option>  <option value="8">8</option>  <option value="9">9</option>  <option value="10">10</option>  <option value="11">11</option>  <option value="12">12</option>  <option value="13">13</option>  <option value="14">14</option>  <option value="15">15</option>  <option value="16">16</option>  <option value="17">17</option>  <option value="18">18</option>  <option value="19">19</option>  <option value="20">20</option>  <option value="21">21</option>  <option value="22">22</option>  <option value="23">23</option>  <option value="24">24</option>  <option value="25">25</option>  <option value="26">26</option>  <option value="27">27</option>  <option value="28">28</option>  <option value="29">29</option>  <option value="30">30</option>                                        </select> Years &nbsp;
                                    <select name="expMonth[]">
                                           <option value="-1">Month</option>  <option value="00">0</option>  <option value="01">1</option>  <option value="02">2</option>  <option value="03">3</option>  <option value="04">4</option>  <option value="05">5</option>  <option value="06">6</option>  <option value="07">7</option>  <option value="08">8</option>  <option value="09">9</option>  <option value="10">10</option>  <option value="11">11</option>                                       </select>  Months
                                  </td>
                                </tr>
                                                            <tr>
                                  <td><input type="text" name="skill[]"  value="" class="w180" maxlength="40" autocomplete="off" tooltip='Please enter only one IT skill per box.'></td>
                                  <td><input type="text" name="version[]"  value="" class="w70" maxlength="10"></td>
                                  <td>
                                      <select name="lastUsed[]">
                                           <option value="-1">Select</option>  <option value="2017">2017</option>  <option value="2016">2016</option>  <option value="2015">2015</option>  <option value="2014">2014</option>  <option value="2013">2013</option>  <option value="2012">2012</option>  <option value="2011">2011</option>  <option value="2010">2010</option>  <option value="2009">2009</option>  <option value="2008">2008</option>  <option value="2007">2007</option>  <option value="2006">2006</option>  <option value="2005">2005</option>  <option value="2004">2004</option>  <option value="2003">2003</option>  <option value="2002">2002</option>  <option value="2001">2001</option>  <option value="2000">2000</option>  <option value="1999">1999</option>  <option value="1998">1998</option>  <option value="1997">1997</option>  <option value="1996">1996</option>  <option value="1995">1995</option>  <option value="1994">1994</option>  <option value="1993">1993</option>  <option value="1992">1992</option>  <option value="1991">1991</option>  <option value="1990">1990</option>  <option value="1989">1989</option>  <option value="1988">1988</option>  <option value="1987">1987</option>  <option value="1986">1986</option>  <option value="1985">1985</option>  <option value="1984">1984</option>  <option value="1983">1983</option>  <option value="1982">1982</option>  <option value="1981">1981</option>  <option value="1980">1980</option>  <option value="1979">1979</option>  <option value="1978">1978</option>  <option value="1977">1977</option>  <option value="1976">1976</option>  <option value="1975">1975</option>  <option value="1974">1974</option>  <option value="1973">1973</option>  <option value="1972">1972</option>  <option value="1971">1971</option>  <option value="1970">1970</option>  <option value="1969">1969</option>  <option value="1968">1968</option>  <option value="1967">1967</option>  <option value="1966">1966</option>  <option value="1965">1965</option>  <option value="1964">1964</option>  <option value="1963">1963</option>  <option value="1962">1962</option>  <option value="1961">1961</option>  <option value="1960">1960</option>  <option value="1959">1959</option>  <option value="1958">1958</option>  <option value="1957">1957</option>  <option value="1956">1956</option>  <option value="1955">1955</option>  <option value="1954">1954</option>  <option value="1953">1953</option>  <option value="1952">1952</option>  <option value="1951">1951</option>  <option value="1950">1950</option>  <option value="1949">1949</option>  <option value="1948">1948</option>  <option value="1947">1947</option>  <option value="1946">1946</option>                                      </select>
                                  </td>
                                  <td>
                                    <select name="expYear[]">
                                            <option value="-1">Year</option>  <option value="0">0</option>  <option value="1">1</option>  <option value="2">2</option>  <option value="3">3</option>  <option value="4">4</option>  <option value="5">5</option>  <option value="6">6</option>  <option value="7">7</option>  <option value="8">8</option>  <option value="9">9</option>  <option value="10">10</option>  <option value="11">11</option>  <option value="12">12</option>  <option value="13">13</option>  <option value="14">14</option>  <option value="15">15</option>  <option value="16">16</option>  <option value="17">17</option>  <option value="18">18</option>  <option value="19">19</option>  <option value="20">20</option>  <option value="21">21</option>  <option value="22">22</option>  <option value="23">23</option>  <option value="24">24</option>  <option value="25">25</option>  <option value="26">26</option>  <option value="27">27</option>  <option value="28">28</option>  <option value="29">29</option>  <option value="30">30</option>                                        </select> Years &nbsp;
                                    <select name="expMonth[]">
                                           <option value="-1">Month</option>  <option value="00">0</option>  <option value="01">1</option>  <option value="02">2</option>  <option value="03">3</option>  <option value="04">4</option>  <option value="05">5</option>  <option value="06">6</option>  <option value="07">7</option>  <option value="08">8</option>  <option value="09">9</option>  <option value="10">10</option>  <option value="11">11</option>                                       </select>  Months
                                  </td>
                                </tr>
                                                            <tr>
                                  <td><input type="text" name="skill[]"  value="" class="w180" maxlength="40" autocomplete="off" tooltip='Please enter only one IT skill per box.'></td>
                                  <td><input type="text" name="version[]"  value="" class="w70" maxlength="10"></td>
                                  <td>
                                      <select name="lastUsed[]">
                                           <option value="-1">Select</option>  <option value="2017">2017</option>  <option value="2016">2016</option>  <option value="2015">2015</option>  <option value="2014">2014</option>  <option value="2013">2013</option>  <option value="2012">2012</option>  <option value="2011">2011</option>  <option value="2010">2010</option>  <option value="2009">2009</option>  <option value="2008">2008</option>  <option value="2007">2007</option>  <option value="2006">2006</option>  <option value="2005">2005</option>  <option value="2004">2004</option>  <option value="2003">2003</option>  <option value="2002">2002</option>  <option value="2001">2001</option>  <option value="2000">2000</option>  <option value="1999">1999</option>  <option value="1998">1998</option>  <option value="1997">1997</option>  <option value="1996">1996</option>  <option value="1995">1995</option>  <option value="1994">1994</option>  <option value="1993">1993</option>  <option value="1992">1992</option>  <option value="1991">1991</option>  <option value="1990">1990</option>  <option value="1989">1989</option>  <option value="1988">1988</option>  <option value="1987">1987</option>  <option value="1986">1986</option>  <option value="1985">1985</option>  <option value="1984">1984</option>  <option value="1983">1983</option>  <option value="1982">1982</option>  <option value="1981">1981</option>  <option value="1980">1980</option>  <option value="1979">1979</option>  <option value="1978">1978</option>  <option value="1977">1977</option>  <option value="1976">1976</option>  <option value="1975">1975</option>  <option value="1974">1974</option>  <option value="1973">1973</option>  <option value="1972">1972</option>  <option value="1971">1971</option>  <option value="1970">1970</option>  <option value="1969">1969</option>  <option value="1968">1968</option>  <option value="1967">1967</option>  <option value="1966">1966</option>  <option value="1965">1965</option>  <option value="1964">1964</option>  <option value="1963">1963</option>  <option value="1962">1962</option>  <option value="1961">1961</option>  <option value="1960">1960</option>  <option value="1959">1959</option>  <option value="1958">1958</option>  <option value="1957">1957</option>  <option value="1956">1956</option>  <option value="1955">1955</option>  <option value="1954">1954</option>  <option value="1953">1953</option>  <option value="1952">1952</option>  <option value="1951">1951</option>  <option value="1950">1950</option>  <option value="1949">1949</option>  <option value="1948">1948</option>  <option value="1947">1947</option>  <option value="1946">1946</option>                                      </select>
                                  </td>
                                  <td>
                                    <select name="expYear[]">
                                            <option value="-1">Year</option>  <option value="0">0</option>  <option value="1">1</option>  <option value="2">2</option>  <option value="3">3</option>  <option value="4">4</option>  <option value="5">5</option>  <option value="6">6</option>  <option value="7">7</option>  <option value="8">8</option>  <option value="9">9</option>  <option value="10">10</option>  <option value="11">11</option>  <option value="12">12</option>  <option value="13">13</option>  <option value="14">14</option>  <option value="15">15</option>  <option value="16">16</option>  <option value="17">17</option>  <option value="18">18</option>  <option value="19">19</option>  <option value="20">20</option>  <option value="21">21</option>  <option value="22">22</option>  <option value="23">23</option>  <option value="24">24</option>  <option value="25">25</option>  <option value="26">26</option>  <option value="27">27</option>  <option value="28">28</option>  <option value="29">29</option>  <option value="30">30</option>                                        </select> Years &nbsp;
                                    <select name="expMonth[]">
                                           <option value="-1">Month</option>  <option value="00">0</option>  <option value="01">1</option>  <option value="02">2</option>  <option value="03">3</option>  <option value="04">4</option>  <option value="05">5</option>  <option value="06">6</option>  <option value="07">7</option>  <option value="08">8</option>  <option value="09">9</option>  <option value="10">10</option>  <option value="11">11</option>                                       </select>  Months
                                  </td>
                                </tr>
                            
                          </tbody>
                        </table>

		</td>
	</tr>
	<tr>
		<td colspan="2">Personal Details</td>
	</tr>
	<tr>
		<td>Date of Birth:</td>
		<td>
			<select name="dobDay" id="dobDay" errId="birthDateErr" formRowId="dobFormRow" class="mr5 w70">
    <option value="-1" >Day</option>  <option value="1" >1</option>  <option value="2" >2</option>  <option value="3" >3</option>  <option value="4" >4</option>  <option value="5" >5</option>  <option value="6" >6</option>  <option value="7" >7</option>  <option value="8" >8</option>  <option value="9" >9</option>  <option value="10" >10</option>  <option value="11" >11</option>  <option value="12" >12</option>  <option value="13" >13</option>  <option value="14" >14</option>  <option value="15" >15</option>  <option value="16" >16</option>  <option value="17" >17</option>  <option value="18" >18</option>  <option value="19" >19</option>  <option value="20" >20</option>  <option value="21" >21</option>  <option value="22" >22</option>  <option value="23" >23</option>  <option value="24" >24</option>  <option value="25" >25</option>  <option value="26" >26</option>  <option value="27" >27</option>  <option value="28" >28</option>  <option value="29" >29</option>  <option value="30" >30</option>  <option value="31" >31</option>                             </select>
                            <select name="dobMonth" id="dobMonth" errId="birthDateErr" formRowId="dobFormRow" class="mr5 w70">
    <option value="-1" >Month</option>  <option value="1" >Jan</option>  <option value="2" >Feb</option>  <option value="3" >Mar</option>  <option value="4" >Apr</option>  <option value="5" >May</option>  <option value="6" >Jun</option>  <option value="7" >Jul</option>  <option value="8" >Aug</option>  <option value="9" >Sep</option>  <option value="10" >Oct</option>  <option value="11" >Nov</option>  <option value="12" >Dec</option>                             </select>
                            <select name="dobYear" id="dobYear" errId="birthDateErr" formRowId="dobFormRow" class="mr5 w70">
    <option value="-1" >Year</option>  <option value="1999" >1999</option>  <option value="1998" >1998</option>  <option value="1997" >1997</option>  <option value="1996" >1996</option>  <option value="1995" >1995</option>  <option value="1994" >1994</option>  <option value="1993" >1993</option>  <option value="1992" >1992</option>  <option value="1991" >1991</option>  <option value="1990" >1990</option>  <option value="1989" >1989</option>  <option value="1988" >1988</option>  <option value="1987" >1987</option>  <option value="1986" >1986</option>  <option value="1985" >1985</option>  <option value="1984" >1984</option>  <option value="1983" >1983</option>  <option value="1982" >1982</option>  <option value="1981" >1981</option>  <option value="1980" >1980</option>  <option value="1979" >1979</option>  <option value="1978" >1978</option>  <option value="1977" >1977</option>  <option value="1976" >1976</option>  <option value="1975" >1975</option>  <option value="1974" >1974</option>  <option value="1973" >1973</option>  <option value="1972" >1972</option>  <option value="1971" >1971</option>  <option value="1970" >1970</option>  <option value="1969" >1969</option>  <option value="1968" >1968</option>  <option value="1967" >1967</option>  <option value="1966" >1966</option>  <option value="1965" >1965</option>  <option value="1964" >1964</option>  <option value="1963" >1963</option>  <option value="1962" >1962</option>  <option value="1961" >1961</option>  <option value="1960" >1960</option>  <option value="1959" >1959</option>  <option value="1958" >1958</option>  <option value="1957" >1957</option>  <option value="1956" >1956</option>  <option value="1955" >1955</option>  <option value="1954" >1954</option>  <option value="1953" >1953</option>  <option value="1952" >1952</option>  <option value="1951" >1951</option>  <option value="1950" >1950</option>  <option value="1949" >1949</option>  <option value="1948" >1948</option>  <option value="1947" >1947</option>  <option value="1946" >1946</option>  <option value="1945" >1945</option>  <option value="1944" >1944</option>  <option value="1943" >1943</option>  <option value="1942" >1942</option>  <option value="1941" >1941</option>  <option value="1940" >1940</option>  <option value="1939" >1939</option>  <option value="1938" >1938</option>  <option value="1937" >1937</option>  <option value="1936" >1936</option>  <option value="1935" >1935</option>  <option value="1934" >1934</option>  <option value="1933" >1933</option>  <option value="1932" >1932</option>  <option value="1931" >1931</option>  <option value="1930" >1930</option>                             </select>

		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><select id="gender" name="gender" valtype="gender">
    <option value="-1" >Select</option>    <option value="M" >Male</option>    <option value="F" >Female</option>                              </select>
</td>
	</tr>
	<tr>
		<td>Marital Status</td>
		<td><select name="maritalStatus" id="maritalStatus">
  <option value="-1" >Select</option>  <option value="N" >Single/unmarried</option>  <option value="M" >Married</option>  <option value="W" >Widowed</option>  <option value="D" >Divorced</option>  <option value="S" >Separated</option>  <option value="O" >Other</option>                             </select>
</td>
	</tr>
	<tr>
		<td>Mailing Address:

		</td>
		<td>
			<textarea>
			
			</textarea>
		</td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td>Pincode:</td>
		<td><input type="text" /></td>
	</tr>
	<tr>
		<td colspan="2">Work Authorization</td>
	</tr>
	<tr>
		<td>Work Status for USA</td>
		<td>
			<select name="workStatusId" id="workStatusId" class="w162">
  <option value="-1" >Select</option>  <option value="1" >Have H1 Visa</option>  <option value="2" >Need H1 Visa</option>  <option value="3" >TN Permit Holder</option>  <option value="4" >Green Card Holder</option>  <option value="5" >US Citizen</option>  <option value="6" >Authorized to work in US</option>                             </select>
		</td>
	</tr>
	<tr>
		<td>
			Other Countries
		</td>
		<td>
			<select id="workStatusOtherId" size="3" multiple="" name="workStatusOtherId[]" valtype="workStatusOtherId" class="w162">
   <option disabled="disabled" class="disabled" value="-1">Select</option>    <option value="1" >India</option>    <option value="2" >Australia</option>    <option value="3" >Bahrain</option>    <option value="4" >Bangladesh</option>    <option value="5" >Belgium</option>    <option value="6" >Canada</option>    <option value="7" >China</option>    <option value="8" >Dubai</option>    <option value="9" >France</option>    <option value="10" >Germany</option>    <option value="11" >Hong Kong</option>    <option value="12" >Indonesia</option>    <option value="13" >Ireland</option>    <option value="14" >Italy</option>    <option value="15" >Japan</option>    <option value="16" >Kenya</option>    <option value="17" >Kuwait</option>    <option value="18" >Lebanon</option>    <option value="19" >Libya</option>    <option value="20" >Malaysia</option>    <option value="21" >Maldives</option>    <option value="22" >Mauritius</option>    <option value="23" >Mexico</option>    <option value="24" >Nepal</option>    <option value="25" >Netherlands</option>    <option value="26" >New Zealand</option>    <option value="27" >Norway</option>    <option value="28" >Oman</option>    <option value="29" >Pakistan</option>    <option value="30" >Russia</option>    <option value="31" >Saudi Arabia</option>    <option value="32" >Singapore</option>    <option value="33" >South Africa</option>    <option value="34" >Spain</option>    <option value="35" >Sri Lanka</option>    <option value="36" >Switzerland</option>    <option value="37" >Thailand</option>    <option value="38" >United Arab Emirates</option>    <option value="39" >United Kingdom</option>    <option value="40" >United States</option>    <option value="41" >Zimbabwe</option>                              </select>
                            <span class="dspB mt3 f11">Select only up to 3 countries</span>
		</td>
	</tr>
	<tr>
		<td colspan="2">Languages Known</td>
	</tr><tr>
		<td colspan="2">
			<table cellspacing="0" cellpadding="5" border="0" width="450" id="languageTb_id">
                   
                   <tbody>
                     <tr class="grytxt8">
                       <td width="128" nowrap=""><strong>Language</strong></td>
                       <td width="112" nowrap="">
                         <strong>Proficiency Level</strong></td>
                       <td width="39" nowrap=""><strong>Read</strong></td>
                       <td width="34" nowrap=""><strong>Write</strong></td>
                       <td width="137" nowrap=""><strong>Speak</strong></td>
                       <td width="100"></td>
                     </tr>

    

                    <tr style="display:;" id="lang1">
                       <td nowrap="" class="valignTop"><input type="hidden" value="" name="languageId[0]">
                         <input type="text" maxlength="10" size="18" value="" name="lang[0]" valtype="lang0"><br/>
                        <i id="lang0-error"></i></td>
                       <td nowrap="" class="valignTop">
                        <select class="textbox2" name="proficiencyId[0]">
                  <option value="-1"  >Select</option>  <option value="1"  >Beginner</option>  <option value="2"  >Proficient</option>  <option value="3"  >Expert</option>                         </select></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="R" name="canRead[0]"  ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="W" name="canWrite[0]" ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="S" name="canSpeak[0]" ></td>
                     </tr>
    

                    <tr style="display:;" id="lang2">
                       <td nowrap="" class="valignTop"><input type="hidden" value="" name="languageId[1]">
                         <input type="text" maxlength="10" size="18" value="" name="lang[1]" valtype="lang1"><br/>
                        <i id="lang1-error"></i></td>
                       <td nowrap="" class="valignTop">
                        <select class="textbox2" name="proficiencyId[1]">
                  <option value="-1"  >Select</option>  <option value="1"  >Beginner</option>  <option value="2"  >Proficient</option>  <option value="3"  >Expert</option>                         </select></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="R" name="canRead[1]"  ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="W" name="canWrite[1]" ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="S" name="canSpeak[1]" ></td>
                     </tr>
    

                    <tr style="display:;" id="lang3">
                       <td nowrap="" class="valignTop"><input type="hidden" value="" name="languageId[2]">
                         <input type="text" maxlength="10" size="18" value="" name="lang[2]" valtype="lang2"><br/>
                        <i id="lang2-error"></i></td>
                       <td nowrap="" class="valignTop">
                        <select class="textbox2" name="proficiencyId[2]">
                  <option value="-1"  >Select</option>  <option value="1"  >Beginner</option>  <option value="2"  >Proficient</option>  <option value="3"  >Expert</option>                         </select></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="R" name="canRead[2]"  ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="W" name="canWrite[2]" ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="S" name="canSpeak[2]" ></td>
                     </tr>
    

                    <tr style="display:none;" id="lang4">
                       <td nowrap="" class="valignTop"><input type="hidden" value="" name="languageId[3]">
                         <input type="text" maxlength="10" size="18" value="" name="lang[3]" valtype="lang3"><br/>
                        <i id="lang3-error"></i></td>
                       <td nowrap="" class="valignTop">
                        <select class="textbox2" name="proficiencyId[3]">
                  <option value="-1"  >Select</option>  <option value="1"  >Beginner</option>  <option value="2"  >Proficient</option>  <option value="3"  >Expert</option>                         </select></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="R" name="canRead[3]"  ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="W" name="canWrite[3]" ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="S" name="canSpeak[3]" ></td>
                     </tr>
    

                    <tr style="display:none;" id="lang5">
                       <td nowrap="" class="valignTop"><input type="hidden" value="" name="languageId[4]">
                         <input type="text" maxlength="10" size="18" value="" name="lang[4]" valtype="lang4"><br/>
                        <i id="lang4-error"></i></td>
                       <td nowrap="" class="valignTop">
                        <select class="textbox2" name="proficiencyId[4]">
                  <option value="-1"  >Select</option>  <option value="1"  >Beginner</option>  <option value="2"  >Proficient</option>  <option value="3"  >Expert</option>                         </select></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="R" name="canRead[4]"  ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="W" name="canWrite[4]" ></td>
                       <td nowrap="" class="valignTop"><input class="chkRadio" type="checkbox" value="S" name="canSpeak[4]" ></td>
                     </tr>
            
                     <tr id="addInputRow">
                      <td nowrap="" align="left" colspan="5">
                            <a onclick="return AddLangRow();" href="#">Add More </a>
                      </td>
                    </tr>
                   </tbody>
                   </table>
		</td>
	</tr>
	<tr>
		<td>Affirmative Action</td>
		<td><select name="casteId" id="casteId">
                                 <option value="-1" >Select</option>  <option value="1" >General</option>  <option value="2" >SC</option>  <option value="3" >ST</option>  <option value="4" >OBC- Creamy</option>  <option value="5" >OBC- Non-Creamy</option>                             </select>
</td>
	</tr>
	<tr>
		<td>Differently Abled</td>
		<td>
			<input type="radio" class="chkRadio" id="disabled_y" name="disabled"  value="Y" onclick="DisableDesc(false);"> <label for="disabled_y">Yes</label> &nbsp; &nbsp; 
                            <input type="radio" class="chkRadio" id="disabled_n" name="disabled" valtype="disabled_n" CHECKED value="N" onclick="DisableDesc(true);"> <label for="disabled_n">No</label>
		</td>
	</tr>
</table>
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