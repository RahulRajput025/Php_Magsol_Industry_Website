                        <?php
                            error_reporting(0);
                            include('admin/dbconfig.php');
                                
                            $sql_details = "SELECT * from tbl_details WHERE details_id = '1'";
                            $data_details = mysqli_query($link,$sql_details);
                             $row_details = mysqli_fetch_array($data_details,MYSQLI_ASSOC);  
                             
                          ?>        
<footer id="footer" class="clearfix">
                    <div id="footer-widgets" class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="widget">
                                    <div class="logo-footer">
                                        <a href="index.php" rel="home" class="main-logo">
                                            <img src="admin/<?php echo $row_details['logo']; ?>" alt="images">
                                        </a>
                                    </div>
                                    <h5 class="text-color-4"><?php echo $row_details['short']; ?> </h5>
                                </div>                              
                            </div>
                            <div class="col-lg-4 col-md-7">
                                <div class="footer-widgets-nav-menu">
                                    <div class="menu-1">
                                        <h3 class="widget-title-link-wrap text-color-1">Explore Links</h3>
                                        <ul class="link-wrap">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="products.php">Products</a></li>
                                            <li><a href="infrastructure.php">Infrastructure</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                       
                                    </div>                    
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5">
                                <div class="menu-2">
                                    <h3 class="widget-title-link-wrap text-color-1">Contact Us</h3>
                                    <ul class="widget-list-contact">
                                        <li class="meta-address text-color-4">
                                         <?php echo $row_details['address']; ?>
                                        </li>
                                        <li class="contact-style link-style-4"><a href="mailto:<?php echo $row_details['email']; ?>"
                                            class="meta-mail"><?php echo $row_details['email']; ?></a>
                                        </li>
                                        <li class="contact-style link-style-4"><a href="tel:<?php echo $row_details['phone_no']; ?>"
                                            class="meta-phone"><?php echo $row_details['phone_no']; ?></a></li>
                                        <li >        
                                            <?php if($row_details['facebook']==''){}else{?>
                                            <li><a href="<?php echo $row_details['facebook']; ?>"><span class="fa fa-facebook"></span></a></li>
                                        <?php } if($row_details['linkedin']==''){}else{?>
                                            <li><a href="<?php echo $row_details['linkedin']; ?>"><span class="fa fa-linkedin"></span></a></li>
                                        <?php } if($row_details['twitter']==''){}else{?>
                                            <li><a href="<?php echo $row_details['twitter']; ?>"><span class="fa fa-twitter"></span></a></li>
                                        <?php } if($row_details['insta']==''){}else{?>
                                            <li><a href="<?php echo $row_details['insta']; ?>"><span class="fa fa-instagram"></span></a></li>
                                        <?php } if($row_details['pinterest']==''){}else{?>
                                            <li><a href="<?php echo $row_details['pinterest']; ?>"><span class="fa fa-pinterest"></span></a></li>
                                        <?php } if($row_details['quora']==''){}else{?>
                                            <li><a href="<?php echo $row_details['quora']; ?>"><span class="fa fa-quora"></span></a></li>
                                        <?php } if($row_details['whatsapp_no']==''){}else{?>
                                            <li><a href="<?php echo $row_details['whatsapp_no']; ?>"><span class="fa fa-whatsapp"></span></a></li>
                                        <?php } if($row_details['youtube']==''){}else{?>
                                            <li><a href="<?php echo $row_details['youtube']; ?>"><span class="fa fa-youtube"></span></a></li>
                                        <?php } ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>               
                </footer><!-- /#footer -->
                
                <div class="widget-social-footer">
                    <div class="container">               
                        <h3>Copywright by <a href="" class="text-color-3">@Impavid</a>.All Rights Reserved.</h3>                               
                    </div>
                </div>