<div class="container">

<?php if($data){ ?>
  <div class="alert alert-success" role="alert">
    <b>Your Code :</b> <?php echo @$data->shadown_code;?>
  </div>
<?php } ?>

<h1>Render Shadown Code</h1>
<form method="post" action="/shadown.html">
  <div class="form-group">
    <label for="exampleInputEmail1">MT5 ID</label>
    <input type="text" name="mt5id" required="true" class="form-control" id="exampleInputEmail1">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail2">Tên bạn</label>
    <input type="text" name="name" required="true" class="form-control" id="exampleInputEmail2">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail3">Email address</label>
    <input type="email" name="email" required="true" class="form-control" id="exampleInputEmail3">
  </div>
  
  <button type="submit" class="btn btn-primary">Get Shadown Code</button>
</form>
</div>