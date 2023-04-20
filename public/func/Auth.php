<?php

class Auth extends Database {
    public function login($npm, $password) {
        $query = mysqli_query($this->connect, "SELECT password FROM mahasiswa WHERE npm = '$npm'");
        if(!$result = mysqli_fetch_assoc($query)) { return 0; }
        if(password_verify($password, $result["password"])) {
            setcookie("sessionasp", $npm, time() + 60 * 60 * 24, "/");
            return 1;
            die;
        }
        return 0;
    }

    public function checkLogin() {
        if(isset($_COOKIE["sessionasp"])) {
            $cookie = $_COOKIE["sessionasp"];
            $query = mysqli_query($this->connect, "SELECT npm FROM mahasiswa WHERE npm = '$cookie'");
            if(mysqli_fetch_assoc($query)) { return; }
        }
        $path = Database::$path;
        header("Location: $path"); 
        die;
    }
    
    public function checkLogout() {
        if(isset($_COOKIE["sessionasp"])) {
            $cookie = $_COOKIE["sessionasp"];
            $query = mysqli_query($this->connect, "SELECT npm FROM mahasiswa WHERE npm = '$cookie'");
            if(mysqli_fetch_assoc($query)) { return 0; }
        }
        return 1;
    }

    public function logout() {
        setcookie("sessionasp", "", time() - 3600, "/");
        $path = Database::$path;
        header("Location: $path"); 
        die;
    }
}