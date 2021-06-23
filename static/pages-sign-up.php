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
									<form method="post" enctype="multipart/form-data" action="php/register_user.php">
										<div class="mb-3">
											<label class="form-label">Nome:</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Cognome:</label>
											<input class="form-control form-control-lg" type="text" name="surname" placeholder="Enter your surnname" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Email:</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Username:</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter username" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Password:</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Scegli un avatar: </label>
											<input type="file" name="avatar" accept="image/*" class="form-control"/>
										</div>
										<div class="mb-3">
											<label class="form-label">Scegli un ruolo:</label>
											<select name="role" id="role" class="form-select mb-3">
												<option value="coach">Allenatore</option>
												<option value="manager">Club Manager</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Scrivi una parola che ti piace: (domanda di sicurezza)</label>
											<input class="form-control form-control-lg" type="text" name="securityAnswer" placeholder="Enter answer" required/>
										</div>
										<div class="text-center mt-3">
											<!--<a href="dashboard.php" class="btn btn-lg btn-primary">Sign up</a>!-->
											<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
									</form>
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