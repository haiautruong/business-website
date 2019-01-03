<?php
    include_once('commons.php');
    if (isset($_SESSION['cart']))
    {
        foreach ($_SESSION['cart'] as $key => $value) {
            echo "<br>";
            echo $value['name'];
            echo "&emsp;&emsp;&emsp;";
            echo $value['price'];
            echo "&emsp;&emsp;&emsp;";
            echo $value['qty'];
    
        }
    }
    else
    {
        echo "Empty....";
    }
    
?>