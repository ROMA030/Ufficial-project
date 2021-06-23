<?php
	session_start();
?>
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
        $securityAnswer = $_POST['securityAnswer'];

        $avatar = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));

        // If forum inputs aren't empty 
        if (!empty($name) && !empty($surname) && !empty($email) && !empty($username) && !empty($password) && !empty($securityAnswer)) {
                                            
            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                header("location: ../pages-sign-up.php");
                echo "<p class='text-danger text-center mt-3'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character</p>";
                exit();												
            }else{
                $checkUser = "SELECT * FROM users WHERE Username = '$username'";
                $checkResult = mysqli_query($conn, $checkUser);

                // If number of rows in result variable is major than 0
                if (mysqli_num_rows($checkResult) > 0) {
                    header("location: ../pages-sign-up.php");
                    echo "<p class='text-danger text-center mt-3'>Username already exists</p>";
                    exit();
                }else {
                    $users = "INSERT INTO users(Name, Surname, Email, Username, Password , Avatar, UserType, Risposta) VALUES ('$name', '$surname', '$email', '$username', '$password' , '$avatar', '$usertype','$securityAnswer')";
                    $result = mysqli_query($conn, $users);
                    header("location: ../pages-sign-in.php");
                    exit();
                }
                mysqli_close($conn);
            }
        }                
    }
?>