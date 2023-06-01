<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "freelance";

// Create a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO members (name,email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
 // echo "Registration successful!";
  header('Location: re.html');
  echo "Registration successful!
  Now login to verify";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  header('Location: index.html');
}

// Close the database connection
mysqli_close($conn);
?>
