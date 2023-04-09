<?php

class Aspirasi extends Database {
    public function selectAspirasi($skip = 0, $order = "asc", $status = null) {
        $where = $status ? "AND status = '$status'" : "";
        $order = !$order ? "asc" : $order;
        $sql = "SELECT aspirasi.id, aspirasi.judul, user.fakultas, aspirasi.tanggal, aspirasi.status FROM aspirasi, user WHERE aspirasi.email = user.email $where ORDER BY waktu $order LIMIT $skip, 5";
        $query = mysqli_query($this->connect, $sql);
        if(!$query) { return ["error" => true]; }
        $data = [];
        while($row = mysqli_fetch_assoc($query)) { $data[] = $row; }
        return $data;
    }

    public function selectDetailAspirasi($id) {
        $sql = "SELECT  user.nama, user.kelas, user.fakultas, aspirasi.judul, aspirasi.deskripsi, aspirasi.tanggal, aspirasi.status, aspirasi.gambar, aspirasi.pesan FROM aspirasi, user WHERE aspirasi.id = $id AND user.email = aspirasi.email;
        ";
        $query = mysqli_query($this->connect, $sql);
        if(!$query) { return []; }
        return mysqli_fetch_assoc($query);
    }

    public function updateStatusAspirasi($id, $status, $pesan) {
        $sql = "UPDATE aspirasi SET status = '$status', pesan = '$pesan' WHERE id = $id";
        mysqli_query($this->connect, $sql); 
        return mysqli_affected_rows($this->connect);
    }

    public function selectJumlah() {
        $sql = "SELECT count(judul) as 'terkirim' FROM aspirasi WHERE status = 'terkirim'";
        $query = mysqli_query($this->connect, $sql);
        $terkirim = mysqli_fetch_assoc($query);
        $sql = "SELECT count(judul) as 'diproses' FROM aspirasi WHERE status = 'diproses'";
        $query = mysqli_query($this->connect, $sql);
        $diproses = mysqli_fetch_assoc($query);
        return ["terkirim" => $terkirim["terkirim"], "diproses" => $diproses["diproses"]];
    }

    public function selectAdmin($username) {
        $query = mysqli_query($this->connect, "SELECT username FROM admin WHERE username = '$username'");
        return mysqli_fetch_assoc($query);
    }
}