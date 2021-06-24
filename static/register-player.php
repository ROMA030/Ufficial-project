<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
	}elseif ($_SESSION["UserType"] != "coach") {
        header("location: not-here.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href='css/app.css?v=<%= DateTime.Now.Ticks %>'/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Register player | Xeos</title>

	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">
						<img class="align-middle" src="img/photos/xeos-logo-top.png" width="130">
					</span>
				</a>

				<ul class="sidebar-nav" id="sidebarUl">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="dashboard.php">
							<i class="align-middle" data-feather="sliders"></i>
							<span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="" id="avatarImage" class="avatar img-fluid rounded me-1"/> <span class="text-dark" id="nameSurname">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1"
										data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Register a player</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Complete the form</h5>
								</div>
								<div class="card-body">
									<div class="m-sm-4">
										<form method="post" enctype="multipart/form-data">
											<div class="mb-3">
												<label class="form-label">Nome:</label>
												<input class="form-control form-control-lg" type="text" name="name"
													placeholder="Enter your name" required />
											</div>
											<div class="mb-3">
												<label class="form-label">Cognome:</label>
												<input class="form-control form-control-lg" type="text" name="surname"
													placeholder="Enter your surnname" required />
											</div>
											<div class="mb-3">
												<label class="form-label">Email:</label>
												<input class="form-control form-control-lg" type="email" name="email"
													placeholder="Enter your email" required />
											</div>
											<div class="mb-3">
												<label class="form-label">Username:</label>
												<input class="form-control form-control-lg" type="text" name="username"
													placeholder="Enter username" required />
											</div>
											<div class="mb-3">
												<label class="form-label">Password:</label>
												<input class="form-control form-control-lg" type="password" name="password"
													placeholder="Enter password" required />
											</div>
											<div class="mb-3">
												<label class="form-label">Scegli un avatar: </label>
												<input type="file" name="avatar" accept="image/*" class="form-control" required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Scrivi una parola che ti piace: (domanda di sicurezza)</label>
												<input class="form-control form-control-lg" type="text" name="securityAnswer" placeholder="Enter answer" required />
											</div>
											<div class="text-center mt-3">
												<!--<a href="dashboard.php" class="btn btn-lg btn-primary">Sign up</a>!-->
												<button type="submit" name="submit" value="Submit"
													class="btn btn-lg btn-primary">Sign up</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" target="_blank"><strong>Xeos</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" target="_blank" href="index.html#contact">Contact</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<?php
		$conn = mysqli_connect("localhost","root","","xeos");
		$user = $_SESSION['username'];
		$userName = $_SESSION['Name'];
		$userSurname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

		/*
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];
	
			$avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
	
			if (!empty($name) && !empty($surname) && !empty($email) && !empty($username) && !empty($password)) {
				
				$checkUser = "SELECT * FROM users WHERE Username = '$username'";
				$checkResult = mysqli_query($conn, $checkUser);
	
				if (mysqli_num_rows($checkResult) > 0) {
					header("location: ../pages-sign-up.php");
					echo "<p class='text-danger text-center mt-3'>Username already exists</p>";
					exit();
				}else {
					$users = "INSERT INTO users(Name, Surname, Email, Username, Password , Avatar, UserType) VALUES ('$name', '$surname', '$email', '$username', '$password' , '$avatar', 'player')";
					$result = mysqli_query($conn, $users);
					$coachPlayer = "INSERT INTO coachplayer(Coach, Player) VALUES ('$user', '$username')";
					$result2 = mysqli_query($conn, $coachPlayer);
					header("location: ../register-player.php?user=". $user);
					exit();
				}
				mysqli_close($conn);
			}
		}
		*/

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
			$usertype = "player";
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
					echo "<h5 class='notification text-danger mt-3'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character</h5>";             											
				}else{
					$checkUser = "SELECT * FROM users WHERE Username = '$username'";
					$checkResult = mysqli_query($conn, $checkUser);
					if (mysqli_num_rows($checkResult) > 0) {
						echo "<h5 class='notification text-danger mt-3'>Username already exists</h5>";                  
					}else {
						$users = "INSERT INTO users(Name, Surname, Email, Username, Password , Avatar, UserType, Risposta) VALUES ('$name', '$surname', '$email', '$username', '$password' , '$avatar', '$usertype','$securityAnswer')";
						$result = mysqli_query($conn, $users);					
						$coachPlayer = "INSERT INTO coachplayer(Coach, Player) VALUES ('$user', '$username')";
						$result2 = mysqli_query($conn, $coachPlayer);
						
					}
					mysqli_close($conn);
				}
			}                
		}
	?>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var user = "<?php echo $user; ?>";
			var name = "<?php echo $name; ?>";
			var surname = "<?php echo $surname; ?>";
			var userType = "<?php echo $userType; ?>";
			var avatar = "<?php echo $srcAvatar; ?>";
			var sidebarUl = document.getElementById("sidebarUl");

			document.getElementById("nameSurname").innerHTML = name + ' ' + surname;
			var image = document.getElementById('avatarImage');
            image.src = avatar;

			switch (userType) {
				case 'player':
					CreateSidebarElement("graphic.php", "book", "Graphics");
					break;
				case 'coach':
					CreateSidebarElement("clubs.php", "users", "Clubs", false);
					break;
				case 'manager':
					
					break;
				case 'admin':
					CreateSidebarElement("graphic.php", "book", "Graphics");
					break;
				default:
					console.log("UserType not found");
			}

			function  CreateSidebarElement(href, icon, name, active){
				var liElement = document.createElement("li");
				liElement.className += "sidebar-item";
				var aElement = document.createElement("a");
				aElement.className += "sidebar-link";
				aElement.href = href;
				var divElement = document.createElement("div");
				var iElement = document.createElement("i");
				//iElement.className += "align-middle";
				//iElement.setAttribute("data-feather", icon);
				
				iElement.innerHTML.replace('<i class="align-middle" data-feather="' + icon + '"></i>');
				//aElement.innerHTML('<i class="align-middle" data-feather="book"></i>');
				var spanElement = document.createElement("span");
				spanElement.className += name;
				spanElement.textContent = "Graphics";

				aElement.appendChild(iElement);
				aElement.appendChild(spanElement);
				aElement.appendChild(divElement);
				
				liElement.appendChild(aElement);
				sidebarUl.appendChild(liElement);
			}
		});
	</script>

</body>

</html>