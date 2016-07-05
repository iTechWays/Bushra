<?php
include_once('dbconnect.php');
include_once('header.php');
include_once('sidebar.php');
if(isset($_REQUEST['email']) == "error"){
$erroremail = "Email Already Exist";
}
$countryresult =mysql_query("SELECT * FROM countries");
$usertypes =mysql_query("SELECT * FROM usertypes");
?>

            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Add Users</h3>
                        <div class="resBtnSearch">
                            <a href="#"><span class="s16 icomoon-icon-search-3"></span></a>
                        </div>
                        <div class="search">
                            <!-- .search -->
                            <span><p color="red" style="color: #e40505;font-weight: bold;font-size: 16px;
text-align: center;margin-top: 10px;"><?php if(isset($erroremail)){echo $erroremail;} ?></p></span>
                            <form  class="form-horizontal" id="register-form"  action="insertuser.php" method="post" enctype="multipart/form-data">
                                <input type="text" class="top-search from-control" placeholder="Search here ..." />
                                <input type="submit" class="search-btn" value="" />
                            </form>
                        </div>
                        <!--  /search -->
                        <ul class="breadcrumb">
                            <li>You are here:</li>
                            <li>
                                <a href="#" class="tip" title="back to dashboard">
                                    <i class="s16 icomoon-icon-screen-2"></i>
                                </a>
                                <span class="divider">
                <i class="s16 icomoon-icon-arrow-right-3"></i>
            </span>
                            </li>
                            <li class="active">Blank Page</li>
                        </ul>
                    </div>
                    <!-- End  / heading-->
                    <!-- Start .row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Add Users</h4>
                                </div>

                                 <div class="panel-body pt0 pb0">
                                    <form id="validate" class="form-horizontal group-border stripped" role="form"  action="insertuser.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">First Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type="text" name="firstname" class="form-control required"/>
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">Last Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type="text" name="lastname" class="form-control required"/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email" class="col-lg-2 col-md-3 control-label">Email(primary)</label>
                                            <div class="col-lg-10 col-md-9">
                                               <input type="email" name="email" class="form-control required"/>
                                            </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label for="password" class="col-lg-2 col-md-3 control-label">Password</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type="password" id="password"name="password" class="form-control required"/>
                                            </div>
                                        </div>
                                                                               
                                        <div class="form-group">
                                            <label for="password" class="col-lg-2 col-md-3 control-label">Confirm Password</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type="password" name="confirmpassword" class="form-control required"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-lg-2 col-md-3 control-label">Pic Upload:</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type='file' name="image"/> <br/> <img id="myImg" src="images/avatar.png" alt="your image" width="100px" />
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label for="select2" class="col-lg-2 col-md-3 control-label">Country</label>
                                            <div class="col-lg-10 col-md-9">
                                                <select class="form-control select2" name="countryId" id="select2">
                                                    <!-- <option value="">Choose</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup> -->
                                                    <?php 
                                                      while($result=mysql_fetch_row($countryresult)){
                                                    ?>
                                                      <option value="<?php echo $result[0]; ?>"><?php echo $result[2]; ?></option>
                                                    <?php }?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="select2" class="col-lg-2 col-md-3 control-label">Registration Type</label>
                                            <div class="col-lg-10 col-md-9">
                                                <select class="form-control select2"  name="type" id="select2">
                                                    <?php 
                                                      while($types=mysql_fetch_row($usertypes)){
                                                    ?>
                                                      <option value="<?php echo $types[0]; ?>"><?php echo $types[1]; ?></option>
                                                    <?php }?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                               <input type="submit" class="btn btn-success mr5 mb10" style="float:left;margin-left:16px;" value="Submit">
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End contentwrapper -->
            </div>
            <!-- End #content -->
<div id="footer" class="clearfix sidebar-page right-sidebar-page">
                <!-- Start #footer  -->
                <p class="pull-left">
                    Copyrights &copy; 2014 <a href="http://suggeelson.com/" class="color-blue strong" target="_blank">SuggeElson</a>. All rights reserved.
                </p>
                <p class="pull-right">
                    <a href="#" class="mr5">Terms of use</a>
                    |
                    <a href="#" class="ml5 mr25">Privacy police</a>
                </p>
            </div>
            <!-- End #footer  -->
        </div>
        <!-- / #wrapper -->
        <!-- Back to top -->
        <div id="back-to-top"><a href="#">Back to Top</a>
        </div>
        <!-- Javascripts -->
<?php
include_once('footer.php');
?>
<script>
$(document).ready(function()
{
        $("#validate").validate
        ({
    
                // Specify the validation rules
                rules: 
                {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    confirmpassword: 
                    {                             
                             required: true,
                             equalTo: "#password"
                    },
                },
                
                // Specify the validation error messages
                messages: 
                {
                    firstname: "Please enter your first name",
                    lastname: "Please enter your last name",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    confirmpassword: {
                    required: "Please provide a confirm password",
                    equalTo:" Enter Confirm Password Same as Password"
                    },
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

