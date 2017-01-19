<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mars</title>
    <!-- Bootstrap -->
    link href="<?php bloginfo('template_url')?>/css/lib/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>"/>
    <script src="<?php bloginfo('template_url')?>/js/lib/jquery-3.1.1.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/lib/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/lib/menu/pushy.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/main.js"></script>

</head>
<body>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <ul>
        <!-- Submenu -->
        <li class="pushy-submenu">
            <a href="#">Choose the robot</a>
            <ul>
                <li class="pushy-link"><a href="#">Angry robot</a></li>
                <li class="pushy-link"><a href="#">Dancing robot</a></li>
                <li class="pushy-link"><a href="#">Normal robot</a></li>
            </ul>
        </li>
        <li class="pushy-link"><a href="#">Our features</a></li>
        <li class="pushy-link"><a href="#">Find robot</a></li>
    </ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!--  Content -->
<div id="container">
    <!-----------------------INTRO-SECTION----------------->

    <section class="intro">
        <!---------------------HEADER--------------------------->
        <header class="main-header">
            <div class="container">
                <div class="flex-header">
                    <div class="flex-left">
                        <a href="#" class="logo">
                            <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
                            <span class="small-circle">circle</span>
                            <h1>Mars</h1>
                        </a>
                        <p><span class="phone-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>+48 604 300 500</p>
                    </div>
                    <div class="flex-right">
                        <button class="buy-btn">
                            <span class="text-btn">Buy now</span>
                        </button>

                        <nav   class="header-nav">
                            <button class="menu menu-btn">menu</button>
                        </nav>

                    </div>
                </div>
            </div>
        </header>