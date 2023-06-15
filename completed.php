<?php
include("config.php");
// Establish a database connection
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "freelance";

// $conn = mysqli_connect($hostname, $username, $password, $database);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Retrieve the number of jobs submitted by the user
$userID = 1; // Replace 1 with the actual user ID
$sql = "SELECT COUNT(*) AS totalJobs FROM submission_table WHERE user_id = $userID";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalJobs = $row['totalJobs'];

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Completed Page</title>
</head>
<body>
    <h1>Completed Page</h1>
    <p>You have submitted <?php echo $totalJobs; ?> jobs.</p>
    <p><a href="submission_table.php">View Submission Table</a></p>
</body>
</html>
