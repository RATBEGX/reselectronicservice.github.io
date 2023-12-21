<?php
session_start();

// menghapus semua data session
session_unset();
// memusnahkan session
session_destroy();

// redirect ke halaman login
header('Location: login.php');
die();
?>