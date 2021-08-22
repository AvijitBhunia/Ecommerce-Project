<!DOCTYPE html>
<?php
include('functions/function.php');
?>
<html>
<head>
    <title>Online Shopping</title>
    <link rel='stylesheet' type='text/css' href='styles/style.css' media='all'>
</head>
<body>
    <div class="main_wrapper">
        <div class="header_wrapper">
            <a href="index.php"><img id="logo" src="images/logo.png"></a>
            <img id="banner" src="images/banner_ad.jpg">
        </div>
        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="all_products.php">All Products</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
            <div id="form">
                <form method="get" action="results.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search Anything">
                    <input  type="submit" name="search" value="Search">
                </form>
            </div>
        </div>
        <div class="content_wrapper">
            <div id="sidebar">
                <div id="sidebar_title">Categories</div>
                    <ul id="cats">
                       <?php getCats();
                       ?>
                    </ul>
			    <div id="sidebar_title">Brands</div>
				    <ul id="cats">
                        <?php getBrands();
                        ?>
                    </ul>
            </div>
            <div id="content_area">
                <div id="shopping_cart">
                    <span style="float:right; font-size:17px; line-height:40px; padding:5px;"> Welcome Guest <bstyle="color:yellow">Shopping Cart -</b> Total Items:Total Price: &#8377; <?php total_price() ?><a href="cart.php" style="color:yellow">Go to Cart</a>
                    </span>
                </div>
                <div id="products_box">
                <?php $get_pro="select * from products";
			    $run_pro=mysqli_query($con, $get_pro);
			    while($row_pro=mysqli_fetch_array($run_pro))
			    {
			        $pro_id = $row_pro['product_id'];
			        $pro_cat = $row_pro['product_cat'];
                    $pro_brand = $row_pro['product_brand'];
                    $pro_title = $row_pro['product_title'];
                    $pro_price = $row_pro['product_price'];
                    $pro_image = $row_pro['product_image'];
                    echo
                    "<div id='single_product'>
                    <h3>$pro_title</h3>
                    <img src='admin_area/product_images/$pro_image' width='180' height='180'>
                    <p><b> Price:$pro_price </b></p>
                    <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                    <a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
                    </div>";
                }
                ?>
            </div>
        </div>
        <div class="footer">Copyright &copy; GIST 2019</div>
    </div>
</body>
</html>