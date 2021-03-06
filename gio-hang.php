<?php include_once("commons.php"); ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
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
            <a href="my-account.php" target="_self" id='btn-myacc'>
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

        <section class="list-product-cart container clear-fix">
            <h2 class="hide">Giỏ hàng</h2>
            <div class="title">
                <p>Giỏ hàng</p>
                <hr>
            </div>
            <table border="1" class="table-cart">
                <tr class="col-name-cart">
                    <th id="col-name-product-cart">Sản phẩm</th>
                    <th id="col-price-cart">Giá</th>
                    <th id="col-quantity-cart">Số lượng</th>
                    <th id="col-total-cart">Thành tiền</th>
                    <th id="col-delete-cart">Xóa</th>
                </tr>
                <?php
                    $total_price = 0;
                    // url trang hiện tại
                    $current_url = base64_encode($_SERVER['REQUEST_URI']);
                    if (isset($_SESSION['cart']))
                    {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            echo '<tr class="a-row-item">';
                            echo '<td>';
                            echo '<div class="product-cart clear-fix">';
                            echo '<a href="thong-tin-chi-tiet-san-pham.php">';
                            echo '<img src="'.$value['image_link'].'" alt="anh-minh-hoa" class="img-item-cart clear-fix" name="delete-cart">';
                            echo '</a>';
                            echo '<a href="thong-tin-chi-tiet-san-pham.php?id='.$value['id'].'">';
                            echo '<p class="name-item-cart">'.$value['name'].'</p>';
                            echo '</a>';
                            echo '</div>';
                            echo '</td>';
                            echo '<td>'.number_format($value['price'], 0).'</td>';
                            echo '<td>';
                            echo '<a href="cart-update.php?type=add&qty=-1&id='.$value['id'].'&url='.$current_url.'">';
                            echo '<img src="images/arrow-dow.PNG" alt="decreses" class="arrow-incre">';
                            echo '</a>';
                            echo '<label class="number-product-cart">'.$value['qty'].'</label>';
                            echo '<a href="cart-update.php?type=add&qty=1&id='.$value['id'].'&url='.$current_url.'">';
                            echo '<img src="images/arrow-up.PNG" alt="increase" class="arrow-decre">';
                            echo '</a>';
                            echo '</td>';
                            echo '<td>'.number_format($value['price']*$value['qty'],0).'</td>';
                            echo '<td>';
                            echo '<a href="cart-update.php?type=rm&id='.$value['id'].'&url='.$current_url.'">';
                            echo '<img src="images/remove-icon.png" alt="icon-remove" class="remove-icon-cart">';
                            echo '</a>';
                            echo '</td>';
                            echo '</tr>';
                            $total_price += $value['price']*$value['qty'];
                        }
                    }
                    else
                    {
                        echo '<tr class="a-row-item" height="100">';
                        echo '<td>';
                        echo '</td>';
                        echo '<td>';
                        echo '</td>';
                        echo '<td>';
                        echo '</td>';
                        echo '<td>';
                        echo '</td>';
                        echo '<td>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
            <section class="clear-fix container-total-cart">
                <p id="txt-total-cart" class="clear-fix">Tổng tiền:</p>
                <p id="total-cart" class="clear-fix"><?php echo  number_format($total_price,0); ?></p>
            </section>
            <section class="clear-fix container-btn-pay">
                <a href="thong-tin-giao-hang.php"><input type="button" value="Thanh toán" class="btn-pay-cart"></a>
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

</html><?php include_once("login-logout-process.php"); ?>