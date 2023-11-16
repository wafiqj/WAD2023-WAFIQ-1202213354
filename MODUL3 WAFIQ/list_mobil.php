<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container mt-4">
            <h1>List Mobil</h1>

            <table class="table table-hover table-bordered mt-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Brand Mobil</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Harga Mobil</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = "SELECT * FROM showroom_mobil";
            $result = mysqli_query($conn, $query);
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            if($result) {
                if(mysqli_num_rows($result) > 0) {
                    while($data_mobil = mysqli_fetch_assoc($result)) {
            ?>
                <tr class="text-center">
                    <th scope="row"><?= $data_mobil["id"] ?></th>
                    <td><?= $data_mobil["nama_mobil"] ?></td>
                    <td><?= $data_mobil["brand_mobil"] ?></td>
                    <td><?= $data_mobil["warna_mobil"] ?></td>
                    <td><?= $data_mobil["tipe_mobil"] ?></td>
                    <td><?= $data_mobil["harga_mobil"] ?></td>
                    <td>
                        <a href="form_detail_mobil.php?id=<?= $data_mobil["id"] ?>" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
            <?php
                    }

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
                } else {
            ?>
                <tr class="text-center">
                    <td colspan="7">Barang belum tersedia</td>
                </tr>
            <?php
                }
            }

            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
