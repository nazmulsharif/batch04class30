<?php
  include_once('inc/header.php');
  
 
?>

<div class="container mt-5">
	<form action="" class="w-50 m-auto">
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Enter member name">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="job" placeholder="enter job title">
		</div>
		<div class="form-group">
			<input type="file" class="form-control" name="image">
		</div>
		<div class="form-group">
			<textarea name="desc" id=""class="form-control" rows="10" placeholder="enter description"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" name="submit">
		</div>
	</form>
</div>






<?php include_once('inc/footer.php')?>