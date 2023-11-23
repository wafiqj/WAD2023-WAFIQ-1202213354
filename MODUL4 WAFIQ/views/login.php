<?php

session_start();

require '../config/LoginController.php';

if (isset($_COOKIE['id'])) {
    rememberMe($_COOKIE);
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    login($_POST);
}

if (isset($_SESSION['login'])) {
    header("Location: home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ShowRoom Mobil EAD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <div class="container">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="card px-5 py-5">
                        <div class="w-100 text-center mb-5">
                            <img class="" style="max-width: 200px;" src="../assets/logo-ead.png">
                        </div>

                        <!-- (1) Buat alert message menggunakan variabel session yang sudah dibuat -->
                        <!-- ----------  Letakkan Kode di bawah ini  ----------- -->
                        <?php if(isset($_SESSION['message']) and isset($_SESSION['color'])) { ?>
                            <div class="alert alert-<?= $_SESSION['color'] ?>" role="alert">
                                <?= $_SESSION['message'] ?>
                            </div>
                        <?php unset($_SESSION['message']);} ?>
                        <!-- **********************  (1)  ********************** -->
                        
                        <form method="post" action="">
                            <label for="email" class="fw-bold">Email</label>
                            <input type="email" id="email" class="form-control mb-3" name="email" placeholder="Email" required>
                            <label for="pass" class="fw-bold">Password</label>
                            <input type="password" id="pass" class="form-control mb-3" name="password" placeholder="Password" required>
                            <input type="checkbox" id="check" class="form-check-input" name="remember">
                            <label class="form-check-label" for="check">Remember me</label>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary px-5 w-100">Login</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">Belum punya akun? <a href="register.php">Daftar</a></div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>