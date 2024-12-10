<?php
//Connect Database
include ('.././config/db.php');

session_start();

if (!isset($_SESSION['username'])) {
    header('location: ../logout');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login");
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Incident Response Simulation</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/dragula.min.css">
  <script src="assets/js/dragula.min.js"></script>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/hover.css">
  
  <script src="assets/js/app-logic.js"></script>
  <script src="assets/js/app-data.js"></script>
  <script src="assets/js/smooth-scroll.js"></script>
  <script>
  smoothScroll.init();
  </script>
</head>

<body>

  <a href="index.html">
    <div class="overlay">
      <div class="overlay-pop-up">
        <div class="close-button"><img src="assets/img/close_button.svg"></div>
        <p><span style="font-weight:700">Your browser window is too small.</span><br>This simulation is optimised for desktop use. Please maximise your window or switch to a laptop or desktop computer with a larger screen size.</p>
        <p style="font-size: 13px; color: #A5A5A5; margin-top:0px">Thank you</p>
      </div>
    </div>
  </a>


  <div class="fullWidth">
    <div class="banner">
      <div class="container">
       <div class="row">
         <div class="col-md-6">
          <h1 class="header">SAN Failure</h1>
          <p class="header">You’re running the IT for MLM Associates, a mid-sized legal services firm. Its IT environment is primarily on-premise, though the organisation uses a 3rd party disaster recovery supplier for resilience.<br><br>This morning your users reported they weren’t able to access a number of internal services. The problem has been identified as an issue with the SAN.<br><br>You need to cooperate with your Crisis Management Team and external disaster recovery provider to recover your data, restore functionality to your users and maintain business continuity for the business.
          </p>
        </div>
        <div class="col-md-6 icon">
          <img src="assets/img/san_icon.png">
        </div>
      </div>

    </div>
  </div>



 <!-- Result modal -->
 <div class="modal fade" id="result-modal" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Feedback</h4>
      </div>
      <div class="modal-body">
        <h1 style="margin-top: 15px !important; margin-bottom: 20px !important;" id="result-modal-label">Label</h1>
        <p id="result-modal-description">Description</p>
      </div>
      <div class="modal-footer">
        <a href="sansummary.html"><input style="background-color: #808080; border: none; color: #fff; padding: 10px; border-radius: 6px;" type="submit" value="Next"></a>      </div>
      </div>
    </div>
  </div>
  <!-- Quiz elements -->
  <div class="container" style="padding-top: 50px;">
    <div class="row">
      <div class="col-md-4" id="content">
        <div class="page-header">
          <h1>Tasks</h1>
        </div>
        <div class="page-header">
          <p style="font-size: 11pt;">Complete the recovery tasks as they appear below by finding and dragging the relevant information from the runbook on the right.<br></p>
        </div>
        <div id="question-container"></div>
        <nav id="set-nav">
          <ul class="pager">
            <li class="next disabled"><a href="#">Next set of questions <span>&rarr;</span></a></li>
            <li class="result disabled"><a href="#">See feedback <span>&rarr;</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="col-md-1">
        <div id="booklet-tabs">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
          <img class="tab" src="assets/img/tab.png">
        </div>
      </div>

      <div id="booklet" class="col-md-6">
        <div id="booklet-pages">
        </div>
      </div>
      <div class="col-md-1">
        <div id="booklet-nav">
          <div class="booklet-tabs">
            <ul class="list-inline"></ul>
          </div>
          
        </div>
      </div>
    </div>
  </div>

</div>
</body>
</html>