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
        <div class="booklet-page page-0 active"><div>
	<img class="home-note" src="assets/img/front_page_note3.png">
</div>

<div>	
	<img class="dr_icon" src="assets/img/xl_dr_icon.png">
</div>

<div class="title">
	<h1>DISASTER RECOVERY<br>RUNBOOK</h1>	
	</div>


</div><div class="booklet-page page-1"><div class="content_header">
	<div class="contents">
		<h1>EXECUTIVE SUMMARY</h1>
	</div>
</div>
<hr>

<div class="legal_logo">
	<img src="assets/img/mlm_logo.png">
</div>

<p>MLM Associates is a mid-sized legal service. It’s IT environment is primarily<br> on-premise, with a 3rd party disaster recovery supplier delivering a hypervisor-based DRaaS solution for recovery.</p>

<div class="coffee_exe">
	<img src="assets/img/coffee.png">
</div>
</div><div class="booklet-page page-2"><div class="content_header">
<div class="contents">
	<h1>CONTENTS</h1>
</div>
</div>
<hr>
	<table class="contentstable table-bordered" width="100%">
	<tbody><tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">The Crisis Management Team</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">2</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Key Contacts</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">3</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Call Tree</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">4</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Communication</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">5</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Server Information</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">6</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Network Diagram</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">7</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Recovery Template</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">8</td>
	</tr>
</tbody></table>

</div><div class="booklet-page page-3"><div class="content_header">
	<div class="contents">
		<h1>THE CRISIS MANAGEMENT TEAM</h1>
	</div>
</div>
<hr>

<div class="dr_content">
	<p>If a crisis or disaster has occurred, the Crisis Management Team must convene at the earliest possible opportunity to execute the Business Continuity Plan, adapting it if necessary.</p>
	<h3>Crisis Management Team</h3>
	<ol>
		<li>Business Continuity Manager</li>
		<li>IT Director</li>
		<li>Disaster Recovery Provider</li>
	</ol>

	<h4>Authorised DR Contact</h4>
	<p>The IT Director is authorised to invoke a complete failover of our systems to our recovery environment, hosted on our DR provider’s private cloud. Only in the absence of the primary contact should another internal member of the CMT authorise a failover.</p>
</div>

<div class="coffee_1">
	<img src="assets/img/coffee.png">
</div>

<div class="note_1">
	<img src="assets/img/dr_note2.png">
</div>

<div class="page_footer">
	<div class="footer_number">
		<p>2</p>
	</div>
</div>
</div><div class="booklet-page page-4"><div class="content_header">
    <div class="contents">
        <h1>KEY CONTACTS</h1>
    </div>
</div>
<hr>

<div class="table_container">
    <table class="table table-striped table-bordered">
        <tbody><tr>
            <td>
                <p><strong>Contact</strong></p>
            </td>
            <td>
                <p><strong>Details</strong></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Managing Director</p>
            </td>
            <td>
                <div class="draggable-container">
                    <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 120,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
                        <span class="glyphicon glyphicon-move"></span> 0207476271 / m.d@mlm.com
                    </button>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <p>Financial Director</p>
            </td>
            <td>
                <div class="draggable-container">
                   <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 118,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207476272 / f.d@mlm.com
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>IT Director</p>
        </td>
        <td>
            <div class="draggable-container">
               <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 102,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 0}, &quot;2&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                <span class="glyphicon glyphicon-move"></span> 0207476273 / i.d@mlm.com
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <p>Business Continuity Manager</p>
    </td>
    <td>
        <div class="draggable-container">
           <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 101,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
            <span class="glyphicon glyphicon-move"></span> 0207476274 / b.c.d@mlm.com
        </button>
    </div>
</td>
</tr>
<tr>
    <td>
        <p>IT Manager</p>
    </td>
    <td>
        <div class="draggable-container">
           <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 115,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
            <span class="glyphicon glyphicon-move"></span> 0207476275 / i.m@mlm.com
        </button>
    </div>
</td>
</tr>
<tr>
    <td>
        <p>Backup Manager</p>
    </td>
    <td>
        <div class="draggable-container">
           <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 112,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
            <span class="glyphicon glyphicon-move"></span> 0207476276 / b.m@mlm.com
        </button>
    </div>
</td>
</tr>
<tr>
    <td>
        <p>IT Admin</p>
    </td>
    <td>
        <div class="draggable-container">
           <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 212,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
            <span class="glyphicon glyphicon-move"></span> 0207476277 / i.a@mlm.com
        </button>
    </div>
</td>
</tr>
<tr>
    <td>
        <p>Communications Provider</p>
    </td>
    <td>
        <div class="draggable-container">
           <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 108,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
            <span class="glyphicon glyphicon-move"></span> 0207491834 / c.p@cp.com
        </button>
    </div>
</td>
</tr>
<tr>
    <td>
        <p>Hardware Provider</p>
    </td>
    <td>
        <div class="draggable-container">
            <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 106,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
                <span class="glyphicon glyphicon-move"></span> 0207373017 / h.p@hardware.com
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>
        <p>Disaster Recovery Supplier</p>
    </td>
    <td>
        <div class="draggable-container">
           <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 19,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 0},&quot;2&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
            <span class="glyphicon glyphicon-move"></span> 0207379781 / d.r.s@drs.com
        </button>
    </div>
</td>
</tr>
</tbody></table>
</div>

<div class="woman">
    <img src="assets/img/woman.png">
</div>

<div class="man">
    <img src="assets/img/man.png">
</div>

<div class="page_footer">
    <div class="footer_number_kc">
        <p>3</p>
    </div>
</div>


</div><div class="booklet-page page-5"><div class="content_header">
    <div class="contents">
        <h1>CALL TREE</h1>
    </div>
</div>
<hr>

<div class="ct_note">
	<img src="assets/img/call_tree_note.png">
</div>

<div>
<img class="call-tree" src="assets/img/call-tree4.png">
</div>

<div class="phone_sketch">
<img src="assets/img/phone_sketch.png">
</div>



<div class="page_footer">
	<div class="footer_number_ct">
		<p>4</p>
	</div>
</div></div><div class="booklet-page page-6"><div class="content_header">
	<div class="contents">
		<h1>COMMUNICATION</h1>
	</div>
</div>	
<hr>

<p style="font-size: 10pt;">Updating both customers and end users on the progress of the recovery is essential to maintain continuity, but it’s important to deliver the right message in the right format, at the right time. This may well depend on the services available to you at the time. For instance, if access to Exchange is down, but your internet access is unaffected, communicating with your customers via social media might be the best option.</p>

<h5><strong>Employee Email 1</strong></h5>
<div class="draggable-container">
	<button style="font-size: 9pt;" id="kokoo" data-answer="{&quot;id&quot;: 51,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> We’re experiencing some problems with our SAN, which means access to certain<br> services will be limited until further notice. We’re in contact with DR provider to resolve<br> the issue ASAP.
	</button>
</div>

<h5><strong>Employee Email 2</strong></h5>
<div class="draggable-container">
	<button style="font-size: 9pt;" id="kokoo" data-answer="{&quot;id&quot;: 1,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> We have successfully failed over to our recovery environment. Access to the file server<br> will resume imminently.
	</button>
</div>

<h5><strong>Emergency Conference Line</strong></h5>
<div class="draggable-container">
	<button style="font-size: 9pt;" id="kokoo" data-answer="{&quot;id&quot;: 50,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> This is the phone line for the Crisis Management Team to communicate throughout the<br> recovery tasks.
	</button>
</div>

<h5><strong>Customer Email 1</strong></h5>
<div class="draggable-container">
	<button style="font-size: 9pt;" id="kokoo" data-answer="{&quot;id&quot;: 9,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> We apologise for any disruption you may be experiencing, we’re working to resolve a<br> small technical error, after which normal services should resume.
	</button>
</div>

<h5><strong>Customer Email 2</strong></h5>
<div class="draggable-container">
	<button style="font-size: 9pt;" id="kokoo" data-answer="{&quot;id&quot;: 2,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> Thank you for your patience, we have resolved the technical issue, and normal service<br> will resume shortly.
	</button>
</div>

<div class="tphone">
	<img src="assets/img/phone.png">
</div>

<div class="emailimg">
	<img src="assets/img/email.png">
</div>

<div class="page_footer">
	<div class="footer_number_c">
		<p>5</p>
	</div>
</div>
</div><div class="booklet-page page-7"><div class="content_header">
    <div class="contents">
        <h1>SERVER INFORMATION</h1>
    </div>
</div>
<hr>

<table class="table table-striped table-bordered">
    <tbody><tr>
        <td>
            <p><strong>Service</strong></p>
        </td>
        <td>
            <p><strong>Server</strong></p>
        </td>
    </tr>
    <tr>
        <td>
            <p>Email</p>
        </td>
        <td>
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 61,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}, &quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 0} }" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Exchange
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Office Applications</p>
        </td>
        <td>
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 63,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> File Server
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Practice Management System</p>
        </td>
        <td>
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 65,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> SQL Server
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Account and Payroll</p>
        </td>
        <td>
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 67,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Finance Systems
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Domain Services</p>
        </td>
        <td>
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 69,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Domain Controller
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>CRM Application</p>
        </td>
        <td>
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 71,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> CRM Server
                </button>
            </div>
        </td>
    </tr>
     <tr>
        <td>
            <p>Backups</p>
        </td>
        <td>
            <div class="draggable-container">
               <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 162,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 6}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Backup Server
                </button>
            </div>
        </td>
    </tr>
     <tr>
        <td>
            <p>Websites</p>
        </td>
        <td>
            <div class="draggable-container">
               <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 262,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 7}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Web Server
                </button>
            </div>
        </td>
    </tr>
     <tr>
        <td>
            <p>Phone Communications </p>
        </td>
        <td>
            <div class="draggable-container">
               <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 262,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 7}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Phone Server
                </button>
            </div>
        </td>
    </tr>
</tbody></table>

<div class="coffee_si">
<img src="assets/img/coffee2.png">
</div>

<div class="page_footer">
    <div class="footer_number_si">
        <p>6</p>
    </div>
</div></div><div class="booklet-page page-8"><div class="content_header">
    <div class="contents">
        <h1>NETWORK DIAGRAM</h1>
    </div>
</div>
<hr>

<div class="network_diagram_note">
<img src="assets/img/nd_note.png">
</div>

<div class="network_diagram">
<img src="assets/img/network_d2.png">
</div>

<div class="page_footer">
    <div class="footer_number_nd">
        <p>7</p>
    </div>
</div></div><div class="booklet-page page-9"><div class="content_header">
	<div class="contents">
		<h1>RECOVERY TEMPLATE</h1>
	</div>
</div>
<hr>

<h4>Major Hardware Failure</h4>
<p style="font-size: 9pt;">In the event of hardware failure, assemble the Crisis Management Team to determine which services are affected, which customers and users depend on those services, and the estimated time-to-resolution.<br><br>If several business-critical services are not functioning, or the time-to-resolution exceeds the maximum tolerable outage, get in touch with your DRaaS provider and authorize a full invocation for failover to the recovery environment.<br><br>Then call the hardware provider onsite to investigate the cause of the failure.<br><br>Once your DR provider’s failover environment is online, you’ll need to test both your internet connection and the firewall to ensure you’ll be able to connect in.<br><br>You also need to reconfigure the DNS records to point them externally on a per-service basis. Bringing everything online at once leaves no time for testing, so it’s important to consider boot priorities.<br><br>Don’t forget to update your users on any new access methods after the failover and remember to inform your customers of any potential disruption, either through a general broadcast or through direct correspondence for key accounts.<br><br>When users are back online, you need to establish how much data was lost during the disruption. If this data can be restored from backups, begin the process at your convenience.<br><br>However, recovering work completed immediately before (and during) the hardware failure may not be possible. You must decide whether your organisation can accept the data loss and move on, or whether to commit time to recreate/re-do any documents and tasks that were lost.<br><br>Crucially, once your systems are back online, your users are being productive and the business is serving customers, the best strategy is simply to wait and preserve the stability in order to maintain continuity.</p>

<div class="coffee_rt">
<img src="assets/img/coffee2.png">
</div>

<div class="page_footer">
    <div class="footer_number_rt">
        <p>8</p>
    </div>
</div>

</div></div>
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
<div class="container">
  <div style="padding-left: 192px;">
    <a href="../dashboard" class="button radius tryagain_btn">Go back to dashboard</a>
  </div> 
</div>
</body>
</html>