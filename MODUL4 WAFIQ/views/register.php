<?php
session_start();

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
                        <h2 class="text-center mb-3">Register</h2>

                        <!-- (1) Buatlah alert untuk menampilkan pesan error menggunakan session -->
                        <!-- ----------  Letakkan Kode di bawah ini  ----------- -->
                        <?php if(isset($_SESSION['message'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_SESSION['message'] ?>
                        </div>
                        <?php unset($_SESSION['message']);} ?>
                        
                        <!-- **********************  (1)  ********************** -->

                        <form method="post" action="../config/RegisterController.php">
                            <label for="name" class="fw-bold">Name</label>
                            <input type="text" id="name" class="form-control mb-3" name="name" placeholder="Your Name" required>
                            <label for="username" class="fw-bold">Username</label>
                            <input type="text" id="username" class="form-control mb-3" name="username" placeholder="Your Username" required>
                            <label for="email" class="fw-bold">Email</label>
                            <input type="email" id="email" class="form-control mb-3" name="email" placeholder="Your Email" required>
                            <label for="pass" class="fw-bold">Password</label>
                            <input type="password" id="pass" class="form-control mb-3" name="password" placeholder="Your Password" required>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary px-5 w-100">Daftar</button>
                            </div>
                        </form>
                        <div class="mt-3 text-center">Sudah punya akun? <a href="login.php">Login</a></div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
