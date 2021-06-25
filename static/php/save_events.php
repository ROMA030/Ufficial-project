<?php
    session_start();
    $user = $_SESSION['username'];

    $conn = mysqli_connect("localhost","root","","xeos");

    $eventID = $_SESSION["eventID"];
    $cookieData = $_COOKIE['eventDatas'];

    $cookieArray = array();

    $cookieArray = explode(",", $cookieData);

    $eventName = $cookieArray[0];
    $eventDate = $cookieArray[1];
    $eventDesc = $cookieArray[2];
    
    $query = "INSERT INTO events(`Nome`, `Desc`, `Data`, `Club`) VALUES ('$eventName', '$eventDesc', '$eventDate', '')";
    $result = mysqli_query($conn, $query);
    
    //$eventID += 1;
    $clubID = $_SESSION["UserClubID"];
    $query2 = "INSERT INTO eventplayer(Event, Club) VALUES ('$eventID', '$clubID')";
    $result2 = mysqli_query($conn, $query2);

    //$_SESSION["eventID"] = $eventID;

    header("location: ../dashboard.php");
    exit();

    mysqli_close($conn);
    
?>