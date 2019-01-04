<?php
    include_once("commons.php");
    $return_url = '';
    $product_id = 1;
    $product_qty = 1;
    // Thêm sản phẩm
    if (isset($_GET['type']) && $_GET['type'] == 'add')
    {
        $product_id = $_GET['id'];
        $product_qty = $_GET['qty'];
        $return_url = base64_decode($_GET['url']);
        $re = $conn->query('SELECT name, price, image_link FROM t_product WHERE id='.$product_id);
        if (mysqli_num_rows($re)>=1)
        {
            $obj_data = $re->fetch_object(); 
            $new_item = array(array('name'=>$obj_data->name,
                                        'id'=>$product_id,
                                        'qty'=>$product_qty, 
                                        'price'=>$obj_data->price, 
                                        'image_link'=>$obj_data->image_link));
            if (isset($_SESSION['cart']))
            {
                $exist = false;
                foreach ($_SESSION['cart'] as $key => $item) 
                {
                    if ($item['id'] == $product_id)
                    {
                        $exist = true;
                        if ($_SESSION['cart'][$key]['qty'] + $product_qty < 1)
                        {
                            header('Location:'.$return_url);
                            exit();
                        }
                        $_SESSION['cart'][$key]['qty'] += $product_qty;
                    }
                }
                if (!$exist)
                {
                    $_SESSION['cart'] = array_merge($_SESSION['cart'], $new_item);
                }
            }
            else
            {
                $_SESSION['cart'] = $new_item;
            }
        }
        

    }

    // Xóa sản phẩm

    if (isset($_GET['type']) && $_GET['type'] == 'rm')
    {
        $product_id = $_GET['id'];
        $return_url = base64_decode($_GET['url']);
        foreach ($_SESSION['cart'] as $key => $item) 
        {
            if ($item['id'] == $product_id)
            {
                unset($_SESSION['cart'][$key]);
            }
        }
    }

    // Xóa hết sản phẩm
    if (isset($_GET['type']) && $_GET['type'] == 'rmall')
    {
        $return_url = base64_decode($_GET['url']);
        unset($_SESSION['cart']);
    }

    header('Location:'.$return_url);
    exit();
?>