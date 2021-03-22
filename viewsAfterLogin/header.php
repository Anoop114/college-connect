<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Welcome to College-Connect</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>

    <style >

      body {
        margin-bottom: 0px;
        height: 100%;
      }

    </style>

	</head>
	<body>

      <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="background: linear-gradient(to right, #b432e7 , #eb4545);">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="?p=news"><h3 style="color: #FFFFFF; margin-top: 0; font-weight: bold;">College-Connect</h3></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MAIL <span><img style="margin-left: 2px;" src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.html">Timeline</a></li>

                </ul>
              </li>
              <li>
                  <div class="user-area dropdown float-right">
                      
                      <a href="?p=prof" class="dropdown-toggle active" data-toggle="dropdown">
                            <img class="user-avatar rounded-circle" style="width: 40px; height: 40px; border: 1px solid #00C292; border-radius: 50%; margin-top: 7px;" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg">   
                            </a>

                      <div class="user-menu dropdown-menu">

                        <a class="nav-link" href="?p=prof"><i class="fa fa-user"></i>My Profile</a>

                          <div class="text-center"><a href="?function=logout" class="btn btn-danger ">Logout</a></div>

                      </div>
                  </div>  
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->


<?php

    $query = "SELECT * FROM users WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";

    $result = mysqli_query($link, $query);

    $user = mysqli_fetch_assoc($result);


?>