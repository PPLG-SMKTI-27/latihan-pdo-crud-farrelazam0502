<?php
require_once "barang.php";

$barang= new Barang();

$barang->Insertbarang("shinzui", "7", "14000");

// $data = $barang->Selectbarang();
// foreach ($data as $row) {
//     echo $row['id_barang'] . $row['nama'] . $row['stok'] . $row['harga'];
// }

// $barang->Updatebarang(8, "nuvo", "1", "10000");

// $barang->Deletebarang(7);
?>