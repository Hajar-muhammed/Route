<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<?php  
      $admin=[
        'email' => 'admin@yahoo.com',
        'password' => 'admin345'
      ] ;
if(isset ($_POST['submit'])){
    extract($_POST);
    //validation
    //email, password (required)
    if(empty ($_POST['email']) ||empty ($_POST['password'] )){
        $wrong ="Email & password is Rrquired";
        $_SESSION['wrong']= $wrong;
        header("location:login.php");
    
    }else{
    $emailColumn = array_column($_SESSION['users'], 'email');
    $keyEmail = array_search($email, $emailColumn);
  
      
    if($email == $_SESSION['users'][$keyEmail]['email'] && $password == $_SESSION['users'][$keyEmail]['password'] ){
      $_SESSION['name'] = strstr($email, '@', true);
      $_SESSION['login']="login";
        if(isset($_POST['remember'])){
    
            setcookie("password", $password, time()+60*60*24*30);
            setcookie("email", $email, time()+60*60*24*30);
        }
    }elseif($email == $admin['email']  && $password == $admin['password']){
        header("location:admin/view/layout.php");
    }
     else{
        $wrong ="Wrong email or password";
        $_SESSION['wrong']= $wrong;
        header("location:login.php");
    }
}  
}elseif(empty ($_SESSION['login'])){
    header("location:login.php");
};
?>
<section id="hero">

        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more woth coupons & up to 70% off!</p>
        <button>Shop Now!</button>

    </section>

    <!-- End Hero -->

    <!-- start Feature-->
   
    <section id="feature" class="section-p1">
    <?php 
    $features =['Free Shipping', 'Online Order', 'Save Money', 'Promitions', 'Happy Sell', 'F7/24 Support'];
    for($i=0; $i < count($features); $i++){

    ?>
        <div class="fe-1">
            <img src="img/features/f<?= $i+1 ?>.png" alt="">
            <h6><?= $features[$i]?></h6>
        </div>
        <?php }?>
    </section>
    <!-- End Feature-->

    <!-- Start New Arrival or productCard Features -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">
            <?php
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
            ]
            ];

            foreach ($products as $value){
            ?>
            <div class="pro">
                <img src="img/products/<?= $value['imageName']?>" alt="p1">
                <div class="des">
                    <span><?= $value['brand']?></span>
                    <h5><?= $value['desc']?></h5>
                    <div class="star">
                        <?php for($i=1; $i<=5; $i++){?>
                        <i class="fas fa-star"></i>
                        <?php }?>
                    </div>
                    <h4><?= $value['price']?></h4>
                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <?php }?>
        
        </div>
    </section>
    <!-- End New Arrival -->
    <!-- Start bannar -->
    <section id="bannar" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>
    <!-- End bannar -->
    <section id="product1" class="section-p1">
        <h2>New Arrival</h2>
        <p>Summer Collection New Modren Desgin</p>
        <div class="pro-container">

        <?php  $collection = [
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
        foreach ($collection as $value){
            ?> 
            <div class="pro">
                <img src="img/products/<?= $value['imageName']?>" alt="p1">
                <div class="des">
                    <span><?= $value['brand']?></span>
                    <h5><?= $value['desc']?></h5>
                    <div class="star">
                    <?php for($i=1; $i<=5; $i++){?>
                        <i class="fas fa-star"></i>
                        <?php }?>
                    </div>
                    <h4><?= $value['price']?></h4>
                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <?php }?>
            
        </div>
    </section>
    <section id="sm-bannar" class="section-p1">
        <div class="bannar-box">
            <h4>Crazy Deals</h4>
            <h2>buy 1 get 1 Free</h2>
            <span>The best classic dress is on sale from cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="bannar-box bannar-box2">
            <h4>Spring/Summer</h4>
            <h2>buy 1 get 1 Free</h2>
            <span>The best classic dress is on sale from cara</span>
            <button class="white">Learn More</button>
        </div>

    </section>

    <section id="bannar3" class="section-p1">
        <div class="bannar-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
        <div class="bannar-box bannar-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
        <div class="bannar-box bannar-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% off</h3>
        </div>
    </section>

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