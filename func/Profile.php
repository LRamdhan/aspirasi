<?php 

class Profile extends Database {
    public function selectProfile($npm) {
        $query = mysqli_query($this->connect, "SELECT npm, nama, kelas, fakultas FROM mahasiswa WHERE npm = '$npm'");
        return mysqli_fetch_assoc($query);
    }

    public function updateProfile($npm, $nama, $kelas, $fakultas) {
        $query = mysqli_query($this->connect, "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', fakultas = '$fakultas' WHERE npm = '$npm'");
        return mysqli_affected_rows($this->connect);
    }

    public function dashboard($npm) {
        $sql = "SELECT nama FROM mahasiswa WHERE npm = '$npm'";
        $query = mysqli_query($this->connect, $sql);
        $nama = mysqli_fetch_assoc($query)["nama"];
        $sql = "SELECT count(judul) AS jumlah FROM aspirasi WHERE npm = '$npm'";
        $query = mysqli_query($this->connect, $sql);
        $jumlah = mysqli_fetch_assoc($query)["jumlah"];
        $sql = "SELECT id, judul, tanggal FROM aspirasi WHERE npm = '$npm' ORDER BY waktu DESC LIMIT 1";
        $query = mysqli_query($this->connect, $sql);
        $recent = mysqli_fetch_assoc($query);
        return ["nama" => $nama, "jumlah" => $jumlah, "recent" => $recent];
    }

    public function editPassword($currentPassword, $newPassword) {
        $cookie = $_COOKIE["sessionasp"];
        $query = mysqli_query($this->connect, "SELECT password FROM mahasiswa WHERE npm = '$cookie'");
        $password = mysqli_fetch_assoc($query)["password"];
        if(password_verify($currentPassword, $password)) {
            $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            mysqli_query($this->connect, "UPDATE mahasiswa SET password = '$newPassword' WHERE npm = '$cookie'");
            return mysqli_affected_rows($this->connect);
        }
        return 0;
    }
}