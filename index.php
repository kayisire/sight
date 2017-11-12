<?php
    session_start();
    if(isset($_REQUEST['home'])){
        $online = 'home';
        include_once 'views/home.php';
    } elseif (isset($_REQUEST['categories'])) {
        $online = 'categories';
        include_once 'views/categories.php';
    } elseif (isset($_REQUEST['leaderboards'])) {
        $online = 'leaderboards';
        include_once 'views/leaderboards.php';
    } elseif (isset($_REQUEST['allprofile'])) {
        include_once 'views/allprofile.php';
    } elseif (isset($_REQUEST['addprofile'])) {
        include_once 'views/addprofile.php';
    } elseif (isset($_REQUEST['login'])) {
        include_once 'views/login.php';
    } elseif (isset($_REQUEST['oneprofile'])) {
        include_once 'views/oneprofile.php';
    } else {
        $online = 'home';
        include_once 'views/home.php';
    }