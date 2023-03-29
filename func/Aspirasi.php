<?php

class Aspirasi extends Database {
    public function select($page, $direction = "desc") {
        $email = $_COOKIE["sessionasp"];
        $q = "SELECT id, judul, tanggal, status FROM aspirasi WHERE email = '$email' order by waktu $direction LIMIT 5";
        if($page > 1) { 
            $page *= 5;
            $q .= ", $page"; 
        }
        $query = mysqli_query($this->connect, $q);
        $data = [];
        while($result = mysqli_fetch_assoc($query)) { $data[] = $result; }
        return $data;
    }

    public function insertAspirasi($judul, $deskripsi) {
        if(strlen($judul) === 0 || strlen($deskripsi) === 0) { return 0; }
        $image = $_FILES["gambar"];
        $imageName = "";
        if($image["error"] === 0) { 
            $split = explode(".", $image["name"]);
            $imageName = uniqid() . "." . end($split);
            move_uploaded_file($image["tmp_name"], "../img/" . $imageName);
        }
        $email = $_COOKIE["sessionasp"];
        mysqli_query($this->connect, "INSERT INTO aspirasi(email, judul, deskripsi, gambar) VALUES ('$email', '$judul', '$deskripsi', '$imageName')");
        if(mysqli_affected_rows($this->connect) !== 1) { return 0; }
        $path = Database::$path;
        header("Location: $path"); 
        die;
    }

    public function selectDetailAspirasi($id) {
        $query = mysqli_query($this->connect, "SELECT * FROM aspirasi WHERE id = $id");
        $row = mysqli_fetch_assoc($query);
        if(!$row) { return 0; }
        return $row;
    }
}