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
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Blank Page | AdminKit Demo</title>

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
								<a class="dropdown-item" href="index.html">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-3 col-xl-3">
						</div>
						<div class="col-md-6 col-xl-6">
							<div class="card mb-3">							
								<div class="card">
									<img class="card-img-top" src="img/icons/Icone.png" alt="Unsplash">
									<div class="card-body">
										<p class="card-text">Contattaci via email per eventuali problemi.</p>
									</div>
								</div> 							
								<div class="card-body">
								<h3 class="h6 card-title">LE NOSTRE EMAIL</h3>
								<div class="card" >
								<div class="card-header">
									<div>
                                   		<h4 class="card-title mb-0">Michele Arici</h4>
                                    </div>
                                    <div class="card-body"><p>Primoelemento@gmail.com</p>
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Yegor Cherednychenko</h4>
                                    </div>
                                    <div class="card-body"><p>Secondoelemento@gmail.com</p>
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Francesco Tonassi</h4>
                                    </div>
                                    <div class="card-body"><p>Terzoelemento@gmail.com</p>
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Daniele Romano</h4>
                                    </div>
                                    <div class="card-body"><p>Quartoelemento@gmail.com</p>
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Alessandro Ragnoli</h4>
                                    </div>
                                    <div class="card-body"><p>Quintoelemento@gmail.com</p>
                                    </div>       
                                </div>
                            </div>
									</div>
								</div>
							<div class="col-md-3 col-xl-3">
						</div>
						<style>
							h5 {text-align: center;}
							h4 {text-align: center;}
							h3 {text-align: center;}
							p {text-align: center;}
						</style>
				</div>
					
			</main>
       
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
								<a class="text-muted" target="_blank"><strong>Xeos</strong></a> &copy;
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

		$query = "SELECT * FROM users WHERE Username = '$user'";
		$result = mysqli_query($conn, $query);
		
		while ($row = $result->fetch_assoc()) 
		{
			$name = $row['Name'];
			$_SESSION['Name'] = $name;
			$surname = $row['Surname'];
			$_SESSION['Surname'] = $surname;
			$userType = $row['UserType'];
			$_SESSION['UserType'] = $userType;
			$avatar = $row['Avatar'];
			$email = $row['Email'];
			$_SESSION['Email'] = $email;
			
		}
		$srcAvatar = "data:image/jpeg;base64,".base64_encode( $avatar )."";
		$_SESSION['Avatar'] = $srcAvatar;
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
                    CreateSidebarElement("clubs.php", "users", "Club", false);
					break;
				case 'manager':
					CreateSidebarElement("clubs.php", "users", "Club", false);
					break;
				case 'admin':
					CreateSidebarElement("graphic.php", "book", "Graphics");
					break;
				default:
					console.log("UserType not found");
			}


			function  CreateSidebarElement(href, icon, name, active){
				if (active == true) {
					var iconOnSide = $('<li class="sidebar-item active"><a class="sidebar-link" href="'+href+'"><i class="align-middle" data-feather="'+icon+'"></i> <span class="align-middle">'+name+'</span></a></li>');
				} else {
					var iconOnSide = $('<li class="sidebar-item"><a class="sidebar-link" href="'+href+'"><i class="align-middle" data-feather="'+icon+'"></i> <span class="align-middle">'+name+'</span></a></li>');
				}

				iconOnSide.appendTo('#sidebarUl');
				feather.replace()
			}
		});
		
	</script>

</body>

</html>


