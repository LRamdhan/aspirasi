<?php

class Database {
    protected $connect;
    public static $path = "/latihan/aspirasi/admin/";
    // public static $path = "/";

    public function __construct() {
        $this->connect = mysqli_connect("localhost", "root", "", "aspirasi");
        // $this->connect = mysqli_connect("sql210.epizy.com", "epiz_33886780", "4crPDjXkU0o4OuJ", "epiz_33886780_aspirasi");
    }
}