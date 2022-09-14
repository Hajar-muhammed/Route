<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">
            <?php
            if(empty ($_SESSION['login'])){
                header("location:login.php");
            };
           $products =[
            [
                'brand' => 'adidas',
                'price' => 500,
                'desc'  => "cotton colorful t-shir",
                'imageName' => 'f1.jpg'
            ],
            [
                'brand' => 'HERMES',
                'price' => 800,
                'desc'  => "white-green t-shirt",
                'imageName' =>'f2.jpg'
            ],
            [
                'brand' => 'PRADA',
                'price' => 1200,
                'desc'  => "flower-t-shirt",
                'imageName' =>'f3.jpg'
            ],
            [
                'brand' => 'CHANEL',
                'price' => 300,
                'desc'  => "white-pink t-shirt",
                'imageName' =>'f4.jpg'
            ],
            [
                'brand' => 'RALPH LAUREN',
                'price' => 700,
                'desc'  => "purple t-shirt",
                'imageName' =>'f5.jpg'
            ],
            [
                'brand' => 'BURBERRY',
                'price' => 450,
                'desc'  => "orange-blue shirt",
                'imageName' =>'f6.jpg'
            ],
            [
                'brand' => 'HOUSE OF VERSACE',
                'price' => 210,
                'desc'  => "Embroidered pants",
                'imageName' =>'f7.jpg'
            ],
            [
                'brand' => 'GUCCI',
                'price' => 350,
                'desc'  => "gray blouse",
                'imageName' =>'f8.jpg'
            ],
            [
                'brand' => 'adidas',
                'price' => 500,
                'desc'  => "cotton sky-blue shir",
                'imageName' => 'n1.jpg'
            ],
            [
                'brand' => 'HERMES',
                'price' => 800,
                'desc'  => "white-gray shirt",
                'imageName' =>'n2.jpg'
            ],
            [
                'brand' => 'PRADA',
                'price' => 1200,
                'desc'  => "white-shirt",
                'imageName' =>'n3.jpg'
            ],
            [
                'brand' => 'CHANEL',
                'price' => 300,
                'desc'  => "gray-brwon t-shirt",
                'imageName' =>'n4.jpg'
            ],
            [
                'brand' => 'RALPH LAUREN',
                'price' => 700,
                'desc'  => " blue shirt",
                'imageName' =>'n5.jpg'
            ],
            [
                'brand' => 'BURBERRY',
                'price' => 450,
                'desc'  => "gray shorts",
                'imageName' =>'n6.jpg'
            ],
            [
                'brand' => 'HOUSE OF VERSACE',
                'price' => 210,
                'desc'  => "brown shirt",
                'imageName' =>'n7.jpg'
            ],
            [
                'brand' => 'GUCCI',
                'price' => 350,
                'desc'  => "gray t-shirt",
                'imageName' =>'n8.jpg'
            ]
            ];
          // $add= $_SESSION['addproducts'];
          
         $products[]=$_SESSION['addproducts'];
           $_SESSION['products'] =$products;
           
            foreach ($_SESSION['products'] as $value){
            ?>
            
            <div class="pro">
                <img src="img/products/<?= $value['imageName']?>" alt="p1">
                <div class="des">
                    <span><a style="text-decoration:none; color:gray;" href="product.php?img=<?= $value['imageName']?>"><?= $value['brand']?></a></span>
                    <h5><strong><a style="text-decoration:none; color:black;" href="product.php?img=<?= $value['imageName']?>"><?= $value['desc']?></a></strong></h5>
                    <div class="star">
                        <?php for($i=1; $i<=5; $i++){?>
                        <i class="fas fa-star"></i>
                        <?php }?>
                    </div>
                    <h4><a style="text-decoration:none; color:darkcyan;" href="product.php?img=<?= $value['imageName']?>"><?= $value['price']?></a></h4>
                    <form method="get" action="cart.php">
                    <input type="hidden" name="key" value="<?= $value['desc']?>">
                    <input type="number" name="quantity">
                   <button type="submit" name="submit"> <a href="cart.php" class="cart"><i class="fas fa-shopping-cart"></i></a></button>
                    </form>
                </div>
            </div>
            <?php }?>
        
        </div>
    </section>
    <!-- End New Arrival -->
   
   

   
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newletters</h4>
            <p>Get E-mail Updates about our latest shop and <span class="text-warning">Special Offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Enter Your E-mail...">
            <button class="normal">Sign Up</button>
        </div>
    </section>





<?php include 'footer.php' ?>