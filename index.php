<?php

    if (!isset($_GET['m'])) {
        $_GET['m'] = "home";
    } 
    if ($_GET['m'] == "services") {
        require_once "models/sql_services.php";
        // $sql = new SQL_Services;
        $services = $sql->getServiceList();
        $_POST['services'] = $services;
        //print "<pre>"; print_r($services);
        require "views/ui_services.php";
    }
    if ($_GET['m'] == "about") {
        // require_once "models/sql_services.php";
        // // $sql = new SQL_Services;
        // $services = $sql->getServiceList();
        // $_POST['services'] = $services;
        // //print "<pre>"; print_r($services);
        require "views/ui_about.php";
    }
    if($_GET['m'] == "contact"){
        require_once "views/ui_contact.php";
    }
    if($_GET['m'] == "announcements"){
        require "views/ui_announcements.php" ;
    }
    else {
        require "views/ui_home.php";
    }

?>