<?php

error_reporting(E_PARSE | E_ERROR);

$active='Shop';
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

            Shop
            
          </li>

          <li>
            
            <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>

          </li>

          <li><?php echo $pro_title; ?></li>
          
        </ul>
        
      </div>

      <div class="col-md-3">

         <?php

   include("includes/sidebar.php");

   ?>
        
      </div>

     <div class="col-md-9">

      <div id="productMain" class="row">

        <div class="col-sm-6">

          <div id="mainImage">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">

                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                
              </ol>

              <div class="carousel-inner">

                <div class="item active">

                  <center>
                    
                    <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Fish 1">

                  </center>
                  
                </div>

                <div class="item">

                  <center>
                    
                    <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Fish 2">

                  </center>
                  
                </div>

                <div class="item">

                  <center>
                    
                    <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Fish 3">

                  </center>
                  
                </div>
                
              </div>

              <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>

              </a>

              <a href="#myCarousel" class="right carousel-control" data-slide="next">
                
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                
              </a>
              
            </div>
            
          </div>
          
        </div>

        <div class="col-sm-6">

          <div class="box">

            <h1 class="text-center"><?php echo $pro_title; ?></h1>

            <br>

            <?php add_cart(); ?>

            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
            
              <div class="form-group">

                <label for="" class="col-md-5 control-label">Fish Quantity</label>
                
                <div class="col-md-7">

                  <input type="number" name="product_qty" id="" class="form-control" value="1" min="1">
                  
                </div>

              </div>


              <p class="price"><?php echo $pro_price; ?> LKR (Unit Price)</p>

              <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button></p>

            </form>
            
          </div>

          <div class="row" id="thumbs">

            <div class="col-xs-4">

              <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                
                <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Fish 1" class="img-responsive">

              </a>
              
            </div>

            <div class="col-xs-4">

              <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                
                <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Fish 2" class="img-responsive">

              </a>
              
            </div>

            <div class="col-xs-4">

              <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                
                <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Fish 3" class="img-responsive">

              </a>
              
            </div>
            
          </div>
          
        </div>
        
      </div>

      <div class="box" id="details">

        <h4>Fish Facts</h4>

        <p>
          <?php echo $pro_desc; ?>
        </p>

   

        <hr>
        
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