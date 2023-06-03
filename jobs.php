<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBS ZETU.KE</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script>script.js</script>

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
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Activate</span>
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

        
            <!-- ================ Order-->
            <!-- ================ Order Details List ================= -->
            <div class="container mt-4">
              <h2>Available Jobs</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Available Jobs</li>
                </ol>
              </nav>
              <div class="row">
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Job Title 1</h5>
        <p class="card-text">Job Description 1</p>
        <p class="card-text">Price: $50</p>
        <div id="timer1">00:00</div>
        <button class="btn btn-primary bid-button">Bid</button>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
        <div>
          <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
          <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Job Title 2</h5>
        <p class="card-text">Job Description 2</p>
        <p class="card-text">Price: $80</p>
        <div id="timer2">00:00</div>
        <button class="btn btn-primary bid-button">Bid</button>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
        <div>
          <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
          <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
  <div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">Job Title 3</h5>
      <p class="card-text">Job Description 3</p>
      <p class="card-text">Price: $100</p>
      <div id="timer3">00:00</div>
      <button class="btn btn-primary bid-button" data-timer-id="timer3">Bid</button>
    </div>
    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
      <div>
        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
      </div>
    </div>
  </div>
</div>

<script>
  function setStorageItem(key, value) {
    localStorage.setItem(key, value);
  }

  function getStorageItem(key) {
    return localStorage.getItem(key);
  }

  var timers = {
    timer1: {
      duration: 60,
      element: document.getElementById('timer1')
    },
    timer2: {
      duration: 90,
      element: document.getElementById('timer2')
    },
    timer3: {
      duration: 120,
      element: document.getElementById('timer3')
    }
  };

  var bidButtons = document.querySelectorAll('.bid-button');
  bidButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var timerId = this.dataset.timerId;
      var timer = timers[timerId];
      var startTime = parseInt(getStorageItem(timerId)) || new Date().getTime();
      var duration = timer.duration;
      var timerElement = timer.element;

      var bidButton = this;
      bidButton.disabled = true;

      var timerInterval = setInterval(updateTimer, 1000);

      function updateTimer() {
        var currentTime = new Date().getTime();
        var elapsedTime = Math.floor((currentTime - startTime) / 1000);
        var remainingTime = duration - elapsedTime;

        if (remainingTime <= 0) {
          clearInterval(timerInterval);
          timerElement.textContent = "Time Elapsed";
          bidButton.disabled = true;
          setStorageItem(timerId, ""); // Remove the start time from localStorage when time elapses
        } else {
          var minutes = Math.floor(remainingTime / 60);
          var seconds = remainingTime % 60;

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          timerElement.textContent = minutes + ":" + seconds;

          // Update the start time for accurate countdown
          startTime = currentTime - (elapsedTime * 1000);
          setStorageItem(timerId, startTime.toString()); // Store the corrected start time in localStorage
        }
      }

      updateTimer();

      window.onbeforeunload = function() {
        setStorageItem(timerId, startTime.toString());
      };
    });
  });
</script>

                <!--<div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Job Title 2</h5>
                      <p class="card-text">Job Description 2</p>
                      <p class="card-text">Price: $80</p>
                      <div id="timer2"></div>
          
                      <button class="btn btn-primary bid-button">Bid</button>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                      <button class="btn btn-success bid-success" style="display: none;">Successfully Bided</button>
                      <div>
                        <button class="btn btn-secondary unbid-button" style="display: none;">Unbid</button>
                        <button class="btn btn-secondary ok-button" style="display: none;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
          
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <!-- Your custom JavaScript -->
            <script src="script.js"></script>
            
            <title>Available Jobs</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <!-- Your custom CSS -->
            <link rel="stylesheet" href="styles.css">
          
            <div class="container mt-4">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">1</li>
                  <li class="breadcrumb-item">2</li>
                  <li class="breadcrumb-item">3</li>
                </ol>
              </nav>
              <!-- Rest of your code -->
            </div>

          <script>
        function makePayment() {
            // Call the Daraja-MPesa API to process the payment
            // After successful payment, update the UI and show the bid button
            document.querySelector('.bid-button').style.display = 'none';
            document.querySelector('.bid-success').style.display = 'inline-block';
            document.querySelector('.unbid-button').style.display = 'inline-block';
            document.querySelector('.ok-button').style.display = 'inline-block';
            // Update the balance display
            document.querySelector('#balance').innerText = 'Balance: $500';
        }
    </script>
          

  <!-- =========== Scripts =========  -->
  <script src="assets/js/main.js"></script>
  <!-- ====== ionicons ======= -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
