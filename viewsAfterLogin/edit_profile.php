<?php
    $edit = isset($_GET['f']) ? $_GET['f'] : '';

?>

<div id="page-contents">
    <div class="container">
        <div class="row">

            <div style="margin-top: 10px;" class="col-md-12 static">
                <div class="profile-card">
                    <img style="height: 100px; width: 100px;" src="http://placehold.it/300x300" alt="user" class="profile-photo" />
                    <h4><a href="" class="text-white"><?php echo $user['first_name']." ".$user['last_name'] ?></a></h4>
                    <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> Student ID: <?php echo $user['roll_no'];?></a>
                </div><!--chat block ends-->

                <div class="timeline-cover">

                    <!--Timeline Menu for Large Screens-->
                    <div class="timeline-nav-bar hidden-sm hidden-xs">
                      
                        <div class="col-md-12">
                          <ul class="list-inline profile-menu">
                            <li><a href="timeline.html">Academic Calendar</a></li>
                            <li><a href="timeline-about.html" class="active">Date Sheets</a></li>
                            <li><a href="timeline-album.html">Time Table</a></li>
                            <li><a href="timeline-friends.html">Results</a></li>
                          </ul>
                        </div>
                      </div>
                    </div><!--Timeline Menu for Large Screens End-->
          
                </div>

                <div style="padding-top: 0px;" id="page-contents">
                    <div class="row">
                        <div class="col-md-3">
                        
                        <!--Edit Profile Menu-->
                        <ul class="edit-menu toggle">
                            <li class="active"><i class="icon ion-ios-information-outline"></i><a href="?p=profedt&f=bsic">Basic Information</a></li>
                            <li><i class="icon ion-ios-briefcase-outline"></i><a href="?p=profedt&f=edndwrk">Education and Work</a></li>
                            <li><i class="icon ion-ios-heart-outline"></i><a href="?p=profedt&f=intndskl">My Interests and Skills</a></li>
                            <li><i class="icon ion-ios-settings"></i><a href="">Account Settings</a></li>
                            <li><i class="icon ion-ios-locked-outline"></i><a href="?p=profedt&f=chngpas">Change Password</a></li>
                        </ul>
                        </div>
                        <div class="col-md-7">

                            <?php
                            
                                if($page == "profedt"){
                                    if($edit == "bsic"){
                                        include("viewsAfterLogin/edit_profie_basic.php");
                                    } else if($edit == "edndwrk"){
                                        include("viewsAfterLogin/edit_profile_work_edu.php");
                                    } else if($edit == "intndskl"){
                                        include("viewsAfterLogin/edit_profie_intrest_skill.php");
                                    } else if($edit == "chngpas"){
                                        include("viewsAfterLogin/edit_profile_password.php");
                                    } else {
                                        include("viewsAfterLogin/edit_profie_basic.php");
                                    }
                                }
                            
                            ?>

                        <div class="col-md-2 static">
                        
                        <!--Sticky Timeline Activity Sidebar-->
                        <div id="sticky-sidebar">
                            <h4 class="grey">Sarah's activity</h4>
                            <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                                <p class="text-muted">5 mins ago</p>
                            </div>
                            </div>
                            <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                                <p class="text-muted">an hour ago</p>
                            </div>
                            </div>
                            <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                                <p class="text-muted">4 hours ago</p>
                            </div>
                            </div>
                            <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                                <p class="text-muted">a day ago</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

            </div>

        </div>
    </div>
</div>

<?php

    if(isset($_POST['save'])){

        
    }

?>