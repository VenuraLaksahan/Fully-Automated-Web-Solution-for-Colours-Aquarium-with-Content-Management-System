<div class="box">

	<?php

	$session_email = $_SESSION['customer_email'];

	$select_customer = "select * from customers where customer_email='$session_email'";

	$run_customer = mysqli_query($con,$select_customer);

	$row_customer = mysqli_fetch_array($run_customer);

	$customer_id = $row_customer['customer_id'];

	$customer_name = $row_customer['customer_name'];

	$customer_image = $row_customer['customer_image'];

	 ?>

	<h4 class="text-center"> Welcome: <i><strong><?php echo $customer_name ?></strong></i></h4>

	<p class="lead text-center">
		
		<P class="text-center buttons"> You have some unfinished order(s): &nbsp <a href="order.php?c_id=<?php echo $customer_id; ?>" 
			class="btn btn-danger">  <i class="fa fa-chevron-right"></i> Proceed Checkout </a>
		</P>

	</p>

	<br>

	<?php

	if(!isset($_SESSION['customer_email'])){

		} else{

			echo "

			<a href='customer/my_account.php' class='btn btn-success' style= 'margin-left: 320px; margin-top: -20px;'>

			Your Account <i class='fa fa-chevron-right'></i> 

			</a>

			";

			}

		?>
	
</div>