<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>
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
        <section class="container">
            <h2 class="hide">Thanh toán</h2>
            <div class="title">
                <p>Thanh toán</p>
                <hr>
            </div>
            <section class="phuong-thuc">
                <section class="van-chuyen">
                    <h3>Phương thức vận chuyển</h3>
                    <div>
                        <ul>
                            <li>
                                <lable class="lbl-container">Giao hàng thông thường
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </lable>
                                <p class="price-ship">30,000</p>
                            </li>
                            <li>
                                <label class="lbl-container">
                                    Giao hàng ưu đãi (Đăng nhập để nhận ưu đãi)
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <p class="price-ship">20,000</p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="pay">
                    <h3>Phương thức thanh toán</h3>
                    <div>
                        <ul>
                            <li>
                                <label class="lbl-container">
                                    Thanh toán khi nhận hàng (COD) tại TP Hồ Chí Minh
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lbl-container">
                                    Thanh toán khi nhận hàng (COD) tại các tỉnh khác
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </label>

                            </li>
                            <li>
                                <label class="lbl-container">
                                    Chuyển khoản trước qua ngân hàng
                                    <input type="radio" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <a href="thong-tin-giao-hang.php" class="come-back-cart">&lt;&lt; Quay lại thông tin giao hàng</a>
                    <input type="button" value="Hoàn tất đơn hàng" id="btn-end-don-hang">
                </section>
            </section>
            <section class="don-hang">
                <table border="1">
                    <tr>
                        <th>Đơn hàng</th>
                    </tr>
                    <tr>
                        <td class="a-row clear-fix">
                            <div>
                                <p class="name-product-giao-hang first first" id="sp1">Mặt nạ dưỡng da nha đam ahihi :3</p>
                                <p class="second">500000</p>
                            </div>
                            <div class="clear-fix">
                                <p class="txt-quantity">Số lượng:</p>
                                <p id="quantity-gioa-hang-sp1">1</p>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="a-row">
                            <div>
                                <p class="first">Tạm tính</p>
                                <p class="second">500000</p>
                            </div>
                            <div class="clear-fix">
                                <p>Phí vận chuyển</p>
                            </div>
                        </td>
                    </tr>
                </table>
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