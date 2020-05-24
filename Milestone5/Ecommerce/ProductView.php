<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);



include 'ProductCreation.php';

$productC = new ProductCreation();

?>


<!DOCTYPE html>
<html>
<head>


</style>
</head>
<body>
<center>Please click on button to get product image</center>

<form action="ProductView.php" method="get">
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <input name = "product1" type="button">
       
     <label>Product Description: </label><br>
    <?php 
    echo $productC->product1->getDescription();
    
    ?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <input name = "product2" type="button">
      
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product2->getDescription();
    
    ?>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#ccc;">
     <input name = "product3" type="button">
  
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product3->getDescription();
    
    ?>
     
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product4" type="button">
      
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product4->getDescription();
    
    ?>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
      <input name = "product5" type="button">
    
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product5->getDescription();
    
    ?>
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product6" type="button">

     <label>Product Description: </label><br>
     <?php 
    echo $productC->product6->getDescription();
    
    ?>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
      <input name = "product7" type="button">
    
     <label>Product Description: </label><br>
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product8" type="button">
        
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product8->getDescription();
    
    ?>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
      <input name = "product9" type="button">
     
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product9->getDescription();
    
    ?>
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product10" type="button">
    
     <label>Product Description: </label><br>
     <?php 
    echo $productC->product10->getDescription();
    
    ?>
  </div>
</div>

</form>



</script>
</body>
</html>