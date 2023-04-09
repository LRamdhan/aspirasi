<?php 

class Profile extends Database {
    public function selectProfile($email) {
        $query = mysqli_query($this->connect, "SELECT nama, kelas, fakultas FROM user WHERE email = '$email'");
        return mysqli_fetch_assoc($query);
    }

    public function updateProfile($email, $nama, $kelas, $fakultas) {
        $query = mysqli_query($this->connect, "UPDATE user SET nama = '$nama', kelas = '$kelas', fakultas = '$fakultas' WHERE email = '$email'");
        return mysqli_affected_rows($this->connect);
    }

    public function dashboard($email) {
        $sql = "SELECT nama FROM user WHERE email = '$email'";
        $query = mysqli_query($this->connect, $sql);
        $nama = mysqli_fetch_assoc($query)["nama"];
        $sql = "SELECT count(judul) AS jumlah FROM aspirasi WHERE email = '$email'";
        $query = mysqli_query($this->connect, $sql);
        $jumlah = mysqli_fetch_assoc($query)["jumlah"];
        $sql = "SELECT id, judul, tanggal FROM aspirasi WHERE email = '$email' ORDER BY waktu DESC LIMIT 1";
        $query = mysqli_query($this->connect, $sql);
        $recent = mysqli_fetch_assoc($query);
        return ["nama" => $nama, "jumlah" => $jumlah, "recent" => $recent];
    }
}