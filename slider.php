<section class="slider home2">
               
                <div class="container-fuild">
                    <div class="swiper-container mainslider">                            
                        <div class="swiper-wrapper">
                            <?php
                            error_reporting(0);
                            include('dbconfig.php');
                                
                            $sql_product="SELECT * from dl_slider ORDER BY fld_id  DESC";
                            $data_product=mysqli_query($link,$sql_product);
                            $x=0;
                             while($row_product = mysqli_fetch_array($data_product,MYSQLI_ASSOC))  
                              {  
                                $x++;
                                
                          ?>
                            <div class="swiper-slide">
                                <div class="flat-slider">
                                    <div class="sld-img"><img src="admin/<?php echo $row_product['fld_image']; ?>" alt="<?php echo $row_product['slider_text']; ?>"></div>
                                  
                                    <div class="content">
                                        <div class="heading">
                                            <h1><?php echo $row_product['slider_text']; ?></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>   
                            <?php } ?>                     
                        </div>
                    </div>
                </div>
                <div class="button-custom-slider">
                    <div class="swiper-button-next button-slide-custom-next"></div>
                    <div class="swiper-button-prev button-slide-custom-prev"></div>
                </div>
            </section>
