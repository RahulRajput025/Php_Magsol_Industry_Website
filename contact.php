<?php
error_reporting(0);
include('admin/dbconfig.php');

if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
        
     $sql = "INSERT INTO tbl_contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
        
         $data=mysqli_query($link,$sql);
        if($data){
                $suc='<div class="alert alert-success">
        <strong>Success! </strong> Thank you for submitting the form. We will contact you shortly.
        </div>';
        
        $from = $_POST["email"];
        $to = "info@saachijapan.com";
$fromName = 'Magsol'; 
$subject = "Thank you for contacting Magsol"; 
$htmlContent = ' 
    <html> 
    <head> 
    </head> 
    <body> 
        <p>Dear Mam/Sir,</p>
        <p>
        Thank you for contacting Magsol</p>
        <table>
        <tr>
        <td>Name</td>
        <td>'.$_POST['name'].'</td>
        </tr>
        <tr>
        <td>Email</td>
        <td>'.$_POST['email'].'</td>
        </tr>
        <tr>
        <td>Phone</td>
        <td>'.$_POST['phone'].'</td>
        </tr>
        <tr>
        <td>Message</td>
        <td>'.$_POST['message'].'</td>
        </tr>
        </table>
        

*Please do not reply to this e-mail.*</p>
      
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
  //  echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}

 $from = "info@saachijapan.com";
        $to =  $_POST["email"];
$fromName = 'Magsol'; 
$subject = "Thank you for contacting Magsol"; 
$htmlContent = ' 
    <html> 
    <head> 
    </head> 
    <body> 
        <p>Dear Mam/Sir,</p>
        <p>
        Thank you for contacting Magsol</p>
        <table>
        <tr>
        <td>Name</td>
        <td>'.$_POST['name'].'</td>
        </tr>
        <tr>
        <td>Email</td>
        <td>'.$_POST['email'].'</td>
        </tr>
        <tr>
        <td>Phone</td>
        <td>'.$_POST['phone'].'</td>
        </tr>
        <tr>
        <td>Message</td>
        <td>'.$_POST['message'].'</td>
        </tr>
        </table>
        

*Please do not reply to this e-mail.*</p>
      
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
  //  echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}


        }
        else{
            
          /* $err='<div class="alert alert-danger">
                    <strong>Error!</strong> Please fill the details currectly.
                </div>';*/
        }

   
 }
mysqli_close($link);

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Magsol | Contact Us</title>

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

            <section class="tf-map">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner">
                                <iframe 
                                class="map-content"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                error_reporting(0);
                include('admin/dbconfig.php');
                                
                $sql_details = "SELECT * from tbl_details WHERE details_id = '1'";
                $data_details = mysqli_query($link,$sql_details);
                $row_details = mysqli_fetch_array($data_details,MYSQLI_ASSOC);  
                             
            ?> 

            <section class="flat-contact flat-blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="box">
                                <div class="heading">
                                    <div class="sub-title-contact">Hi! Let’s Talk Our Companey</div>
                                    <p><?php echo $row_details['address']; ?></p>
                                </div> 
                                <ul class="contact">
                                    <li class="link-style-3">Email: <a href="mailto:<?php echo $row_details['email']; ?>" class="meta-mail"><?php echo $row_details['email']; ?></a></li>
                                    <li class="link-style-3">Phone: <a href="tel:<?php echo $row_details['phone_no']; ?>" class="meta-phone"><?php echo $row_details['phone_no']; ?></a></li>
                                </ul>                              
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="post">
                                <div id="respond" class="respond-comment">
                                    <h2 class="title-comment">good <span class="text-color-3">[Contacts]</span></h2>

                                    <form method="post" id="contactform" class="comment-form form-submit"
                                        action="" accept-charset="utf-8"
                                        novalidate="novalidate" metod="post">                                      
                                        <div class="text-wrap clearfix">
                                            <fieldset class="name-wrap style-text">
                                                <input type="text" id="name" class="tb-my-input" name="name"
                                                    tabindex="1" placeholder="Enter Full Name" value="" size="32"
                                                    aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email-wrap style-text">
                                                <input type="email" id="email" class="tb-my-input" name="email"
                                                    tabindex="2" placeholder="Enter Your Email Address" value="" size="32"
                                                    aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="phone-wrap style-text">
                                                <input type="tel" id="phone" class="tb-my-input" name="phone"
                                                    tabindex="1" placeholder="+55 (121) 234 444" value="" size="32"
                                                    aria-required="true" required="">
                                            </fieldset>
                                           
                                        </div>
                                        <fieldset class="message-wrap">
                                            <textarea id="comment-message" name="message" rows="8" tabindex="4"
                                                placeholder="Enter Your Message"
                                                aria-required="true"></textarea>
                                        </fieldset>
                                        <button name="submit" type="submit" id="comment-reply"
                                            class="button btn-style4 btn-submit-comment"><span>Submit Now </span></button>
                                    </form>
                                </div>
                                
                            </div>
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
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/jquery-validate.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

</body>


</html>