<?php
	session_start();
    if (!isset($_SESSION["email"])) {
		header("location: forgotPasswordRecovery.php");
	}
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
											<label class="form-label">Nuova password</label>
											<input class="form-control form-control-lg" type="password" name="newpass" placeholder="Enter your password" required/>
										</div>
                                        <div class="mb-3">
											<label class="form-label">Ripeti nuova password</label>
											<input class="form-control form-control-lg" type="password" name="confnewpass" placeholder="Enter your password" required/>
										</div>
										<div class="text-center mt-3">
											<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Reset</button>
											<!--
											<a href="index.html" class="btn btn-lg btn-primary">Sign in</a>
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>                               

									<?php
                                        $email = $_SESSION['email'];
										// Used for connect to the database called "sito"
										$conn = mysqli_connect("localhost","root","","xeos");

										// When submit is pressed, it assigne to username and password variables what you have written in form inputs
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$newpassword = $_POST['newpass'];
                                            $confpassword = $_POST['confnewpass'];


                                            $uppercase = preg_match('@[A-Z]@', $newpassword);
                                            $lowercase = preg_match('@[a-z]@', $newpassword);
                                            $number = preg_match('@[0-9]@', $newpassword);
                                            $specialChars = preg_match('@[^\w]@', $newpassword);
                                
                                            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newpassword) < 8) {                                                 
												echo "<h5 class='notification text-danger mt-3'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character</h5>";
											}else {                                             
												if($newpassword == $confpassword){      
                                                    $users = "UPDATE users SET Password = '$newpassword' WHERE Email = '$email'";
												    $result = mysqli_query($conn, $users);                                                                  
                                                    header("Location: pages-sign-in.php"); 
                                                    exit();                                            
                                                    mysqli_close($conn);
                                                }else  {
													echo "<h5 class='notification text-danger mt-3'>Passwords must be the same</h5>";												   
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