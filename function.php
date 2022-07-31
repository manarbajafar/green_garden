<?php
include("connection.php");

function check_signin($con){
    
    if(isset($_SESSION['users_id'])){
        // check if the id is avilble in the database [admin]
        $check_id = $_SESSION['users_id'];
        $check_admin_id_query = "SELECT * FROM admindb WHERE admin_id = '$check_id' limit 1";
        $r = mysqli_query ($con, $check_admin_id_query);        
        $rows = mysqli_num_rows ($r);
        if($r & $rows>0 ){
            $user_data = mysqli_fetch_array ($r);
            mysqli_close($con);
            return  $user_data;
        }
        else{
            // check if the id is avilble in the database [admin]
            $check_cost_id_query = "SELECT * FROM customer WHERE customer_id = '$check_id' limit 1";
            $re = mysqli_query ($con, $check_cost_id_query);        
            $rowss = mysqli_num_rows ($re);
            if($re & $rowss>0 ){
                $user_data = mysqli_fetch_array ($re);
                mysqli_close($con);
                return  $user_data;
            }
        }

    }

    return False ;
}