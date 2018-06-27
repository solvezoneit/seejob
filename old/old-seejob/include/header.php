<?php 
include("admin-old/include/conection.php");
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }


	else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
};
        xmlhttp.open("GET","ajaxbac.php?state_id="+str,true);
		xmlhttp.send();
		}
    }
</script>




<?php 
include("include/header_top.php");
?>



    <div id="buy-points" class="modal fade" role="dialog">
   <div class="modal-dialog modal-lg">
     
	 
	
	<!-- Modal content-->
 
<div class="modal-content">

<div class="modal-header modl-head">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search Job</h4>
</div>

<div class="modal-body bg-body text-center">
<div class="">
<div class="row">
         <div class="col-md-12">
        <!-- <ul class="list-inline padding-right search-input styled-select">
                <li data-toggle="modal" data-target="#buy-points" >
   <input type="text" class="form-control" id="usr1" placeholder="Skill, designation, companies" >
                    </li>
                       <li>
   <input type="text" class="form-control" id="usr" placeholder="Search job by Location, state & city">
                    </li>	
                 	
                     <li>
   <select class="form-control">
   
       <option>Experience</option>
       <option>Years</option>
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <option>5</option>
       <option>6</option>
  
   </select>
                    </li>
                      <li>
   <select class="form-control">
   
       <option>Salary</option>
       <option>Years</option>
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <option>5</option>
       <option>6</option>
  
   </select>
                    </li>
                    <li>
   <button class="form-control button-color-search">Search</button>
                    </li>
</ul>-->
         
         </div>      
      </div>
      </div>
          
      </div>
      </div>
      </div>
 </div>
 </div>
 
 
<script>
$(function() {
    $( "#skills" ).autocomplete({
        source: 'search.php'
    });
});
</script>

<div class="banner">
<div>


<ul class="list-inline padding-right search-input styled-select" style="text-align: center;
margin: 122px auto;">


<h2 style="font-style: italic;"><b>
</b>
</h2>

<br> 
   
<li>
<div class="ui-widget">
    <input id="skills"  class="form-control"  placeholder="Skill, designation, companies">
</div>
 
</li>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>


<li>


<div class="ui-widget">
  <select class="chosen" name="category" requerd onChange="showUser(this.value)" >
  <option>Search job By State</option>
  
<?php
$sql = "SELECT * from  state_tbl";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{

				    $category=$row['state_name'];
					echo '<option value="'.$row['state_id'].'">'.$category.'</option>';
} 
?>
  </select>
  
  

</div>



</li>


<script type="text/javascript">
      $(".chosen").chosen();
</script>


<style>
.chosen-container-single .chosen-single {
	
	padding: 7px 0px 29px 0px !important;
	border: 0px; 
	border-radius: 0px;
}
.chosen-container-single .chosen-single div b {
	height: 0px !important;
}

.ui-widget .chosen select
{
font-family: Verdana,Arial,sans-serif !important;
    font-size: 1em !important;
}
</style>


<li>
<div class="ui-widget" >
<input type="text" list="languages" class="form-control"  placeholder="Search By Location">
<datalist id="languages">
<select class="form-control"  id="txtHint"  name="sub_category">
<option value=" "></option>
</select>
</datalist>
</div>
</li>
	
<li>
<div class="ui-widget">
<select class="form-control"> 
       <option>Experience</option>
       <option>0 Year</option>
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <option>5</option>
       <option>6</option>
	      <option>7</option>
       <option>8</option>
       <option>9</option>
	   <option>10</option>
 </select>
 </div>
</li>

<li>
<div class="ui-widget">
<select class="form-control">
   
       <option>Salary</option>
       <option><1 lac</option>
       <option>1</option>
       <option>2</option>
       <option>3</option>
       <option>4</option>
       <option>5</option>
       <option>6</option>
	    <option>7</option>
       <option>8</option>
       <option>9</option>
	    <option>10</option>
  
   </select>
            </div>        </li>
                    <li><div class="ui-widget">
   <button class="form-control button-color-search">Search</button>
   </div>
                    </li>
</ul>
    </div>
</div>

