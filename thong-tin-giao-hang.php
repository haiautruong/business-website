<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thông tin giao hàng</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
</head>

<body>
    <header class="clear-fix">
        <section class="header">
            <h1 class="hide">Search bar</h1>
            <a href="https://www.facebook.com/groups/1866521173441261/" target="_blank">
                <img src="images/fb_icon(2).png" alt="icon-facebook">
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <img src="images/ins_icon.png" alt="icon-insatagram">
            </a>
            <input class="search-bar" placeholder="Search">

            <a href="gio-hang.php" target="_self">
                <img src="images/cart_icon.png" alt="icon-cart">
            </a>
            <a href="my-account.php" target="_self">
                <img src="images/account_icon.png" alt="icon-account">
            </a>
            <a href="login.php" class="login-text">Đăng nhập</a>
        </section>
        <section class="shop-name">
            <p><a href="trang-chu.php">2GB Shop</a>
            </p>
        </section>
        <nav class="nav-bar">
            <ul class="clear-fix">
                <li><a href="khuyen-mai.php">Khuyến mãi</a>
                </li>
                <li><a href="bestseller.php">Bestseller</a>
                </li>
                <li><a href="trang-diem.php">Trang điểm</a>
                </li>
                <li><a href="cham-soc-da.php">Chăm sóc da</a>
                </li>
                <li><a href="hang-moi-ve.php">Hàng mới về</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main class="main-content">
        <h2 class="hide">Tra cứu đơn hàng</h2>
        <div class="title">
            <p>Thông tin giao hàng</p>
            <hr>
        </div>
        <section class="container">
            <section class="sign-up-login">
                <p>Bạn đã có tài khoản ?</p>
                <a href="login.php">Đăng nhập</a>
            </section>
            <form action="#" method="get" class="info-giao-hang">
               <div class="lb-ip">
                   <label for="email-giao-hang">Email</label>
                    <input type="text" placeholder="Nhập email" name="email-giao-hang">
               </div>
                <div class="lb-ip">
                    <label for="fullname-giao-hang">Họ và tên</label>
                    <input type="text" placeholder="Nhập họ và tên" name="fullname-giao-hang">
                </div>
                <div class="lb-ip">
                    <label for="address-giao-hang">Địa chỉ</label>
                    <input type="text" placeholder="Nhập địa chỉ" name="address-giao-hang">
                </div>
                <div class="lb-ip">
                    <label for="sdt-giao-hang">Số điện thoại</label>
                    <input type="text" placeholder="Nhập số điện thoại nhận hàng">
                </div>
                <div class="lb-ip">
                    <label for="">Ghi chú</label>
                    <input type="text" placeholder="Nhập ghi chú (nếu có)" class="description">
                </div>
                <a href="gio-hang.php" class="come-back-cart">Quay lại giỏ hàng</a>
                <input type="button" value="Tiếp tục phương thức thanh toán">
            </form>
            <section class="don-hang">
                <tabel>
                    <tr>
                        <th>Đơn hàng</th>
                    </tr>
                    <tr>
                        <div>
                            <p class="name-product-giao-hang" id="sp1">Mặt nạ dưỡng da nha đam ahihi :3</p>
                            <p class="txt-quantity">Số lượng:</p>
                            <p id="quantity-gioa-hang-sp1">1</p>
                        </div>
                        <div class="price-giao-hang">500000</div>
                    </tr>
                    <tr>
                        <div>
                            <p>Tạm tính</p>
                            <p>500000</p>
                        </div>
                        <div>
                            <p>Phí vận chuyển</p>
                        </div>
                    </tr>
                </tabel>
            </section>
        </section>
        <aside class="update-promotion">
            <form action="" method="get">
                <h2>Cập nhật thông tin khuyến mãi</h2>
                <input class="ip-mail-km" placeholder="Email Address">
                <button class="btn-confirm">Gửi đăng ký</button>
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
                            <li><a href="our-story.php">Our story</a>
                            </li>
                            <li><a href="contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </section>
                </li>
                <li>
                    <section class="sub-list support">
                        <h3>Trợ giúp</h3>
                        <ul>
                            <li><a href="question-common.php">Các câu hỏi thường gặp</a>
                            </li>
                            <li><a href="help-center.php">Help Center</a>
                            </li>
                        </ul>
                    </section>
                </li>
                <li>
                    <section class="sub-list">
                        <h3>2GBers</h3>
                        <ul>
                            <li><a href="my-account.php">Tài khoản của tôi</a>
                            </li>
                            <li><a href="check-order.php">Tra cứu đơn hàng</a>
                            </li>
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