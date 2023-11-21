<?php
include './koneksi.php';

$id = mysqli_real_escape_string($db, $_POST['id']);
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$tanggal = mysqli_real_escape_string($db, $_POST['tanggal']);
$makan = mysqli_real_escape_string($db, $_POST['makan']);
$transportasi = mysqli_real_escape_string($db, $_POST['transportasi']);
$belanja = mysqli_real_escape_string($db, $_POST['belanja']);

$query = "INSERT INTO nisa_pengeluaran (id, nama, tanggal, makan, transportasi, belanja) VALUES ('$id', '$nama', '$tanggal', '$makan', '$transportasi', '$belanja')";

if (mysqli_query($db, $query)) {
    echo "<script>alert('Data berhasil ditambahkan');</script>";
    echo "<script>window.location='./index.php'</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
?>
