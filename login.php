<?php
session_start(); // Start a session to store user login status

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // // Database connection settings
  // $host = 'localhost'; // Replace with your database host
  // $username = 'root'; // Replace with your database username
  // $password_db = ''; // Replace with your database password
  // $database = 'freelance'; // Replace with your database name

  // // Create a connection to the database
  // $conn = new mysqli($host, $username, $password_db, $database);

  // // Check if the connection was successful
  // if ($conn->connect_error) {
  //   die('Connection failed: ' . $conn->connect_error);
  // }

include("config.php");

  // Prepare the SQL statement to retrieve user data
  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = $connect->query($sql);

  // Check if the query was successful and if a matching user was found
  if ($result && $result->num_rows === 1) {
    // Authentication successful
    $_SESSION['email'] = $email; // Store the email in the session

    // Redirect the user to the home page or any other desired page
    header('Location:Dashboard.php');
    exit;
  } else {
    // Authentication failed
    echo "<script>alert('Invalid email or password');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    
    exit;
  }

  // Close the database connection
  $conn->close();
}
?>
