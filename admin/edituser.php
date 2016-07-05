<?php
include_once('dbconnect.php');
include_once('header.php');
include_once('sidebar.php');

if(isset($_REQUEST['email']) == "error"){
$erroremail = "Email Already Exist";
}
$uId = $_REQUEST['eId'];
$countryresult =mysql_query("SELECT * FROM countries");
$userinfo =mysql_query("SELECT * FROM users where Id=$uId");
$userdetails = mysql_fetch_array($userinfo);
$usertypes =mysql_query("SELECT * FROM usertypes");
?>
            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Edit Users</h3>
                        <div class="resBtnSearch">
                            <a href="#"><span class="s16 icomoon-icon-search-3"></span></a>
                        </div>
                        <div class="search">
                            <!-- .search -->
                            <form id="searchform" class="form-horizontal" action="search.html">
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
                                    <h4 class="panel-title">Edit Users</h4>
                                </div>

                                 <div class="panel-body pt0 pb0">
                                    <form  class="form-horizontal group-border stripped" id="useredit-form"  action="updateuser.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">First Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="text" type="text" class="form-control required" name="firstname" value="<?php echo $userdetails['fname'];?>">
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">Last Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="text" type="text" class="form-control required" name="lastname" value="<?php echo $userdetails['lname'];?>" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email" class="col-lg-2 col-md-3 control-label">Email(primary)</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="email" name="email" type="email" class="form-control" value="<?php echo $userdetails['email'];?>">
                                            </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label for="password" class="col-lg-2 col-md-3 control-label">Password</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $userdetails['password'];?>">
                                            </div>
                                        </div>
                                                                               
                                            <div class="form-group">
                                            <label for="password" class="col-lg-2 col-md-3 control-label">Confirm Password</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type="password" class="form-control" id="password" name="confirmpassword" value="<?php echo $userdetails['password'];?>">
                                            </div>
                                        </div>
                                       
                                       <div class="form-group">
                                            <label for="password" class="col-lg-2 col-md-3 control-label">Pic Upload:</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type='file' name="image"/> <?php if(isset($userdetails['pic'])){ ?><img id="myImg" width="100px"; src="images/users/100/<?php echo $userdetails['pic']; ?>" /><?php } else {
                 ?>
                 <img id="myImg" src="images/avatar.png" width="100px;"/>
                 <?php
                } ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="select2" class="col-lg-2 col-md-3 control-label">Country</label>
                                            <div class="col-lg-10 col-md-9">
                                                <select class="form-control select2" name="countryId" id="select2">
                                                <?php 
                                                  while($result=mysql_fetch_row($countryresult)){
                                                ?>
                                                    <option <?php if($result[0] == $userdetails['cId']){ ?> selected <?php } ?> value="<?php echo $result[0]; ?>"><?php echo $result[2]; ?></option>
                                                <?php
                                                }
                                                ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="select2" class="col-lg-2 col-md-3 control-label">Registration Type</label>
                                            <div class="col-lg-10 col-md-9">
                                                <select class="form-control select2" name="type" id="select2">
                                                    <?php 
                                                      while($utypes=mysql_fetch_row($usertypes)){
                                                    ?>
                                                    <option <?php if($utypes[0] == $userdetails['utype']){ ?> selected <?php } ?> value="<?php echo $utypes[0]; ?>"><?php echo $utypes[1]; ?></option>
                                                   <?php 
                                                     }
                                                   ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                    <input type="hidden" name="userId" value="<?php echo $userdetails['Id']; ?>"/>
                                               <input type="submit" class="btn btn-success mr5 mb10" style="float:left;margin-left:16px" value="Submit">
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
            <?php
   include_once('footer.php');
?>
<script>
$(document).ready(function()
{

        $("#useredit-form").validate
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