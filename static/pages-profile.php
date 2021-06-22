<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
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
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Profile | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
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

					<li class="sidebar-item active">
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
								<img src="" id="avatarImage" class="avatar img-fluid rounded me-1"/> <span class="text-dark" id="nameSurname"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="Contact.php"><i class="align-middle me-1"
										data-feather="help-circle"></i> Contact</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="php/log_out.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
					</div>
					<div class="row">
						<div class="col-md-3 col-xl-3">
						</div>
						<div class="col-md-6 col-xl-6">
							<div class="card mb-3">
								<div class="card-header" >
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" id = "bigAvatarImage"/>
									<h5 class="card-title mb-0" id="nameProfile"></h5>

								</div>
								<hr class="my-0" />
								<div class="card-body" id="myDiv">
									<h5 class="h6 card-title">Type</h5>
									<a id="userTypeAnchor" class="badge bg-primary me-1 my-1">A</a>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Info</h5>
										<div class="col-md-8">
											<div class="card mb-3">
												<div class="card-body">
													<div class="row">
														<div class="col-sm-3">
														<h6 class="mb-0">Name</h6>
														</div>
														<div class="col-sm-9 text-secondary" id="nameP"></div>
													</div>
													<hr>
													<div class="row">
														<div class="col-sm-3">
														<h6 class="mb-0">Surname</h6>
														</div>
														<div class="col-sm-9 text-secondary" id="surnameP"></div>
													</div>
													<hr>
													<div class="row">
														<div class="col-sm-3">
														<h6 class="mb-0">Email</h6>
														</div>
														<div class="col-sm-9 text-secondary" id="emailP"></div>
													</div>
													<hr>
													<div class="row">
														<div class="col-sm-3">
														<h6 class="mb-0">Username</h6>
														</div>
														<div class="col-sm-9 text-secondary" id="userP"></div>
													</div>																					
												</div>
											</div>
										</div>
									</div>
								</div>
							<div class="col-md-3 col-xl-3">
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
									<a class="text-muted" target="_blank" href="contact.php">Contact</a>
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
		$user = $_SESSION['username'];
		$name = $_SESSION['Name'];
		$surname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];
		$email = $_SESSION['Email'];
	?>

	<script>

		document.addEventListener("DOMContentLoaded", function () {
			var user = "<?php echo $user; ?>";
			var name = "<?php echo $name; ?>";
			var surname = "<?php echo $surname; ?>";
			var userType = "<?php echo $userType; ?>";
			var avatar = "<?php echo $srcAvatar; ?>";
			var email = "<?php echo $email; ?>"; 
			var sidebarUl = document.getElementById("sidebarUl");
			console.log(userType);
			document.getElementById("nameSurname").innerHTML = name + ' ' + surname;
			document.getElementById("userTypeAnchor").innerHTML = userType;
			var image = document.getElementById('avatarImage');
			var bigImage = document.getElementById('bigAvatarImage');
			bigImage.src = avatar;
            image.src = avatar;
			document.getElementById("nameProfile").innerHTML =  name + ' ' + surname;
			document.getElementById("nameP").innerHTML = name;
			document.getElementById("surnameP").innerHTML = surname;
			document.getElementById("emailP").innerHTML = email;
			document.getElementById("userP").innerHTML = user;


			switch (userType) {
				case 'player':
					CreateSidebarElement("graphic.php", "book", "Graphics");
					break;
				case 'coach':
					CreateSidebarElement("graphic.php", "book", "Graphics", false);
					CreateSidebarElement("sessions.php", "book", "Sessions", false);
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
				if (active == true) {
					liElement.className += " active";
				}
				var aElement = document.createElement("a");
				aElement.className += "sidebar-link";
				aElement.href = href;
				var divElement = document.createElement("div");
				var iElement = document.createElement("i");
				//iElement.className += "align-middle";
				//iElement.setAttribute("data-feather", icon);
				
				//iElement.innerHTML.replace('<i class="align-middle" data-feather="' + icon + '"></i>');
				//aElement.innerHTML('<i class="align-middle" data-feather="book"></i>');
				var spanElement = document.createElement("span");
				spanElement.className += " align-middle";
				spanElement.textContent = name;

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