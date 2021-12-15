<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/nav.php'; ?>
<?php require_once 'functions/db-confing.php'; ?>
<style>
  .alig {
    margin-left: 20px
  }
</style>

<hr><?php 
  if(isset($_GET['id']))
  {
    $pid = $_GET['id'];
    $kid = "SELECT * FROM seller WHERE id = '$pid'";
    $sn = mysqli_query($conn, $kid);
    
    while($row = mysqli_fetch_array($sn))
    {
       $img = $row['shop_img'];
        $shop = $row['shop'];
        $city = $row['city'];
        $mail = $row['email'];
        $dt = $row['pincode'];

        ?>
            <section class="hero-section">
    
      <div class="hs-item set-bg" data-setbg="assets/img/shop_image/<?php echo $img; ?>">
        <br><br><br><br><br>
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>At  : <?php echo $dt; ?></span>
              <h2><?php echo $shop; ?></h2>
              <p><?php echo $city ?></p>
            </div>
          </div>
        <!--   <div class="offer-card text-white">
            <span>from <?php  $city ?></span>
            <h2>$29</h2>
            <p>SHOP NOW</p>
          </div> -->
          &nbsp;
          &nbsp;
          &nbsp;

        </div>
      </div>
        <?php
    }
  }
 ?>
<section class="top-letest-product-section">
    <div class="container">
      

      </ul>
      <br>
      <div class="section-title">
        <h2>Recently Added </h2>
      </div>

      <div class="product-slider owl-carousel">
        
        <?php 
        $sle = "SELECT * FROM products";
        $dn = mysqli_query($conn, $sle);
        // $nm = mysqli_num_rows($dn); 
          while($row=mysqli_fetch_assoc($dn))
          {
            ?>
            <div class='product-item'>
            <div class='pi-pic'>
              <a href='product.php?p_id=<?php  echo $row['p_id']; ?>'><img src='admin/img/<?php echo $row['img']; ?>'></a>
                <div class='pi-links'>
                  <a href='?add_cart=<?php  echo $row['p_id']; ?>' class='add-card'><i class='flaticon-bag'></i><span>ADD TO CART</span></a>
                  <a href="wishlist.php?wish=<?php echo $row['p_id']; ?>" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
              <div class="pi-text">
                <h6>₹<?php echo $row['price']; ?></h6>
                <a href='product.php?p_id=<?php  echo $row['p_id']; ?>'><p><?php echo $row['product_name']; ?></p></a>
            </div>
          </div>
          <?php

          }

        ?>


        </div>
      </div>

    </div>
  </section>
            <hr>
            <h3 class="text-center">VENDOR INFORMATION</h3> 
            <hr>   
            
        </div>
  <br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<br>

 <?php require_once 'inc/footer.php'; ?>