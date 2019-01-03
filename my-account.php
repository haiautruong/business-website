<?php include_once("commons.php"); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tài khoản của tôi</title>
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
            <a href="login.php" class="login-text" id="btn-login">Đăng nhập</a>
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
            <h2 class="hidden">Tài khoản của tôi</h2>
            <div class="title">
                <p>Tài khoản của tôi</p>
                <hr>
            </div>
             <form action="" method="post" class="info-my-account clear-fix">
               <section class="clear-fix">
                   <fieldset class="information-my-account clear-fix">
                    <legend>
                        Thông tin tài khoản
                    </legend>
                    <p>
                        <label for="fullname-my-account">Họ và tên</label>
                        <input type="text" name="fullname-my-account">
                    </p>
                    <p>
                        <label for="email-my-account">Địa chỉ email</label>
                        <input type="email" name="email-my-account">
                    </p>
                    <p>
                        <label for="phone-number-my-account">Số điện thoại</label>
                        <input type="tel" name="phone-number-my-account">
                    </p>
                </fieldset>
                <fieldset class="change-pw-my-account">
                    <legend>
                        Thay đổi mật khẩu
                    </legend>
                    <p>
                        <label for="password-my-account">Mật khẩu hiện tại (Bỏ trống nếu không đổi)</label>
                        <input type="password" name="password-my-account">
                    </p>
                    <p>
                        <label for="new-passowrd-my-account">Mật khẩu mới (Bỏ trống nếu không đổi)</label>
                        <input type="password" name="new-password-my-account">
                    </p>
                    <p>
                        <label for="re-new-password-number-my-account">Nhập lại mật khẩu mới (Bỏ trống nếu không đổi)</label>
                        <input type="password" name="re-new-password-number-my-account">
                    </p>
                </fieldset>
               </section>
                <section>
                    <fieldset class="address-my-account">
                    <legend>
                        Địa chỉ nhận hàng
                    </legend>
                    <p>
                        <label for="nation-my-account">Quốc gia</label>
                        <input type="text" name="nation-my-account">
                    </p>
                    <p>
                        <label for="country-my-account">Tỉnh/Thành phố</label>
                        <input type="text" name="country-my-account">
                    </p>
                    <p>
                        <label for="district-my-account">Quận/Huyện</label>
                        <input type="text" name="district-my-account">
                    </p>
                    <p>
                        <label for="address-my-account">Địa chỉ (Số nhà + Tên đường)</label>
                        <input type="text" name="address-my-account">
                    </p>
                </fieldset>
                </section>
                <button class="btn-save" name="btn-save">Lưu thay đổi</button>
            </form>
        </section>
        <fieldset class="order-history">
            <legend>
                Lịch sử mua hàng
            </legend>
            <table border="1" class="table-order">
                <tr class="col-name-order">
                    <th id="col-order-id-my-account">Mã đơn hàng</th>
                    <th id="col-date-my-account">Ngày đặt hàng</th>
                    <th id="col-status-my-account">Tình trạng</th>
                    <th id="col-totally-paid-my-account">Tổng</th>
                    <th id="col-view-my-account">Thao tác</th>
                </tr>
                <tr class="a-row-item-my-account">
                    <td><a href="#" target="_self">#2</a></td>
                    <td>02/01/2019</td>
                    <td>Đã gửi hàng</td>
                    <td>258000</td>
                    <td>
                        <button class="btn-view">Xem chi tiết</button>
                    </td>
                </tr>
                <tr class="another-row-item-my-account">
                    <td><a href="#" target="_self">#1</a></td>
                    <td>31/12/2018</td>
                    <td>Đã phát hàng</td>
                    <td>209000</td>
                    <td>
                        <button class="btn-view">Xem chi tiết</button>
                    </td>
                </tr>
            </table>
            </fieldset>
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

</html><?php include_once("login-logout-process.php"); ?>