<?php
include_once('dbconnect.php');
//$userid = $_SESSION['user_id'];
$sql ="SELECT * FROM slider";
$res = mysql_query($sql) or die(mysql_error());
if(isset($_REQUEST['insert']) == "Succsess"){
$errormessage = "Slider insert Succsessfully";
}
if(isset($_REQUEST['del']) == "Succsess"){
$errormessage = "Slider Delete Succsessfully";
}
if(isset($_REQUEST['update']) == "Succsess"){
$errormessage = "Slider update Succsessfully";
}
include_once('header.php');
include_once('sidebar.php');
?>            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Slider List</h3>
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
                                    <h4 class="panel-title">Slider List</h4>
                                </div>
                                <div class="panel-body">
                                    <span><p color="red" style="color: #e40505;font-weight: bold;font-size: 16px;
text-align: center;margin-top: 10px;"><?php if(isset($errormessage)){echo $errormessage;} ?></p></span>
                                    <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                     <a href="addsliders.php"><button type="button" class="btn btn-success mr5 mb10" style="float: right;margin-right: 17px !important;">Add Sliders</button></a>
                                        <thead>
                                            <tr>
                                                <th>SId</th>
                                                <th>Slider Title</th>
                                                <th>Slider SubTitle</th>
                                                <th>Description</th>
                                                <th>Slider Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>SId</th>
                                                <th>Slider Title</th>
                                                <th>Slider SubTitle</th>
                                                <th>Description</th>
                                                <th>Slider Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                 $i=1;
                while ($result = mysql_fetch_array($res)) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result['title']; ?></td>
                <td><?php echo $result['subtitle']; ?></td>
                <td><?php echo $result['description']; ?></td>
                <td><?php if(isset($result['image'])){ ?><img src="images/slider/100/<?php echo $result['image']; ?>" /><?php } else {
                 ?>
                 <img src="images/defaultgallery.jpg" width="100px;"/>
                 <?php
                } ?></td>
                <td><a href="editslider.php?eId=<?php echo $result['Id'];?>"><i class="fa fa-edit" style="color: #439943;font-size: 25px;"></i></a>  <a href="deleteslider.php?dId=<?php echo $result['Id'];?>" onclick='return deletconfirm();'><i class="icomoon-icon-remove-2" style="color: red;font-size: 25px;"></i></a></td>
            </tr>
            <?php
                  $i++;
                }
            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-12 end here -->
                        
                        <!-- col-lg-12 end here -->
                        
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