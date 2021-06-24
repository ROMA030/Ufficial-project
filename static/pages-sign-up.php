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
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="stylesheet" type="text/css" href='css/app.css?v=<%= DateTime.Now.Ticks %>' />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Register</h1>
							<p class="lead">
								Start creating your profile.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" enctype="multipart/form-data">
										<div class="mb-3">
											<label class="form-label">Nome:</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Cognome:</label>
											<input class="form-control form-control-lg" type="text" name="surname" placeholder="Enter your surnname" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Email:</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Username:</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter username" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Password:</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Scegli un avatar: </label>
											<input type="file" name="avatar" accept="image/*" class="form-control" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Scegli un ruolo:</label>
											<select name="role" id="role" class="form-select mb-3" required>
												<option value="coach">Allenatore</option>
												<option value="manager">Club Manager</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Scrivi una parola che ti piace: (domanda di sicurezza)</label>
											<input class="form-control form-control-lg" type="text" name="securityAnswer" placeholder="Enter answer" required />
										</div>
										<div class="text-center mt-3">
											<!--<a href="dashboard.php" class="btn btn-lg btn-primary">Sign up</a>!-->
											<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
									</form>
									<?php
										$conn = mysqli_connect("localhost","root","","xeos");
										if (mysqli_connect_errno()) {
											echo "Failed to connect to MySQL: " . mysqli_connect_error();
											exit();
										}
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$name = $_POST["name"];
											$surname = $_POST["surname"];
											$email = $_POST["email"];
											$username = $_POST["username"];
											$password = $_POST["password"];
											$usertype = $_POST['role'];
											$securityAnswer = $_POST['securityAnswer'];

											$avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));

											// If forum inputs aren't empty 
											if (!empty($name) && !empty($surname) && !empty($email) && !empty($username) && !empty($password) && !empty($securityAnswer)) {
																				
												// Validate password strength
												$uppercase = preg_match('@[A-Z]@', $password);
												$lowercase = preg_match('@[a-z]@', $password);
												$number = preg_match('@[0-9]@', $password);
												$specialChars = preg_match('@[^\w]@', $password);

												if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
													//echo "<p class='text-danger text-center mt-3'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character</p>";
													echo "<h5 class='notification text-danger mt-3'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character</h5>";             											
												}else{
													$checkUser = "SELECT * FROM users WHERE Username = '$username'";
													$checkResult = mysqli_query($conn, $checkUser);
													// If number of rows in result variable is major than 0
													if (mysqli_num_rows($checkResult) > 0) {
														echo "<h5 class='notification text-danger mt-3'>Username already exists</h5>";                  
													}else {
														$users = "INSERT INTO users(Name, Surname, Email, Username, Password , Avatar, UserType, Risposta) VALUES ('$name', '$surname', '$email', '$username', '$password' , '$avatar', '$usertype','$securityAnswer')";
														$result = mysqli_query($conn, $users);					
														header("Location: pages-sign-in.php");
													}
													mysqli_close($conn);
												}
											}                
										}
									?>
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