<?php
include("config.php");
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "freelance";

// // Create a database connection
// $conn = mysqli_connect($hostname, $username, $password, $database);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO users (username, email, password, balance) VALUES ('$name', '$email', '$password', 0)";
if (mysqli_query($connect, $sql)) {
    // Registration successful
    echo "Registration successful! \n you now need to login";
    header('Location: dashboard.php');
} else {
    // Check if the error message contains "Duplicate entry" indicating that the email is already registered
    if (strpos(mysqli_error($connect), "Duplicate entry") !== false) {
        echo '<script>alert("Email is already registered!");</script>';
        echo '<script>window.location.href = "Reg.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        echo '<script>alert("An error occurred during registration.");</script>';
        echo '<script>window.location.href = "Reg.php";</script>';
    }
}

// Close the database connection
// mysqli_close($conn);
?>
