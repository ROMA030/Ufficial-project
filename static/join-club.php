<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
	}elseif ($_SESSION["UserType"] == "player") {
        header("location: not-here.php");
    }elseif ($_SESSION["UserType"] == "manager") {
      header("location: not-here.php");
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

	<title>Join A Club | Xeos</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
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

					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<h1 class="h3 mb-3">Join a club</h1>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<button id="backButton" class="btn btn-lg btn-primary">Back</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">

									<div class="row">
										<h5 class="card-title mb-0">Complete the form</h5>
									</div>
									
								</div>
								<div class="card-body">
									<div class="m-sm-4" id="show">
										<form method="post" enctype="multipart/form-data" id = "form">
											<div class="mb-3">
												<label class="form-label">Secret Key</label>
												<input class="form-control form-control-lg" type="password" name="key" placeholder="Enter secret key" required/>
											</div>
            
											<div class="text-center mt-3">
												<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Join</button>
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
									<a class="text-muted" target="_blank">Contact</a>
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

    <script>
		var btn = document.getElementById('backButton');
		btn.addEventListener('click', function() {
			document.location.href = 'clubs.php';
		});

        function InClub() {
            var show = document.getElementById("show");
            show.innerHTML = "";
            var panel1 = $('</br><h4 class="text-danger text-center mt-5">You are already in that club!</h4>');
            
            panel1.appendTo(show);
        }

		function ErrorClub() {
            var show = document.getElementById("show");
            show.innerHTML = "";
            var panel1 = $('</br><h4 class="text-danger text-center mt-5">The key you enter is not valid!</h4>');
            
            panel1.appendTo(show);
        }

        function SuccesfullyJoined() {
            var show = document.getElementById("show");
            show.innerHTML = "";
            var panel1 = $('</br><h4 class="text-success text-center mt-5">Succesfully joined the club!</h4>');
            
            panel1.appendTo(show);
        }
    </script>

	<?php
		$conn = mysqli_connect("localhost","root","","xeos");
        
		$user = $_SESSION['username'];
		$userName = $_SESSION['Name'];
		$userSurname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$clubKey = $_POST["key"];
            $alreadyInClub = false;
			if (!empty($clubKey)) {
				$checkID = "SELECT ClubID FROM club WHERE RandomKey = '$clubKey'";
				$IDResult = mysqli_query($conn, $checkID);

				if (mysqli_num_rows($IDResult) > 0) {
                    while ($row = mysqli_fetch_assoc($IDResult)) {
                        $clubID = $row["ClubID"];
                        $checkCoach = "SELECT * FROM clubcoach WHERE Club = '$clubID'";
                        $checkResult = mysqli_query($conn, $checkCoach);
                        
                        while ($row2 = mysqli_fetch_assoc($checkResult)) {
                            if ($user == $row2["Coach"]) {
                                $alreadyInClub = true;
                            }
                        }

                        if ($alreadyInClub == false) {
                            $addCoach = "INSERT INTO clubcoach(Club, Coach) VALUES ('$clubID', '$user')";
                            $addResult = mysqli_query($conn, $addCoach);

                            echo "<script type='text/javascript'>SuccesfullyJoined()</script>";
                        } else {
                            echo "<script type='text/javascript'>InClub()</script>";
                        }
                        
                    }
				}else {
                    echo "<script type='text/javascript'>ErrorClub()</script>";
                }
			}
			mysqli_close($conn);
		}
	?>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var user = "<?php echo $user; ?>";
			var name = "<?php echo $userName; ?>";
			var surname = "<?php echo $userSurname; ?>";
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