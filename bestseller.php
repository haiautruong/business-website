<?php include_once("commons.php"); ?><!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bestseller</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
</head>
<?php
    include('config.php');
    $sql = "SELECT name, price, image_link, id FROM t_product GROUP BY DISCOUNT desc LIMIT 10";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    
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
                <li class="cur-tab"><a href="bestseller.php">Bestseller</a>
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
            <h2 class="hide">Bestseller</h2>
            <div class="title">
                <p>Bestseller</p>
                <hr>
            </div>
            <div class="filter">
                <p>Sắp xếp theo</p>
                <select name="sort-mk" id="sort-make-up">
                        <option value="new">Mới nhất</option>
                        <option value="inc">Giá tăng dần</option>
                        <option value="dec">Giá giảm dần</option>
                </select>
            </div>
            <ul class="list-product-make-up clear-fix">
            <?php
            for ($i=0; $i < 4; $i++) { 
                $row = mysqli_fetch_array($query);
                echo '<li>';
                echo    '<div>';
                echo        '<img src="'.$row["image_link"].'" alt="anh-minh-hoa" class="img-illustrate-home">';
                echo        '<p class="name-product-make-up">'.$row["name"].'</p>';
                echo        '<p class="price-make-up">'.$row["price"].'</p>';
                echo        '<button name="btn-add-checkout" class="btn-add-cart-home">Thêm vào giỏ hàng</button>';
                echo    '</div>';
                echo'</li>';
            }
            ?>
            </ul>
            <ul class="list-product-make-up clear-fix">
                <?php
                for ($i=0; $i < 4; $i++) { 
                    $row = mysqli_fetch_array($query);
                    echo '<li>';
                    echo    '<div>';
                    echo        '<img src="'.$row["image_link"].'" alt="anh-minh-hoa" class="img-illustrate-home">';
                    echo        '<p class="name-product-make-up">'.$row["name"].'</p>';
                    echo        '<p class="price-make-up">'.$row["price"].'</p>';
                    echo        '<button name="btn-add-checkout" class="btn-add-cart-home">Thêm vào giỏ hàng</button>';
                    echo    '</div>';
                    echo'</li>';
                }
                ?>
            </ul>

        </section>
        <section>
            <div class="pagination">
                <a href="#" class="page active">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="page">3</a>
                <a href="#" class="page">4</a>
                <a href="#" class="page">5</a>
                <a href="#" class="page">6</a>
                <a href="#" class="page">7</a>
            </div>
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

<!-- Xử lý sort-->
<script>
           document.getElementsByName('sort-mk')[0].onchange = function() {
                
            window.location.href = "bestseller.php?sort="+ document.getElementsByName('sort-mk')[0].value;
           }
</script>
<?php include_once("login-logout-process.php"); ?>