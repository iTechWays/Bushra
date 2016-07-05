<?php
include_once('dbconnect.php');
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php
include_once('header.php');
include_once('menu.php');
if(isset($_REQUEST['email']) == "error"){
$erroremail = "Email Already Exist";
}
$countryresult =mysql_query("SELECT * FROM countries");
$usertypes =mysql_query("SELECT * FROM usertypes");
?>
	<div class="container_m">
	<div class="forms">
	<div class="register">
	<h3>Add Projects</h3>
	<form id="project-form"  action="insert_project.php"  method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td>Project Name</td>
	
	<td><input type="text" name="pname"  id="pname"</td>
	</tr>
	<tr>
	<td>Description</td>
	
	<td><textarea name="desc" id="desc" style="width:307px;height:35px"></textarea></td>
	</tr>
	
	<tr>
	<td>Goal Amount</td>
	<td><input type="text" name="gamount" id="gamount" ></td>
	</tr>

	
	<tr>
	<td>Project Image</td>
	<td><input type='file' name="image"/> <img id="myImg" src="images/defaultgallery.jpg" alt="your image" style="padding-top: 10px;width: 100px;" /></td>
	</tr>
	
	<tr>	
	<td colspan="2"><input type="submit" value="Add Project" class="create"/></td>
	</tr>
	</table>
	</div>
	</form>
	
	<div style="clear:both"></div>
	</div>
	</div>
	<div class="overlay" style="display:none;"></div>
	
</body>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
$(document).ready(function()
{
$("#project-form").validate
		({
    
		        // Specify the validation rules
		        rules: 
		        {
		            pname: "required",
		            desc: "required",
		            projectimage: "required",
		            gamount: "required"
		          
		        },
		        
		        // Specify the validation error messages
		        messages: 
		        {
		            pname: "Please enter project name",
		            desc: "Please enter description",
		            projectimage: "Please enter project Image",
		            gamount: "Please enter goal amount"
		           
		        },
		        
		       
    	});
		
});
</script>
<script>
$(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};
</script>
</html>