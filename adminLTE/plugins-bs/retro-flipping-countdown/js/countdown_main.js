document.addEventListener('DOMContentLoaded', () => {

  // Unix timestamp (in seconds) to count down to
  // var twoDaysFromNow = (new Date().getTime() / 1000) + (86400 * 2) + 1;

  var tDate = '2023-03-12';
  var date = new Date(tDate);
  var unixTimeStamp = Math.floor(date.getTime() / 1000);
  // console.log(unixTimeStamp);
  

  // Set up FlipDown
  // var flipdown = new FlipDown(twoDaysFromNow)
  var flipdown = new FlipDown(unixTimeStamp)

    // Start the countdown
    .start()

    // Do something when the countdown ends
    .ifEnded(() => {
      console.log('The countdown has ended!');
    });

  // Toggle theme
  // var interval = setInterval(() => {
  //   let body = document.body;
  //   body.classList.toggle('light-mode');
  //   body.querySelector('#flipdown').classList.toggle('dark-mode');
  //   body.querySelector('#flipdown').classList.toggle('light-mode');
  // }, 5000);

  // // Show version number
  // var ver = document.getElementById('ver');
  // ver.innerHTML = flipdown.version;
});
