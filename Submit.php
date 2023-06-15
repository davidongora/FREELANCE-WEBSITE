<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBS ZETU.KE</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

</head>


<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">JOBS ZETU.KE</span>
                    </a>
                </li>

                <li>
                    <a href="Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="jobs.html">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">Jobs</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Completed</span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Activate</span>
                    </a>
                </li>

                <li>
                    <a href="jobs.php">
                        <span class="icon">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </span>
                        <span class="title">Jobs</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Completed</span>
                    </a>
                </li>

                <li>
                    <a href="submit.html">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Submit</span>
                    </a>
                </li>

                <li>
                    <a href="notifications.html">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">Notifications</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Withdraw</span>
                    </a>
                </li>

                <li>
                    <a href="Help.html">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                
              <!--  <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>
-->
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <a href="profile.php">
                    <img src="assets/imgs/customer01.jpg" alt=""></a>
                </div>
            </div>


  <style>
    .drop-area {
      border: 2px dashed #ccc;
      padding: 2rem;
      text-align: center;
      cursor: pointer;
    }
  </style>

<?php
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "freelance";

// // Create a database connection
// $conn = mysqli_connect($hostname, $username, $password, $database);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

include("config.php");

// Retrieve user ID from the session
$userId = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $fileTempPath = $_FILES['file']['tmp_name'];
        $fileDestination = 'uploads/' . $fileName;
        
        if (move_uploaded_file($fileTempPath, $fileDestination)) {
            $sql = "INSERT INTO work_submissions (user_id, file_name, file_path, submission_date)
                    VALUES ('$userId', '$fileName', '$fileDestination', NOW())";

            if (mysqli_query($conn, $sql)) {
                // Submission stored successfully
                echo "Submission stored successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error uploading file.";
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>



<div class="container">
  <h1>Submit Page</h1>
  <form action="submit.php" method="POST" enctype="multipart/form-data">
    <p>Upload your documents by selecting or dropping them here:</p>
    <div class="drop-area" id="fileDropArea">
      <i class="bi bi-file-earmark-plus fs-1 mb-3"></i>
      <p>Drag and drop files here or click to upload.</p>
      <input type="file" id="fileInput" name="file" multiple>
    </div>
    <div id="loader" class="d-none">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <p>Uploading document...</p>
    </div>
    <div id="successMessage" class="alert alert-success mt-3 d-none">
      Documents uploaded successfully!
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    <button id="removeButton" class="btn btn-danger mt-3 d-none">Remove Document</button>
    <div id="timer" class="alert alert-warning mt-3 d-none"></div>
  </form>
</div>

<script>
  const fileDropArea = document.getElementById('fileDropArea');
  const fileInput = document.getElementById('fileInput');
  const successMessage = document.getElementById('successMessage');
  const loader = document.getElementById('loader');
  const removeButton = document.getElementById('removeButton');
  const timer = document.getElementById('timer');

  let timerInterval;

  fileDropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    fileDropArea.classList.add('border-primary');
  });

  fileDropArea.addEventListener('dragleave', () => {
    fileDropArea.classList.remove('border-primary');
  });

  fileDropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    fileDropArea.classList.remove('border-primary');
    handleFiles(e.dataTransfer.files);
  });

  fileInput.addEventListener('change', () => {
    handleFiles(fileInput.files);
  });

  function handleFiles(files) {
    // Upload logic here
    // Replace the following with your actual upload functionality

    // Display loader
    loader.classList.remove('d-none');

    // Simulating upload delay
    setTimeout(() => {
      // Hide loader
      loader.classList.add('d-none');

      // Display success message
      successMessage.classList.remove('d-none');

      // Show remove button
      removeButton.classList.remove('d-none');
    }, 2000);
  }

  removeButton.addEventListener('click', () => {
    // Remove uploaded document
    removeDocument();

    // Hide remove button and messages
    removeButton.classList.add('d-none');
    successMessage.classList.add('d-none');
  });

  function removeDocument() {
    // Remove logic here
    // Replace with your actual logic to remove the uploaded document

    // Hide success message
    successMessage.classList.add('d-none');
  }
</script>
