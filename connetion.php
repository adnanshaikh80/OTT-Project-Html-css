<?php      
    $host = "http://127.0.0.1:5500/login.html";  
    $user = "adnanshaik";  
    $password = '123';  
    $db_name = "netflixlogin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 