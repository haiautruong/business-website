<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2GB - Hướng dẫn thay đổi hoặc hủy đơn hàng</title>
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
        <h2 class="hidden">Chi tiết đơn hàng</h2>
        <div class="title">
            <p>Đơn hàng <b>#1</b> đã được đặt lúc <b>Tháng Mười Hai 31, 2018</b> và hiện tại là <b>Tạm giữ</b></p>
            <hr>
        </div>
        <section class="faq-plain-text">
            <p class="page-main-content">
                <b>THÔNG TIN ĐƠN HÀNG</b>
            </p>
            <table class="order-detail">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Thành tiền</th>
                </tr>
                <tr>
                    <td>Son kem lì Black Rouge</td>
                    <td>139000</td>
                </tr>
                <tr>
                    <td>Nước tẩy trang Bioderma</td>
                    <td>450000</td>
                </tr>
                <tr>
                    <td><b>Tổng cộng:</b></td>
                    <td class="total-payment">589000</td>
                </tr>
                <tr>
                    <td><b>Giao nhận hàng:</b></td>
                    <td>Miễn phí giao hàng</td>
                </tr>
                <tr>
                    <td><b>Phương thức thanh toán:</b></td>
                    <td>Chuyển khoản ngân hàng</td>
                </tr>
                <tr>
                    <td><b>TỔNG CỘNG:</b></td>
                    <td class="total-payment">589000</td>
                </tr>
            </table>
            <p>
                <b>THÔNG TIN NHẬN HÀNG VÀ THANH TOÁN</b>
            </p>
            <P>Phan Thanh Bảo Châu</P>
            <p>31 Trần Bình Trọng</p>
            <p>Quận 5</p>
            <p>Thành phố Hồ Chí Minh</p>
            <p>0707565362</p>
            <p>joo291998@gmail.com</p>
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
<?php include_once("login-logout-process.php"); ?>