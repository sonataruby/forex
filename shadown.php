<?php if(isset($_POST["mt5id"]) && $_POST["mt5id"]){ ?>
		<div class="alert alert-success" role="alert">
	  <b>Your Code : </b> <?php echo sha1($_POST["mt5id"]);?>
	</div>
	<?php }else if(isset($_POST["mt5id"]) && $_POST["mt5id"] == ""){?>
		<div class="alert alert-danger" role="alert">
	  <b>Error: </b> MT5 ID Empty
	</div>
	<?php } ?>
	<h1>Enter MT5 ID</h1>
	<form method="post">
	  <div class="form-group">
    <label for="exampleInputMt51">MT5 ID</label>
    <input type="text" name="mt5id" class="form-control" id="exampleInputMt51" placeholder="MT5 ID">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Địa chỉ email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Khởi động tạo code</button>
</form>