<?php 
	require ('../../config.php');

	$error = ""; $response = ""; $alert='';$page='';
	if (isset($_SESSION['error'])) {
		$error = $_SESSION['error'];
		$alert = 'alert-danger text-white';
		unset($_SESSION['error']);
	}
	if(isset($_SESSION['response'])){
		$response = $_SESSION['response'];
		$alert = 'alert-success text-white';
		unset($_SESSION['response']);
	}
	if (isset($_GET['page'])) {
		$page = 'reg';
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<section >
		<div class="container">
			<div class="row">
				<?php if($page == 'reg'): ?>
				<div class="col">
					<h1 class="text-primary">Registration</h1>
					<p class="alert  alert-dismissible <?php echo $alert; ?>"><?php echo $error; echo $response; ?></p>
					<form action="processor.php" method="POST">
						<div class='form-group'>
							<label>Email</label>
							<input type="email" name="email">
						</div>
						<div class='form-group'>
							<label>Password</label>
							<input type="password" name="password">
						</div>
						<div class='form-group'>
							<label>Confirm Password</label>
							<input type="confirm" name="password">
						</div>
						<button class="btn btn-success" type="submit" name="register" value="<?php echo TOKEN; ?>">Register</button>
					</form>	
				</div>
			<?php endif; ?>



				<?php if($page !== 'reg'): ?>
				<div class="col">
					<h1 class="text-primary">Login</h1>
					<p class="alert  alert-dismissible <?php echo $alert; ?>"><?php echo $error; echo $response; ?></p>
					<form action="processor.php" method="POST">
						<div class='form-group'>
							<label>Email</label>
							<input type="email" name="email">
						</div>
						<div class='form-group'>
							<label>Password</label>
							<input type="password" name="password">
						</div>

						<button class="btn btn-success" type="submit" name="register" value="<?php echo TOKEN; ?>">Register</button>
					</form>	
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

</body>
</html>