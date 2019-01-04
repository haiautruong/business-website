<?php include_once("commons.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
</head>
<?php
// url trang hiện tại
$url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$validURL = str_replace("&", "&amp", $url);
?>


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
        <section class="items-form">
           <h2 class="hide">Deals đang diễn ra</h2>
            <fieldset class="deals">
            <?php
                $sql = "SELECT name, price, image_link, id FROM t_product ORDER BY RAND() LIMIT 3";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
            ?>
                <legend>Deals đang diễn ra</legend>
                <p class="see-more-home clear-fix"><a href="khuyen-mai.php" class="see-more-home">Xem thêm &gt;&gt;</a></p>
                <ul class="list-product-home clear-fix">
                    <?php
                    for ($i=0; $i < 3; $i++) { 
                        if ($row)
                        {
                            echo '<li>';
                            echo    '<div>';
                            echo        '<a href="thong-tin-chi-tiet-san-pham.php?id='.strval($row['id']).'">';
                            echo        '<img src="'.$row["image_link"].'" alt="anh-minh-hoa" class="img-illustrate-home">';
                            echo        '</a>';
                            echo        '<p class="name-product-make-up">'.$row["name"].'</p>';
                            echo        '<p class="price-make-up">'.number_format($row["price"],0).'</p>';
                            echo        '<a href="cart-update.php?type=add&qty=1&id='.strval($row['id']).'&url='.$current_url.'">';
                            echo        '<button name="btn-add-checkout" class="btn-add-cart-home">Thêm vào giỏ hàng</button>';
                            echo        '</a>';
                            echo    '</div>';
                            echo'</li>';
                        }
                        $row = mysqli_fetch_array($query);
                    }
                    ?>
                </ul>
            </fieldset>
        </section>
        <section class="items-form">
           <h2 class="hide">Trang điểm</h2>
            <fieldset>
            <?php
                $sql = "SELECT name, price, image_link, id FROM t_product WHERE catalog_id=2 ORDER BY RAND() LIMIT 3";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
            ?>
                <legend>Trang điểm</legend>
                <p class="clear-fix"><a href="trang-diem.php" class="see-more-home">Xem thêm &gt;&gt;</a></p>
                <ul class="list-product-home clear-fix">
                <?php
                    for ($i=0; $i < 3; $i++) { 
                        if ($row)
                        {
                            echo '<li>';
                            echo    '<div>';
                            echo        '<a href="thong-tin-chi-tiet-san-pham.php?id='.strval($row['id']).'">';
                            echo        '<img src="'.$row["image_link"].'" alt="anh-minh-hoa" class="img-illustrate-home">';
                            echo        '</a>';
                            echo        '<p class="name-product-make-up">'.$row["name"].'</p>';
                            echo        '<p class="price-make-up">'.number_format($row["price"],0).'</p>';
                            echo        '<a href="cart-update.php?type=add&qty=1&id='.strval($row['id']).'&url='.$current_url.'">';
                            echo        '<button name="btn-add-checkout" class="btn-add-cart-home">Thêm vào giỏ hàng</button>';
                            echo        '</a>';
                            echo    '</div>';
                            echo'</li>';
                        }
                        $row = mysqli_fetch_array($query);
                    }
                    ?>
                </ul>
            </fieldset>
        </section>
        <section class="items-form">
           <h2 class="hide">Chăm sóc da</h2>
            <fieldset>
            <?php
                $sql = "SELECT name, price, image_link, id FROM t_product WHERE catalog_id=3 ORDER BY RAND() LIMIT 3";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
            ?>
                <legend>Chăm sóc da</legend>
                <p class="see-more-home clear-fix"><a href="cham-soc-da.php" class="see-more-home">Xem thêm &gt;&gt;</a></p>
                <ul class="list-product-home clear-fix">
                <?php
                    for ($i=0; $i < 3; $i++) { 
                        if ($row)
                        {
                            echo '<li>';
                            echo    '<div>';
                            echo        '<a href="thong-tin-chi-tiet-san-pham.php?id='.strval($row['id']).'">';
                            echo        '<img src="'.$row["image_link"].'" alt="anh-minh-hoa" class="img-illustrate-home">';
                            echo        '</a>';
                            echo        '<p class="name-product-make-up">'.$row["name"].'</p>';
                            echo        '<p class="price-make-up">'.number_format($row["price"],0).'</p>';
                            echo        '<a href="cart-update.php?type=add&qty=1&id='.strval($row['id']).'&url='.$current_url.'">';
                            echo        '<button name="btn-add-checkout" class="btn-add-cart-home">Thêm vào giỏ hàng</button>';
                            echo        '</a>';
                            echo    '</div>';
                            echo'</li>';
                        }
                        $row = mysqli_fetch_array($query);
                    }
                    ?>
                </ul>
            </fieldset>
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
<?php echo $_SERVER['REQUEST_URI'];
        echo "hello";
?>