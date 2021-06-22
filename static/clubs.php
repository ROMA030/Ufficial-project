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

					<h1 class="h3 mb-3">Your Clubs</h1>

					<div class="row">
                        <div class="col-xxl-2 d-flex"></div>
                        <div class="col-xxl-8 d-flex">
                            <div class="w-100">
                                <div class="container">
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
        var addCols = function (id, name, src, addCard){
            var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');
            if (addCard == true) {
                var myPanel = $('<div class="" id="AddClub"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="plus-circle"></i></div></div></div><div class="card-body text-center"><img src="img/icons/plus.png" class="img-fluid rounded-circle mb-2" width="150" height="150" id = "addAvatarImage"/><h3 class="mt-1 mb-3" id="">Add a club</h3></div><div class="text-center mt-3"><button type="submit" name="add" class="btn btn-lg btn-primary">Add</button></div></div></div></div>');
            } else {
                var myPanel = $('<div class="" id="'+id+'Club"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="users"></i></div></div></div><div class="card-body text-center"><img src="'+src+'" class="img-fluid rounded-circle mb-2" style="max-height: 150px; min-height: 150px;" width="150" height="150" id = "clubAvatarImage"/><h3 class="mt-1 mb-3" id="">'+ name +'</h3></div><div class="text-center mt-3"><button type="submit" name="ClubButton'+ id +'" class="btn btn-lg btn-primary">Show Players</button></div></div></div></div>');
            }
            
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');
        };

        var addPlayers = function (id, name, src, addCard){
            var myCol = $('<div class="col-sm-4 col-md-4 pb-2" align="center" justify="center"></div>');
            if (addCard == true) {
                var myPanel = $('<div class="" id="AddPlayer"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user-plus"></i></div></div></div><div class="card-body text-center"><img src="img/icons/plus.png" class="img-fluid rounded-circle mb-2" width="150" height="150" id = "addAvatarImage"/><h3 class="mt-1 mb-3" id="">Add a player</h3></div><div class="text-center mt-3"><button type="submit" name="addPlayer" class="btn btn-lg btn-primary">Add</button></div></div></div></div>');
            } else {
                var myPanel = $('<div class="" id="'+id+'Player"><div class="card"><div class="card-body"><div class="row"><div class="col mt-0"></div><div class="col-auto"><div class="stat text-primary"><i class="align-middle" data-feather="user"></i></div></div></div><div class="card-body text-center"><img src="'+src+'" class="img-fluid rounded-circle mb-2" style="max-height: 150px; min-height: 150px;" width="150" height="150" id = "playerAvatarImage'+ id +'"/><h3 class="mt-1 mb-3" id="">'+ name +'</h3></div><div class="text-center mt-3"><div class="row"><div class="col mt-0"><button type="submit" name="AddSessionButton'+ id +'" class="btn btn-lg btn-primary">Add Session</button></div><div class="col mt-0"><button type="submit" name="ShowSessionButton'+ id +'" class="btn btn-lg btn-primary">Show Session</button></div></div></div></div></div></div>');
            }
            
            myPanel.appendTo(myCol);
            myCol.appendTo('#contentPanel');
        };

        function RemoveClubs() {
            const contentClubs = document.getElementById("contentPanel");
            contentClubs.innerHTML = '';
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
            $coachs = $row["Coach"];

            $coachsArray = explode(";", $coachs);
            
            foreach($coachsArray as $coach){
                if ($user == $coach) {
                    array_push($clubsOfCoach, $coachClubID);
                }
            }
        }
        
		$query = "SELECT * FROM club";
		$result = mysqli_query($conn, $query);

		$clubsData = array();
        $number = mysqli_num_rows($result);
        $i = 0;

		$playersOfClub = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $clubsData[] = $row;
            $clubID = $row["ClubID"];
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
                    
                    echo '<script type="text/javascript">addCols("' . $clubID . '", "' . $clubName . '", "' . $clubSrcAvatar . '", false);</script>';
                    //$i = $i + 1;
                }
                
            }

            $i = $i + 1;

            if ($i == $number) {
                echo '<script type="text/javascript">addCols("", "", "", true);</script>';
            }
        }

        $playerNumber = 0;
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
                $playerNumber = mysqli_num_rows($result3);
                $x = 0;
                foreach($finalPlayer as $pla){
                    $query4 = "SELECT * FROM users WHERE Username = '$pla'";
                    $result4 = mysqli_query($conn, $query4);

                    while ($row = mysqli_fetch_assoc($result4)) {
                        $playersData[] = $row;

                        $playerName = $row["Name"];
                        $playerSurname = $row["Surname"];
                        $playerAvatar = $row["Avatar"];
                        if ($playerAvatar == "") {
                            $playerSrcAvatar = "img/avatars/default-avatar.png";
                        } else {
                            $playerSrcAvatar = "data:image/jpeg;base64,".base64_encode( $playerAvatar )."";
                        }

                        $playerFullName = $playerName . ' ' . $playerSurname;
                        echo '<script type="text/javascript">addPlayers("' . $x . '", "' . $playerFullName . '", "' . $playerSrcAvatar . '", false);</script>';
                        $x = $x + 1;
    
                        if ($x == $playerNumber) {
                            echo '<script type="text/javascript">addPlayers("", "", "", true);</script>';
                        }
                    }
                }
            }
        }

        if(isset($_POST['add'])) {
            echo "add";
        }

		for ($y=0; $y < $playerNumber; $y++) { 
			if(isset($_POST["AddSessionButton".$y.""])) {
				header("location: register-player.php");
				ob_end_flush();
			}
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

			document.getElementById("nameSurname").innerHTML = name + ' ' + surname;
			var image = document.getElementById('avatarImage');
            image.src = avatar;

			switch (userType) {
				case 'player':
					CreateSidebarElement("graphic.php", "book", "Graphics");
					break;
				case 'coach':
                    CreateSidebarElement("clubs.php", "users", "Clubs", true);
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
				iElement.innerHTML = `<i class="align-middle" data-feather="book"></i>`;
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