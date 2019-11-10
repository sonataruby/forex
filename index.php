<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Magic AI Bot Render Serial</title>
  </head>
  <body>
  	<div class="container">
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
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  
		  
		  <button type="submit" class="btn btn-primary">Render Mac Serial</button>
		</form>
  	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>