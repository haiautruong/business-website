<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>2GB - Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
</head>

<body>
    <header class="clear-fix">
        <section class="header">
            <h1 class="hide">Search bar</h1>
            <a href="https://www.facebook.com/groups/1866521173441261/" target="_blank" ><img src="images/fb_icon(2).png" alt="icon-facebook"></a>
            <a href="#" target="_blank"><img src="images/ins_icon.png" alt="icon-insatagram"></a>
            <input class="search-bar" placeholder="Search">

            <a href="#" target="_self"><img src="images/cart_icon.png" alt="icon-cart"></a>
            <a href="#" target="_self"><img src="images/account_icon.png" alt="icon-account"></a>
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
    
    <main class="clear-fix">
        <section class="signup clear-fix">
           <h2>Đăng kí</h2>
            
           <h4>
           <?php
                // Nếu không phải là sự kiện đăng ký thì không xử lý
                if (isset($_POST['fullname-signup']))
                {
                    echo dangki();
                }
            ?>
            </h4>
           <form action="signup.php?do=signup" method="post" class="info-signup">
               <label for="fullname-signup">Họ và tên</label>
               <input type="fullname" name="fullname-signup">
               <label for="email-signup">Email</label>
               <input type="email" id="email-signup" name="email-signup">
               <label for="password-signup">Mật khẩu</label>
               <input type="password" name="password-signup">
               <label for="repass-signup">Nhập lại mật khẩu</label>
               <input type="password" name="repass-signup">
               <button class="btn-signup clear-fix" name="btn-signup">Tạo tài khoản</button>
           </form>
       </section>
        <aside class="update-promotion">
            <form action="">
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

<?php
    function dangki()
    {
        $re = "";
        //Nhúng file config với database
        include_once('config.php');

        //Lấy dữ liệu từ file dangky.php
        $password   = addslashes($_POST['password-signup']);
        $repassword = addslashes($_POST['repass-signup']);
        $email      = addslashes($_POST['email-signup']);
        $fullname   = addslashes($_POST['fullname-signup']);

        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        if (!$repassword || !$password || !$email || !$fullname)
        {
            $re = "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            return $re;
        }

        // Mã khóa mật khẩu
        $password = md5($password);
        $repassword = md5($repassword);
        if ($password != $repassword)
        {
            $re = "Mật khẩu 2 ô không trùng khớp. <a href='javascript: history.go(-1)'>Trở lại</a>";
            return $re;
        }

                
                    
        //Kiểm tra email đã có người dùng chưa
        if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM t_user WHERE email='$email'")) > 0)
        {
            $re = "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            return $re;
        }

        //Lưu thông tin thành viên vào bảng
        $query = "
        INSERT INTO t_user (
            pass,
            email,
            name,
            coin
            )
        VALUE (
            '{$password}',
            '{$email}',
            '{$fullname}',
            0
        )
        ";
        
        $addmember = mysqli_query($conn,$query);
        //Thông báo quá trình lưu
        if ($addmember)
            $re = "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
        else
            $re = "Có lỗi xảy ra trong quá trình đăng ký. <a href='signup.php'>Thử lại</a>";
        return $re;
    }
?>

</html>

