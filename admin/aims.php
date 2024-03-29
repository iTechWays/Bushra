<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Forms validation | Supr Admin Template</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- Css files -->
        <!-- Icons -->
        <link href="css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- .#header -->
        <div id="header">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                Supr.<span class="slogan">admin</span>
            </a>
                </div>
                <div id="navbar-no-collapse" class="navbar-no-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <!--Sidebar collapse button-->
                            <a href="#" class="collapseBtn leftbar"><i class="s16 minia-icon-list-3"></i></a>
                        </li>
                        <li>
                            <a href="#" class="tipB reset-layout" title="Reset panel postions"><i class="s16 icomoon-icon-history"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-cog-2"></i><span class="txt"> Settings</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu left dropdown-form template-settings">
                                <li class="menu">
                                    <ul role="menu">
                                        <li><strong>Template settings</strong>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-header-toggle" name="fixed-header-toggle" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-header-toggle">Fixed header</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-left-sidebar" name="fixed-left-sidebar" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-left-sidebar">Fixed Left Sidebar</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-right-sidebar" name="fixed-right-sidebar" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-right-sidebar">Fixed Right Sidebar</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 minia-icon-envelope"></i><span class="txt">Messages</span><span class="notification">8</span>
                            </a>
                            <ul class="dropdown-menu left">
                                <li class="menu">
                                    <ul class="messages">
                                        <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                        <li>
                                            <span class="icon"><i class="s16 icomoon-icon-user-plus"></i></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                            <span class="msg">I have question about new function ...</span>
                                        </li>
                                        <li>
                                            <span class="icon avatar"><img src="img/avatar.jpg" alt="" /></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                            <span class="msg">I need to meet you urgent please call me ...</span>
                                        </li>
                                        <li>
                                            <span class="icon"><i class="s16 icomoon-icon-envelop"></i></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                            <span class="msg">I send you my suggestion, please look and ...</span>
                                        </li>
                                        <li class="view-all"><a href="#">View all messages <i class="s16 fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-right usernav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-earth"></i><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu right">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><i class="s16 icomoon-icon-user-plus"></i></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><i class="s16 icomoon-icon-bubble-3"></i></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><i class="s16 icomoon-icon-new"></i></span>
                                                <span class="event">admin Julia added post with a long description</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="#">View all notifications <i class="s16 fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="img/avatar.jpg" alt="" class="image" />
                                <span class="txt">admin@supr.com</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu right">
                                <li class="menu">
                                    <ul>
                                        <li><a href="#"><i class="s16 icomoon-icon-user-plus"></i>Edit profile</a>
                                        </li>
                                        <li><a href="#"><i class="s16 icomoon-icon-bubble-2"></i>Comments</a>
                                        </li>
                                        <li><a href="#"><i class="s16 icomoon-icon-plus"></i>Add user</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="login.html"><i class="s16 icomoon-icon-exit"></i><span class="txt"> Logout</span></a>
                        </li>
                        <li><a id="toggle-right-sidebar" href="#"><i class="s16 icomoon-icon-indent-increase"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
            <!-- /navbar -->
        </div>
        <!-- / #header -->
        <div id="wrapper">
            <!-- #wrapper -->
            <!--Sidebar background-->
            <div id="sidebarbg" class="hidden-lg hidden-md hidden-sm hidden-xs"></div>
            <!--Sidebar content-->
            <div id="sidebar" class="page-sidebar hidden-lg hidden-md hidden-sm hidden-xs">
                <div class="shortcuts">
                    <ul>
                        <li><a href="support.html" title="Support section" class="tip"><i class="s24 icomoon-icon-support"></i></a>
                        </li>
                        <li><a href="#" title="Database backup" class="tip"><i class="s24 icomoon-icon-database"></i></a>
                        </li>
                        <li><a href="charts.html" title="Sales statistics" class="tip"><i class="s24 icomoon-icon-pie-2"></i></a>
                        </li>
                        <li><a href="#" title="Write post" class="tip"><i class="s24 icomoon-icon-pencil"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- End search -->
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <div class="sidenav">
                            <div class="sidebar-widget mb0">
                                <h6 class="title mb0">Navigation</h6>
                            </div>
                            <!-- End .sidenav-widget -->
                            <div class="mainnav">
                                <ul>
                                
                                    
                                       <li><a href="index.html"><i class="s16 icomoon-icon-screen-2"></i><span class="txt">Dashboard</span> </a>
                                    </li>

                                     <li><a href="users.html"><i class="s16 icomoon-icon-user"></i><span class="txt">Users</span> </a>
                                    </li>
                                    
                                    <li><a href="Projects.html"><i class="s16 icomoon-icon-menu"></i><span class="txt">Projects</span> </a>
                                    </li>
                    
                                     <li><a href="News.html"><i class="s16 icomoon-icon-newspaper"></i><span class="txt">News</span> </a>
                                    </li>
                    

                                     <li><a href="Testimonals.html"><i class="s16 icomoon-icon-profile"></i><span class="txt">Testimonials</span> </a>
                                    </li>
                     
                                       
                                        <li><a href="Sliders.html"><i class="s16 fa fa-sliders"></i><span class="txt">Sliders</span> </a>
                                    </li>
                    
                                        
                                    
                                    <li><a href="Gallery.html"><i class="s16  icomoon-icon-image"></i><span class="txt">Gallery</span> </a>
                                    </li>
                     
                                    <li><a href="Causes.html"><i class="s16  icomoon-icon-paste-3"></i><span class="txt">Causes</span> </a>
                                    </li> 
                                    
                                        </ul>
                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End sidenav -->
                        <div class="sidebar-widget">
                            <h6 class="title">Monthly Bandwidth Transfer</h6>
                            <div class="content clearfix">
                                <i class="s16 icomoon-icon-loop pull-left mr10"></i>
                                <div class="progress progress-bar-xs pull-left mt5 tip" title="87%">
                                    <div class="progress-bar progress-bar-danger" style="width: 87%;"></div>
                                </div>
                                <span class="percent pull-right">87%</span>
                                <div class="stat">19419.94 / 12000 MB</div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                        <div class="sidebar-widget">
                            <h6 class="title">Disk Space Usage</h6>
                            <div class="content clearfix">
                                <i class="s16  icomoon-icon-storage-2 pull-left mr10"></i>
                                <div class="progress progress-bar-xs pull-left mt5 tip" title="16%">
                                    <div class="progress-bar progress-bar-success" style="width: 16%;"></div>
                                </div>
                                <span class="percent pull-right">16%</span>
                                <div class="stat">304.44 / 8000 MB</div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                        <div class="sidebar-widget">
                            <h6 class="title">Ad sense stats</h6>
                            <div class="content">
                                <div class="stats">
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Advert View</div>
                                        </div>
                                        <i class="s16 icomoon-icon-eye pull-left"></i>
                                        <div class="number">21,501</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-up-2 color-green"></i>
                                            5%
                                        </div>
                                        <span id="stat1" class="spark"></span>
                                    </div>
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Clicks</div>
                                        </div>
                                        <i class="s16 icomoon-icon-thumbs-up pull-left"></i>
                                        <div class="number">308</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-down-2 color-red"></i>
                                            8%
                                        </div>
                                        <span id="stat2" class="spark"></span>
                                    </div>
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Page CTR</div>
                                        </div>
                                        <i class="s16 icomoon-icon-heart pull-left"></i>
                                        <div class="number">4%</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-down-2 color-red"></i>
                                            1%
                                        </div>
                                        <span id="stat3" class="spark"></span>
                                    </div>
                                    <div class="item">
                                        <div class="head clearfix">
                                            <div class="txt">Earn money</div>
                                        </div>
                                        <i class="s16 icomoon-icon-coin pull-left"></i>
                                        <div class="number">$376</div>
                                        <div class="change">
                                            <i class="s24 icomoon-icon-arrow-up-2 color-green"></i>
                                            26%
                                        </div>
                                        <span id="stat4" class="spark"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                        <div class="sidebar-widget">
                            <h6 class="title">Right now</h6>
                            <div class="content">
                                <div class="rightnow">
                                    <ul class="list-unstyled">
                                        <li><span class="number">34</span><i class="s16 icomoon-icon-new"></i>Posts</li>
                                        <li><span class="number">7</span><i class="s16 icomoon-icon-file"></i>Pages</li>
                                        <li><span class="number">14</span><i class="s16 icomoon-icon-list-2"></i>Categories</li>
                                        <li><span class="number">201</span><i class="s16 icomoon-icon-tag"></i>Tags</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End .sidenav-widget -->
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </div>
            <!-- End #sidebar -->
            <!--Sidebar background-->
            <div id="right-sidebarbg" class="hidden-lg hidden-md hidden-sm hidden-xs"></div>
            <!-- Start #right-sidebar -->
            <aside id="right-sidebar" class="right-sidebar hidden-lg hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <div class="pl10 pt10 pr5">
                            <ul class="timeline timeline-icons">
                                <li>
                                    <p>
                                        <a href="#">Jonh Doe</a> attached new <a href="#">file</a>
                                        <span class="timeline-icon"><i class="fa fa-file-text-o"></i></span>
                                        <span class="timeline-date">Dec 10, 22:00</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Admin</a> approved <a href="#">3 new comments</a>
                                        <span class="timeline-icon"><i class="fa fa-comment"></i></span>
                                        <span class="timeline-date">Dec 8, 13:35</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Jonh Smith</a> deposit 300$
                                        <span class="timeline-icon"><i class="fa fa-money color-green"></i></span>
                                        <span class="timeline-date">Dec 6, 10:17</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Serena Williams</a> purchase <a href="#">3 items</a>
                                        <span class="timeline-icon"><i class="fa fa-shopping-cart color-red"></i></span>
                                        <span class="timeline-date">Dec 5, 04:36</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">1 support </a> request is received from <a href="#">Klaudia Chambers</a>
                                        <span class="timeline-icon"><i class="fa fa-life-ring color-gray-light"></i></span>
                                        <span class="timeline-date">Dec 4, 18:40</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        You received 136 new likes for <a href="#">your page</a>
                                        <span class="timeline-icon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                                        <span class="timeline-date">Dec 4, 12:00</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">12 settings </a> are changed from <a href="#">Master Admin</a>
                                        <span class="timeline-icon"><i class="glyphicon glyphicon-cog"></i></span>
                                        <span class="timeline-date">Dec 3, 23:17</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Klaudia Chambers</a> change your photo
                                        <span class="timeline-icon"><i class="icomoon-icon-image-2"></i></span>
                                        <span class="timeline-date">Dec 2, 05:17</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Master server </a> is down for 10 min.
                                        <span class="timeline-icon"><i class="icomoon-icon-database"></i></span>
                                        <span class="timeline-date">Dec 2, 04:56</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">12 links </a> are broken
                                        <span class="timeline-icon"><i class="fa fa-unlink"></i></span>
                                        <span class="timeline-date">Dec 1, 22:13</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Last backup </a> is restored by <a href="#">Master admin</a>
                                        <span class="timeline-icon"><i class="fa fa-undo color-red"></i></span>
                                        <span class="timeline-date">Dec 1, 17:42</span>
                                    </p>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-default timeline-load-more-btn"><i class="fa fa-refresh"></i> Load more </a>
                        </div>
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </aside>
            <!-- End #right-sidebar -->
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
                                    <h4 class="panel-title">Add Users</h4>
                                </div>

                                 <div class="panel-body pt0 pb0">
                                    <form id="validate" class="form-horizontal group-border stripped" role="form">
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">First Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="text" type="text" class="form-control required">
                                            </div>
                                        </div>

                                        <!--<div class="panel-heading">
                                    <h4 class="panel-title">Markdown editor</h4>
                                <div class="panel-controls panel-controls-right"><a href="#" class="panel-refresh"><i class="brocco-icon-refresh s12"></i></a><a href="#" class="toggle panel-minimize"><i class="icomoon-icon-plus"></i></a><a href="#" class="panel-close"><i class="icomoon-icon-close"></i></a></div></div>-->
                                
                                        
                                        
                                        <!-- End .form-group  -->
                                 
                                
                                        <div class="form-group">
                                            <label for="text" class="col-lg-2 col-md-3 control-label">Last Name</label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="text" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-md-3 control-label" for="">Markdown</label>
                                            <div class="col-lg-10 col-md-9">
                                                <div class="md-editor active" id="1467200154638"><div class="md-header btn-toolbar"><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span class="glyphicon glyphicon-bold"></span> </button><button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="glyphicon glyphicon-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="glyphicon glyphicon-header"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="glyphicon glyphicon-link"></span> </button><button class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="glyphicon glyphicon-picture"></span> </button></div><div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="glyphicon glyphicon-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="glyphicon glyphicon-th-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="glyphicon glyphicon-asterisk"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="glyphicon glyphicon-comment"></span> </button></div><div class="btn-group"><button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button" aria-pressed="false"><span class="glyphicon glyphicon-search"></span> Preview</button></div><div class="md-controls"><a class="md-control md-control-fullscreen" href="#"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div><textarea name="content" data-provide="markdown" data-height="250" data-resize="vertical" class="md-input" rows="5" style="height: 208px; resize: vertical; display: block;">                                                    ### Hello there How are you? I have bellow task for you : Select from this text... Click the bold on THIS WORD and make THESE ONE italic Link GOOGLE to google.com Test to insert image (and try to tab after write the image description) Test Preview And
                                                    ending here... Click "List" Enjoy!
                                                </textarea>          <div class="md-fullscreen-controls">            <a href="#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>          </div></div>
                                            </div>
                                           </form>
                                </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button class="btn btn-default ml15" type="submit">Test validation</button>
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
        <script src="plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script>
        <script src="plugins/forms/select2/select2.js"></script>
        <script src="plugins/forms/validation/jquery.validate.js"></script>
        <script src="plugins/forms/validation/additional-methods.min.js"></script>
        <script src="js/jquery.supr.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/forms-validation.js"></script>
    </body>
</html>