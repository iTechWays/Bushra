<?php
include_once('dbconnect.php');
include_once('header.php');
include_once('sidebar.php');
$testmonialId = $_REQUEST['eId'];
$testimonials =mysql_query("SELECT * FROM testimonials where Id=$testmonialId");
$testimonialdetails = mysql_fetch_array($testimonials);
?>
            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Add Testimonals</h3>
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
                                    <h4 class="panel-title">Add Testimonals</h4>
                                </div>
                                <div class="panel-body pt0 pb0">
                                    <form  class="form-horizontal group-border stripped" role="form" id="register-form"  action="updatetestmonials.php" method="post">
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">User Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="text" type="text" class="form-control required" name="username" value="<?php echo $testimonialdetails['username'];?>" >
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <label for="textarea" class="col-lg-2 col-md-3 control-label">Testimonals</label>
                                            <div class="col-lg-10 col-md-9">
                                                <textarea class="form-control" name="description" style="width: 332px;"><?php echo $testimonialdetails['description'];?></textarea>
                                            </div>
                                        </div>                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <input type="hidden" name="testmonialId" value="<?php echo $testimonialdetails['Id']; ?>"/>
                                                <input type="submit" class="btn btn-success mr5 mb10" style="float:left;margin-left:16px" value="Submit">
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