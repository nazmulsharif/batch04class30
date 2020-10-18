<?php
  include_once('inc/header.php');
  include_once('inc/connection.php');
  if(isset($_POST['submit'])){
   $model_name = $_POST['model_name'];
   $price = $_POST['price'];
   $quantity = $_POST['quantity'];
   if(empty($model_name) || empty($price) || empty($quantity)){
    
       $error =  "Field must not be empty";
   }
   else{
    $conn->query("insert into model_info(model_name, price, quantity)values('$model_name',$price,$quantity)");
    $success = "Data is inserted successfully";

   }
     
    
  
  }



?>
<div class="container mt-5">
  <?php
    if(isset($error)){
      echo "<h3 class='alert alert-danger text-center'>".$error."</h3>";
    }
    if(isset($success)){
      echo "<h3 class='alert alert-success text-center'>".$success."</h3>";
    }
  ?>
  <form action="" method="post" class="w-50 m-auto">
    <div class="form-group">
      <input type="text" class="form-control" name="model_name" placeholder="Enter model name">
    </div>
     <div class="form-group">
      <input type="text" class="form-control" name="price" placeholder="enter price of this model">
    </div>
     <div class="form-group">
      <input type="text" class="form-control" name="quantity" placeholder="enter quantity">
    </div>
     <div class="form-group">
      <input type="submit" class="btn btn-success" value="add" name="submit">
    </div>
  </form>


</div>


















<?php include_once('inc/footer.php')?>