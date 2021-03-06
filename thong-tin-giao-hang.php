<?php include_once("commons.php"); ?><!DOCTYPE html>
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
            <a href="my-account.php" target="_self" id="btn-myacc">
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
    <?php
        if(!isset($_SESSION['cart']))
        {
            echo '<script type="text/javascript">
            alert("Bạn chưa có gì ở giỏ hàng !!!");
            window.location.href = "trang-chu.php"
            </script>';
            exit();
        }
        
    ?>
    <main class="main-content">
        <h2 class="hide">Tra cứu đơn hàng</h2>
        <div class="title">
            <p>Thông tin giao hàng</p>
            <hr>
        </div>
        <section class="container">
            <section class="info-giao-hang">
                <section class="sign-up-login clear-fix" id='login-question'>
                    <p>Bạn đã có tài khoản ?</p>
                    <a href="login.php" id="to-login">Đăng nhập</a>
                </section>
                <form action="checkout.php" method="post" class="info-form-giao-hang clear-fix">
                    <input type="hidden" name="step" value="1" />
                    <div class="lb-ip">
                        <label for="email-giao-hang">Email</label>
                        <input name='email' type="text" placeholder="Nhập email" id="email-giao-hang">
                    </div>
                    <div class="lb-ip">
                        <label for="fullname-giao-hang">Họ và tên</label>
                        <input name='name' type="text" placeholder="Nhập họ và tên" id="fullname-giao-hang">
                    </div>
                    <div class="lb-ip">
                        <label for="address-giao-hang">Địa chỉ</label>
                        <input name='address' type="text" placeholder="Nhập địa chỉ" id="address-giao-hang">
                    </div>
                    <div class="lb-ip">
                        <label for="sdt-giao-hang">Số điện thoại</label>
                        <input name='phonenumber' type="text" placeholder="Nhập số điện thoại nhận hàng" id="phone-giao-hang">
                    </div>
                    <div class="lb-ip">
                        <label for="">Ghi chú</label>
                        <input name='note' type="text" placeholder="Nhập ghi chú (nếu có)" maxlength="200" class="description">
                    </div>
                    <a href="gio-hang.php" class="come-back-cart">&lt;&lt; Quay lại giỏ hàng</a>
                    <input type="submit" value="Tiếp tục phương thức thanh toán" id="btn-continue">
                </form>
            </section>
            <section class="don-hang">
                <table border="1">
                    <tr>
                        <th>Đơn hàng</th>
                    </tr>
                    <?php
                    $total_price = 50000;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        echo '<tr>';
                        echo '<td class="a-row clear-fix">';
                        echo '<div>';
                        echo '<p class="name-product-giao-hang first first" id="sp1">'.$value['name'].'</p>';
                        echo '<p class="second">'.number_format($value['price']*$value['qty'], 0).'</p>';
                        echo '</div>';
                        echo '<div class="clear-fix">';
                        echo '<p class="txt-quantity">Số lượng:</p>';
                        echo '<p id="quantity-gioa-hang-sp1">'.$value['qty'].'</p>';
                        echo '</div>';
                        echo '';
                        echo '</td>';
                        echo '</tr>';
                        $total_price += $value['price']*$value['qty'];
                    }
                    ?>
                    <tr>
                        <td class="a-row">
                            <div>
                                <p  class="first">Tạm tính</p>
                                <p class="second">30,000</p>
                            </div>
                            <div class="clear-fix">
                                <p>Phí vận chuyển</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="a-row">
                            <div>
                                <p  class="first">Tổng tiền</p>
                                <p class="second"><?php echo number_format($total_price,0) ?></p>
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
<?php include_once("login-logout-process.php"); ?>
<?php 
    if (isset($_SESSION['email']))
    {
            $sql = "SELECT name, email, addr FROM t_user WHERE email='".$_SESSION['email']."'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);
            echo '<script>';
            echo 'document.getElementById("email-giao-hang").value ="'.$row['email'].'";';
            echo 'document.getElementById("fullname-giao-hang").value ="'.$row['name'].'";';
            if ($row['addr'])
            {
                echo 'document.getElementById("address-giao-hang").value ="'.$row['addr'].'";';
            }
            echo '</script>';
    }
?>
