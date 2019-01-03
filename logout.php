<?php
    session_start();
    if (isset($_SESSION['email']))
    {
        unset($_SESSION['email']);
        session_destroy();
        echo '<script type="text/javascript">
        alert("Đăng xuất thành công !!!");
        window.location.href = "trang-chu.php"
        </script>';
    }
    
?>