<?php

use Database\DatabaseManger;
use Database\MigrationManager;

session_start();

 require "../inc/header.php";
 require "../inc/nav.php";
 require_once "../vendor/autoload.php";
 
 
DatabaseManger::initialize();
MigrationManager::runMigrations();
 
 
 require_once "../routes/web.php";

 
 require "../inc/footer.php";