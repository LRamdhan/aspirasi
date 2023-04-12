<?php

class Auth extends Database {
    public function login($npm, $password) {
        $query = mysqli_query($this->connect, "SELECT password FROM mahasiswa WHERE npm = '$npm'");
        if(!$result = mysqli_fetch_assoc($query)) { return 0; }
        if(password_verify($password, $result["password"])) {
            setcookie("sessionasp", $npm, time() + 60 * 60 * 24, "/");
            $path = Database::$path;
            header("Location: $path" . "page/dashboard.php"); 
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
        header("Location: $path". "page/login.php"); 
        die;
    }
    
    public function checkLogout() {
        if(isset($_COOKIE["sessionasp"])) {
            $cookie = $_COOKIE["sessionasp"];
            $query = mysqli_query($this->connect, "SELECT npm FROM mahasiswa WHERE npm = '$cookie'");
            $path = Database::$path;
            if(mysqli_fetch_assoc($query)) {
                header("Location: $path"); 
                die;
            }
        }
    }

    public function logout() {
        setcookie("sessionasp", "", time() - 3600, "/");
        $path = Database::$path;
        header("Location: $path". "page/login.php"); 
        die;
    }
}