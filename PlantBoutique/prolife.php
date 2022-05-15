<?php

session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password']) && !isset($_SESSION['phonenumber']) && !isset($_SESSION['email'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ASM/ASM1PlantBoutique.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Whisper&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./ASM/style.css">
</head>
<body>

<header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div id="nav-logo">
                <a href="./ASM/PlantBout.php"><img src="./ASM/plantImages/LogoNav.png" alt=""></a>
            </div>
            <ul id="nav-option">
                <li><a href="./ASM/PlantBout.php">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li>
                    <a href="./ASM/Plants.php">Plants</a>                   
                </li>
                <li><a href="../prolife.php"> <?php echo $_SESSION['username']; ?> </a></li>
                <li><a href="./ASM/PlantBout.php">Log Out</a></li> 

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

    <div id="bestselling-tree-title">
            <h1 style="color: white;">Your Information</h1>                  
    </div>
    
    <div class="col-md-12" style="background-image: linear-gradient( 359.8deg, rgba(252, 255, 222, 1) -26.8%, rgb(178, 217, 173) 99.3% );
                                    max-width: 700px;
                                    margin: 60px auto;
                                    padding:20px;">
        
        <form style=" margin-left: 2%; margin-right: 2%;">
            <div class="form-group" style="border-bottom: 1px solid black; ">
                <label  for="name">
                <p style="font-size: 18px;  margin-top: 5px; font-weight: bold;">Username: <?php echo $_SESSION['username']; ?> </p></label>             
            </div>

            <div class="form-group" style="border-bottom: 1px solid black; ">
                <label  for="pass">
                <p style="font-size: 18px;  font-weight: bold; ">Password: <?php echo $_SESSION['password']; ?> </p></label>               
            </div>

            <div class="form-group" style="border-bottom: 1px solid black; ">
                <label  for="phone">
                <p style="font-size: 18px;  font-weight: bold; ">Phone Number: <?php echo $_SESSION['phone']; ?> </p></label>                                        
            </div>

            <div class="form-group" style="border-bottom: 1px solid black; ">
                <label  for="email">
                <p style="font-size: 18px;   font-weight: bold; ">Email:  <?php echo $_SESSION['email']; ?> </p></label>            
            </div>
           
        </form>
                                      
    </div>

        
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>