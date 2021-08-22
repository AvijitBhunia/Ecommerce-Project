<!DOCTYPE html>
<?php
session_start();
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
                        <?php cart(); ?>
                        <span style="float:right; font-size:17px; line-height:40px; padding:5px;"><?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'> </b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?><a href="index.php" style="color:#F9D342">Back to Home</a>
                        <?php
                        if
                        (!isset($_SESSION['customer_email']))
                        {
                            echo "<a href='checkout.php'>Login</a>";
                        }
                        else
                        {
                            echo "<a href='logout.php' style='color:orange'>Logout</a>";
                        }
                        ?>
                        </span>
                    </div>
                <div id="products_box">
                    <div style="display:block; width:100%; height:100%;">
                    <img src="images/cod.png" width="400" height="400">
                    </div><h2 style="text-align:center; font-weight:bold;">Order Successfull</h2>
                </div>
            </div>
        <div class="footer">Copyright &copy; GIST 2019</div>
    </div>
</body>
</html>