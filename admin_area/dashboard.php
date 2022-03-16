<?php

if (!isset($_SESSION['admin_email'])) {

	echo "<script>window.open('login.php','_self')</script>";

} else{

?>

<div class="row">

	<div class="col-lg-12">

		<h1 class="page-header"> Dashboard </h1>

		<ol class="breadcrumb">

			<li class="active">

				<i class="fa fa-dashboard"></i> Dashboard
				
			</li>
			
		</ol>
		
	</div>
	
</div>

<br>

<div class="row" style="margin-left: 35px;">

	<div class="col-lg-3 col-md-6">

		<div class="panel panel-primary">

			<div class="panel-heading">

				<div class="row">

					<div class="col-xs-3">

						<i class="fa fa-tasks fa-5x"></i> 
						
					</div>

					<div class="col-xs-9 text-right">

						<div class="huge"> <?php echo $count_products; ?> </div>

							<div> Products </div>
						
					</div>
					
				</div>
				
			</div>

			<a href="index.php?view_products">

				<div class="panel-footer">

					<span class="pull-left"> 

						View Details 

					</span>

					<span class="pull-right"> 

						<i class="fa fa-arrow-circle-right"></i> 

					</span>

					<div class="clearfix"></div>
					
				</div>

			</a>
			
		</div>
		
	</div>

	<div class="col-lg-3 col-md-6">

		<div class="panel panel-green">

			<div class="panel-heading">

				<div class="row">

					<div class="col-xs-3">

						<i class="fa fa-users fa-5x"></i> 
						
					</div>

					<div class="col-xs-9 text-right">

						<div class="huge"> <?php echo $count_customers; ?> </div>

							<div> Customers </div>
						
					</div>
					
				</div>
				
			</div>

			<a href="index.php?view_customers">

				<div class="panel-footer">

					<span class="pull-left"> 

						View Details 

					</span>

					<span class="pull-right"> 

						<i class="fa fa-arrow-circle-right"></i> 

					</span>

					<div class="clearfix"></div>
					
				</div>

			</a>
			
		</div>
		
	</div>

</div>

<div class="row" style="margin-left: 35px;">

	<div class="col-lg-3 col-md-6">

		<div class="panel panel-orange">

			<div class="panel-heading">

				<div class="row">

					<div class="col-xs-3">

						<i class="fa fa-tags fa-5x"></i> 
						
					</div>

					<div class="col-xs-9 text-right">

						<div class="huge"> <?php echo $count_p_categories; ?> </div>

							<div> Product Categories </div>
						
					</div>
					
				</div>
				
			</div>

			<a href="index.php?view_p_cats">

				<div class="panel-footer">

					<span class="pull-left"> 

						View Details 

					</span>

					<span class="pull-right"> 

						<i class="fa fa-arrow-circle-right"></i> 

					</span>

					<div class="clearfix"></div>
					
				</div>

			</a>
			
		</div>
		
	</div>

		<div class="col-lg-3 col-md-6">

		<div class="panel panel-red">

			<div class="panel-heading">

				<div class="row">

					<div class="col-xs-3">

						<i class="fa fa-shopping-cart fa-5x"></i> 
						
					</div>

					<div class="col-xs-9 text-right">

						<div class="huge"> <?php echo $count_pending_orders; ?> </div>

							<div> Orders </div>
						
					</div>
					
				</div>
				
			</div>

			<a href="index.php?view_orders">

				<div class="panel-footer">

					<span class="pull-left"> 

						View Details 

					</span>

					<span class="pull-right"> 

						<i class="fa fa-arrow-circle-right"></i> 

					</span>

					<div class="clearfix"></div>
					
				</div>

			</a>
			
		</div>
		
	</div>
	
</div>

<div class="row">


	<div class="col-md-4" style="float: right; margin-top: -325px; margin-right: 70px;" >

	<div class="panel">

		<div class="panel-body">

			<div class="mb-md thumb-info">

				<img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">

				<div class="thumb-info-title">

					<span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
					<span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
					
				</div>
				
			</div>

			<br/><br/>

			<div class="mb-md">

				<div class="widget-content-expanded">

					<i class="fa fa-user"> </i> <span> Email: </span><?php echo $admin_email; ?> <br/>
					<i class="fa fa-flag"> </i> <span> Country: </span> <?php echo $admin_country; ?> <br/>
					<i class="fa fa-envelope"> </i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/>

				</div>

				<!--<hr class="dotted short">

			<h5 class="text-muted"> About Me </h5>

			<p>

				<?php echo $admin_about; ?> 

		    </p>-->
				
			</div>
			
		</div>
		
	</div>

</div>
	
</div>

<?php

}

?>