<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="stylesheet" type="text/css" href='css/app.css?v=<%= DateTime.Now.Ticks %>'/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Sign In | AdminKit Demo</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required/>
											<small>
												<a href="forgot-password-recovery.php">Forgot password?</a>
											</small>
										</div>
										<div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													Remember me next time
												</span>
											</label>
										</div>
										<div class="text-center mt-3">
											<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Login</button>
											<!--
											<a href="index.html" class="btn btn-lg btn-primary">Sign in</a>
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>

									<?php
										$username = $password = "";
										// Used for connect to the database called "sito"
										$conn = mysqli_connect("localhost","root","","xeos");

										// When submit is pressed, it assigne to username and password variables what you have written in form inputs
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$username = $_POST["username"];
											$password = $_POST["password"];

											if (!empty($username) && !empty($password)) {
												$users = "SELECT * FROM users WHERE Username = '$username' and Password = '$password'";
												$result = mysqli_query($conn, $users);

												if (mysqli_num_rows($result) > 0) {
													$_SESSION['username']=$username;
													header("Location: dashboard.php"); 
													exit();
												}else {
													echo "<p class='text-danger text-center mt-3'>Username or password incorrect</p>";
												}
												mysqli_close($conn);
											}else {
												echo "<p class='text-danger text-center mt-3'>Please compile all inputs</p>";
												mysqli_close($conn);
											}
										}

										// If there is an error connecting to database, exit 
										if (mysqli_connect_errno()) {
											echo "Failed to connect to MySQL: " . mysqli_connect_error();
											exit();
										}
									?>


								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>