<?php include_once("commons.php"); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2GB - Hướng dẫn tra cứu đơn hàng</title>
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
        <h2 class="hidden">Hướng dẫn tra cứu đơn hàng</h2>
        <div class="title">
            <p>Hướng dẫn tra cứu đơn hàng</p>
            <hr>
        </div>
        <section class="faq-plain-text">
            <p>
                <b>1. Vào mục Tra cứu đơn hàng</b>
            </p>
            <p>
                Bấm vào biểu tượng <b>Tài khoản của tôi</b> ở góc trên bên phải trang web : 
            </p>
            <ul>
                <li>
                    <p>
                        Nếu đơn hàng mới của bạn được hiển thị là <b>Tạm giữ hàng</b>, điều này có nghĩa là đơn hàng của bạn vẫn chưa được giao cho bên vận chuyển. 
                    </p>
                    <img src="images/stored-scr.png" alt="stored-scr">
                </li>
                <li>
                    <p>
                        Nếu đơn hàng mới của bạn được hiển thị là <b></b>, điều này có nghĩa là đơn hàng của bạn vẫn chưa được giao cho bên vận chuyển. Lúc này, bạn vào mục <b>Tra cứu đơn hàng</b> ở góc dưới bên phải màn hình, bạn sẽ được hiển thị thông tin về đơn hàng đang được giao của bạn, bao gồm mã vận đơn. Bạn hãy sao chép mã này.
                    </p>
                    <img src="images/shipping-code-scr.png" alt="shipping-code-scr">
                </li>
            </ul>
            <p>
                <b>2. Vào trang chủ của VNPost</b>
            </p>
            <p>
                Sau đó, bạn vào trang <b>http://www.vnpost.vn/vi-vn/</b>, chọn mục <b>Tra cứu - Định vị</b> ở bên trái menu chính, dán mã vận đơn bạn vừa sao chép vào ô <b>Nhập mã bưu gửi</b>, lúc này bẹn sẽ được hiển thị đường đi của đơn hàng của bạn.
            </p>
            <img src="images/vnpost-scr.png" alt="vnpost-scr">
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