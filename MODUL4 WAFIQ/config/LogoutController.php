<?php 

// (1) Hapus cookie dengan key id 
setcookie("id", $data['id'], time() - 3600, "/WAD2023-WAFIQ-1202213354/MODUL4%20WAFIQ/views");
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;

?>