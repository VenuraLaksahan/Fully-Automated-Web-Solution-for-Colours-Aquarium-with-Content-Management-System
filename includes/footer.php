<div id="footer">

	<div class="container">

		<div class="row">

			<div class="col-sm-6 col-md-3">

				<h4>Pages</h4>

				<ul>

					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
					<li><a href="fishfacts.php">Fish Facts</a></li>
			
					
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">
				
			</div>

			<div class="com-sm-6 col-md-3">

				<h4>Top Product Categories</h4>

				<ul>
					
					<?php

					$get_p_cats = "select * from product_categories";

					$run_p_cats = mysqli_query($con,$get_p_cats);

					while($row_p_cats = mysqli_fetch_array($run_p_cats)){

						$p_cat_id = $row_p_cats['p_cat_id'];

						$p_cat_title = $row_p_cats['p_cat_title'];

						echo "

						<li>

						<a href='shop.php?p_cat=$p_cat_id'>

						$p_cat_title

						</a>

						</li>

						";
					}

					?>

				</ul>

				<hr class="hidden-md hidden-lg">
				
			</div>

			<div class="col-sm-6 col-md-3">

				<h4>Find Us</h4>



				<p>
					<a><strong>Colours Aquarium</strong></a>
					<a><br/>No. 174, Main Street, Ratnapura</a>
					<a><br/>+94712222230</a>
					<a><br/>coloursaquarium@gmail.com</a>

				</p>

				<a href="contact.php">Check Our Contact Page</a>

				<hr class="hidden-md hidden-lg">
				
			</div>

			<div class="col-sm-6 col-md-3">

				<h4>User Section</h4>

				<ul>
					
					<?php 

                           if(!isset($_SESSION['customer_email'])){

                            echo "<a href='checkout.php'>Login</a>";

                           } else{

                            echo"<a href='customer/my_account.php?my_orders'>My Account</a>";

                           }

                    ?>

					<li><a href="customer_register.php">Register</a></li>

				</ul>

				
			</div>
			
		</div>
		
	</div>
	
</div>

<div id="copyright">

	<div class="container">

		<div class="col-md-6">

			<p class="pull-left">&copy; 2021 Colours Aquarium All Rights Reserved</p>
			
		</div>
		
	</div>
	
</div>