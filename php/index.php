<?php include('server.php'); 
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<h2>Welcome User</h2>
	</div>
	
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="alert alert-success">
				<h3>
					<?php
						echo $_SESSION['success']; 
					?>
				</h3>
			</div>
				
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <br><strong><?php echo $_SESSION['username'] ?></strong></p>
			<p>
				<button type="button" class="btn btn-info" >
					<a href="add.php" style="text-decoration:none;color:white" >ADD YOUR EXPENSES</a>
				</button>
				<button type="button" class="btn btn-info">
					<a href="chart.php" style="text-decoration:none;color:white" >VIEW YOUR EXPENSES</a>
				</button>
					
			</p>
			<p>
				<button type="button" class="btn btn-info" >
					<a href="limit.php" style="text-decoration:none;color:white" >Edit Limit</a>
				</button>
					
			</p>
			<p>
				<button type="button" class="btn btn-danger">
					<a href="login.php"  style="text-decoration:none;color:white" >Logout</a>
				</button>
					
			</p>
		<?php endif ?>
	</div>
</body>
</html>
