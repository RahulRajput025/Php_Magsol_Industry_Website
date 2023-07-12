<div id="site-header-wrap">
            <!-- Header Wrap -->
                        <?php
                            error_reporting(0);
                            include('admin/dbconfig.php');
                                
                            $sql_details = "SELECT * from tbl_details WHERE details_id = '1'";
                            $data_details = mysqli_query($link,$sql_details);
                             $row_details = mysqli_fetch_array($data_details,MYSQLI_ASSOC);  
                             
                          ?>               
                <header id="site-header" class="header-style2">
                    <div class="container">
                        <div class="row">                          
                            <div class=" col-lg-3 col-sm-9">
                                <div id="site-logo" class="clearfix logo-home2">
                                    <div id="site-log-inner">
                                        <a href="index.php" rel="home" class="main-logo">
                                            <img src="admin/<?php echo $row_details['logo']; ?>" alt="Magsol" width="150" height="40" data-retina="admin/<?php echo $row_details['logo']; ?>" data-width="96" data-height="26">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- /.mobile-button -->
                            <!-- /#site-logo -->
                            <div class=" col-lg-9 col-sm-3">
                                <div class="mobile-button home2">
                                    <span></span>
                                </div>
                                <div id="site-header-inner" class="style-2">
                                    <div class="wrap-inner home2 clearfix">
                                        <nav id="main-nav" class="main-nav ">
                                            <ul id="menu-primary-menu" class="menu">
                                               <li class="menu-item">
                                                    <a href="index.php">Home</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="about-us.php">About Us </a>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="products.php">Products</a>
                                                    <ul class="sub-menu">
                                                        <?php
                                                        error_reporting(0);
                                                        include('admin/dbconfig.php');
                                                            
                                                        $sql = "SELECT * from tbl_blog ORDER BY fld_blog_id DESC";
                                                        $data = mysqli_query($link,$sql);
                                                         while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))  
                                                          {  
                                                           
                                                        ?>
                                                        <li class="menu-item"><a href="product-details.php?view=<?php echo $row["fld_blog_name"];?>"><?php echo $row['fld_blog_name']; ?></a></li>
                                                        <?php } ?>                                      
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="infrastructure.php">Infrastructure</a>
                                                </li>
                                             
                                                <li class="menu-item">
                                                    <a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- /#main-nav -->
                                    </div>
                                    <!-- /.wrap-inner -->
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <!-- /#site-header-inner -->               
                </header>
                <!-- /#site-header -->
            </div>