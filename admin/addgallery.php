<?php
include_once('dbconnect.php');
include_once('header.php');
include_once('sidebar.php');
?>
            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Add Gallery</h3>
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
                                    <h4 class="panel-title">Add Gallery</h4>
                                </div>
                                <div class="panel-body pt0 pb0">
                                    <form  class="form-horizontal group-border stripped" id="project-form"  action="insert_gallery.php"  method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="image" class="col-lg-2 col-md-3 control-label">Pic Upload:</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type='file' name="galleryimage"/> <br/> <img id="myImg" src="images/defaultgallery.jpg" alt="your image" width="100px" />
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <input type="submit" class="btn btn-success mr5 mb10" style="float:left;margin-left:16px" vlaue="Submit">
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
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

        $("#register-form").validate
        ({
    
                // Specify the validation rules
                rules: 
                {
                    galleryimage: "required"
                },
                
                // Specify the validation error messages
                messages: 
                {
                    galleryimage: "please upload Image"
                }
                
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