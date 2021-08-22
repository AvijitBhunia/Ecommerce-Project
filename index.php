<!DOCTYPE html>
<?php
session_start();
include('functions/function.php');
?>
<html>
<head>
    <title>My Shopping Cart</title>
    <link rel='stylesheet' type='text/css' href='styles/style.css' media='all'>
</head>
<body>
    <!-- Main Container starts here -->
    <div class="main_wrapper">

        <!-- Header starts -->
        <div class="header_wrapper">
            <a href="index.php"><img id="logo" src="images/logo.png"></a>
           <img id="banner" src="images/banner_ad.jpg">
        </div>
        <!-- Header ends -->

        <!-- Navigation Bar starts -->
        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="all_products.php">All Products</a></li>
                <li><a href="checkout.php">Sign In</a></li>
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
        <!--Navigation Bar ends -->

        <!-- Content Wrapper starts -->
        <div class="content_wrapper">

            <!-- Sidebar starts -->
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
            <!-- Sidebar ends -->

            <!-- Content Area starts -->    
            <div id="content_area">
                <div id="shopping_cart">
                    <?php cart(); ?>
                    <span style="float:right; font-size:17px; line-height:40px; padding:5px;"><b style="color:yellow">Welcome Guest!</b> Total Items: <?php total_items(); ?> Total Price: &#8377; <?php total_price() ?> <a href="cart.php" style="color:yellow">Checkout</a>
                    <?php
                    if
                    (!isset($_SESSION['customer_email']))
                    {
                        echo "<a href='checkout.php'>Login</a>";
                    }
                    else
                    {
                        echo "<a href='logout.php'>Logout</a>";
                    }
                    ?>
                    </span>
                </div>
                <div id="products_box">
                    <?php getPro(); ?>
                    <?php getCatPro(); ?>
                    <?php getBrandPro(); ?>
                </div>
            </div>
            <!-- Content Area ends -->
        </div>
        <!-- Content Wrapper ends -->

        <!-- Footer starts -->
        <div class="footer">
            Copyright &copy; GIST 2019
        </div>
        <!-- Footer ends -->
    </div>
    <!-- Main Container ends here -->
</body>
</html>