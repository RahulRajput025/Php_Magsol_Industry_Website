<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Business & Digital Agency HTML Template</title>

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

<body class="header-fixed">

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
            <div class="tf-space flat-blog-details flat-service-details flat-journey flat-and">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <article class="post">
                                <div class="inner-content grid-post">
                                    <?php
                                        error_reporting(0);
                                        include('admin/dbconfig.php');
                                        $fld_blog_name = $_GET['view'];
                                        $sql = "SELECT * from tbl_blog WHERE fld_blog_name = '$fld_blog_name'";
                                        $data = mysqli_query($link,$sql);
                                        $row = mysqli_fetch_array($data,MYSQLI_ASSOC);  

                                    ?>
                                    <h2 class="title"><?php echo $row['fld_blog_name']; ?></h2>
                                    <div class="media img-01">
                                        <img src="admin/<?php echo $row['fld_photos']; ?>" alt="images">                                      
                                    </div>
                                    
                                    
                                    <p class="text"><?php echo $row['fld_long']; ?></p>
                                   
                                    
                                                                 
                                 </div>                                                              
                            </article>        
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <aside class="side-bar">
                                <div class="inner-side-bar">                                       
                                   
                                    <div class="widget widget-categories"> 
                                        <div class="widget-title item">
                                            <h3>Services List</h3>  
                                        </div>                                                                                                                        
                                        <ul>
                                            <?php
                                                        error_reporting(0);
                                                        include('admin/dbconfig.php');
                                                            
                                                        $sql = "SELECT * from tbl_blog ORDER BY fld_blog_id DESC";
                                                        $data = mysqli_query($link,$sql);
                                                         while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))  
                                                          {  
                                                           
                                                        ?>
                                                        <li><a href="product-details.php?view=<?php echo $row['fld_blog_name'];?>"><?php echo $row['fld_blog_name']; ?></a></li>
                                                        <?php } ?>       
                                        </ul>
                                    </div>                                    
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            
            
                 <!-- Footer -->
                <?php include'footer.php'; ?>
        
                </div>
                <!-- /#page -->
            </div>
            <a id="scroll-top"></a>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/plugin.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

</body>


</html>