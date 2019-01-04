<?php
    include_once("commons.php");
    if (isset($_POST['step']) && $_POST['step'] == 1)
    {
        if (!$_POST['email'] || !$_POST['name'] || !$_POST['address'] || !$_POST['phonenumber'])
        {
            echo '<script type="text/javascript">
            alert("Vui lòng điền đầy đủ thông tin !!!");
            history.go(-1);
            </script>';
        }
        $_SESSION['trans'] = array('name'=>$_POST['name'],
                            'email'=>$_POST['email'], 
                            'phone'=>$_POST['phonenumber'],
                            'price'=>0,
                            'status'=>0,
                            'payment'=>'');
        header('Location: thanh-toan.php');
    }

    if (isset($_GET['step']) && $_GET['step'] == 2)
    {
        $_SESSION['trans']['price']=$_GET['price'];
        $_SESSION['trans']['payment']=$_GET['radio'];
        $sql = 'INSERT INTO t_transaction (stt, us_id, us_name, us_email, us_phone, amount, payment, created) 
        VALUES '.$_SESSION['trans']['status'].','.$_SESSION['trans']['status'].',
                '.$_SESSION['trans']['email'].','.$_SESSION['trans']['phone'].','.$_SESSION['trans']['price'].',
                '.$_SESSION['trans']['payment'].',CURRENT_TIMESTAMP()';
        
        if (isset($_SESSION['email']))
        {
            echo "Hello";
            $sql = "SELECT id, email FROM t_user WHERE email='".$_SESSION['email']."'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);
            $sql = 'INSERT INTO t_transaction (stt, us_id, us_name, us_email, us_phone, amount, payment, created) 
                    VALUES '.$_SESSION['trans']['status'].','.$_SESSION['trans']['status'].','.$row['id'].',
                            '.$_SESSION['trans']['email'].','.$_SESSION['trans']['phone'].','.$_SESSION['trans']['price'].',
                            '.$_SESSION['trans']['payment'].',CURRENT_TIMESTAMP()';
                    
        }
        $query = mysqli_query($conn, $sql);
    }


?>