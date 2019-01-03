<?php include_once("commons.php"); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quên mật khẩu</title>
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
            <a href="my-account.php" target="_self" id="btn-myacc" ><img src="images/account_icon.png" alt="icon-account"></a>
            <a href="login.php" class="login-text" id="btn-login">Đăng nhập</a>
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
           <h2>Quên mật khẩu?</h2>
           <form action="" method="get" class="info-login">
               <label for="email-login">Email *</label>
               <input type="email" id="email-login" name="email-quen-pass">
               <label for="pass-login">Mật khẩu mới *</label>
               <input type="password" name="pass-quen-pass">
               <label for="pass-login">Nhập lại mật khẩu mới *</label>
               <input type="password" name="retype-pass-quen-pass">
               <button class="btn-login clear-fix" name="btn-save-quen-pass">Lưu thay đổi</button>
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
</html><?php include_once("login-logout-process.php"); ?>