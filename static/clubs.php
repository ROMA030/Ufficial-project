<?php
	session_start();
	ob_start();
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
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Sessions | Xeos</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
								<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								
								<a class="dropdown-item" href="Contact.php"><i class="align-middle me-1"
										data-feather="help-circle"></i> Contact </a>
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
								<h1 class="h3 mb-3" id="pageTitle">Your Clubs</h1>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item" id="addBackButton">
									<button hidden id="backButton" class="btn btn-lg btn-primary">Back</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="row">
                        <div class="col-xxl-2 d-flex"></div>
                        <div class="col-xxl-8 d-flex">
                            <div class="w-100">
                                <div class="container">
									
									<!--
									<div class="row" id="contentPanel">
										
									</div>
									-->
                                    <form method="post">
                                        <div class="row" id="contentPanel">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 d-flex"></div>
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

		function cardClub(){
			var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');
			var myPanel = $('<div class="" id=""><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="plus-circle"></i></div></div></div><div class="card-body text-center"><img src="img/icons/plus.png" class="img-fluid rounded-circle mb-2" width="150" height="150" id = "addAvatarImage"/><h3 class="mt-1 mb-3" id="">Create your club</h3></div><div class="text-center mt-3"><button onclick="CreateClub()" type="button" class="btn btn-lg btn-primary">Create</button></div></div></div></div>');
			myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');

			/*
			var registerClubButton = document.getElementById('createClub');
			registerClubButton.addEventListener('click', function() {
				document.location.href = 'register-club.php';
			});
			*/
		}

		var addCoachs = function (id, name, src, username){
            var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');            
            var myPanel = $('<div class="" id="'+id+'Coach"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user"></i></div></div></div><div class="card-body text-center"><img src="'+src+'" class="img-fluid rounded-circle mb-2" style="max-height: 150px; min-height: 150px;" width="150" height="150" id = "playerAvatarImage'+ id +'"/><h3 class="mt-1 mb-3" id="">'+ name +'</h3></div><div class="text-center mt-3"><button name="DeleteButton'+ id +'" value = "'+ username +'" onclick="DeleteCoach(this, '+ id +')" class="btn btn-lg btn-primary">Delete</button></div></div></div></div>');
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');
        };
		
        var addClub = function (id, name, src, addCard){
            var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');
            if (addCard == true) {
				var myPanel = $('<div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="plus-circle"></i></div></div></div><div class="card-body text-center"><img src="img/icons/plus.png" class="img-fluid rounded-circle mb-2" width="150" height="150" id = "addAvatarImage"/><h3 class="mt-1 mb-3" id="">Join a club</h3></div><div class="text-center mt-3"><button onclick="JoinClub()" type="button" class="btn btn-lg btn-primary">Join</button></div></div></div>');
			} else {
				var temp = "ShowPlayers('"+id+"')";
                var myPanel = $('<div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="users"></i></div></div></div><div class="card-body text-center"><img src="'+src+'" class="img-fluid rounded-circle mb-2" style="max-height: 150px; min-height: 150px;" width="150" height="150" id = "clubAvatarImage"/><h3 class="mt-1 mb-3">'+ name +'</h3></div><div class="text-center mt-3"><button onclick="'+temp+'" type="button" class="btn btn-lg btn-primary">Show players</button></div></div></div>');
            }
            //button type="submit" name="ClubButton'+ id +'" class="btn btn-lg btn-primary"
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');
			/*
			if (addCard == true) {
				var joinClubButton = document.getElementById('joinClub');
				joinClubButton.addEventListener('click', function() {
					document.location.href = 'join-club.php';
				});
			}
			*/
        };

		/*
        var addPlayers = function (id, name, src, addCard){
            var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');
            if (addCard == true) {
                var myPanel = $('<div class="" id="AddPlayer"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user-plus"></i></div></div></div><div class="card-body text-center"><img src="img/icons/plus.png" class="img-fluid rounded-circle mb-2" width="150" height="150" id = "addAvatarImage"/><h3 class="mt-1 mb-3" id="">Add a player</h3></div><div class="text-center mt-3"><button id="addPlayerButton" class="btn btn-lg btn-primary">Add</button></div></div></div></div>');
            } else {
                var myPanel = $('<div class="" id="'+id+'Player"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user"></i></div></div></div><div class="card-body text-center"><img src="'+src+'" class="img-fluid rounded-circle mb-2" style="max-height: 150px; min-height: 150px;" width="150" height="150" id = "playerAvatarImage'+ id +'"/><h3 class="mt-1 mb-3" id="">'+ name +'</h3></div><div class="text-center mt-3"><div class="row"><div class="col mt-0"><button id="AddSessionButton'+name+'" class="btn btn-lg btn-primary">Add Session</button></div><div class="col mt-0"><button type="submit" name="ShowSessionButton'+ id +'" class="btn btn-lg btn-primary">Show Session</button></div></div></div></div></div></div>');
            }
            
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');

			if (addCard == true) {
				var addPlayerButton = document.getElementById('addPlayerButton');
				addPlayerButton.addEventListener('click', function() {
					document.location.href = 'register-player.php';
				});
			}else {
				var AddSessionButton = document.getElementById('AddSessionButton'+name);
				AddSessionButton.addEventListener('click', function() {
					document.location.href = 'join-club.php';
				});
			}
        };
		*/

        function RemoveClubs() {
            const contentClubs = document.getElementById("contentPanel");
            contentClubs.innerHTML = '';
        }

		function DeleteCoach(elem, id) {
			var coachUsername = elem.value;
			var divToClear = document.getElementById(id + 'Coach');
			divToClear.innerHTML = '';
			document.location.href = 'php/delete_coach.php?user=' + coachUsername;
		}

		function setCookie(cName, cValue, expDays) {
            let date = new Date();
            date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
        } 

		function ShowPlayers(id) {
			setCookie("clubIDSHOW", id, 1);
            window.location = "club-players.php";
		}

		function CreateClub() {
            window.location = "register-club.php";
		}

		function JoinClub() {
            window.location = "join-club.php";
		}

    </script>
    
	<?php
		
		$conn = mysqli_connect("localhost","root","","xeos");

		$user = $_SESSION['username'];
		$name = $_SESSION['Name'];
		$surname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

        $clubsOfCoach = array();

        $query2 = "SELECT * FROM clubcoach";
        $result2 = mysqli_query($conn, $query2);
        
        while ($row = mysqli_fetch_assoc($result2)) {
            $coachClubID = $row["Club"];
            $coach = $row["Coach"];
            //$coachsArray = explode(";", $coachs);
            //foreach($coachsArray as $coach){
			if ($user == $coach) {
				array_push($clubsOfCoach, $coachClubID);
			}
            //}
        }

		$playerNumber = $coachNumber = 0;
		$clubsIDArray = array();
		if ($userType == "manager") {
			$checkManager = "SELECT Club FROM clubmanager WHERE Manager = '$user'";
			$managerResult = mysqli_query($conn, $checkManager);

			if (mysqli_num_rows($managerResult) > 0) {
				while ($row = mysqli_fetch_assoc($managerResult)) {
					$clubManagerID = $row["Club"];

					$coachOfThisClub = "SELECT Coach FROM clubcoach WHERE Club = '$clubManagerID'";
					$coachResult = mysqli_query($conn, $coachOfThisClub);
					while ($row2 = mysqli_fetch_assoc($coachResult)) {
						$coachUsername = $row2["Coach"];

						$coachInfo = "SELECT * FROM users WHERE Username = '$coachUsername'";
						$coachInfoResult = mysqli_query($conn, $coachInfo);
						
						$coachNumber = 0;
						while ($row3 = mysqli_fetch_assoc($coachInfoResult)) {
							$coachUserName = $row3["Username"];
							$coachName = $row3["Name"];
							$coachSurname = $row3["Surname"];
							$coachAvatar = $row3["Avatar"];
							$coachFullName = $coachName . ' ' . $coachSurname;
							if ($coachAvatar == "") {
								$coachSrcAvatar = "img/avatars/default-avatar.png";
							} else {
								$coachSrcAvatar = "data:image/jpeg;base64,".base64_encode( $coachAvatar )."";
							}

							echo '<script type="text/javascript">addCoachs("' . $coachNumber . '", "' . $coachFullName . '", "' . $coachSrcAvatar . '", "' . $coachUserName . '");</script>';
							$coachNumber += 1;
						}
					}
				}
			}else {
				echo '<script type="text/javascript">cardClub();</script>';
			}
		}elseif ($userType == "coach") {
			$query = "SELECT * FROM club";
			$result = mysqli_query($conn, $query);

			$clubsData = array();
			$number = mysqli_num_rows($result);
			$i = 0;

			$playersOfClub = array();
			while ($row = mysqli_fetch_assoc($result)) {
				$clubsData[] = $row;
				$clubID = $row["ClubID"];
				//array_push($clubsIDArray, $clubID);
				foreach($clubsOfCoach as $id){
					if ($clubID == $id) {
						array_push($playersOfClub, $clubID);
						$clubName = $row["ClubName"];
						$clubAvatar = $row["Avatar"];
						if ($clubAvatar == "") {
							$clubSrcAvatar = "img/avatars/default-avatar.png";
						} else {
							$clubSrcAvatar = "data:image/jpeg;base64,".base64_encode( $clubAvatar )."";
						}
						echo '<script type="text/javascript">addClub("' . $clubID . '", "' . $clubName . '", "' . $clubSrcAvatar . '", false);</script>';
						//$i = $i + 1;
					}
				}
				$i = $i + 1;
				
			}
			

			echo '<script type="text/javascript">addClub("", "", "", true);</script>';

			foreach ($playersOfClub as $id) {
				if(isset($_POST["ClubButton".$id.""])) {
					$_SESSION['ClubID'] = $id;
					header("location: club-players.php",false);
				}
			}

			/*
			for ($j=0; $j <= $number; $j++) { 
				if(isset($_POST["ClubButton".$j.""])) {
					
					echo '<script type="text/javascript">RemoveClubs();</script>';
					
					$query3 = "SELECT Player FROM coachplayer WHERE Coach = '$user'";
					$result3 = mysqli_query($conn, $query3);

					$tempArray = array();
					$query5 = "SELECT player FROM clubplayers WHERE Club = '$j'";
					$result5 = mysqli_query($conn, $query5);
					while ($row = mysqli_fetch_assoc($result5)) {
						array_push($tempArray, $row["player"]);
					}

					$finalPlayer = array();
					while ($row = mysqli_fetch_assoc($result3)) {
						foreach($tempArray as $playerInClub){
							if ($row["Player"] == $playerInClub) {
								array_push($finalPlayer, $row["Player"]);	
							}
						}
					}

					$playersData = array();
					$playerNumber = count($finalPlayer);
					$x = 0;
					foreach($finalPlayer as $pla){
						$query4 = "SELECT * FROM users WHERE Username = '$pla'";
						$result4 = mysqli_query($conn, $query4);

						while ($row = mysqli_fetch_assoc($result4)) {
							$playersData[] = $row;
							$playerUserName = $row["Username"]; 
							$playerName = $row["Name"];
							$playerSurname = $row["Surname"];
							$playerAvatar = $row["Avatar"];
							if ($playerAvatar == "") {
								$playerSrcAvatar = "img/avatars/default-avatar.png";
							} else {
								$playerSrcAvatar = "data:image/jpeg;base64,".base64_encode( $playerAvatar )."";
							}

							$playerFullName = $playerName . ' ' . $playerSurname;
							echo '<script type="text/javascript">addPlayers("' . $x . '", "' . $playerFullName . '", "' . $playerSrcAvatar . '", false, "' . $playerUserName . '");</script>';
							
						}
						$x = $x + 1;
		
						if ($x == $playerNumber) {
							echo '<script type="text/javascript">addPlayers("", "", "", true);</script>';
						}
					}
					$_SESSION['ClubID'] = $j;
					header("location: club-players.php",false);
				}
			}*/
		}
		//mysqli_close($conn);
		//exit;

	?>

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
                    CreateSidebarElement("clubs.php", "users", "Club", true);
					break;
				case 'manager':
					document.getElementById("pageTitle").innerHTML = "Coaches in your club";
					CreateSidebarElement("clubs.php", "users", "Club", true);
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