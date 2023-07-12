<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Magsol | About Us</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

     <!-- Swiper slide -->
     <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <?php include'flaticon.php'; ?>
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>

<body class="header-fixed counter-scroll">

<!-- preloader -->
<div class="preload preload-container">
    <div class="preload-logo"></div>
</div>
<!-- /preloader -->

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <?php include'header.php'; ?>
            <!-- #site-header-wrap -->

            <!-- flat trusted -->
            <section class="tf-space flat-trusted">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-12 col-md-12">
                            <div class="trusted-heading">
                                <h2 class="tf-title">About Us</h2>
                            </div>
                            <?php
                            error_reporting(0);
                            include('dbconfig.php');
                                
                            $sql_about = "SELECT * from tbl_about ORDER BY tbl_about_id   DESC";
                            $data_about = mysqli_query($link,$sql_about);
                             while($row_about = mysqli_fetch_array($data_about,MYSQLI_ASSOC))  
                              {  
                                echo $row_about['cmd'];
                            }
                          ?>   
                            
                        </div>
                    </div>
                </div>
            </section>


                 <!-- Footer -->
                 <?php include'footer.php'; ?>
        
                </div>
                <!-- /#page -->
            </div>
            <a id="scroll-top"></a>
    <!-- /#wrapper -->

     <!-- Javascript -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/countto.js"></script>
     <script src="assets/js/wow.min.js"></script>
     <script src="assets/js/main.js"></script>
     <script src="assets/js/shortcodes.js"></script>
     <script src="assets/js/jquery.easing.js"></script>
     <script src="assets/js/jquery.fancybox.js"></script>
     <script src="assets/js/plugin.js"></script>
 
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

</body>


</html>