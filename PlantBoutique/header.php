<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ASM1PlantBoutique.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Logo -->
            <div id="nav-logo">
                <a href="./PlantBout.php"><img src="./plantImages/LogoNav.png" alt=""></a>
            </div>
            <ul id="nav-option">
                <!-- Options -->
                <li><a href="./PlantBout.php">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li>
                    <a href="./Plants.php">Plants</a>                   
                </li>
                <li><a href="../login.php">Sign In</a></li>
                <li><a href="../login.php">Sign Up</a></li> 

                <!-- Cart -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="mr-auto"></div>
                    <div class="navbar-nav">
                        <a href="cart.php" class="nav-item nav-link active">
                            <h5 class="px-5 cart">
                                <i class="fas fa-shopping-cart"></i> Cart
                                <?php

                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }

                                ?>
                            </h5>
                        </a>
                    </div>
                 </div>
            </ul>  
        </nav>
    </header>
</body>
</html>

