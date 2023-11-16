<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET["id"];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
$query = "DELETE FROM showroom_mobil WHERE id = '$id'";
$result = mysqli_query($conn, $query);

    // (4) Buatkan perkondisi jika eksekusi query berhasil
$isSuccess = mysqli_affected_rows($conn);
    // Buatkan kondisi jika eksekusi query berhasil
if($isSuccess > 0) {
    echo "<script>alert('Data berhasil dihapus!')</script>;";
    echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";

    // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
} else {
    echo "<script>alert('Data gagal dihapus!')</script>;";
    echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
}
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>