<?php
    $conn = mysqli_connect("localhost","root","","xeos");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $usertype = $_POST['role'];

        $avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));

        // If forum inputs aren't empty
        if (!empty($name) && !empty($surname) && !empty($email) && !empty($username) && !empty($password)) {
            
            $checkUser = "SELECT * FROM users WHERE Username = '$username'";
            $checkResult = mysqli_query($conn, $checkUser);

            // If number of rows in result variable is major than 0
            if (mysqli_num_rows($checkResult) > 0) {
                header("location: ../pages-sign-up.php");
                echo "<p class='text-danger text-center mt-3'>Username already exists</p>";
                exit();
            }else {
                $users = "INSERT INTO users(Name, Surname, Email, Username, Password , Avatar, UserType) VALUES ('$name', '$surname', '$email', '$username', '$password' , '$avatar', '$usertype')";
                $result = mysqli_query($conn, $users);
                header("location: ../dashboard.php?user=". $username);
                exit();
            }
            mysqli_close($conn);
        }
    }
?>