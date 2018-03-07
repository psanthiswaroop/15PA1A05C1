<?php
	include ('server.php');
	session_start();
	$uid = $_SESSION['uid'];
	if(isset($_POST['submit'])){
		echo $limit = $_POST['limit'];
		$qry1 = "UPDATE user SET monthly_limit = $limit WHERE uid=$uid;";
		mysqli_query($db,$qry1);
	}
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
		<h2>Edit Limit</h2>
	</div>

		<form method="post">
			<div class="input_group">
				<label>Monthly limit</label>
				<input type="text" name="limit">
			</div>
			<div class="input_group">
			<button type="submit" name="submit" class="btn">Submit</button>
		</div>
		<div class="input_group">
			<a href="index.php">Back</a>
		</div>
		</form>
</body>
</html>
