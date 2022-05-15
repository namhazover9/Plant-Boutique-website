<?php

session_start();

require_once ('./CreateDb.php');
require_once ('./component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = './index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ASM1PlantBoutique.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Whisper&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <?php require_once ("./header.php"); ?>  
    
    <!-- SLIDER -->
    <div id="slider">
        <div class="title">
            <h1>Plant Boutique</h1>
            <h4>Adding Green To Your Life! </h4>
        </div>
        <img src="./plantImages/Slider.jpg" alt="">
    </div>
  
    <main>
        <!-- Plants -->
        <div id="bestselling-tree-title">
            <h1>Plants</h1>
            <img src="./plantImages/Title.png" alt="">            
        </div>

        <div id="category">
            <div class="cate-list">
                <a href="./Plants.php">Office Plants</a>
                <a href="./Plants.php">Cacti & Succulents</a>
                <a href="./Plants.php">Hanging Plants</a>
            </div>

            <div class="cate-img">
                <img src="./plantImages/cate1.jpg" alt="">
                <img src="./plantImages/Cate2.webp" alt="">
                <img src="./plantImages/cate3.jfif" alt="">
                <img src="./plantImages/cate4.jpg" alt="">
                <img src="./plantImages/cate5.jpg" alt="">
                <img src="./plantImages/cate6.jpg" alt="">
                <img src="./plantImages/cate7.webp" alt="">
            </div>
        </div>

        <!-- ABOUT US -->
        <div id="aboutus">
            <h1>About us</h1>
            <img class="title-img" src="./plantImages/Title.png" alt=""> 
            <p>Plant Boutique was established on October 10, 2021, with the mission of bringing green space to everyone, sharing experience and knowledge of bonsai care.
                Coming to Plant Boutique is not simply about buying plants, but we also teach customers how to care,
                how to fix when the tree encounters bad problems, ornamental plants purchased at the store are warranted for 7 days to 30 days depending on how big or small the tree is,
                to make sure the product is completely disease-free before buying.
                In addition, if you do not buy a tree at the store, but buy it anywhere when you have a problem, please contact us,
                we are ready to give free and enthusiastic advice, so that the tree can be good again.</p>
            <img class="map" src="./plantImages/about.webp" alt="">           
        </div>

    </main>
   
    <footer>
        <div class="contact">
            <div class="contact-text">
                <p>Address: 11 Huynh Tan Phat, Hai Chau District, Danang City.</p>
                <p>Phone: +84 7 234 7878 </p>
                <p>Email: plantboutique1803@gmail.com</p>
            </div>  

            <div class="contact-icon">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-linkedin"></ion-icon>
            </div>
        </div>
        
    </footer>
        
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>