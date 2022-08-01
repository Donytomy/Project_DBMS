<?php
    include "connection.php";

    error_reporting(0);
    session_start();
    
    echo "Welcome Server";
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['username'];
        $pass = $_POST['password'];
        
        
        $sql = "SELECT * FROM `login` WHERE login_email = '$name'";
        //if(!empty($name) && !empty($pass)) {    
            $result = mysqli_query($conn, $sql);
            $result_arr = mysqli_fetch_array($result);
            $login_name = $result_arr["login_email"];
            $login_pass = $result_arr["login_password"];
        
              if(strcmp($login_pass,$pass)==0) {
                
                    header("location: /Project_DBMS-main/miniproject_DBMS/Dashboard.html");
                
               
            }
        //     else {
        //         // Password Error
        //         // $offset[1] = -1;
        //         // header("location: admin_dashboard.php?offset=".http_build_query($offset));
        //     }
        //}
    }
?>