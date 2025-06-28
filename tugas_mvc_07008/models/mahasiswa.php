<?php
require_once 'config.php';

class StudentModel {
    public function fetchAll() {
        global $conn;
        $query = "SELECT * FROM mahasiswa01 ORDER BY id DESC";
        $result = $conn->query($query);
        $data = [];
        while ($item = $result->fetch_assoc()) {
            $data[] = $item;
        }
        return $data;
    }

    public function insert($name, $idNumber) {
        global $conn;
        $query = "INSERT INTO mahasiswa01 (nama, nim) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $name, $idNumber);
        $stmt->execute();
        $stmt->close();
    }

    public function remove($id) {
        global $conn;
        $query = "DELETE FROM mahasiswa01 WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function findById($id) {
        global $conn;
        $query = "SELECT * FROM mahasiswa01 WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $stmt->close();
        return $data;
    }

    public function modify($id, $name, $idNumber) {
        global $conn;
        $query = "UPDATE mahasiswa01 SET nama = ?, nim = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssi", $name, $idNumber, $id);
        $stmt->execute();
        $stmt->close();
    }
}
?>
