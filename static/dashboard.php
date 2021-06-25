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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/evo-calendar.min.css">
	<link rel="stylesheet" href="css/evo-calendar.orange-coral.min.css"> 

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c9bd9ac924.js" crossorigin="anonymous"></script>

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
		function addEvent(eventName, eventDescription, eventData, eventClub)
		{
			var res = eventData.trim().split("-");
			console.log(res);

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
				  type: eventClub,
				}
			  ]);
			
		}

		function addEvent1(eventID ,eventName, eventDescription, eventData, eventClub)
		{
			var res = eventData.trim().split("-");
			console.log(res);

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

			console.log(eventData);
			$("#calendar").evoCalendar('addCalendarEvent', [
				{
				  id: eventID,
				  name: eventName,
				  date: newData,
				  description: eventDescription, 
				  type: eventClub,
				}
			  ]);
			
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
																	<img class="center img-fluid rounded-circle mb-2" width="250" height="250" src="img/avatars/avatar-2.jpg" alt="Squad">
																	<div class="carousel-caption">
																		
																	</div>
																	</div>
																	<div class="carousel-item">
																	<img class="center img-fluid rounded-circle mb-2 center" width="250" height="250" src="img/avatars/avatar-3.jpg" alt="...">
																	<div class="carousel-caption">
																	
																	</div>
																	</div>
																	<div class="carousel-item">
																	<img src="img/avatars/avatar-4.jpg" class="center img-fluid rounded-circle mb-2 center" width="250" height="250" alt="...">
																	<div class="carousel-caption">
																		
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
													</style>
												</div>
											</div>
										</div>
									</div>
							</section>




						
										
										<a class="add_event_button" onclick="document.getElementById('id01').style.display='block'" style="text-decoration: none; margin-top: 20px" onmouseover = "this.style.background = '#fff'" onmouseout  = "this.style.background = '#8f0000'">Aggiungi evento <i class="fas fa-plus-circle"></i></a>
										
										<div id="id01" class="modal">
										  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
										  <form class="modal-content" >
											<div class="container">
											  <h1>Crea evento</h1>
											  <p>Riempi i campi richiesti per poter creare un evento.</p>
											  <hr>
											  <label for="email"><b>Inserisci nome evento</b></label>
											  <input type="text" placeholder="Enter Event" name="eventName" id="eventName" required>

											  <label for="des"><b>Inserisci descrizione evento</b></label>
											  <input type="text" placeholder="Description event" name="eventDescription" id="eventDescription" required>

											  <label for="des"><b>Inserisci nome squadra</b></label>
											  <input type="text" placeholder="Enter name club" name="eventClub" id="eventClub" required>

											  <label for="data"><b>Inserisci la data dell'evento</b></label>
											  <input type="date" placeholder="Insert data" name="data" id="eventData" required>

											  <div>
												<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annulla</button>
												<button type="button" class="signupbtn"  onclick="addEvent(document.getElementById('eventName').value, document.getElementById('eventDescription').value, document.getElementById('eventData').value, document.getElementById('eventClub').value), document.getElementById('id01').style.display='none'">Crea evento</button>
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
		
		
		$query1 = "SELECT * FROM eventplayer WHERE Player = '$user'";
		$result1 = mysqli_query($conn, $query1);

		$Id = array();
		$eventName = array();
		$eventDesc = array();
		$eventData = array();
		$eventClub = array();

		while ($row = $result1->fetch_assoc()) 
		{
			$eventID = $row['Event'];
			$_SESSION['Event'] = $eventID;
			$query2 = "SELECT * FROM events WHERE Id = '$eventID'";
			$result2 = mysqli_query($conn, $query2);

			while ($row = $result2->fetch_assoc()) 
			{
				$Id [] = $row['Id'];
				$eventName [] = $row['Nome'];
				$eventDesc [] = $row['Desc'];
				$eventData [] = $row['Data'];
				$eventClub [] = $row['Club'];
			}
		}
		
		
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
<script src="js/evo-calendar.min.js"></script>

<script>

$(document).ready(function() {
	$('#calendar').evoCalendar({
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
	let eventClub = <?php echo json_encode($eventClub); ?>;

	for (let index = 0; index < eventID.length; index++) {

		addEvent1(eventID[index],
		eventName[index],
		eventDesc[index],
		eventData[index],
		eventClub[index]);
		
	}

})

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