<?php
require_once "Database.php";

class Barang{
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function Insertbarang($nama, $stok, $harga) {
        $sql = "INSERT INTO barang (nama, stok ,harga) VALUES (:nama, :stok, :harga)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindparam(":harga", $harga);
        return $stmt->execute();
    }

    public function Selectbarang() {
        $sql = "SELECT * FROM barang";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Updatecustomer($id_barang, $nama, $stok,$harga) {
        $sql = "UPDATE customer SET nama=:nama, stok=:stok, harga=:harga WHERE id_barang=:id_barang";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindparam(":harga", $harga);
        $stmt->bindParam(":id_customer", $id_barang);
        return $stmt->execute();
    }

    public function Deletecustomer($id_barang) {
        $sql = "DELETE FROM barang WHERE id_barang=:id_barang";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        return $stmt->execute();
    }
}
?>