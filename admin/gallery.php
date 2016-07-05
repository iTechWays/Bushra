<?php
include_once('dbconnect.php');
//$userid = $_SESSION['user_id'];
$sql ="SELECT * from gallery";
$res = mysql_query($sql) or die(mysql_error());
if(isset($_REQUEST['del']) == "succsess"){
$erroremail = "Gallery Delete Succsessfully";
}
if(isset($_REQUEST['update']) == "succsess"){
$erroremail = "Gallery update Succsessfully";
}
include_once('header.php');
include_once('sidebar.php');
?>            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Gallery List</h3>
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
                                    <h4 class="panel-title">Gallery List</h4>
                                </div>
                                <div class="panel-body">
                                    <span><p color="red" style="color: #60a560;font-weight: bold;font-size: 16px;
text-align: center;margin-top: 10px;"><?php if(isset($erroremail)){echo $erroremail;} ?></p></span>
                                    <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                     <a href="addgallery.php"><button type="button" class="btn btn-success mr5 mb10" style="float: right;margin-right: 17px !important;">Add Gallery</button></a>
                                       <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Create Date</th>
                                                <th>Update Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Create Date</th>
                                                <th>Update Date</th>
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
                                                <td><?php if($result['Image']!=''){ ?><img  src="images/gallery/100/<?php echo $result['Image']; ?>" /><?php } else {
                                                 ?>
                                                  <img src="images/defaultgallery.jpg" width="100px;"/>
                                                 <?php } ?></td>
                                                <td><?php echo $result['cdate']; ?></td>
                                                <td><?php echo $result['udate']; ?></td>
                                            
                                                <td><a href="editgallery.php?eId=<?php echo $result['Id'];?>"><i class="fa fa-edit" style="color: #439943;font-size: 25px;"></i></a>  <a href="deletegallery.php?dId=<?php echo $result['Id'];?>" onclick='return(deletconfirm(<?php echo $result['Id']; ?>))'><i class="icomoon-icon-remove-2" style="color: red;font-size: 25px;"></i></a></td>
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
<script>
      function deletconfirm(){
        if(confirm('Are You Sure You Want Delete This ?')==true){
          return true;
        }else{
          return false;
        }
      }
</script>