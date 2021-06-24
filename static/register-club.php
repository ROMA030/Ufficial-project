<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
	}elseif ($_SESSION["UserType"] == "player") {
        header("location: not-here.php");
    }elseif ($_SESSION["UserType"] == "coach") {
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

	<title>Register player | Xeos</title>

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
								<h1 class="h3 mb-3">Create a club</h1>
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
												<label class="form-label">Name</label>
												<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter club name" required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Select an avatar: </label>
												<input type="file" name="avatar" accept="image/*" class="form-control" />
											</div>

											<div class="text-center mt-3">
												<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Create</button>
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

    <script>
		var btn = document.getElementById('backButton');
		btn.addEventListener('click', function() {
			document.location.href = 'clubs.php';
		});

        function UsernameExist() {
            var p = document.createElement("p");
            p.className += "text-danger";
            p.className += " text-center";
            p.className += " mt-3";
            p.innerHTML = "Username already exists";

            var form = document.getElementById("form");
            form.appendChild(p);
        }

        function CopyKey() {
            var copyText = document.getElementById("copyKeyInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
        }

        function ShowKey(key) {
            var show = document.getElementById("show");
            show.innerHTML = "";
            var panel1 = $('<h4 class="text-center mt-5">Copy this key and give it only to coaches</h4></br>');
            var panel2 = $('<div class="row" align="center" justify="center"><div class="col-sm-10"><input style="text-align:center;" id="copyKeyInput" class="form-control" type="text" value="'+ key +'" placeholder="'+ key +'" readonly=""></div><div class="col-sm-2"><button id="copyButton" onclick="CopyKey()" class="btn btn-lg btn-primary">Copy</button></div></div>');
            var panel4 = $('<p class="text-danger text-center mt-5">This key is distributed only ONCE, please write it down somewhere in order not to lose it</p>');
            
            panel1.appendTo(show);
            panel2.appendTo(show);
            panel4.appendTo(show);
        }

		function ErrorClub() {
            var show = document.getElementById("show");
            show.innerHTML = "";
            var panel1 = $('</br><h4 class="text-danger text-center mt-5">You already have a club, please go back</h4>');
            
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

		$checkManager = "SELECT * FROM clubmanager WHERE Manager = '$user'";
		$managerResult = mysqli_query($conn, $checkManager);
		if (mysqli_num_rows($managerResult) > 0) {
			echo "<script type='text/javascript'>ErrorClub()</script>";
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$clubName = $_POST["name"];

			$avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
			
			
			if (!empty($clubName)) {
				$checkID = "SELECT ClubID FROM club ORDER BY ClubID DESC LIMIT 1";
				$IDResult = mysqli_query($conn, $checkID);
				$ID = 1;
				if (mysqli_num_rows($IDResult) > 0) {
					while ($row = mysqli_fetch_assoc($IDResult)) {
						$ID = $row['ClubID'] + 1;
					}
				}
				$checkUser = "SELECT ClubName FROM club WHERE ClubName = '$clubName'";
				$checkResult = mysqli_query($conn, $checkUser);
	
				if (mysqli_num_rows($checkResult) > 0) {
					echo "<script type='text/javascript'>UsernameExist()</script>";
					//exit();
				}else {
					$key = rand_key(20);
					$query = "INSERT INTO club(ClubName, RandomKey, Avatar) VALUES ('$clubName', '$key', '$avatar')";
					$result = mysqli_query($conn, $query);

					$query2 = "INSERT INTO clubmanager(Club, Manager) VALUES ('$ID', '$user')";
					$result2 = mysqli_query($conn, $query2);

					echo "<script type='text/javascript'>ShowKey('". $key ."')</script>";
					//header("location: ../register-player.php?user=". $user);
					//exit();
				}
			}
			
			mysqli_close($conn);
		}

        function rand_key($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#&$%!?';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
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