<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LMS - ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
             
                <a class="navbar-brand" href="dashboard.php" style="font-size:2em;">LIBRARY MANAGEMENT SYSTEM</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bars fa-2x fa-fw"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw fa-spin"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav text-center" id="side-menu">
                        
                        <li>
                         <h4>   <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></h4>
                        </li>
                      
                       
                       
                        <li>
                         <h4>   <a href="overall_stat.php"><i class="fa fa-wrench fa-fw"></i> Statistics</a></h4>
                         
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                          <h4> <a href="lend_book.php"><i class="fa fa-book fa-fw"></i> Lend Book</a></h4>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                          <h4> <a href="return_book.php"><i class="fa fa-reply-all fa-fw"></i> Return Book</a></h4>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                          <h4> <a href="stat.php"><i class="fa fa-user fa-fw"></i> User Info</a></h4>
                           
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <a href="lend_book.php"><div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-center">
                                    
                                    <div><h3>Lend Book</h3></div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                    </a>
                </div>
              <a href="stat.php">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-center">
                                    
                                    <div><h3>User Status</h3></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
               </a> 
               <a href="return_book.php">
                <div class="col-lg-3 col-md-6 ">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-upload fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-center">
                                    
                                    <div><h3>Return Book</h3></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </a>
                <a href="overall_stat.php">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-center">
                                    
                                    <div><h3>Statistics</h3></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                </a>
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
              <div class="row">
                <div class="col-lg-12">
                    <?php include('statistics.php');?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
