<!DOCTYPE html>
<html>
<head>
    <title>Job Submission Progress</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .progress-bar {
            transition: width 2h;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Job Submission Progress</h1>
        <div class="progress">
            <div id="progressBar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var progressBar = $('#progressBar');

            function updateProgressBar() {
                var currentTime = new Date();
                var startTime = new Date("2023-05-19T00:00:00Z"); // Replace with your start time
                var endTime = new Date(startTime.getTime() + 2 * 60 * 60 * 1000); // 2 hours

                var elapsedTime = currentTime - startTime;
                var progressPercentage = Math.floor((elapsedTime / (2 * 60 * 60 * 1000)) * 100);
                progressBar.css('width', progressPercentage + '%').attr('aria-valuenow', progressPercentage);
            }

            setInterval(updateProgressBar, 1000); // Update the progress bar every second
        });
    </script>
</body>
</html>
