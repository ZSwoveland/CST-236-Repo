<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'ProductCreation.php';

$productC = new ProductCreation();

?>


<!DOCTYPE html>
<html>
<head>


</style>
</head>
<body>
<center>Please click on button to get product image</center>

<form action="ProductView.php" method="post">
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <input name = "product1" type="submit">
       
     <label>Product Description: </label>
     
     
    <?php 
    $productC->imgShow("product1",0);
    echo $productC->arrayProducts(0)->getName() . "<br>";
    echo $productC->arrayProducts(0)->getDescription(). "<br>";
    
    ?>
  </div>
  <div class="column" style="background-color:#bbb;">
    <input name = "product2" type="submit">
      
     <label>Product Description: </label>
     <?php 
     $productC->imgShow("product2",1);
     echo $productC->arrayProducts(1)->getName(). "<br>";
     echo $productC->arrayProducts(1)->getDescription(). "<br>";
    ?>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#ccc;">
     <input name = "product3" type="submit">
  
     <label>Product Description: </label>
     <?php 
     $productC->imgShow("product3",2);
     echo $productC->arrayProducts(2)->getName(). "<br>";
     echo $productC->arrayProducts(2)->getDescription(). "<br>";
    
    ?>
     
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product4" type="submit">
      
     <label>Product Description: </label>
     <?php 
     $productC->imgShow("product4",3);
     echo $productC->arrayProducts(3)->getName(). "<br>";
     echo $productC->arrayProducts(3)->getDescription(). "<br>";
    
    ?>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
      <input name = "product5" type="submit">
    
     <label>Product Description: </label>
     <?php 
     $productC->imgShow("product5",4);
     echo $productC->arrayProducts(4)->getName(). "<br>";
     echo $productC->arrayProducts(4)->getDescription(). "<br>";
    
    ?>
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product6" type="submit">

     <label>Product Description: </label>
     <?php 
     $productC->imgShow("product6",5);
     echo $productC->arrayProducts(5)->getName(). "<br>";
     echo $productC->arrayProducts(5)->getDescription(). "<br>";
    
    ?>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
      <input name = "product7" type="submit">
    
     <label>Product Description: </label>
      <?php 
      $productC->imgShow("product7",6);
      echo $productC->arrayProducts(6)->getName(). "<br>";
      echo $productC->arrayProducts(6)->getDescription(). "<br>";
    
    ?>
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product8" type="submit">
        
     <label>Product Description: </label>
      <?php 
      $productC->imgShow("product8",7);
      echo $productC->arrayProducts(7)->getName(). "<br>";
      echo $productC->arrayProducts(7)->getDescription(). "<br>";
    
    ?>
  </div>
</div>


<div class="row">
  <div class="column" style="background-color:#ccc;">
      <input name = "product9" type="submit">
     
     <label>Product Description: </label>
     <?php 
     $productC->imgShow("product9",8);
     echo $productC->arrayProducts(8)->getName(). "<br>";
     echo $productC->arrayProducts(8)->getDescription(). "<br>";
    
    ?>
  </div>
  <div class="column" style="background-color:#ddd;">
      <input name = "product10" type="submit">
    
     <label>Product Description: </label>
      <?php 
      $productC->imgShow("product10",9);
      echo $productC->arrayProducts(9)->getName(). "<br>";
      echo $productC->arrayProducts(9)->getDescription(). "<br>";
    
    ?>
  </div>
</div>

</form>



</script>
</body>
</html>