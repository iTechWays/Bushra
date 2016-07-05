<?php
include_once('dbconnect.php');
include_once('header.php');
include_once('menu.php');
?>
<!doctype html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="container_m">
	<div class="forms">
	<div class="register">
	<h3>Add Causes</h3>
	<span><p color="red" style="color: #e40505;font-weight: bold;font-size: 16px;
text-align: center;margin-top: 10px;"><?php if(isset($erroretitle)){echo $erroretitle;} ?></p></span>
	<form id="project-form"  action="insert_causes.php"  method="post" enctype="multipart/form-data">
	<table>
	 <tr>
	<td>Title</td>
	<td><input type="text" name="title" id="title"></td>
	</tr>
	<tr>
	<td>Description</td>
	<td><textarea name="desc" id="desc"></textarea></td>
	</tr>
    <tr>
	<td>Image</td>
	<td><input type="file" name="casuesimage"><br><img id="myImg" src="images/defaultgallery.jpg" alt="your image" width="100px" /></td>
	</tr>
	
	<tr>	
	<td colspan="2"><input type="submit" value="Add Causes" class="create"/></td>
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
		            title: "required",
		            desc: "required",
		            casuesimage: "required",
		        },
		        
		        // Specify the validation error messages
		        messages: 
		        {
		            title: "Please enter title",
		            userfile: "Please enter description",
		            casuesimage: "Please selet upload file",
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


</script>
</html>