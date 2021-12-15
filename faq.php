<?php require 'inc/header.php'; ?>
<?php require 'inc/nav.php'; ?>
<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h3>FAQ</h3>

						<div id="accordion" class="accordion-area">
						<?php 
						$fq = "SELECT * FROM faq";
						$run= mysqli_query($conn,$fq);
						while($rowww = mysqli_fetch_assoc($run))
						{
							$q = $rowww['question'];
							$a = $rowww['answer'];

							?>
							<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><?php echo $q; ?></button>
							</div>
							<div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="panel-body">
								<p><?php echo $a; ?></p>
							</div>
							</div>
						</div>
							<?php
						}
					 ?>
							<br><br><br><br><br><br><br><br><br>
					</div>
					</div>
					<br><br><br><br><br>
					<br><br><br><br><br>
				</div>
				<br>
				</div>
			</div>
		</div>
	</section>
<?php require 'inc/footer.php'; ?>