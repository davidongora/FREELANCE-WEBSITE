// Timer durations in milliseconds (adjust as needed)
    const timerDuration1 = 300000; // 5 minutes
    const timerDuration2 = 600000; // 10 minutes

    // Start timers for each job
    startTimer('timer1', timerDuration1, 'bidButton1');
    startTimer('timer2', timerDuration2, 'bidButton2');
    startTimer('timer3', timerDuration2, 'bidButton2');
    startTimer('timer4', timerDuration2, 'bidButton2');

    function startTimer(timerId, duration, bidButtonId) {
      const time5rElement = document.getElementById(timerId);
      const bidButton = document.getElementById(bidButtonId);

      let timer = duration;
      let minutes, seconds;

      const interval = setInterval(() => {
        minutes = Math.floor((timer % (1000 * 60 * 60)) / (1000 * 60));
        seconds = Math.floor((timer % (1000 * 60)) / 1000);

        timerElement.textContent = `Time left: ${minutes}m ${seconds}s`;

        if (timer <= 0) {
          clearInterval(interval);
          timerElement.textContent = 'Time elapsed';
          bidButton.disabled = true;
        }

        timer -= 1000;
      }, 1000);
    }


document.addEventListener('DOMContentLoaded', function() {
    const bidButtons = document.querySelectorAll('.bid-button');
    const successButtons = document.querySelectorAll('.bid-success');
    const unbidButtons = document.querySelectorAll('.unbid-button');
    const okButtons = document.querySelectorAll('.ok-button');
  
    let currentBidIndex = -1; // Track the currently selected bid index
  
    // Add event listeners to bid buttons
    bidButtons.forEach(function(button, index) {
      button.addEventListener('click', function() {
        if (currentBidIndex !== -1) {
          // If another bid is already selected, do nothing
          return;
        }
  
        currentBidIndex = index;
  
        // Hide bid button and show success message
        button.style.display = 'none';
        successButtons[index].style.display = 'block';
        // Show unbid and OK buttons
        unbidButtons[index].style.display = 'inline-block';
        okButtons[index].style.display = 'inline-block';
  
        // Disable other bid buttons
        bidButtons.forEach(function(btn, idx) {
          if (idx !== currentBidIndex) {
            btn.disabled = true;
          }
        });
      });
    });
  
    // Add event listeners to unbid buttons
    unbidButtons.forEach(function(button, index) {
      button.addEventListener('click', function() {
        // Show bid button and hide success message, unbid, and OK buttons
        bidButtons[index].style.display = 'inline-block';
        successButtons[index].style.display = 'none';
        unbidButtons[index].style.display = 'none';
        okButtons[index].style.display = 'none';
  
        // Enable other bid buttons
        bidButtons.forEach(function(btn, idx) {
          if (idx !== currentBidIndex) {
            btn.disabled = false;
          }
        });
  
        currentBidIndex = -1; // Reset the current bid index
      });
    });
  
    // Add event listeners to OK buttons
    okButtons.forEach(function(button) {
      //button.addEventListener('click', function() {
        // Perform desired action when OK button is clicked
            var submitButtons = document.querySelectorAll('.ok-button');
                          submitButtons.forEach(function(button) {
                              button.addEventListener('click', function() {
                                  window.location.href = 'submit.html';
                              });
                          });
                      
        console.log('OK button clicked!');
      });
    });
  
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