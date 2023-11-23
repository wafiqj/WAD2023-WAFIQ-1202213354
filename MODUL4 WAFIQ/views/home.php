<?php

session_start();

require '../config/connect.php';

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

// (1) Buat variabel untuk menampung id user berdasarkan session dengan key id
$id = $_SESSION['id'];
//     Kemudian lakukan query untuk mencari id user menggunakan variabel yang sudah dibuat
$query = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $query);
// 

// (2) Buatlah perkondisian ketika id ditemukan ( gunakan mysqli_num_rows == 1 )
if (mysqli_num_rows($result) == 1) {


    // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc dalam variabel $data
    $data = mysqli_fetch_assoc($result);
    // 

//
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShowRoom Mobil EAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary py-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 me-auto mb-2 mb-lg-0 justify-content-between">
                    <div class="d-md-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tambah Mobil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lihat Mobil</a>
                        </li>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $data["username"] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="../config/LogoutController.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex min-vh-100 justify-content-center align-items-center">
        <div class="text-center">

        <h1 class="mb-3">👋 Hello, <?= $data["name"] ?></h1>
        <h1 class="mb-5">Selamat datang di Showroom Mobil!</h1>
    
        <form action="../config/LogoutController.php" method="post">
            <button type="submit" class="btn btn-danger" name="logout">Logout</button>
        </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>