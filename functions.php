<?php

    //session_start();

    $page = isset($_GET['page']) ? $_GET['page'] : '';
    $function = isset($_GET['function']) ? $_GET['function'] : '';
    $session_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';

    $link = mysqli_connect("localhost", "root", "", "CC");

    if (mysqli_connect_errno()) {
        
        print_r(mysqli_connect_error());
        exit();
        
    }
    
    // if ($function == "logout") {
        
    //     session_unset();
    //     header("Location: http://localhost/go-earn/");
    //     exit();
        
    // }
    

?>