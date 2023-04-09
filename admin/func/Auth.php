<?php

class Auth extends Database {
    public function login($username, $password) {
        $query = mysqli_query($this->connect, "SELECT password FROM admin WHERE username = '$username'");
        if(!$result = mysqli_fetch_assoc($query)) { return 0; }
        if($result["password"] === $password) {
            setcookie("aspadm", $username, time() + 60 * 60 * 24, "/");
            $path = Database::$path;
            header("Location: $path" . "page/dashboard.php"); 
            die;
        }
        return 0;
    }

    public function logout() {
        setcookie("aspadm", "", time() - 3600, "/");
        $path = Database::$path;
        header("Location: $path". "page/login.php"); 
        die;
    }

    public function checkLogout() {
        if(isset($_COOKIE["aspadm"])) {
            $cookie = $_COOKIE["aspadm"];
            $query = mysqli_query($this->connect, "SELECT username FROM admin WHERE username = '$cookie'");
            $path = Database::$path;
            if(mysqli_fetch_assoc($query)) {
                header("Location: $path"); 
                die;
            }
        }
    }

    public function checkLogin() {
        if(isset($_COOKIE["aspadm"])) {
            $cookie = $_COOKIE["aspadm"];
            $query = mysqli_query($this->connect, "SELECT username FROM admin WHERE username = '$cookie'");
            if(mysqli_fetch_assoc($query)) { return; }
        }
        $path = Database::$path;
        header("Location: $path". "page/login.php"); 
        die;
    }
    
}