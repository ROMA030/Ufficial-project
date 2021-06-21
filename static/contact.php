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
				<a class="sidebar-brand" href="dashboard.php">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>
					<li class="sidebar-item">
				<a class="sidebar-link" href="dashboard.php">
              		<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
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
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
				
			</nav>

			<main class="content">
                <div class="mb-3">
					</div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <img class="card-img-top" src="img/icons/Icone.png" alt="Unsplash">
                                <div class="card-body">
                                    <p class="card-text">Contattaci via email per eventuali problemi.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">NOME1</h5>
                                    </div>
                                    <div class="card-body"><p>Primo elemento</p>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">NOME2</h5>
                                    </div>
                                    <div class="card-body"><p>Secondo elemento</p>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">NOME3</h5>
                                    </div>
                                    <div class="card-body"><p>Terzo elemento</p>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">NOME4</h5>
                                    </div>
                                    <div class="card-body"><p>Quarto elemento</p>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">NOME5</h5>
                                    </div>
                                    <div class="card-body"><p>Quinto elemento</p>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

                <style>
                    h5 {text-align: center;}
                    p {text-align: center;}
                </style>
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
	?>

	<script>
		switch (userType) {
			case 'player':
				CreateSidebarElement("graphic.php?user=" + user, "book", "Graphics");
				break;
			case 'coach':
				CreateSidebarElement("graphic.php?user=" + user, "book", "Graphics", false);
				CreateSidebarElement("sessions.php?user=" + user, "book", "Sessions", true);
				break;
			case 'manager':
				
				break;
			case 'admin':
				CreateSidebarElement("graphic.php?user=" + user, "book", "Graphics");
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
	</script>

</body>

</html>