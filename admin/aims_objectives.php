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
                        <h3>Advanced Forms</h3>
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
                     <!-- Start .row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Add Sliders</h4>
                                </div>
                                <div class="panel-body pt0 pb0">
                                    <form  class="form-horizontal group-border stripped" id="register-form"  action="insertaims_object.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">Slider Title</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="text" type="text" name="title" class="form-control required">
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">Slider SubTitle</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input  type="text" name="stitle" class="form-control required">
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <label for="textarea" class="col-lg-2 col-md-3 control-label">Slider Description</label>
                                            <div class="col-lg-10 col-md-9">
                                                <textarea class="form-control" name="description" id="textarea" rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="image" class="col-lg-2 col-md-3 control-label">Pic Upload:</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input type='file' name="userfile"/> <br/> <img id="myImg" src="images/defaultgallery.jpg" alt="your image" width="100px" />
                                            </div>
                                        </div>

                                  
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-3 control-label" for="">Summernote</label>
                                            <div class="col-lg-10 col-md-9">
                                                <textarea id="summernote" name="summernotes">hi.....</textarea>
                                            </div>
                                        </div>
                                        
                                        <!-- End .form-group  -->

                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
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
        <!-- Load pace first -->
        <script src="plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-migrate-1.2.1.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ) -->
        <script src="js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Remove click delay in touch -->
        <script src="plugins/core/fastclick/fastclick.js"></script>
        <!-- Increase jquery animation speed -->
        <script src="plugins/core/velocity/jquery.velocity.min.js"></script>
        <!-- Quick search plugin (fast search for many widgets) -->
        <script src="plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox fast bootstrap modals -->
        <script src="plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="plugins/forms/fancyselect/fancySelect.js"></script>
        <script src="plugins/forms/select2/select2.js"></script>
        <script src="plugins/forms/maskedinput/jquery.maskedinput.js"></script>
        <script src="plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
        <script src="plugins/forms/spinner/jquery.bootstrap-touchspin.js"></script>
        <script src="plugins/forms/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/forms/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="plugins/forms/bootstrap-colorpicker/bootstrap-colorpicker.js"></script>
        <script src="plugins/forms/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="js/libs/typeahead.bundle.js"></script>
        <script src="plugins/forms/summernote/summernote.js"></script>
        <script src="plugins/forms/bootstrap-markdown/bootstrap-markdown.js"></script>
        <script src="plugins/forms/dropzone/dropzone.js"></script>
        <script src="js/jquery.supr.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/forms-advanced.js"></script>
    </body>
</html>