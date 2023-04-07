<?php

class Auth extends Database {
    public function register($email, $password, $nama, $kelas, $fakultas) {
        $email = explode( "@", $email);
        if(strlen($email[0]) !== 12 || !is_numeric($email[0]) || $email[1] !== "student.unsap.ac.id") { return 0; }
        $email[1] = "@" . $email[1];
        $email = join("", $email);
        if(strlen($password) > 16) { return 0; }
        $password = password_hash($password, PASSWORD_DEFAULT);
        switch(0) {
            case strlen($nama) : 
            case strlen($kelas) : 
            case strlen($fakultas) : 
            return 0;
        }
        $query = "INSERT INTO user VALUES ('$email', '$password', '$nama', '$kelas', '$fakultas')";
        mysqli_query($this->connect, $query);
        $affect = mysqli_affected_rows($this->connect);
        if($affect === 1) {
            setcookie("sessionasp", $email, time() + 60 * 60 * 24, "/");
            $path = Database::$path;
            header("Location: $path" . "page/user/dashboard.php"); 
            die;
        }
        return $affect;
    }

    public function login($email, $password) {
        $email = explode( "@", $email);
        if(strlen($email[0]) !== 12 || !is_numeric($email[0]) || $email[1] !== "student.unsap.ac.id") { return 0; }
        $email[1] = "@" . $email[1];
        $email = join("", $email);
        $query = mysqli_query($this->connect, "SELECT password FROM user WHERE email = '$email'");
        if(!$result = mysqli_fetch_assoc($query)) { return 0; }
        if(password_verify($password, $result["password"])) {
            setcookie("sessionasp", $email, time() + 60 * 60 * 24, "/");
            $path = Database::$path;
            header("Location: $path" . "page/user/dashboard.php"); 
            die;
        }
        return 0;
    }

    public function checkLogin() {
        if(isset($_COOKIE["sessionasp"])) {
            $cookie = $_COOKIE["sessionasp"];
            $query = mysqli_query($this->connect, "SELECT email FROM user WHERE email = '$cookie'");
            if(mysqli_fetch_assoc($query)) { return; }
        }
        $path = Database::$path;
        header("Location: $path". "page/user/login.php"); 
        die;
    }
    
    public function checkLogout() {
        if(isset($_COOKIE["sessionasp"])) {
            $cookie = $_COOKIE["sessionasp"];
            $query = mysqli_query($this->connect, "SELECT email FROM user WHERE email = '$cookie'");
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
        header("Location: $path". "page/user/login.php"); 
        die;
    }
}