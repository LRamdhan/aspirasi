<?php

// disable cors
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: *");

// disable cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

spl_autoload_register(function($class) { require($class . ".php"); });

$auth = new Auth();
$aspirasi = new Aspirasi();
$profile = new Profile();