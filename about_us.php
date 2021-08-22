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
                <li><a href="#">About Us</a></li>
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
                        <span style="float:right; font-size:17px; line-height:40px; padding:5px;"><b style="color:#F9D342">Welcome Guest!</b> Total Items: <?php total_items(); ?> Total Price: &#8377;<?php total_price() ?> <a href="cart.php" style="color:#F9D342">Checkout</a>
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
                    <div align="center" id="names" style="font-weight:bold; font-size:30px";>
                    <br><span style="text-decoration:underline;">Project Members</span><br>
                    <br>
                        Avijit Bhunia
                        <br>
                        Pranay Manik
                        <br>
                        Subhankar Bag
                        <br>
                        Krishnapada Bera
                        <br>
                        Indrajit Samanta
                    </div>
                </div>
        <div class="footer">Copyright &copy; GIST 2019</div>
    </div>
</body>
</html>