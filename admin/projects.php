<?php
include_once('dbconnect.php');
//$userid = $_SESSION['user_id'];
$sql ="SELECT * from projects ORDER BY Id ASC";
$res = mysql_query($sql) or die(mysql_error());
if(isset($_REQUEST['insert']) == "Succsess"){
$erroremail = "Project Insert Succsessfully";
}
if(isset($_REQUEST['del']) == "Succsess"){
$erroremail = "Project Delete Succsessfully";
}
if(isset($_REQUEST['update']) == "Succsess"){
$erroremail = "Project update Succsessfully";
}
include_once('header.php');
include_once('sidebar.php');
?>
            <!--Body content-->
            <div id="content" class="page-content clearfix">
                <div class="contentwrapper">
                    <!--Content wrapper-->
                    <div class="heading">
                        <!--  .heading-->
                        <h3>Project List</h3>
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
                                    <h4 class="panel-title">Project List</h4>
                                </div>
                                <div class="panel-body">
                                    <span><p color="red" style="color: #60a560;font-weight: bold;font-size: 16px;
text-align: center;margin-top: 10px;"><?php if(isset($erroremail)){echo $erroremail;} ?></p></span>
                                    <table id="basic-datatables" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                     <a href="addproject.php"><button type="button" class="btn btn-success mr5 mb10" style="float: right;margin-right: 17px !important;">Add Projects</button></a>
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Project Name</th>
                                                <th>Project Description</th>
                                                <th>Image</th>
                                               <!--  <th>Goal Amount</th>
                                                <th>Raised Amount</th> -->
                                                 <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Project Name</th>
                                                <th>Project Short Description</th>
                                                <th>Image</th>
                                               <!--  <th>Goal Amount</th>
                                                <th>Raised Amount</th> -->
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
                <td><?php echo $result['pname']; ?></td>
                <td><?php echo $result['shortdescription']; ?></td>
                <td><?php if($result['image']!=''){ ?><img  src="images/projects/100/<?php echo $result['image']; ?>" /><?php } else {
                 ?>
                  <img src="images/defaultgallery.jpg" width="100px;"/>
                 <?php } ?></td>
              <!--   <td><?php //echo $result['goalamount']; ?></td>
                <td><?php //echo $result['raisedamount']; ?></td> -->
                <td><a href="editproject.php?eId=<?php echo $result['Id'];?>"><i class="fa fa-edit" style="color: #439943;font-size: 19px;"></i></a>  <a href="deleteproject.php?dId=<?php echo $result['Id'];?>" onclick='return(delete_project(<?php echo $result['Id']; ?>))'><i class="icomoon-icon-remove-2" style="color: red;font-size: 19px;"></i></a></td>
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
function delete_project(id)
{
    
    var r=confirm("Do you want to delete this?");
        if (r==true) {
          window.location = "deleteproject.php?dId="+id;
        } else {
          return false;
        }
}
</script>