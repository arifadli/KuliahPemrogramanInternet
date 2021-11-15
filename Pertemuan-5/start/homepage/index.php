<html lang="en">
<head>
    <title>Rani - sistem peRingatAn diNi akademIk</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />	
	<link href="../../favicon.ico" rel="shortcut icon" />

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- MetisMenu CSS -->
    <link href="../../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Rani - sistem peRingatAn diNi akademIk</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <!-- /.dropdown -->
                <li class="dropdown">
                        <li class="divider"></li>
                        <li><a href="../application/"><i class="fa fa-sign-out fa-fw"></i>Login</a>
                        </li>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
						  <img src="../../images/logo.png" width=120 height=120>
                            
                        </li>
                        <li>
                            <a href="index.php?nav=homedashboard"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-database fa-fw"></i>Data Statistika<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="index.php?nav=homepilih">Evaluasi Tahun 1</a></li>
                                <li><a href="index.php?nav=pilih">Evaluasi Tahun 2</a></li>
								<li><a href="index.php?nav=pilihtahun">Evaluasi Tahun 7</a></li>
								<li><a href="index.php?nav=pilihtaun">Evaluasi Basis Kurikulum</a></li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="index.php?nav=homereport"><i class="fa fa-table fa-fw"></i> Pelaporan</a>
                        </li>

                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
            <?php
            error_reporting(0);
            $nav=$_GET["nav"];
			if($nav=='homedashboard') { include ("homedashboard.php");}
            if($nav=='homepilih') { include ("homepilih.php");}
			if($nav=='pilih') { include ("pilih.php");}
			if($nav=='pilihtahun') { include ("pilihtahun.php");}
			if($nav=='pilihtaun') { include ("pilihtaun.php");}
			if($nav=='evathn1') { include ("evathn1.php");}
			if($nav=='evathn2') { include ("evathn2.php");}
			if($nav=='evathn3') { include ("evathn3.php");}
			if($nav=='evabaskur') { include ("evabaskur.php");}            
            ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php
    if($nav=='homereport1')
    {
        echo '';
    }else
    {
        echo '<script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>';    
    }
    ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../../assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../../assets/dist/js/sb-admin-2.js"></script>


</body>

</html>
