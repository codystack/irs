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
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/dragula.min.css">
  <script src="assets/js/dragula.min.js"></script>
  <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/hover.css">
    
  <script src="assets/tutorial-js/app-logic.js"></script>
  <script src="assets/tutorial-js/app-data.js"></script>
  <script src="assets/js/smooth-scroll.js"></script>
  <script>
  smoothScroll.init();
  </script>
</head>

<body>

    <a href="../dashboard">
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
                <p class="header">You’re running the IT for MyLawyerMate, a mid-sized legal service. Its IT environment is primarily on-premise, though the organisation uses a 3rd party disaster recovery supplier for resilience.<br><br>This morning your users reported they weren’t able to access a number of internal services. The problem has been identified as an issue with the SAN.<br><br>You need to cooperate with your Crisis Management Team and external disaster recovery provider to recover your data, restore functionality to your users and maintain business continuity for the business.
                </p>
            </div>
            <div class="col-md-6 icon">
                <img src="assets/img/san_icon.png">
            </div>
        </div>

    </div>
</div>

 <div class="container" style="padding-top: 50px;">
   <div class="row title">
    <p>Take a look at the event log</p>
  </div>
  <div class="info">
    <p>Keeping a well-maintained event log is almost as important as the recovery itself. No plan is above failure, and it’s extremely common for elements to perform unexpectedly or sub-optimally. You should meticulously capture your recovery steps and interrogate them afterwards. Review their effectiveness and take steps against failures.</p>
    <hr>
  </div> 
</div>

<div id="content" class="container" style="margin-bottom: -44px !important; margin-top: -44px !important">
  <div class="row">
    <div class="col-md-2 animated fadeIn" id="tick1">
      <img src="assets/img/tick2.png">
    </div>
    <div class="col-md-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Task One – Triage</h3>
          </div>
          <div class="panel-body">
            <h4>1. Assemble CMT<br></h4>
            <p style="padding-left: 20px;">Locate the Business Continuity Manager, IT Director & DR Provider.<br><br></p>
            <h4>2. Set Up the Emergency Conference<br></h4>
            <p style="padding-left: 20px;">Get the CMT to dial in to the emergency conference line.<br><br></p>
            <h4>3. Notify Your Users and Customers<br></h4>
            <p style="padding-left: 20px;">Inform users and customers of disruption.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom: -44px !important;">
  <div class="row">
    <div class="col-md-2 animated fadeIn" id="tick2">
      <img src="assets/img/tick2.png">
    </div>
    <div class="col-md-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Task Two – Restore the Environment</h3>
          </div>
          <div class="panel-body">
            <h4>4. Assess the Damage<br></h4>
            <p style="padding-left: 20px;">Find out which services are affected.<br><br></p>
            <h4>5. Authorise Invocation<br></h4>
            <p style="padding-left: 20px;">Find the person authorised to invoke DR with the provider.<br><br></p>
            <h4>6. Spin Up Recovery Environment<br></h4>
            <p style="padding-left: 20px;">Call the DR provider to spin up your recovery environment.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom: -66px !important;">
  <div class="row">
    <div class="col-md-2 animated fadeIn" id="tick3">
      <img src="assets/img/tick2.png">
    </div>
    <div class="col-md-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Task Three – Maintain Business Continuity</h3>
          </div>
          <div class="panel-body">
            <h4>7. Point External Services to Recovery Environment<br></h4>
            <p style="padding-left: 20px;">Reconfigure services with an external component.<br><br></p>
            <h4>8. Get Users Working Again<br></h4>  
            <p style="padding-left: 20px;">Tell users they can access services again.<br><br></p>
            <h4>9. Open Communication Channels<br></h4>
            <p style="padding-left: 20px;">Inform customers that business as usual will resume shortly.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div style="padding-left: 192px;">
    <a href="sanfailure" class="button radius start_btn">Start Again</a>
    <a href="../dashboard" class="button radius tryagain_btn">Go back to dashboard</a>
  </div> 
</div>

</div>
</body>
</html>