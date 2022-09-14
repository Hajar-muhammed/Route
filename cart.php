<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<?php
$total=0;
if(isset($_GET['submit'])){
    if(!empty($_GET['quantity'])){
    extract($_GET);
    $descColumn = array_column($_SESSION['products'], 'desc');
     $descKey = array_search($key, $descColumn);
  $arr=[
    'brand' => $_SESSION ['products'][$descKey]['brand'],
    'image' => $_SESSION ['products'][$descKey]['imageName'],
    'desc' => $key,
    'quantity' => (int)$quantity,
    'price' => $_SESSION ['products'][$descKey]['price'],
    
  ];
     (isset($_SESSION['cartProduct']) && in_array($arr,$_SESSION['cartProduct']))? 'found' :$_SESSION['cartProduct'][]=$arr;
    }
     if(isset($_POST['remove'])){
        extract($_POST);
        $imgColumn = array_column($_SESSION['cartProduct'], 'image');
        $imgkey = array_search($image, $imgColumn);
        unset($_SESSION['cartProduct'][$imgkey]);
        $_SESSION['cartProduct']=array_values($_SESSION['cartProduct']);
        unset($_POST['remove']);
     }
?>
<section id="page-header" class="about-header"> 
        <h2>#Cart</h2>
        <p>Let's see what you have.</p>
    </section>
 
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Desc</td>
                    <td>Quantity</td>
                    <td>price</td>
                    <td>Subtotal</td>
                    <td>Remove</td>
                    <td>Edit</td>
                </tr>
            </thead>
   
            <tbody>
                <?php 
                $total=0;
                foreach ($_SESSION['cartProduct'] as $value){
                    $subtotal = $value['quantity'] * $value['price'];
                    $total += $subtotal;
                    ?>
                    <form method="post" action="">
                <tr>
                    <td><img src="img/products/<?= $value['image']?>" alt="product1"></td>
                    <td><?= $value['brand']?></td>
                    <td><?= $value['desc']?></td>
                    <td><?= $value['quantity']?></td>
                    <td><?= $value['price']?></td>
                    <td><?= $subtotal?></td>
                   
                    <!-- Remove any cart item  -->

                    <td><button type="submit" name="remove" class="btn btn-danger">Remove</button></td>
                    <input type="hidden" name="image" value="<?= $value['image']?>">
                    <td><button type="submit"  class="btn btn-primary">Edit</button></td>
  
                </tr>
                    </form>
                <?php }
            }
            ?>
            </tbody>
           <td> <h6><strong> Total = <?= $total?></strong></h6></td>
            <!-- confirm order  -->
            <form method="post" action="confirmOrder.php">
            <td><button type="submit" name=""  class="btn btn-success">Confirm</button></td>
            </form>
        </table>
    </section>

    <!-- <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.25</strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section> -->

    
    <?php include "footer.php" ?>

