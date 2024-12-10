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
  <link rel="stylesheet" href="assets/css/tutorial.css">
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
          <h1 class="header">Fire in the Server Room</h1>
          <p class="header">Welcome to the tabletop interface.<br><br> In this simulation, you’re managing the IT for a small manufacturer based in an office park. The business has a well-prepared DR plan, composed of both a dedicated off-site recovery suite and a 3rd party DR provider for IT services.<br><br>You need to help the organisation recover from a small fire caused by a catastrophic hardware failure in the server room.<br><br></p>
        </div>
        <div class="col-md-6 icon">
          <img src="assets/img/tutorial_icon.png">
        </div>
      </div>

    </div>
  </div>


<!--  <div class="message">
  <p>Screen too small</p>
  <div> -->


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
        <a href="tutorialsummary.html"><input style="background-color: #808080; border: none; color: #fff; padding: 10px; border-radius: 6px;" type="submit" value="Next"></a>
      </div>
    </div>
  </div>
</div>

<div class="container" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-4" id="content">
      <div class="page-header">
        <h1>Tasks</h1>
      </div>
      <div class="page-header">
        <p style="font-size: 11pt;">Work through the tasks as they appear on the left by searching through the runbook for the relevant information and dragging it into the answer box. Try not to guess – points are deducted for each wrong answer.<br><br>If you need a hint, flip to the Recovery Template section at the back.<br></p>
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
      <div class="booklet-page page-0"><div>
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

<div class="acme_logo">
	<img src="assets/img/acme_logo.png">
</div>

<p>Acme Ltd. is a small manufacturer of industrial flooring. The company operates from an isolated business park on the outskirts of a small town.<br><br> The IT team delivers back office IT services to the business using on-premise hardware, with the exception of their SaaS-based CRM solution. However, they have also started replicating essential elements of their infrastructure to a 3rd party disaster recovery provider using hypervisor-based DRaaS.</p>

<div class="coffee_exe">
	<img src="assets/img/coffee.png">
</div>
</div><div class="booklet-page page-2 active"><div class="content_header">
	<div class="contents">
		<h1>CONTENTS</h1>
	</div>
</div>
<hr>

<table class="contentstable table-bordered" width="100%">
	<tbody><tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Invoking Disaster Recovery</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">2</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Key Contacts</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">3</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Communication</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">4</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Service Information</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">5</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Recovery Locations</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">6</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Recovery Template</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">7</td>
	</tr>
</tbody></table>

 <div id="booklet" class="col-md-6">
            <div id="booklet-pages">
            </div>
        </div></div><div class="booklet-page page-3"><div class="content_header">
	<div class="contents">
		<h1>INVOKING DISASTER RECOVERY</h1>
	</div>
</div>
<hr>

<div class="dr_content">
	<p>So long as there is no immediate danger to human life, it’s important to assemble the Crisis Management Team at the earliest possible stage during a disaster.<br><br>To do so, call the following people:</p>

	<h3>Crisis Management Team</h3>
	<ol>
		<li>IT Manager</li>
		<li>Head of Operations</li>
		<li>Managing Director</li>
	</ol>

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
<table align="center" class="table table-striped table-bordered">
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
        <td style="padding-left: 63px !important;">
            <div class="draggable-container">
                <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 30,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207712345<br>M.D@acme.com
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Head of Operations</p>
        </td>
        <td style="padding-left: 63px !important;">
        <div class="draggable-container">
            <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 5,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207723456<br>H.O@acme.com
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>IT Manager</p>
        </td>
        <td style="padding-left: 63px !important;">
            <div class="draggable-container">
                <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 3,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207734567<br>I.M@scme.com
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Communications Provider</p>
        </td>
        <td style="padding-left: 63px !important;">
            <div class="draggable-container">
                <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 52,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207678901
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Remote Office</p>
        </td>
        <td style="padding-left: 63px !important;">
            <div class="draggable-container">
                <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 97,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 0},&quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1},&quot;3&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207112233<br>R.O@acme.com
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Emergency Services</p>
        </td>
        <td style="padding-left: 63px !important;">
            <div class="draggable-container">
                <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 2,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 999
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Disaster Recovery Supplier</p>
        </td>
        <td style="padding-left: 63px !important;">
         <div class="draggable-container">
            <button style="width: 138px;" id="kokoo" data-answer="{&quot;id&quot;: 9,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                <span class="glyphicon glyphicon-move"></span> 0207665544<br>D.R.S@acme.com
            </button>
        </div>
    </td>
</tr>
</tbody></table>
</div>

<div class="woman">
    <img src="assets/img/woman.png">
</div>

<div class="page_footer">
    <div class="footer_number_kc">
        <p>3</p>
    </div>
</div>






</div><div class="booklet-page page-5"><div class="content_header">
    <div class="contents">
        <h1>COMMUNICATION</h1>
    </div>
</div>
<hr>

<p>Updating both customers and end users on the progress of the recovery is essential to maintain continuity, but it’s important to deliver the right message in the right format, at the right time. This may well depend on the services available to you at the time. For instance, if access to Exchange is down, but your internet access is unaffected, communicating with your customers via social media might be the best option.</p>

<h4 style="padding-top: 20px;"><strong>Set up the emergency phone line</strong></h4>
<div class="draggable-container">
	<button id="kokoo" data-answer="{&quot;id&quot;: 6,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 3},&quot;2&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
        <span class="glyphicon glyphicon-move"></span> Due to unforeseen circumstances the central office is no longer<br> operational for the time being. Please conduct business from our recovery<br> suite at xxx for the foreseeable future.  
	</button>
</div>

<h4 style="padding-top: 15px;"><strong>Redirect customers to recovery suite</strong></h4>
<div class="draggable-container">
	<button id="kokoo" data-answer="{&quot;id&quot;: 97,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 0},&quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1},&quot;3&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
        <span class="glyphicon glyphicon-move"></span> Our central office will be closed until further notice. Please direct all<br> enquiries to XXX. We apologise for any inconvenience.
	</button>
</div>

<div class="com_note">
    <img src="assets/img/com_note.png">
</div>

<div class="phone">
    <img src="assets/img/phone.png">
</div>

<div class="page_footer">
    <div class="footer_number_com">
        <p>4</p>
    </div>
</div>
</div><div class="booklet-page page-6"><div class="content_header">
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
            <p><strong>Servers</strong></p>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>Email</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 101,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Exchange
                </button>
            </div>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>Office Applications</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 102,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 0}, &quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> File Server
                </button>
            </div>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>ERP Services</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 103,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> SQL Server
                </button>
            </div>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>Accounts and Payroll</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 104,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Office Management
                </button>
            </div>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>Domain Services</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 105,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Domain Controller
                </button>
            </div>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>CRM Application</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 106,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> CRM Server
                </button>
            </div>
        </td>
    </tr>
</tbody></table>

<div class="network">
    <img src="assets/img/network_icon.png">
</div>

<div class="page_footer">
    <div class="footer_number_nd">
        <p>5</p>
    </div>
</div></div><div class="booklet-page page-7"><div class="content_header">
	<div class="contents">
		<h1>RECOVERY LOCATIONS</h1>
	</div>
</div>
<hr>

<table class="table table-striped table-bordered">
	<tbody><tr>
		<td>
			<p>Fire Assembly Point</p>
		</td>
		<td>
			<div class="draggable-container">
				<button id="kokoo" data-answer="{&quot;id&quot;: 1,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
					<span class="glyphicon glyphicon-move"></span>  A safe distance from the office with<br> enough room to accommodate<br> everyone and easy access to exits
				</button>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<p>Off-site Recovery Suite</p>
		</td>
		<td>
			<div class="draggable-container">
				<button id="kokoo" data-answer="{&quot;id&quot;: 7,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
					<span class="glyphicon glyphicon-move"></span>  An off-site office suite equipped to<br> accommodate your operational needs,<br> at a good distance from your primary<br> office location to minimise the<br> likelihood of simultaneous<br> unavailability 
				</button>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<p>Remote/Home Workers</p>
		</td>
		<td>
			<div class="draggable-container">
				<button id="kokoo" data-answer="{&quot;id&quot;: 97,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 0},&quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1},&quot;3&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
					<span class="glyphicon glyphicon-move"></span>  Where remote access is possible, it<br> may be preferable to send employees<br> home and arrange for them to access<br> systems and services remotely in order<br> to maintain business continuity whilst<br> reducing the number of costly seats in<br> a recovery suite 
				</button>
			</div>
		</td>
	</tr>
</tbody></table>

<div class="rl-note">
<img src="assets/img/rl_note.png">
</div>

<div class="page_footer">
    <div class="footer_number_rl">
        <p>6</p>
    </div>
</div></div><div class="booklet-page page-8"><div class="content_header">
	<div class="contents">
		<h1>RECOVERY TEMPLATE</h1>
	</div>
</div>
<hr>

<p>Assuming there is no immediate threat to human life, your first priority in a disaster should always be to assemble the Crisis Management Team. From there, you must determine the severity of the disaster and make the decision to invoke a full scale failover with the assistance of your DRaaS provider, or attempt to resolve the issues.<br><br></p>

<h5><strong>On-site hazard</strong></h5>
<p>Your first priority throughout an on-site hazard is to minimise the threat to human safety as quickly as possible. This often means evacuating the premises and convening at the predetermined assembly point.<br><br>Next call the relevant emergency services to deal with the physical aspects of the disaster and – providing your on-site environment is not accessible - open communications with your DRaaS provider to invoke a full scale failover.<br><br>Arrange for your employees to either move to a physical recovery suite, or if remote working is provisioned for, to go home and await instruction on remote connectivity.<br><br>Contact any 3rd party communications providers to notify them of overflow and re-route any physical phone lines to available alternatives.</p>

<div class="hazard">
	<img src="assets/img/hazard.png">
</div>

<div class="coffee_single">
	<img src="assets/img/coffee2.png">
</div>

<div class="page_footer">
	<div class="footer_number_rt">
		<p>7</p>
	</div>
</div></div></div>
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

</div>
<div class="container">
  <div style="padding-left: 192px;">
    <a href="../dashboard" class="button radius tryagain_btn">Go back to dashboard</a>
  </div> 
</div>
</body>

</html>
