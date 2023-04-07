<?php

class Aspirasi extends Database {
    public function selectAspirasi($skip = 0, $order = "asc", $status = null) {
        $where = $status ? "WHERE status = '$status'" : "";
        $order = !$order ? "asc" : $order;
        $sql = "SELECT id, judul, tanggal, status FROM aspirasi $where ORDER BY waktu $order LIMIT $skip, 5";
        $query = mysqli_query($this->connect, $sql);
        if(!$query) { return 0; }
        $data = [];
        while($row = mysqli_fetch_assoc($query)) { $data[] = $row; }
        return $data;
    }
}