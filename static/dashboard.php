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
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/evo-calendar.min.css">
	<link rel="stylesheet" href="css/evo-calendar.orange-coral.min.css"> 

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c9bd9ac924.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

	<script>
	
		function addEvent(eventName, eventDescription, eventData)
		{
			var res = eventData.trim().split("-");
			console.log(res);
			var dataPHP = res[0] + "-" + res[1] + "-" + res[2];
			if (res[1] == "01")
				res[1] == "January"
			
			if (res[1] == "02")
				res[1] == "February"
			
			if (res[1] == "03")
				res[1] == "March"

			if (res[1] == "04")
				res[1] == "April"
			
			if (res[1] == "05")
				res[1] == "May"

			if (res[1] == "06")
				res[1] == "June"

			if (res[1] == "07")
				res[1] == "July"

			if (res[1] == "08")
				res[1] == "August"


			if (res[1] == "09")
				res[1] == "September"


			if (res[1] == "10")
				res[1] == "October"

			if (res[1] == "11")
				res[1] == "November"

			if (res[1] == "12")
				res[1] == "December"


			var newData = res[1] + "/" + res[2] + "/" + res[0];
			console.log(eventData, eventName, eventDescription);
			$("#calendar").evoCalendar('addCalendarEvent', [
				{
				  id: '09nk7Ts',
				  name: eventName,
				  date: newData,
				  description: eventDescription, 
				  type: "eventClub",
				}
			]);

			var stringCookie = eventName + "," + dataPHP + "," + eventDescription + ",";
			console.log(stringCookie);
			//setCookie("eventID", "eventID", 1);
			setCookie("eventDatas", stringCookie, 1);

			window.location = "php/save_events.php";

			
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
				<h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

					
				<section class="cover1">
					<div class="cover__filter1"></div>				
					<div class="cover__caption">
						<div class="cover__caption__copy" >
							<h1 style="color: #fff; margin: 11px">I tuoi Club</h1>
							<div class="center col-xl-2 col-xxl-3" justify="center">
								<div class="card flex-fill w-100" style="background: transparent;">													
										<div class="card-body py-3">	
											<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<a href="clubs.php"><img class="center img-fluid rounded-circle mb-2" width="250" height="250" src="img/avatars/avatar-2.jpg" alt="Squad"></a>
														<div class="carousel-caption"></div>
													</div>
													<div class="carousel-item">
													<a href="clubs.php"><img class="center img-fluid rounded-circle mb-2 center" width="250" height="250" src="img/avatars/avatar-3.jpg" alt="..."></a>
														<div class="carousel-caption"></div>
													</div>
													<div class="carousel-item">
													<a href="clubs.php"><img src="img/avatars/avatar-4.jpg" class="center img-fluid rounded-circle mb-2 center" width="250" height="250" alt="..."></a>
														<div class="carousel-caption"></div>
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
									</style>
								</div>
							</div>
						</div>
					</div>
				</section>

										
				<a class="add_event_button" onclick="document.getElementById('id01').style.display='block'" style="text-decoration: none; margin-top: 20px" onmouseover = "this.style.background = '#fff'" onmouseout  = "this.style.background = '#8f0000'">Aggiungi evento <i class="fas fa-plus-circle"></i></a>
				
				<div id="id01" class="modal">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					<form class="modal-content" method="post">
						<div class="container" id="formContainer">
							<h1>Crea evento</h1>
							<p>Riempi i campi richiesti per poter creare un evento.</p>
							<hr>
							<label for="email"><b>Inserisci nome evento</b></label>
							<input type="text" placeholder="Enter Event" name="eventName" id="eventName" required>

							<label for="des"><b>Inserisci descrizione evento</b></label>
							<input type="text" placeholder="Description event" name="eventDescription" id="eventDescription" required>

							<label for="data"><b>Inserisci la data dell'evento</b></label>
							<input type="date" placeholder="Insert data" name="data" id="eventData" required>

							<div>
								
								<button type="button" class="btn btn-lg btn-primary"  onclick="addEvent(document.getElementById('eventName').value, document.getElementById('eventDescription').value, document.getElementById('eventData').value), document.getElementById('id01').style.display='none'">Crea evento</button>
								<button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-lg btn-secondary">Annulla</button>
								<!--<button type="submit" name="submit" class="signupbtn">Crea evento</button>-->
							</div>
						</div>
					</form>
				</div>

				<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
				
				<script>
					// Get the modal
					var modal = document.getElementById('id01');

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
						modal.style.display = "none";
						}
					}
				</script>
				
				
				<div class="row" id="calendar"></div>															
				
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
	<script src="js/evo-calendar.min.js"></script>
	
	<script>
		
		
		
	</script>

	<script>
		/*
		unction CreateEvent(idEvento, name, data, desc, club) {
			console.log(data);
			
			$("#calendar").evoCalendar('addCalendarEvent', [
				{
					id: idEvento,
					name: name,
					date: data,
					description: desc, 
					type: club,
				}
			]);

			console.log(idEvento);
			console.log("fatto");
		}
		*/

		function setCookie(cName, cValue, expDays) {
			let date = new Date();
			date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
			const expires = "expires=" + date.toUTCString();
			document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
		} 

		function addEvent1(eventID ,eventName, eventDescription, eventData)
		{
			var res = eventData.trim().split("-");
			console.log(res);
			
			if (res[1] == "01")
				res[1] = "January"
			
			if (res[1] == "02")
				res[1] = "February"
			
			if (res[1] == "03")
				res[1] = "March"

			if (res[1] == "04")
				res[1] = "April"
			
			if (res[1] == "05")
				res[1] = "May"

			if (res[1] == "06")
				res[1] = "June"

			if (res[1] == "07")
				res[1] = "July"

			if (res[1] == "08")
				res[1] = "August"

			if (res[1] == "09")
				res[1] = "September"

			if (res[1] == "10")
				res[1] = "October"

			if (res[1] == "11")
				res[1] = "November"

			if (res[1] == "12")
				res[1] = "December"


			var newData = res[1] + "/" + res[2] + "/" + res[0];
			
			console.log(newData);
			$("#calendar").evoCalendar('addCalendarEvent', [
				{
				  id: eventID,
				  name: eventName,
				  date: newData,
				  description: eventDescription, 
				  type: "ciao",
				}
			]);

		}

	</script>

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
		
		switch ($userType) {
			case 'player':
				$query5 = "SELECT Club FROM clubplayers WHERE player = '$user'";
				break;
			case 'coach':
				$query5 = "SELECT Club FROM clubcoach WHERE Coach = '$user'";
				break;
			case 'manager':
				$query5 = "SELECT Club FROM clubmanager WHERE Manager = '$user'";
				break;
		}
		$clubID = 0;

		$result5 = mysqli_query($conn, $query5);
		 
		$Id = array();
		$eventName = array();
		$eventDesc = array();
		$eventData = array();
		$eventClub = array();

		if (mysqli_num_rows($result5) > 0) {
			
			while ($row = $result5->fetch_assoc()) {
				$clubID = $row["Club"];
				$_SESSION["UserClubID"] = $clubID;
			}

			$query1 = "SELECT * FROM eventplayer WHERE Club = '$clubID'";
			$result1 = mysqli_query($conn, $query1);

			while ($row = $result1->fetch_assoc()) 
			{
				$eventID = $row['Event'];
				$_SESSION['Event'] = $eventID;
				$query2 = "SELECT * FROM events WHERE Id = '$eventID'";
				$result2 = mysqli_query($conn, $query2);

				while ($row2 = $result2->fetch_assoc()) 
				{
					//$Id [] = $row['Id'];
					array_push($Id, $row2['Id']);
					$eventName [] = $row2['Nome'];
					$eventDesc [] = $row2['Desc'];
					$eventData [] = $row2['Data'];
				}
			}
		}

		$query10 = "SELECT Id FROM events ORDER BY `Id` DESC LIMIT 1";
		$result10 = mysqli_query($conn, $query10);

		$event2ID = 1;
		if (mysqli_num_rows($result10) > 0) {
			while ($row = mysqli_fetch_assoc($result10)) {
				$event2ID = $row["Id"] + 1;
			}
		}

		$_SESSION["eventID"] = $event2ID;
		
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


	<script>
		document.addEventListener("DOMContentLoaded", function () {
			$("#calendar").evoCalendar({
				theme:"Orange coral",
				calendarEvents: [
					{
						id: 'Evento', // Event's ID (required)
						name: "Capodanno", // Event name (required)
						date: "January/1/2000", // Event date (required)
						description:"Buon anno",
						type: "holiday", // Event type (required)
						everyYear: true // Same event every year (optional)
					}
				]
			})

			let eventID = <?php echo json_encode($Id); ?>;
			let eventName = <?php echo json_encode($eventName); ?>;
			let eventDesc = <?php echo json_encode($eventDesc); ?>;
			let eventData = <?php echo json_encode($eventData); ?>;

			let clubID = <?php echo json_encode($clubID); ?>;

			if (clubID > 0) {
				if (eventID.length > 0) {
					for (let index = 0; index < eventID.length; index++) {
						console.log(eventName[index]);
						addEvent1(eventID[index],
						eventName[index],
						eventDesc[index],
						eventData[index]);
					}
				}
			} else {
				var formContainer = document.getElementById('formContainer');
				formContainer.innerHTML = '';
				var errorConst = $("<h3 class='notification text-danger text-center mt-3'>You don't have a club!</h3>");
				errorConst.appendTo(formContainer);
			}
			
			
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