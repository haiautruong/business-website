<?php
    include_once("commons.php");
    if (isset($_SESSION['email']))
    {
        // Nút đăng nhập
        echo "<script>document.getElementById('btn-login').text = 'Đăng xuất';document.getElementById('btn-login').href='logout.php';</script>";
    }
    else
    {
        // Ẩn tài khoản
        echo "<script>document.getElementById('btn-myacc').style.display = 'none';</script>";
    }
?>