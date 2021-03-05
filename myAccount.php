<?php

    include("functions.php");

    include("viewsAfterLogin/header.php");

    if ($page == 'prof') {
    
    include("viewsAfterLogin/profile.php");
    
    } else if ($page == 'chat') {
                    
        include("viewsAfterLogin/chatroom.php");
    
    } else if ($page == 'genDis') {
                    
        include("viewsAfterLogin/gen_discussion.php");
    
    } else if ($page == 'profedt') {
                    
        include("viewsAfterLogin/edit_profile.php");
    
    } else {
        include("viewsAfterLogin/newsfeed.php");
    }

    include("viewsAfterLogin/footer.php");


?>