<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
</head>
<body>
    <header class="clear-fix">
        <section class="header">
            <h1 class="hide">Search bar</h1>
            <a href="https://www.facebook.com/groups/1866521173441261/" target="_blank" ><img src="images/fb_icon(2).png" alt="icon-facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="images/ins_icon.png" alt="icon-insatagram"></a>
            <input class="search-bar" placeholder="Search">

            <a href="gio-hang.php" target="_self"><img src="images/cart_icon.png" alt="icon-cart"></a>
            <a href="my-account.php" target="_self"><img src="images/account_icon.png" alt="icon-account"></a>
            <a href="login.php" class="login-text">Đăng nhập</a>
        </section>
        <section class="shop-name">
            <p><a href="trang-chu.php">2GB Shop</a></p>
        </section>
        <nav class="nav-bar">
            <ul class="clear-fix">
                <li><a href="khuyen-mai.php">Khuyến mãi</a></li>
                <li><a href="bestseller.php">Bestseller</a></li>
                <li><a href="trang-diem.php">Trang điểm</a></li>
                <li><a href="cham-soc-da.php">Chăm sóc da</a></li>
                <li><a href="hang-moi-ve.php">Hàng mới về</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="clear-fix">
       <section class="login clear-fix">
           <h2>Đăng nhập</h2>
           <h4>
           <?php
           //Xử lý đăng nhập
                if (isset($_POST['btn-login'])) 
                {
                    echo dangnhap();
                }
           ?>
           </h4>
           <form action="" method="post" class="info-login">
               <label for="email-login">Email</label>
               <input type="email" id="email-login" name="email-login">
               <label for="pass-login">Mật khẩu</label>
               <input type="password" name="pass-login">
               <ul class="list-login clear-fix">
                   <li id="li-first-login"><a href="quen-pass.php">Quên mật khẩu?</a></li>
                   <li id="li-second-login" ><a href="signup.php">Tạo tài khoản</a></li>
               </ul>
               <button  onclick="JSalert()" class="btn-login clear-fix" name="btn-login">Đăng nhập</button>
           </form>
       </section>
        <aside class="update-promotion clear-fix">
           <form action="" method="get">
               <h2>Cập nhật thông tin khuyến mãi</h2>
            <input class="ip-mail-km" placeholder="Email Address" >
            <button class="btn-confirm" >Gửi đăng ký</button>
           </form>
        </aside>
    </main>
    <footer class="footer clear-fix">
       <section class="f-contact">
           <h2 class="hiden"></h2>
           <ul class="clear-fix">
               <li>
                   <section class="sub-list about">
                       <h3>About</h3>
                       <ul>
                           <li><a href="our-story.php">Our story</a></li>
                           <li><a href="contact-us.php">Contact Us</a></li>
                       </ul>
                   </section>
               </li>
               <li>
                   <section class="sub-list support">
                       <h3>Trợ giúp</h3>
                       <ul>
                           <li><a href="question-common.php">Các câu hỏi thường gặp</a></li>
                           <li><a href="help-center.php">Help Center</a></li>
                       </ul>
                   </section>
               </li>
               <li>
                   <section class="sub-list">
                       <h3>2GBers</h3>
                       <ul>
                           <li><a href="my-account.php">Tài khoản của tôi</a></li>
                           <li><a href="check-order.php">Tra cứu đơn hàng</a></li>
                       </ul>
                   </section>
               </li>
           </ul>
       </section> 
       <section class="copyright clear-fix">
           <hr>
           <p>Copyright @ 2018 2GB Shop</p>
       </section>
    </footer>
</body>
</html>
<?php
    function dangnhap()
    {
        $re = "";
        //Kết nối tới database
        include('config.php');
        
        //Lấy dữ liệu nhập vào
        $email = addslashes($_POST['email-login']);
        $password = addslashes($_POST['pass-login']);
        
        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$email || !$password) {
            $re ="Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            return $re;
        }
        
        // mã hóa pasword
        $password = md5($password);
        
        //Kiểm tra tên đăng nhập có tồn tại không
        $query = mysqli_query($conn,"SELECT email,pass,name FROM t_user WHERE email='$email'");
        if (mysqli_num_rows($query) == 0) {
            $re ="Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            return $re;
        }
        
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);
        
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($password != $row['pass']) {
            $re ="Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            return $re;
        }
        
        //Lưu tên đăng nhập
        $_SESSION['email'] = $email;
        $re ='<script type="text/javascript">
                alert("Đăng nhập thành công !!!");
                window.location.href = "trang-chu.php"
        </script>';
        return $re;
    }
?>
