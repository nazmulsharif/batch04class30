<?php
  include_once('inc/header.php');
  include_once('inc/connection.php');

  $data = $conn->query("select * from model_info");
  
 
?>
<div class="container">
  <h3 class="text-center my-3 text-info">Smartphone Information</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sl</th>
        <th>Model Name</th>
        <th>Price</th>
        <th>Quantiy</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $i=1;
      while($dt = $data->fetch_assoc()){?>
        
        
      <tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $dt['model_name']?></td>
        <td><?php echo $dt['price']?></td>
        <td><?php echo $dt['quantity']?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>



</div>





















<?php include_once('inc/footer.php')?>