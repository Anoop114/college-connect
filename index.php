<?php

    include("functions.php");

    if($session_id){
        header("Location: http://localhost/college_connect/myAccount.php");
    } else {

        include("viewsBeforeLogin/header.php");

        include("viewsBeforeLogin/login_register.php");

        include("viewsBeforeLogin/footer.php");

    }

?>