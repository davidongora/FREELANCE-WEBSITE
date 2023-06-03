<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBS ZETU.KE</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">



     <!-- =========== Scripts =========  -->
   <script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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
                    <a href="home.php">
                        <span class="icon">
                        <ion-icon name="card-outline"></ion-icon>                        </span>
                        <span class="title">Activate</span>
                    </a>
                </li>

                
                <li>
                    <a href="submit.html">
                        <span class="icon">
                        <ion-icon name="file-tray-full-outline"></ion-icon>
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
    <span class="badge">3</span> <!-- Add the badge element here -->
  </a>
</li>

<style>
  .badge {
    background-color: red;
    color: white;
    padding: 2px 6px;
    border-radius: 50%;
    font-size: 12px;
    margin-left: 5px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 20px;
    height: 20px;
  }
</style>



                <li>
                    <a href="withdraw.php">
                        <span class="icon">
                        <ion-icon name="cash-outline"></ion-icon>
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
            <div class="container1">
    <style>
        .container1 {
            max-width: 800px;
            margin: 10px auto;
            padding: 0 20px;
          }
      
          h1, h2 {
            margin-top: 30px;
          }
      
          ol, ul {
            margin-left: 20px;
          }
    </style>


            <div class="card">
    <div>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "freelance";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve user details from the "members" table
        $user_id = 1; // Assuming the user ID is 1, you can change it dynamically based on the logged-in user

        $sql = "SELECT * FROM members WHERE MemId = '$user_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
           <div class="profile-card">
    <!-- <img src="assets/imgs/customer01.jpg" alt="User Image"> -->
    <h3>User Profile</h3>
    <div></div>
    <table class="profile-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>MemId</th>
        </tr>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td>
                <input type="password" value="<?php echo $row['Password']; ?>" readonly>
                <button onclick="togglePasswordVisibility(this)">Show Password</button>
                <script>
    function togglePasswordVisibility(button) {
        var passwordInput = button.previousElementSibling;
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            button.textContent = "Hide Password";
        } else {
            passwordInput.type = "password";
            button.textContent = "Show Password";
        }
    }
</script>

            </td>
            <td><?php echo $row['MemId']; ?></td>
        </tr>
    </table>
</div>
<style>

.profile-table {
    width: 100%;
    border-collapse: collapse;
}

.profile-table th,
.profile-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.profile-table th {
    background-color: #f2f2f2;
}

.profile-table td input[type="password"],
.profile-table td button {
    margin: 0;
}

.profile-table button {
    background-color: transparent;
    border: none;
    color: blue;
    cursor: pointer;
}

.profile-table button:focus {
    outline: none;
}

    </style>
                <!-- Add more profile details as needed -->
                <a href="update.php">Edit Profile</a>
            </div>
            <?php
        } else {
            echo "User not found.";
        }

        $conn->close();
        ?>

        
    </div>
</div>

    
    
   <!-- =========== Scripts =========  -->
   <script src="assets/js/main.js"></script>

   <!-- ====== ionicons ======= -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>