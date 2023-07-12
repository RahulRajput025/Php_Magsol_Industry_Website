
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Magsol | Products</title>

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

            <div class="tf-space flat-blog flat-blog-details">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-12 col-md-12"> 
                            <?php
                                error_reporting(0);
                                include('admin/dbconfig.php');
                                                            
                                $sql = "SELECT * from tbl_blog ORDER BY fld_blog_id DESC";
                                $data = mysqli_query($link,$sql);
                                while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))  
                                {  
                                                           
                            ?>                 
                                
                            <div class="blog-wrap flat-blog-grid">                             
                                <div class="grid-post post-2">
                                    <div class="media">
                                        <img src="admin/<?php echo $row['fld_photos']; ?>" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="meta link-style-3 font">                          
                                        </div>
                                        <h3 class="title-item"><a href="product-details.php?view=<?php echo $row["fld_blog_name"];?>"><?php echo $row['fld_blog_name']; ?></a></h3>
                                        <p><?php echo $row['fld_short']; ?></p>
                                        <div class="read-more link-style-5">
                                            <a href="product-details.php?view=<?php echo $row["fld_blog_name"];?>" class="readmore">Read More</a>
                                        </div>
                                    </div>
                                </div>                                                                                          
                            </div>  
                        <?php } ?>

                                <!-- <div class="themesflat-pagination clearfix">
                                    <ul>
                                        <li><a href="#" class="page-numbers prev-style">Prev</a></li>
                                        <li><a href="#" class="page-numbers">1</a></li>
                                        <li><a href="#" class="page-numbers current">2</a></li>
                                        <li><a href="#" class="page-numbers">3</a></li>
                                        <li><a href="#" class="page-numbers next-style">Next</a></li>
                                    </ul>
                                </div>      -->                                                                                                                    
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