<?php

$page = isset($_GET['page']) ? $_GET['page'] : "home";

switch ($page) {
    case "home":
        require "../views/home.php";
        break;
    case "contact":
        require "../views/contact.php";
        break;
    case "history":
        require "views/history.php";
        break;
    case "login":
        require "../views/login.php";
        break;
    case "majors":
        require "../views/majors.php";
        break;
    case "register":
        require "../views/register.php";
        break;
    case "doctor":
        require "../views/doctors/doctor.php";
        break;
    case "reservation":
        require "../views/doctors/reservation.php";
        break;
    case "logout":
        require "../controlle/logout.php";
        break;
    // default:
    //     require "views/404.php"; 
    //     break;
}