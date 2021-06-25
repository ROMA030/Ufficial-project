<?php
    $conn = mysqli_connect("localhost","root","","xeos");
    $user = $_GET['user'];

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    //$query = "DELETE FROM users WHERE Username = '$user'";
    //$result = mysqli_query($conn, $query);

    $query2 = "DELETE FROM clubcoach WHERE Coach = '$user'";
    $result2 = mysqli_query($conn, $query2);
    header("location: ../clubs.php");
    exit();
    mysqli_close($conn);
?>