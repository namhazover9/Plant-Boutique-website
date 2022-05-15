<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "   
    <div class=\"col-lg-3 col-md-4 col-sm-6 my-3 \">
        <form action=\"Plants.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h6 class=\"card-title\">$productname</h6>                  
                    <h5>
                        <span class=\"price\">$$productprice</span>
                    </h5>
                    <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\" style=\" background-image: linear-gradient( 359.8deg, 
                    rgba(252, 255, 222, 1) -26.8%, rgb(178, 217, 173) 99.3% ); border: none;\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
        <div class=\"border rounded\">
            <div class=\"row bg-white\">
                <div class=\"col-md-3 pl-0\">
                    <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                </div>
                <div class=\"col-md-6\">
                    <h5 class=\"pt-2\">$productname</h5>
                    <small class=\"text-secondary\">Seller: dailytuition</small>
                    <h5 class=\"pt-2\">$$productprice</h5>
                    <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                </div>
                <div class=\"col-md-3 py-5\">
                    <div>
                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>   
    ";
    echo  $element;
}



