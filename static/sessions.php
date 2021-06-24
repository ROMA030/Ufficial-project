<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
	}elseif ($_SESSION["UserType"] == "player") {
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
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Sessions | Xeos</title>

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

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="" id="avatarImage" class="avatar img-fluid rounded me-1"/> <span class="text-dark" id="nameSurname">User</span>
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
								<h1 class="h3 mb-3" id="pageTitle">Add session</h1>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item" id="addBackButton">
									<button id="backButton" class="btn btn-lg btn-primary">Back</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card">

								<div class="card-header">
									<h5 class="card-title mb-0">Complete the form</h5>
								</div>

								<div class="card-body" id="mainCard">
									<form method="post" enctype="multipart/form-data">
                                        <div class="m-sm-4">
											<form method="post" enctype="multipart/form-data">
												<div class="mb-3">
													<label class="form-label">Acc.csv</label>
													<input type="file" name="acc" accept=".csv" class="form-control" required />
												</div>
												<div class="mb-3">
													<label class="form-label">Ecg.csv</label>
													<input type="file" name="ecg" accept=".csv" class="form-control" required />
												</div>
												<div class="mb-3">
													<label class="form-label">Gyro.csv</label>
													<input type="file" name="gyro" accept=".csv" class="form-control" required />
												</div>
												<div class="mb-3">
													<label class="form-label">Other.csv</label>
													<input type="file" name="other" accept=".csv" class="form-control" required />
												</div>
												<div class="mb-3">
													<label class="form-label">Session name</label>
													<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter session name" required/>
												</div>
												<div class="mb-3" id="inputPlayerUsername">
													<label class="form-label">Player it belongs to:</label>
													
												</div>
												<div class="text-center mt-3">
													<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Upload</button>
												</div>
											</form>
										</div>
									</form>
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
		function Success() {
            var show = document.getElementById("mainCard");
            show.innerHTML = "";
            var panel1 = $('</br><h4 class="text-success text-center mt-5">Files successfully uploaded!</h4>');
            
            panel1.appendTo(show);
        }

		function SessionExisting() {
            var show = document.getElementById("mainCard");
            show.innerHTML = "";
            var panel1 = $('</br><h4 class="text-danger text-center mt-5">Session with same date already existing</h4>');
            
            panel1.appendTo(show);
        }
	</script>

	<?php
		ini_set("post_max_size", "30M");

		$conn = mysqli_connect("localhost","root","","xeos");

		$user = $_SESSION['username'];
		$name = $_SESSION['Name'];
		$surname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

		$errors = $alreadyExists = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$player = $_POST['playerOfSession'];
			$fileTypes = array("acc", "ecg", "gyro", "other");
			$sessionNumber = 1;
			$incremented = false;
			$timestamp = 0;
			$i = 0;

			$handler = fopen($_FILES["other"]["tmp_name"], 'r');
			while (($line = fgetcsv($handler)) !== FALSE) {
				if ($i == 1) {
					$timestamp = $line[0];
					break;
				}
				$i = $i + 1;
			}

			$timestamp = $timestamp / 1000;
			$fileDate = gmdate("d M Y H:i:s", $timestamp);
			
			for ($i=0; $i < 4; $i++) { 
				try {
					$temp = $fileTypes[$i];

					//Has already a session with the same date?
					$query5 = "SELECT DISTINCT `date` FROM " . $temp . " WHERE player = '$player'";
					$result5 = $conn->query($query5) or die($conn->error);
					if (mysqli_num_rows($result5) > 0) {
						while ($row5 = $result5->fetch_assoc()) {
							if ($fileDate == $row5['date']) {
								$alreadyExists = true;
							}
						}
					}

					if ($alreadyExists == false) {
						//Determine Session number
						$query3 = "SELECT `session` FROM " . $temp . " WHERE player = '$player' ORDER BY `session` DESC LIMIT 1";
						$result3 = $conn->query($query3) or die($conn->error);
						if (!$incremented) {
							if (mysqli_num_rows($result3) > 0) {
								while ($row = $result3->fetch_assoc()) {
									$sessionNumber = $row['session'] + 1;
									$incremented = true;
								}
							}
						}
						$file = clean_dir($temp);
						$query4 = "LOAD DATA INFILE '" . $file . "'
								INTO TABLE `" . $temp . "` 
								FIELDS TERMINATED by ','
								LINES TERMINATED BY \"\n\"
								IGNORE 1 ROWS 
								SET player = '$player', session = '$sessionNumber', date = '$fileDate'";
						
						$result4 = mysqli_query($conn, $query4);
						if (!$result4) {
							throw new Exception("Problema! Avvenuto col file: " . $file . "<br>");
							$errors = true;
						}
					}
					
                } catch (Throwable $e) {
                    echo $e->getMessage();
					$errors = true;
                }
            }
			if ($alreadyExists == true) {
				echo '<script type="text/javascript">SessionExisting();</script>';
			} elseif ($errors != true) {
				echo '<script type="text/javascript">Success();</script>';
			}
			
		}

		function clean_dir($nome_file)
		{
			$file = $_FILES[$nome_file]["tmp_name"];
			$newDir = str_replace('\\', '/', $file);
			return $newDir;
		}
		
	?>

	<script>
		function getCookie(cName) {
			const name = cName + "=";
			const cDecoded = decodeURIComponent(document.cookie); //to be careful
			const cArr = cDecoded .split('; ');
			let res;
			cArr.forEach(val => {
				if (val.indexOf(name) === 0) res = val.substring(name.length);
			})
			return res;
		}

        function setCookie(cName, cValue, expDays) {
            let date = new Date();
            date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
        }

		document.addEventListener("DOMContentLoaded", function () {
			var btn = document.getElementById('backButton');
			btn.addEventListener('click', function() {
				setCookie("playerUserSET", "", 1);
				document.location.href = 'club-players.php';
			});

			var user = "<?php echo $user; ?>";
			var name = "<?php echo $name; ?>";
			var surname = "<?php echo $surname; ?>";
			var userType = "<?php echo $userType; ?>";
			var avatar = "<?php echo $srcAvatar; ?>";
			var sidebarUl = document.getElementById("sidebarUl");
			
			var cookieUsername = getCookie("playerUserSET");
			if (!cookieUsername) {
				document.location.href = "club-players.php";
			} else {
				var playerUsername = $('<input class="form-control" type="text" name="playerOfSession" value="'+cookieUsername+'" placeholder="'+cookieUsername+'" readonly="">');
				const contentUsername = document.getElementById("inputPlayerUsername");
				playerUsername.appendTo(contentUsername);
			}

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