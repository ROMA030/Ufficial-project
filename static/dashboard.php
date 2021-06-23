<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href='css/app.css?v=<%= DateTime.Now.Ticks %>'/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" href="static\css\app.css">
	<link rel="stylesheet" href="static\css\evo-calendar.min.css">
	<link rel="stylesheet" href="static\css\evo-calendar.orange-coral.min.css">

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<script>
		function collapseFunc()
		{
			if(document.getElementById("sidebar").className == "sidebar js-sidebar") {
				document.getElementById("sidebar").className += " collapsed";
			}
			else{
				document.getElementById("sidebar").className = "sidebar js-sidebar";
			}	
			
		}
	</script>
	
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
							<a onclick="collapseFunc()" class="sidebar-toggle js-sidebar-toggle">
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

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Benvenuto!</h5>
													</div>
													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="bell"></i>
														</div>
													</div>
												</div>
											<h1 class="mt-1 mb-3">Felice di rivederti! &#128540</h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">About you!</h5>
													</div>
													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="tag"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">Stai ricoprendo il ruolo di
													<b><h1 class="mt-1 mb-3" id="dashRole" style="color:Red"></h1></b>
												</h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
										<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Benvenuto!</h5>
													</div>
													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="bell"></i>
														</div>
													</div>
												</div>
											<h1 class="mt-1 mb-3">Felice di rivederti! &#128540</h1>
											</div>
										</div>
										<div class="card">
										<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Benvenuto!</h5>
													</div>
													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="bell"></i>
														</div>
													</div>
												</div>
											<h1 class="mt-1 mb-3">Felice di rivederti! &#128540</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="center col-xl-2 col-xxl-3" justify="center">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">I tuoi club!</h5>
								</div>
								<div class="card-body py-3">	
									<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
											<img style="opacity: 0.7;" class="center img-fluid rounded-circle mb-2" width="250" height="250" src="img/avatars/avatar-2.jpg" alt="Squad">
											<div class="carousel-caption d-none d-md-block mb-0">
												<h3 style="color:Black;">Nome Squadra</h3>
											</div>
											</div>
											<div class="carousel-item">
											<img style="opacity: 0.7;" class="center img-fluid rounded-circle mb-2 center" width="250" height="250" src="img/avatars/avatar-3.jpg" alt="...">
											<div class="carousel-caption d-none d-md-block mb-0">
												<h3 style="color:Black;">Nome Squadra</h3>
											</div>
											</div>
											<div class="carousel-item">
											<img style="opacity: 0.7;" src="img/avatars/avatar-4.jpg" class="center img-fluid rounded-circle mb-2 center" width="250" height="250" alt="...">
											<div class="carousel-caption d-none d-md-block mb-0">
												<h3 style="color:Black;">Nome Squadra</h3>
											</div>
											</div>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
								</div>
							</div>
							<style>
								.center {
								display: block;
								margin-left: auto;
								margin-right: auto;
								}

								.carousel-control-prev-icon {
									background-color: #c593d8;
									border-radius: 50%;
								}
							
								.carousel-control-next-icon {
									background-color: #c593d8;
									border-radius: 50%;
								}

								/*img {
									opacity: 0.4;
									filter: alpha(opacity=40);
								}*/	
										
							</style>
						</div>
					</div>


					<div class="row" id="calendar">
					<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
					<script src="static\js\evo-calendar.min.js"></script>

					<script>

					$(document).ready(function() {
										$('#calendar').evoCalendar({
											theme:"Orange coral",
											calendarEvents: [
												{
													id: 'Evento', // Event's ID (required)
													name: "New Year", // Event name (required)
													date: "January/1/2020", // Event date (required)
													description:"Buon anno",
													type: "holiday", // Event type (required)
													everyYear: true // Same event every year (optional)
												},
												{
													name: "Vacation Leave",
													badge: "02/13 - 02/15", // Event badge (optional)
													date: ["February/13/2020", "February/15/2020"], // Date range
													description: "Vacation leave for 3 days.", // Event description (optional)
													type: "event",
													color: "#63d867" // Event custom color (optional)
												}
											]

										})
								})


						</script>

					</div>

					<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title mb-0">Latest Sessions</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">Start Time</th>
											<th class="d-none d-xl-table-cell">End Time</th>
											<th>Status</th>
											<th class="d-none d-md-table-cell">Assignee</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Project Apollo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Vanessa Tucker</td>
										</tr>
									</tbody>
								</table>
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

	<script src="js/app.js"></script>

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
			document.getElementById("dashRole").innerHTML =userType;

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
	
	

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>
	<script src="js/app.js"></script>

	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>