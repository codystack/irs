<?php
//Connect Database
include ('.././config/db.php');

session_start();

if (!isset($_SESSION['username'])) {
    header('location: logout');
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
  
  <link rel="stylesheet" href="assets/css/cyber.css">
  <link rel="stylesheet" href="assets/css/hover.css">
  
  <script src="assets/tutorial-js/app-logic.js"></script>
  <script src="assets/tutorial-js/app-data.js"></script>
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
          <h1 class="header">Incident Response Simulation</h1>
          <p class="header">As an IT Manager for SME, at around 10:30am, one of your users reported significant performance issues after opening an unusual email attachment. Since then, several other users have complained of slow network speeds and difficulty in accessing files.<br>
            <br>You suspect one of your VMs has been exposed to malware. You need to find and isolate the source to prevent its spread, restore any corrupted data and maintain access to unaffected services for users to ensure continuity.</p>
        </div>
        <div class="col-md-6 icon">
          <img src="assets/img/cyber_icon.png">
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
      <img src="assets/img/tick3.png">
    </div>
    <div class="col-md-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Task One – Triage</h3>
          </div>
          <div class="panel-body">
            <h4>1. Isolate Source<br></h4>
            <p style="padding-left: 20px;">Disconnect the file server.<br><br></p>
            <h4>2. Establish Damage<br></h4>
            <p style="padding-left: 20px;">Test remaining servers.<br><br></p>
            <h4>3. Create Incident and Send Email to Employees<br></h4>
            <p style="padding-left: 20px;">Log an incident and send employee email.<br><br></p>
            <h4>4. Scan for Infection<br></h4>
            <p style="padding-left: 20px;">Run a malware scan.<br><br></p>
            <h4>5. Prevent Contamination<br></h4>
            <p style="padding-left: 20px;">Disconnect backups.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom: -44px !important;">
  <div class="row">
    <div class="col-md-2 animated fadeIn" id="tick2">
      <img src="assets/img/tick3.png">
    </div>
    <div class="col-md-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Task Two – Maintain Business Continuity</h3>
          </div>
          <div class="panel-body">
            <h4>6. Prepare to Failover<br></h4>
            <p style="padding-left: 20px;">Contact DR provider and select snapshot.<br><br></p>
            <h4>7. Start Recovery<br></h4>
            <p style="padding-<div class="container" style="padding-top: 50px;">
  <div class="row title">
    <p>Event Logs</p>
  </div>
  <div class="info">
    <p>Below are the event logs for the incident response simulation:</p>
    <hr>
  </div> 
  <div class="row">
    <div class="col-md-12">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Event Log 1</h3>
          </div>
          <div class="panel-body">
            <p>10:30am - User reports significant performance issues after opening an unusual email attachment.</p>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Event Log 2</h3>
          </div>
          <div class="panel-body">
            <p>10:45am - Several other users complain of slow network speeds and difficulty in accessing files.</p>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Event Log 3</h3>
          </div>
          <div class="panel-body">
            <p>11:00am - IT Manager suspects one of the VMs has been exposed to malware and initiates incident response protocol.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>left: 20px;">Begin the failover.<br><br></p>
            <h4>8. Start Failover<br></h4>
            <p style="padding-left: 20px;">Fail the filer server over to DR Providers environment.<br><br></p>
            <h4>9. Inform Staff of Resumed Access to the File Server<br></h4>
            <p style="padding-left: 20px;">Send employee email.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom: -66px !important;">
  <div class="row">
    <div class="col-md-2 animated fadeIn" id="tick3">
      <img src="assets/img/tick3.png">
    </div>
    <div class="col-md-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h3 style="margin-bottom: 3px !important; margin-top: 3px !important;">Task Three – Resolution</h3>
          </div>
          <div class="panel-body">
            <h4>10. Call Hardware Provider to Order a New File Server<br></h4>
            <p style="padding-left: 31px;">Contact Hardware Provider.<br><br></p>
            <h4>11. Find DR Contact and Warn Users About Downtime<br></h4>
            <p style="padding-left: 31px;">Call Managing Director and send employee email.<br><br></p>
            <h4>12. Call DR Provider and Failback the File Server<br></h4>
            <p style="padding-left: 31px;">Contact DR Provider and failback file server.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div style="padding-left: 192px;">
    <a href="cyberattack.html" class="button radius start_btn">Start Again</a>
    <a href="../dashboard" class="button radius tryagain_btn">Go back to dashboard</a>
  </div> 
</div>

</div>
</body>

</html>