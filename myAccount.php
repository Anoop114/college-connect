<?php

    include("functions.php");

    if(!$session_id){
        header("Location: http://localhost/college_connect/");
    } else {

        include("viewsAfterLogin/header.php");

        if ($page == 'prof') {
        
        include("viewsAfterLogin/profile.php");
        
        } else if ($page == 'chat') {
                        
            include("viewsAfterLogin/chatroom.php");
        
        } else if ($page == 'genDis') {
                        
            include("viewsAfterLogin/gen_discussion.php");
        
        } else if ($page == 'profedt') {
                        
            include("viewsAfterLogin/edit_profile.php");
        
        } else if ($page == 'news') {
                        
            include("viewsAfterLogin/newsfeed.php");
        
        } else {
            include("viewsAfterLogin/newsfeed.php");
        }

        include("viewsAfterLogin/footer.php");

    }


?>