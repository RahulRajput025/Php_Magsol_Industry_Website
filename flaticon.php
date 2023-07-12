<?php
                            error_reporting(0);
                            include('admin/dbconfig.php');
                                
                            $sql_details = "SELECT * from tbl_details WHERE details_id = '1'";
                            $data_details = mysqli_query($link,$sql_details);
                             $row_details = mysqli_fetch_array($data_details,MYSQLI_ASSOC);  
                             
                          ?>

                          <link rel="shortcut icon" type="image/x-icon" href="admin/<?php echo $row_details['logo'] ?>">
        <link href="admin/<?php echo $row_details['logo'] ?>" rel="shortcut icon" type="image/png">
        <link href="admin/<?php echo $row_details['logo'] ?>" rel="apple-touch-icon">
        <link href="admin/<?php echo $row_details['logo'] ?>" rel="apple-touch-icon" sizes="72x72">
        <link href="admin/<?php echo $row_details['logo'] ?>" rel="apple-touch-icon" sizes="114x114">
        <link href="admin/<?php echo $row_details['logo'] ?>" rel="apple-touch-icon" sizes="144x144">