<?php

$active='Join Us';
include("includes/header.php");

?>

<!DOCTYPE html>
<html>
<body>

   <div id="content">

    <div class="container">
      
      <div class="col-md-12">

        <ul class="breadcrumb">

          <li>

            <a href="index.php">Home</a>
            
          </li>

          <li>

            Join Us
            
          </li>
          
        </ul>
        
      </div>

      <div id="cart" class="col-md-12">

        <div class="box">

            <h2>Supplier Buying Prices</h2>

            <p class="text-muted">The prices may subjected to alterations without any prior notice.</p>

            <br>

            <div class="table-responsive">

              <table class="table table-striped table-hover">

                <thead>

                  <tr>

                    <th>Category</th>

                    <th>Size</th>

                    <th>Unit Price</th>
                    
                  </tr>
                  
                </thead>

                <tbody>

              <?php

              $get_sup = "select * from supplier";

              $run_sup = mysqli_query($con,$get_sup);

              while($row_sup=mysqli_fetch_array($run_sup)){

                $category = $row_sup['category'];

                $size = $row_sup['size'];

                $unit_price = $row_sup['unit_price'];
            
              ?>

              <tr>

                <td> <?php echo $category; ?> </td>
                <td> <?php echo $size; ?> </td>
                <td> <?php echo $unit_price; ?> LKR </td>
                
              </tr>

              <?php  }  ?>
              
            </tbody>
                
              </table>
              
            </div>
          
        </div>
        
      </div>

    </div>
     
   </div>

      <?php

   include("includes/footer.php");

   ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>

</body>
</html>