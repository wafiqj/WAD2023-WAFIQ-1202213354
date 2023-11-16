<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET["id"];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
function update($data) {
    global $conn;

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $nama_mobil = $_POST["nama_mobil"];
        $brand_mobil = $_POST["brand_mobil"];
        $warna_mobil = $_POST["warna_mobil"];
        $tipe_mobil = $_POST["tipe_mobil"];
        $harga_mobil = $_POST["harga_mobil"];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil4
        $query = "UPDATE showroom_mobil SET nama_mobil = '$nama_mobil', brand_mobil = '$brand_mobil', warna_mobil = '$warna_mobil', tipe_mobil = '$tipe_mobil', harga_mobil = '$harga_mobil' WHERE id = '$data'";
        // Eksekusi perintah SQL
        $result = mysqli_query($conn, $query);
        $isSuccess = mysqli_affected_rows($conn);
        // Buatkan kondisi jika eksekusi query berhasil
        if($isSuccess > 0) {
            echo "<script>alert('Data berhasil diupdate!')</script>;";
            echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";

        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        } else {
            echo "<script>alert('Data gagal diupdate!')</script>;";
            echo "<meta http-equiv='refresh' content='1 url=list_mobil.php'>";
        }
}

    // Panggil fungsi update dengan data yang sesuai
update($id);
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>