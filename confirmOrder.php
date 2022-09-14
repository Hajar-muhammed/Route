<?php
include "header.php";
include "navbar.php";

?>
<?php
if(isset($_POST['submit'])){
    extract($_POST);
    if( empty($name) || empty($email) || empty($address) || empty($city) || empty($code) || empty($phone) || empty($payment)) {?>
        <div class="alert alert-danger" role="alert">
          All information is required!
        </div>
        <?php  
    }elseif($email != $_COOKIE['email']){?>
       <div class="alert alert-danger" role="alert">
                Please Login First!
        </div>
       <?php
    }else{?>
    <div class="alert alert-secondary" role="alert">
    Congratulations!<?= $name?>, your order has been submitted
  </div>
  <?php
  }
}
?>

<section id="cart-add" class="section-p1">
    <form>
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" name="coupon" placeholder="Enter coupon code">
            <button class="normal" type="submit" >Apply</button>
        </div>
        </form>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <form class=" col-4"  method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                name<input type="text" name="name">
               email <input type="email" name="email" >
               address<input type="text" name="address" >
               city <input type="text" name="city">
                postalCode<input type="number" name="code">
                phone<input type="text" name="phone">
                paymentType<select  name="payment">
                <option value="Cash_on_Delivery">Cash on Delivery</option>
                    <option value="Credit_Card">Credit Card</option>
                    <option value="Fawry">Fawry</option>
                </select>
                <button class="normal" name="submit" type="submit" >proceed to checkout</button>
            </form>
           
        </div>
    </section>


    <?php include "footer.php" ?>