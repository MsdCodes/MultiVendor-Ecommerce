<?php 
		session_start();
		require_once 'functions/db-confing.php';


		if(isset($_GET['order_id']))
		{
			$order_id = $_GET['order_id'];
		}
?>
<?php 
	
 ?>
<?php require_once("inc/header.php"); ?>
<?php require_once("inc/nav.php"); ?>

        <!-- ==============================================
	    Credit Card Payment Section
	    =============================================== -->		
		<section class="credit-card">
		 <div class="container">
		  
			<div class="card-holder">
			  <div class="card-box bg-news">
		       <div class="row">
				<div class="col-lg-6">
				 <div class="img-box">
				   <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid" />
				 </div>
				</div>
				<div class="col-lg-6">
				
				<form action="confirm_payment.php?update=<?php echo $order_id; ?>" method="POST">
				  <div class="card-details">
					<h3 class="title">Confirm Your Payment</h3>
					<div class="row">
					  <div class="form-group col-sm-7">
					   <div class="inner-addon right-addon">
						<label for="card-holder">Invoice No.</label>
                        <i class="far fa-user"></i>
						<input id="card-holder" type="text" name="invoice_no" value="<?php echo $invoice_no; ?>" class="form-control" placeholder="Invoice No." aria-label="Card Holder" aria-describedby="basic-addon1">
					   </div>	
					  </div>
					   <div class="form-group col-sm-4">
						<label for="cvc">Amount</label>
						<input id="cvc" type="text" class="form-control" name="amount" placeholder="Amount " aria-label="Card Holder" value="<?php echo $amount; ?>" aria-describedby="basic-addon1">
					  </div>
					  <div class="form-group col-sm-8">
					   <div class="inner-addon right-addon">
						<label for="card-number">Transaction ID</label>
                        <i class="far fa-credit-card"></i>
						<input id="card-number" type="text" class="form-control" name="transaction_id" placeholder="Transaction ID" aria-label="Card Holder" aria-describedby="basic-addon1">
					   </div>	
					  </div>
					  <div class="form-group col-sm-4">
						<label for="cvc">date</label>
						<input id="cvc" type="text" class="form-control" placeholder="Date" name="pay_date" aria-label="Card Holder" aria-describedby="basic-addon1">
					  </div>
					<div class="form-group col-sm-4">
						<label for="cvc">payment method</label>
						<select name="pay_mode" class="form-control">
							<option>Select Payment Method</option>
							<option>Paypal</option>
							<option>Offline</option>
						</select>
					  </div>
					  <div class="form-group col-sm-8">
					   <div class="inner-addon right-addon">
						<label for="card-number">EasyPaisa Code</label>
                        <i class="far fa-credit-card"></i>
						<input id="card-number" type="text" class="form-control" placeholder="EasyPaisa Code" aria-label="Card Holder" aria-describedby="basic-addon1">
					   </div>	
					  </div>
					  <div class="form-group col-sm-12">
						<button type="submit" name="payment_now" class="btn btn-primary btn-block">Proceed</button>
						<button type="reset" class="btn btn-danger btn-block">Cancel</button>
					  </div>
					</div>
				  </div>
				</form>				
				
				</div><!--/col-lg-6 --> 
		  
		       </div><!--/row -->
			  </div><!--/card-box -->
			</div><!--/card-holder -->		 
			
		 </div><!--/container -->
		</section>

<style type="text/css">
body{margin-top:20px;}
/* ==========================================================================
   Credit Card Payment Section
   ========================================================================== */
.credit-card{
 background-color: #f4f4f4;
  height: 100vh;
  width: 100%;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-holder {
  margin: 2em 0;
}

.img-box {
 padding-top: 20px;    
 display: flex;
 justify-content: center;
}
.card-box {
  font-weight: 800;
  padding: 1em 1em;
  border-radius: 0.25em;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.bg-news {
  background: -webkit-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
  background: -o-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
  background: -moz-linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
  background: linear-gradient(70deg, #f54d70 40%, #ffffff 40%);
}
.btn-primary{
 background-image: -webkit-linear-gradient(315deg, #f54d70 0%, #fd8965 100%);
background-image: -moz- oldlinear-gradient(315deg, #f54d70 0%, #fd8965 100%);
background-image: -o-linear-gradient(315deg, #f54d70 0%, #fd8965 100%);
background-image: linear-gradient(135deg, #f54d70 0%, #fd8965 100%);
-webkit-filter: hue-rotate(0deg);
filter: hue-rotate(0deg);
border: none !important;
}

.credit-card form{
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.credit-card .title{
	font-family: 'Abhaya Libre', serif;
	font-size: 1em;
	color: #2C3E50;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}
.credit-card .card-details{
	padding: 25px 25px 15px;
}

.inner-addon {
  position: relative;
}

.inner-addon .fas, .inner-addon .far {
  position: absolute;
  padding: 10px;
  pointer-events: none;
  color: #bcbdbd !important;
}
.right-addon .fas, .right-addon .far { right: 0px; top: 40px;}
.right-addon input { padding-right: 30px; }

.credit-card .card-details label{
	font-family: 'Abhaya Libre', serif;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.credit-card .card-details input[type="text"] {
	font-family: "Poppins", sans-serif;
	font-size: 16px;
	font-weight: 500;
	padding: 10px 10px 10px 5px;
	-webkit-appearance: none;
	display: block;
	background: #fafafa;
	color: #636363;
	border: none;
	border-radius: 0;
	border-bottom: 1px solid #757575;	
}
.credit-card .card-details input[type="text"]:focus { outline: none; }

.credit-card .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.credit-card .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (max-width: 768px) {
	.credit-card{
	  height: 250vh;
	  width: 100%;
	}
	.credit-card .title {
		font-size: 1.2em; 
	}

	.credit-card .row .col-lg-6 {
		margin-bottom: 40px; 
  	}
  	.credit-card .card-details {
    	padding: 40px 40px 30px; 
    }

  	.credit-card .card-details button {
    	margin-top: 2em; 
    } 
}
</style>
<?php

	if(isset($_POST['payment_now']))
	{
		$update = $_GET['update'];
		$invoice_no = $_POST['invoice_no'];
		$amount = $_POST['amount'];
		$pay_mode = $_POST['pay_mode'];
		$ref_no = $_POST['transaction_id'];
		$pay_date = $_POST['pay_date'];
	
		

		$payment = "INSERT INTO payments(invoice_no,amount,pay_mode,ref_no,pay_date) VALUES('$invoice_no','$amount','$pay_mode','$ref_no','$pay_date')";
		$pay = mysqli_query($conn, $payment);


			$payment_update = "UPDATE orders SET order_status='Complete' WHERE order_id='$update'";
			$up = mysqli_query($conn, $payment_update);
		$uptqty = "UPDATE products SET qty=qty-1 WHERE p_id='$pro_id'";
	$ty = mysqli_query($conn,$uptqty);


		if($pay)
		{
			?>
				<script>
					alert('Your Payment Has Successfull ! ');
				</script>
				<script>
					window.open('myaccount.php','_self');
				</script>
			<?php
		}
	
	}

	$delete_from_pending_orders = "DELETE FROM pending_orders WHERE order_status='Pending'";
	$d = mysqli_query($conn, $delete_from_pending_orders);

 ?>
<?php require_once("inc/footer.php"); ?>