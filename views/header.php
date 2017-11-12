<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Genesis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/colors/green.css" id="colors">
</head>

<body>
    <div id="wrapper">
        <header class="transparent sticky-header">
            <div class="container">
                <div class="sixteen columns">
                    <div id="logo">
                        <!-- <h1><a href="#">Logo Here</a></h1> -->
                    </div>
                    <nav id="navigation" class="menu">
                        <ul id="responsive">
                            <li><a href="?home" id="<?php if($online == 'home'){ echo 'current';}?>">Home</a></li>
                            <li><a href="?categories" id="<?php if($online == 'categories'){ echo 'current';}?>">Categories</a></li>
                            <li><a href="?leaderboards" id="<?php if($online == 'leaderboard'){ echo 'current';}?>">Leaderboards</a></li>
                        </ul>
                        <ul class="float-right">
                            <li><a href="?login"><i class="fa fa-lock"></i> Log In</a></li>
                            <li><a href="?addprofile"><i class="fa fa-user"></i> Create Profile</a></li>
                        </ul>
                    </nav>
                    <div id="mobile-navigation">
                        <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
                    </div>
                </div>
            </div>
        </header>