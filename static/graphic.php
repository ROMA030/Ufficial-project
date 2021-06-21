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

	<title>Blank Page | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
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
								<a class="dropdown-item" href="#">Log out</a>
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
									<form method="post" enctype="multipart/form-data">
										<!-- onchange="loadFile(this.files[0])" 
										<span class="text-dark">Acc.csv</span> <input type="file" name = "other" class="form-control">
										<div style="padding-bottom: 25px"></div>
										<span class="text-dark">Ecg.csv</span> <input type="file" name = "other" class="form-control">
										<div style="padding-bottom: 25px"></div>
										<span class="text-dark">Gyro.csv</span> <input type="file" name = "other" class="form-control">
										<div style="padding-bottom: 25px"></div>
										<span class="text-dark">Other.csv</span> <input type="file" name = "other" class="form-control">
										<div style="padding-bottom: 25px"></div>

										<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Upload</button>
										-->
										<div class="m-sm-4">
											<form method="post" enctype="multipart/form-data" action="php/register_user.php">
												<div class="mb-3">
													<label class="form-label">Select a player:</label>
													<select name="playerOfSession" id="pOfSession" class="form-select mb-3" required>
														
													</select>
												</div>
												<div class="text-center mt-3">
													<button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary">Upload</button>
												</div>
											</form>
										</div>
										
									</form>
									<div style="padding-bottom: 25px"></div>

									<div class="row">
										<div class="col-12 col-lg-12 col-xxl-12 d-flex">
											<div class="card flex-fill">
												<div class="card-header">
													<h5 class="card-title mb-0">Latest Sessions</h5>
												</div>
												
												<div class="card-body" id="grapihcDiv">
													
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

	<?php
		$conn = mysqli_connect("localhost","root","","xeos");

		$user = $_GET['user'];

		$query = "SELECT * FROM users WHERE Username = '$user'";
		$result = mysqli_query($conn, $query);
		
		while ($row = $result->fetch_assoc()) 
		{
			$name = $row['Name'];
			$surname = $row['Surname'];
			$userType = $row['UserType'];
			$avatar = $row['Avatar'];
		}

		$srcAvatar = "data:image/jpeg;base64,".base64_encode( $avatar )."";

		$playersOfCoach = array();
		$query2 = "SELECT Player FROM coachplayer WHERE Coach = '$user'";
		$result2 = mysqli_query($conn, $query2);

		while ($row = $result2->fetch_assoc()) {
            array_push($playersOfCoach, $row["Player"]);
        }

		/*
		$query3 = "SELECT * FROM other WHERE Username = '$user'";
		$result3 = mysqli_query($conn, $query3);
		
		while ($row = $result->fetch_assoc()) 
		{
			$name = $row['Name'];
			$surname = $row['Surname'];
			$userType = $row['UserType'];
			$avatar = $row['Avatar'];
		}
		*/

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
					CreateSidebarElement("graphic.php?user=" + user, "book", "Graphics");
					break;
				case 'coach':
					CreateSidebarElement("graphic.php?user=" + user, "book", "Graphics", true);
					CreateSidebarElement("sessions.php?user=" + user, "book", "Sessions", false);
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
		});

		async function loadFile(file) {
			
			let text = await file.text();

			function csvJSON(csv){
				var lines=csv.split("\n");

				var result = [];

				var headers=lines[0].split(",");

				for(var i=1;i<lines.length;i++){

					var obj = {};
					var currentline=lines[i].split(",");

					for(var j=0;j<headers.length;j++){
						obj[headers[j]] = currentline[j];
					}

					result.push(obj);

				}

				return result;
			}

			//console.log(csvJSON(text));
			let dataJSON = csvJSON(text);
			let array = [];
			let timestampsArray = [];
			let finalArray = [];
			let outData = [];
			
			//console.log(Object.keys(dataJSON).length);
			for (var j = 0; j < dataJSON.length; j++)
			{
				//array.push(parseInt(dataJSON[j]["heartRate"]));
				//timestampsArray.push(parseInt(dataJSON[j]["timestamp"]));

				//console.log(parseInt(dataJSON[j]["heartRate"]));
				console.log(parseInt(dataJSON[j]["timestamp"]));

				var date = new Date(parseInt(dataJSON[j]["timestamp"]));


				finalArray.push({ x : date, y : parseInt(dataJSON[j]["heartRate"])});

			}

			for (i = 0; i < finalArray.length; i++) {
				outData[i] = {
					x: Date.parse(finalArray[i].x),
					y: finalArray[i].y
				}
			}

			var chart1 = new Highcharts.Chart({
				chart: {
					renderTo: 'grapihcDiv',
					zoomType: 'x'
				},
				
				title: {
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
					//pointStart: timestamp,
					//pointInterval: 10,

					data: outData,
					tooltip: {
						valueDecimals: 2
					},
					turboThreshold: 0
				}]
			});

			function disegnaGrafico(value, timestamp) {
			
			}


		}
		

	</script>


</body>

</html>