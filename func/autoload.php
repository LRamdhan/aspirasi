<?php

spl_autoload_register(function($class) {
    require($class . ".php");
});

$auth = new Auth();
$aspirasi = new Aspirasi();
$profile = new Profile();