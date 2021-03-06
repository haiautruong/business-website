<?php include_once( "commons.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php
    $status = 0;
    if (isset($_GET['id']))
    {
        $sql = "SELECT name, price, image_link, id, details, discount FROM t_product WHERE id=".$_GET['id'];
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if (!$row)
        {
            echo '<script type="text/javascript">
            window.location.href = "notfound.php"</script>';
            exit();
        }
    }
    else
    {   
        echo '<script type="text/javascript">
        window.location.href = "notfound.php"</script>';
        exit();
    }
?> 
<?php
// url trang hiện tại
$url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$validURL = base64_encode(str_replace("&", "&amp", $url));
?>
<head>
    <meta charset="UTF-8">
    <title>Thông tin chi tiết sản phẩm</title>
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
    <main class="main-content" id='product-content'>
        <section class="container">
            <h2 class="hide">Thông tin sản phẩm</h2>
            <div class="title">
                <p>Thông tin sản phẩm</p>
                <hr>
            </div>
            <section class="main-info-product">
                <section class="clear-fix">
                    <img src="<?php echo $row['image_link']?>" alt="anh-minh-hoa-san-pham" class="img-product-detail">
                    <div class="some-main-info-product">
                        <p class="name-product-detail">
                            <?php echo $row[ 'name'] ?>
                        </p>

                        <section class="container-total-detail">
                            <p id="txt-total-detail">Giá:</p>
                            <p id="total-detail">
                                <?php echo number_format($row[ 'price'],0); ?>
                            </p>
                            <?php
                            if ($row['discount'] > 0)
                            {
                                echo '<p class="price-sales"><span>(Tiết kiệm: </span>';
                                echo '<label id="sales">';
                                echo $row['discount'];
                                echo '%</label>)';
                                echo '</p>';
                            }
                            ?>
                        </section>
                        <div class="cart-detail">
                        <?php
                        $sql = "SELECT name, price, image_link, id, details FROM t_product WHERE id=".$_GET['id'];
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($query);
                        
                        echo '<a href="cart-update.php?type=add&qty=1&id='.strval($row['id']).'&url='.$validURL.'">';
                        echo '<button name="btn" class="btn-add-cart-detail">Thêm vào giỏ hàng</button>';
                        echo '</a>';
                        ?>
                            <img src="images/cart-detail.png" alt="icon-cart">
                       </div>
                    </div>
                </section>

            </section>
            <section class="detail-info-product">
                <fieldset class="content">
                    <legend>
                        Thông tin chi tiết
                    </legend>
                    <div>
                        <?php echo $row[ 'details'] ?>
                    </div>
                </fieldset>
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
<?php include_once( "login-logout-process.php"); ?>