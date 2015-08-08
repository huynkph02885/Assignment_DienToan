<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Điện toán đám mây-Assighment</title>
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/jquery.datetimepicker.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/jquery.datetimepicker.js"></script>
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
            
            <!-- /.navbar-header -->
            <?php $this->widget('TopBar')?>
            
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
            <?php $this->widget('LeftBar')?>
        </nav>

        <div id="page-wrapper" style="min-height: 231px;">
            
            <!-- /.row -->
            <?php $this->widget('BreadCrumbs')?>
            <!-- /.row -->
            
            <!-- /.row -->
            <?php echo $content?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/dist/js/sb-admin-2.js"></script>




</body></html>