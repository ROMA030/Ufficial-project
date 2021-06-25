<?php
	session_start();
	ob_start();
	if (!isset($_SESSION["username"])) {
		header("location: pages-sign-in.php");
	}elseif ($_SESSION["UserType"] == "player") {
        header("location: not-here.php");
    }
    if (!isset($_SESSION["ClubID"])) {
		header("location: clubs.php");
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
								<a class="dropdown-item" href="#">Log out</a>
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
									<button id="backButton" class="btn btn-lg btn-primary">Back</button>
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

        var addPlayers = function (id, name, src, addCard, username){
            var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');
            if (addCard == true) {
                var myPanel = $('<div class="" id="AddPlayer"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user-plus"></i></div></div></div><div class="card-body text-center"><img src="img/icons/plus.png" class="img-fluid rounded-circle mb-2" width="150" height="150" id = "addAvatarImage"/><h3 class="mt-1 mb-3" id="">Add a player</h3></div><div class="text-center mt-3"><button  onclick="addPlayer()" type="button" class="btn btn-lg btn-primary">Add</button></div></div></div></div>');
            } else {
                var temp = "setSession('"+username+"')";
                var temp2 = "showSession('"+username+"')";
                var myPanel = $('<div class="" id="'+id+'Player"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user"></i></div></div></div><div class="card-body text-center"><img src="'+src+'" class="img-fluid rounded-circle mb-2" style="max-height: 150px; min-height: 150px;" width="150" height="150" id = "playerAvatarImage'+ id +'"/><h3 class="mt-1 mb-3" id="">'+ name +'</h3></div><div class="text-center mt-3"><div class="row"><div class="col mt-0"><button onclick="'+temp+'" type="button" class="btn btn-lg btn-primary">Add Session</button></div><div class="col mt-0"><button onclick="'+temp2+'" type="button" class="btn btn-lg btn-primary">Show Session</button></div></div></div></div></div></div>');
            }
            
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');

            /*
			if (addCard == true) {
				var addPlayerButton = document.getElementById('addPlayerButton');
				addPlayerButton.addEventListener('click', function() {
					document.location.href = 'register-player.php';
				});
			}else {
				var AddSessionButton = document.getElementById('AddSessionButton'+username);
				AddSessionButton.addEventListener('click', function() {
					document.location.href = 'join-club.php';
				});
			}
            */
        };

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

        function addPlayer() {
            window.location = "register-player.php";
        }

        function setSession(username) {
            setCookie("playerUserSET", username, 1);
            window.location = "sessions.php";
        }

        function showSession(username) {
            setCookie("playerUserSHOW", username, 1);
            window.location = "graphic.php";
        }

        function setCookie(cName, cValue, expDays) {
            let date = new Date();
            date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
        }   
        
    </script>
    
	<?php
		
		$conn = mysqli_connect("localhost","root","","xeos");

		$user = $_SESSION['username'];
		$name = $_SESSION['Name'];
		$surname = $_SESSION['Surname'];
		$userType = $_SESSION['UserType'];
		$srcAvatar = $_SESSION['Avatar'];

        //$clubID = $_SESSION["ClubID"];
        $clubID = $_COOKIE["clubIDSHOW"];

		$playerNumber = $coachNumber = 0;

        $clubsData = array();
        $i = 0;

        //echo '<script type="text/javascript">RemoveClubs();</script>';
        
        $query3 = "SELECT Player FROM coachplayer WHERE Coach = '$user'";
        $result3 = mysqli_query($conn, $query3);

        $tempArray = array();
        $query5 = "SELECT player FROM clubplayers WHERE Club = '$clubID'";
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
                //$playersData[] = $row;
                $playerUserName = $row["Username"]; 
                array_push($playersData, $playerUserName);
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

			/*
            if ($x == $playerNumber) {
                echo '<script type="text/javascript">addPlayers("", "", "", true);</script>';
            }*/
        }

		echo '<script type="text/javascript">addPlayers("", "", "", true);</script>';
        
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