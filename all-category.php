<?php require 'inc/header.php'; ?>
<?php require 'inc/nav.php'; ?>
<?php require 'functions/db-confing.php'; ?>

<!-- 	<div class="page-top-info">
		<div class="container">
			<h4>Shops List</h4>
			<div class="site-pagination">
				<a href="#">Home</a> /
				<a href="#">Suppliers</a>
			</div>
		</div>
	</div> -->
<br>

		
			<section class="top-letest-product-section">
    <div class="container">
      
      <ul class="product-filter-menu">
        <?php 
          
          $img_cat = "SELECT * FROM categories WHERE status='1'";
          $run = mysqli_query($conn, $img_cat);
          while($row = mysqli_fetch_assoc($run))
          {
            $img = $row['img'];
            echo "<li class='text-center'><a href='category.php?id=".$row['id']."'><img src='admin/img/cat/$img' height='100px' width='100px'></a>".$row['cat_name']."</li>"

            ;
          }
         ?>

      </ul>
  </div>
</div>
 
      
 <!-- <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div> -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require 'inc/footer.php'; ?>