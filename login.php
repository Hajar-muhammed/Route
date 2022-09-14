<?php
include "header.php";
include "navbar.php";
?>

            
              <div class="card-body px-5 py-5" style="background-color:darkgray;">
                <h3 class="card-title text-left mb-3">Login</h3>
                <?php
                if(isset($_GET['id'])){
                  unset($_SESSION['login']);
                }
             
      if (isset($_SESSION['wrong'])){
          ?>
         <div class="alert alert-danger"> <?php echo $_SESSION['wrong']; ?></div>
         

<?php 
        unset($_SESSION['wrong']);
          }
 ?>
                <form  method="post" action="index.php">
                  <div class="form-group">
                    <label>email *</label>
                    <input type="email" name="email" value="<?php if ( ! empty($_COOKIE['email'] )) echo $_COOKIE['email'];?>" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" name="password" value="<?php if ( ! empty($_COOKIE['password'] )) echo $_COOKIE['password'];?>" class="form-control p_input" >
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input"> Remember me </label> 
                        <p class="alert alert-danger">By clicking on the Remember Me button, you allow us to use cookies</p>
                    </div>
                    <a href="forgetPassword.php"  class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <?php include "footer.php" ?>


    //table user, product, cart ,, review comment , rating  = session