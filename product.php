<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<?php
extract($_GET);
$imgColumn = array_column ( $_SESSION['products'], 'imageName' );
$keyImg = array_search($img, $imgColumn);
$product = $_SESSION['products'][$keyImg];

?>

<section id="product1" class="section-p1">
        <h2>Selected Product</h2>
        <p><?= $product['desc']?></p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/<?=$product['imageName'] ?>" alt="p1">
                <div class="des">
                    <span><?=$product['brand'] ?></span>
                    <h5><?=$product['desc'] ?></h5>
                    
                    <h4><?=$product['price'] ?></h4>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <form >
                        <textarea style=" width: 100%;   padding: 12px 20px;
border-radius: 10px; border-color:darkcyan; " placeholder="Please type your review"></textarea>
                        <button type="submit" name="" style="background-color: darkcyan;"  class="btn btn-success">Post Review</button>
                    </form>
                    
                </div>
            </div>

<?php include 'footer.php' ?>