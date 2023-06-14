<?php
header("Content-Type: application/json");

$response = '{
    "ResultCode": 0, 
    "ResultDesc": "Confirmation Received Successfully"
}';

// DATA
$mpesaResponse = file_get_contents('php://input');

// Log the response
$logFile = "M_PESAConfirmationResponse.txt";

// Write to file
$log = fopen($logFile, "a");
fwrite($log, $mpesaResponse);
fclose($log);

// Assuming $mpesaResponse is an array containing the M-Pesa response data
$mpesaResponse = array(
    'your_code_key' => 'MPESA123456', // Replace 'MPESA123456' with the actual M-Pesa code
  );
  
  // Store the M-Pesa generated code in a session variable
  $_SESSION['mpesa_code'] = $mpesaResponse['your_code_key']; // Replace 'your_code_key' with the actual key in the M-Pesa response
  
// Update user's balance in the database
$minimumPayment = 500; // Minimum payment amount
$userId = $_SESSION['user_id']; // Assuming you have a user ID stored in the session

// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelance";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user's current balance
$sql = "SELECT balance FROM users WHERE id = '$userId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentBalance = $row['balance'];
    
    // Calculate new balance after deducting minimum payment
    $newBalance = $currentBalance - $minimumPayment;
    
    if ($newBalance >= 0) {
        // Update user's balance in the database
        $updateSql = "UPDATE users SET balance = '$newBalance' WHERE id = '$userId'";
        if ($conn->query($updateSql) === TRUE) {
            // Balance updated successfully
            echo $response;
        } else {
            // Error updating balance
            echo "Error: " . $conn->error;
        }
    } else {
        // Insufficient balance
        echo "Error: Insufficient balance. Minimum payment amount is 500.";
    }
} else {
    // User not found
    echo "Error: User not found.";
}

$conn->close();
?>
