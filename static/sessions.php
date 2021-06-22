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
	<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
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

					<h1 class="h3 mb-3">Player graphics</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">

								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>

								<div class="card-body">
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
												<div class="mb-3">
													<label class="form-label">Select which player it belongs to:</label>
													<select name="playerOfSession" id="pOfSession" class="form-select mb-3" required>
														
													</select>
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
		ini_set("post_max_size", "30M");

		$conn = mysqli_connect("localhost","root","","xeos");

		$user = $_SESSION['username'];
		$name = $_SESSION['Name'];
		$surname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

		$playersOfCoach = array();
		$query2 = "SELECT Player FROM coachplayer WHERE Coach = '$user'";
		$result2 = mysqli_query($conn, $query2);

		while ($row = $result2->fetch_assoc()) {
            //$playersOfCoach = $row["Player"];
            array_push($playersOfCoach, $row["Player"]);
        }

		

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
                    }
                } catch (Throwable $e) {
                    echo $e->getMessage();
                }
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

		document.addEventListener("DOMContentLoaded", function () {
			var user = "<?php echo $user; ?>";
			var name = "<?php echo $name; ?>";
			var surname = "<?php echo $surname; ?>";
			var userType = "<?php echo $userType; ?>";
			var avatar = "<?php echo $srcAvatar; ?>";
			var sidebarUl = document.getElementById("sidebarUl");

            var players = <?php echo json_encode($playersOfCoach); ?>;

			for (let index = 0; index < players.length; index++) {
                var selection = document.getElementById("pOfSession");
                var newOption = document.createElement("option");
                newOption.setAttribute("value", players[index]);
                newOption.innerHTML = players[index];
                selection.appendChild(newOption);
			}


			document.getElementById("nameSurname").innerHTML = name + ' ' + surname;
			var image = document.getElementById('avatarImage');
            image.src = avatar;

			switch (userType) {
				case 'player':
					CreateSidebarElement("graphic.php", "book", "Graphics");
					break;
				case 'coach':
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