<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

// This Script Compiles all the pages - simply include them here
// Include Base VarPage class once
include("include/VarPage.class.php");
include("include/globals.php");

// List of Pages to Compile
/*
include ('index.php');
include ('contact.php');
include ('history.php');
include ('locations.php');
include ('catering.php');
include ('press.php');

include ('locations_lakeforest.php');
include ('locations_missionviejo.php');
include ('locations_foothillranch.php');
include ('locations_alisoviejo.php');
include ('locations_irvine.php');


*/
include ('news.php');

?>