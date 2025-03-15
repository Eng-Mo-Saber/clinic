<?php

$page = isset($_GET['page']) ? $_GET['page'] : "home";

switch ($page) {
    case "home":
        require_once "views/home.php";
        break;
    case "contact":
        require_once "views/contact.php";
        break;
    case "history":
        require_once "views/history.php";
        break;
    case "login":
        require_once "views/login.php";
        break;
    case "majors":
        require_once "views/majors.php";
        break;
    case "register":
        require_once "views/register.php";
        break;
    default:
        require_once "views/404.php"; 
        break;
}