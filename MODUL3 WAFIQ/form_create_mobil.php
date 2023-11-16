<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container mt-4">
            <h1>Tambah Mobil</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_mobil" id="nama_mobil">
                                <label for="nama_mobil">Nama Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="brand_mobil" id="brand_mobil">
                                <label for="brand_mobil">Brand Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="warna_mobil" id="warna_mobil">
                                <label for="warna_mobil">Warna Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="tipe_mobil" id="tipe_mobil">
                                <label for="tipe_mobil">Tipe Mobil</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="harga_mobil" id="harga_mobil">
                                <label for="harga_mobil">Harga Mobil</label>
                            </div>
                            <button type="submit" name="create" id="create" class="btn btn-primary mb-3 mt-3 w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <center>
</body>
</html>
