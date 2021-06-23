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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<link rel="stylesheet" type="text/css" href='css/app.css?v=<%= DateTime.Now.Ticks %>'/>
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Blank Page | AdminKit Demo</title>

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
						<a class="sidebar-link" href="dashboard.php" >
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
									<h5 class="card-title mb-0">Show graphics of a player</h5>
								</div>
								<div class="card-body">

									<div class="m-sm-4">
										<form method="post" enctype="multipart/form-data">
											<div class="mb-3">
												<label class="form-label">Select a player:</label>
												<select name="playerOfSession" id="pOfSession" class="form-select mb-3" required>
													
												</select>
											</div>
											<div class="text-center mt-3">
												<input type="submit" name="Search" value="Search" class="btn btn-lg btn-primary"></button>
											</div>
										</form>

										<div style="padding-bottom: 25px"></div>

										<form method="post">
											<div class="mb-3">
												<label class="form-label">Select a date:</label>
												<select disabled name="dateOfSession" id="dOfSession" class="form-select mb-3" required>
													
												</select>
											</div>
											<div class="text-center mt-3">
												<input disabled type="submit" name="Show" value="Show" id="showButton" class="btn btn-lg btn-primary"></button>
											</div>
										</form>
									</div>

									<div style="padding-bottom: 25px"></div>

									<div class="row">
										<div class="col-12 col-lg-12 col-xxl-12 d-flex">
											<div class="card flex-fill">
												<div class="card-header">
													<h5 class="card-title mb-0">Acc:</h5>
												</div>
												
												<div class="card-body" id="accGrapihcDiv">
													
												</div>
											</div>
										</div>
									</div>

									<div style="padding-bottom: 25px"></div>

									<div class="row">
										<div class="col-12 col-lg-12 col-xxl-12 d-flex">
											<div class="card flex-fill">
												<div class="card-header">
													<h5 class="card-title mb-0">Ecg:</h5>
												</div>
												
												<div class="card-body" id="ecgGrapihcDiv">
													
												</div>
											</div>
										</div>
									</div>

									<div style="padding-bottom: 25px"></div>

									<div class="row">
										<div class="col-12 col-lg-12 col-xxl-12 d-flex">
											<div class="card flex-fill">
												<div class="card-header">
													<h5 class="card-title mb-0">Gyro:</h5>
												</div>
												
												<div class="card-body" id="gyroGrapihcDiv">
													
												</div>
											</div>
										</div>
									</div>

									<div style="padding-bottom: 25px"></div>

									<div class="row">
										<div class="col-12 col-lg-12 col-xxl-12 d-flex">
											<div class="card flex-fill">
												<div class="card-header">
													<h5 class="card-title mb-0">Other:</h5>
												</div>
												
												<div class="card-body" id="otherGrapihcDiv">
													
												</div>
											</div>
										</div>
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
		function InsertDates(dates) {
			for (let index = 0; index < dates.length; index++) {
                var selection = document.getElementById("dOfSession");
                var newOption = document.createElement("option");
                newOption.setAttribute("value", dates[index]);
                newOption.innerHTML = dates[index];
                selection.appendChild(newOption);
			}
			selection.removeAttribute('disabled');
			var button = document.getElementById("showButton");
			button.removeAttribute('disabled')
		}

		function DrawGraphic(dataJSON, fileType) {
			
			let finalArray = [];
			let outData = [];
			let chartTitle = "";
			
			for (var j = 0; j < dataJSON.length; j++){
				var date = new Date(parseInt(dataJSON[j]["timestamp"]));
				
				if (fileType == "acc") {
					finalArray.push({ x : date.toISOString(), y : parseInt(dataJSON[j]["accX"])});
					chartTitle = "accX";
				} else if (fileType == "ecg") {
					finalArray.push({ x : date.toISOString(), y : parseInt(dataJSON[j]["respiration"])});
					chartTitle = "Respiration";
				} else if (fileType == "gyro") {
					finalArray.push({ x : date.toISOString(), y : parseInt(dataJSON[j]["gyroX"])});
					chartTitle = "gyroX";
				} else if (fileType == "other") {
					finalArray.push({ x : date, y : parseInt(dataJSON[j]["heartRate"])});
					chartTitle = "Heart rate";
				}
				
			}

			for (i = 0; i < finalArray.length; i++) {
				outData[i] = {
					x: Date.parse(finalArray[i].x),
					y: finalArray[i].y
				}
			}
			var renderID = fileType + "GrapihcDiv";
			var chart1 = new Highcharts.Chart({
				chart: {
					renderTo: renderID,
					zoomType: 'x'
				},
				
				title: {
					text: chartTitle,
					useHTML: true,
					style: {
						color: '#cfcfcf',
						fontWeight: 'bold'
					}
				},
				
				xAxis: {
					type: 'datetime'
				},

				exporting: {
					enabled: false
				},

				colors:["#d3362e"],
				
				rangeSelector: {
					enabled: false
				},
				
				series: [{
					data: outData,
					tooltip: {
						valueDecimals: 2
					},
					turboThreshold: 0
				}]
			});
		}
	</script>

	<?php
		$conn = mysqli_connect("localhost","root","","xeos");
		ini_set('memory_limit', '1024M');
		$user = $_SESSION['username'];
		$name = $_SESSION['Name'];
		$surname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

		$playersOfCoach = array();
		$playerDates = array();
		$selectedPlayer = "";

		$query2 = "SELECT Player FROM coachplayer WHERE Coach = '$user'";
		$result2 = mysqli_query($conn, $query2);

		while ($row = $result2->fetch_assoc()) {
            array_push($playersOfCoach, $row["Player"]);
        }

		if (isset($_POST['Search'])) {
			$selectedPlayer = $_POST['playerOfSession'];
			$query3 = "SELECT DISTINCT  date FROM other WHERE player = '$selectedPlayer'";
			$result3 = mysqli_query($conn, $query3);

			while ($row = $result3->fetch_assoc()) {
				array_push($playerDates, $row["date"]);
			}

			echo '<script type="text/javascript">InsertDates(' . json_encode($playerDates) . ');</script>';
		}
		if (isset($_POST['Show'])) {
			$selectedDate = $_POST['dateOfSession'];
			//$fileTypes = array("acc", "ecg", "gyro", "other");
			$fileTypes = array("acc", "gyro", "other");
			for ($i=0; $i < 4; $i++) { 
				$temp = $fileTypes[$i];
				$selectedPlayer = "giocatore1";
				/*
				$query4 = "SELECT `session` FROM " . $temp . " WHERE player = '$selectedPlayer' ORDER BY `session` DESC LIMIT 1";
				$result4 = $conn->query($query4) or die($conn->error);
				*/
				
				switch ($temp) {
					case "acc":
						$query5 = "SELECT timestamp, accX, accY, accZ FROM " . $temp . " WHERE player = '$selectedPlayer' AND date = '$selectedDate' AND session = '1'";
						break;
					case "ecg":
						$query5 = "SELECT timestamp, respiration, ecgLead1, ecgLead2, ecgLead3 FROM " . $temp . " WHERE player = '$selectedPlayer' AND date = '$selectedDate' AND session = '1'";
						break;
					case "gyro":
						$query5 = "SELECT timestamp, gyroX, gyroY, gyroZ FROM " . $temp . " WHERE player = '$selectedPlayer' AND date = '$selectedDate' AND session = '1'";
						break;
					case "other":
						$query5 = "SELECT timestamp, battery, skinTemp, ambientTemp, occupiedMemory, respirationRate, heartRate, gainCH0, gainCH1, gainCH2, gainCH3 FROM " . $temp . " WHERE player = '$selectedPlayer' AND date = '$selectedDate' AND session = '1'";
						break;
				}
				//$query5 = "SELECT * FROM " . $temp . " WHERE player = '$selectedPlayer' AND date = '$selectedDate' AND session = '1'";
				$result5 = mysqli_query($conn, $query5);

				$dataArray = array();
				while ($row = mysqli_fetch_assoc($result5)) {
					$dataArray[] = $row;
				}
				echo '<script type="text/javascript">DrawGraphic(' . json_encode($dataArray) . ', "' . $temp . '");</script>';

			}
		}
	?>

	<script>
		function ShowGraphic() {
			var select = document.getElementById("dOfSession");
			var sel = select.options[select.selectedIndex];
			var name = sel.getAttribute("value");
			
			
			var selectedName = "<?php echo $selectedPlayer; ?>";
			var mysql = require('mysql');

			var con = mysql.createConnection({
				host: "localhost",
				user: "root",
				password: "",
				database: "xeos"
			});

			con.connect(function(err) {
				if (err) throw err;
				con.query("SELECT * FROM other WHERE player = '" + selectedName + "'", function (err, result, fields) {
					if (err) throw err;
					console.log(result);
				});
			});
			
			return false;
		}
	</script>

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