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
    <link rel="stylesheet" href="assets/css/cyber.css">
    <link rel="stylesheet" href="assets/css/hover.css">
    <script src="assets/cyber-js/app-logic.js"></script>
    <script src="assets/cyber-js/app-data.js"></script>
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

<!-- Result modal -->
<div class="modal fade" id="result-modal" tabindex="-1" role="dialog">
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
        <a href="cybersummary"><input style="background-color: #808080; border: none; color: #fff; padding: 10px; border-radius: 6px;" type="submit" value="Next"></a>
      </div>
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
            <div class="booklet-page page-0"><div>
              <img class="home-note" src="assets/img/front_page_note3.png">
            </div>

            <div>	
              <img class="dr_icon" src="assets/img/xl_dr_icon.png">
            </div>

<div class="title">
	<h1>DISASTER RECOVERY<br>RUNBOOK</h1>	
	</div>

	<div>	
		<img class="new_page" src="assets/img/4.png">
	</div>


</div><div class="booklet-page page-1"><div class="content_header">
	<div class="contents">
		<h1>EXECUTIVE SUMMARY</h1>
	</div>
</div>
<hr>

<div class="legal_logo">
	<img style="float: right; margin-top: -10px !important;" src="assets/img/mny_logo.png">
</div>

<p>This is the disaster recovery runbook for MNY Assets.<br><br>In the event of a disaster, this document should serve as your guide to recovery. It contains all of the contact information, technical details and recovery instructions necessary to negate the potential consequences of disruption to business continuity.</p>

<table class="contentstable table-bordered" width="100%">
	<tbody><tr>
		<td style="border: none; padding-top: 10px !important; padding-bottom: 10px !important;"><strong>Author(s)</strong></td>
		<td style="border: none; padding-top: 10px !important; padding-bottom: 10px !important;"><strong>Date of Revision</strong></td>
		<td style="border: none; padding-top: 10px !important; padding-bottom: 10px !important;"><strong>Authorised By</strong></td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">John Smith and Sarah Hall</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">02-06-09</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Stewart Mann, MD</td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">Sarah Hall</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">16-07-10</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Stewart Mann, MD</td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">Rachel Atherton and Simon Parks</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">23-01-11</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Stewart Mann, MD + Simon Parks, BCM</td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">Simon Parks</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">14-09-11</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Rachel Spencer, MD + Simon Parks, BCM</td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">Simon Parks</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">30-09-13</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Rachel Spencer, MD + Simon Parks, BCM</td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">Simon Parks and Jeff Robson</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">15-09-14</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Rachel Spencer, MD + Simon Parks, BCM</td>
	</tr>
	<tr>
		<td style="width: 33.3% !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important;">Simon Parks and Jeff Robson</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">20-09-15</td>
		<td style="border: none; width: 33.3% !important; padding-top: 10px !important; padding-bottom: 10px !important;">Rachel Spencer, MD + Simon Parks, BCM</td>
	</tr>
</tbody></table>

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
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Service Information</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">6</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Network Diagram</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">7</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Actions</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">8</td>
	</tr>
	<tr>
		<td style="text-align: left !important; width: 252px !important; border: none; padding-top: 10px !important; padding-bottom: 10px !important; padding-left: 11px !important;">Recovery Template</td>
		<td style="float: right; border: none; width: 25px !important; padding-top: 10px !important; padding-bottom: 10px !important;">9</td>
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
		<li>Managing Director</li>
		<li>IT Director</li>
		<li>Financial Director</li>
		<li>Disaster Recovery Provider</li>
	</ol>

	<p>The Managing Director is the primary contact authorised to invoke a complete fail over of our systems to our recovery environment (hosted on our DR provider’s private cloud). Only in the absence of the primary contact should another internal member of the CMT authorise a failover.</p>
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
<table class="table table-striped table-bordered" style="width: 88%;">
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
                <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 120,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0}, &quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207476271 / m.d@mny.com
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
                    <span class="glyphicon glyphicon-move"></span> 0207476272 / f.d@mny.com
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
                 <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 101,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207476273 / b.c.d@mny.com
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
                    <span class="glyphicon glyphicon-move"></span> 0207476274 / i.m@mny.com
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
                    <span class="glyphicon glyphicon-move"></span> 0207476275 / i.d@mny.com
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
                    <span class="glyphicon glyphicon-move"></span> 0207476276 / b.m@mny.com
                </button>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <p>Call Overflow Manager</p>
        </td>
        <td>
            <div class="draggable-container">
                 <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 110,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207678953 / c.o.m@mny.com
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
                    <span class="glyphicon glyphicon-move"></span> 0207677899 / c.p@mny.com
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
                <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 106,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 0}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207221134 / h.p@mny.com
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
                 <button style="margin-top: 4px;" id="kokoo" data-answer="{&quot;id&quot;: 190,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 4},&quot;2&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 0},&quot;3&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> 0207890776 / d.r.s@mny.com
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
<img class="call-tree" src="assets/img/call-tree3.png">
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

<p style="font-size: 11pt;">Updating both customers and end users on the progress of the recovery is essential to maintain continuity, but it’s important to deliver the right message in the right format, at the right time. This may well depend on the services available to you at the time. For instance, if access to Exchange is down, but your internet access is unaffected, communicating with your customers via social media might be the best option.</p>

<strong><p style="font-size: 11pt; margin-bottom: 10px; margin-top: 10px;">Employee Email 1</p></strong>
<div class="draggable-container">
	<button style="font-size: 10pt;" id="kokoo" data-answer="{&quot;id&quot;: 31,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> The file server was compromised this morning. We are working to resolve the<br> issue as soon as possible, but you will be unable to access the file stores until<br> further notice. All other services are unaffected.
	</button>
</div>

<strong><p style="font-size:11pt; margin-bottom: 10px; margin-top: 10px;">Employee Email 2</p></strong>
<div class="draggable-container">
	<button style="font-size: 10pt;" id="kokoo" data-answer="{&quot;id&quot;: 1,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 3}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> We have successfully failed over to our recovery environment. Access to the<br> file server and other essential services will resume imminently.
	</button>
</div>

<strong><p style="font-size:11pt; margin-bottom: 10px; margin-top: 10px;">Employee Email 3</p></strong>
<div class="draggable-container">
	<button style="font-size: 10pt;" id="kokoo" data-answer="{&quot;id&quot;: 101,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> We will be commencing scheduled downtime shortly as we begin the failback<br> to our new onsite file server.
	</button>
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
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 102,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 0}, &quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> File Server
                </button>
            </div>
        </td>
    </tr>
    <tr>
         <td>
            <p><strong>Business Process Application</strong></p>
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
                    <span class="glyphicon glyphicon-move"></span> Finance Systems
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
    <tr>
         <td>
            <p><strong>Backups</strong></p>
        </td>
        <td style="padding-top: 12px !important;">
            <div class="draggable-container">
                <button style="font-size: 9pt; width: 100%;" id="kokoo" data-answer="{&quot;id&quot;: 107,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 4}}" type="button" class="btn btn btn-sample">
                    <span class="glyphicon glyphicon-move"></span> Backup Appliance
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
<img src="assets/img/cyber_diagram2.png">
</div>

<div class="page_footer">
    <div class="footer_number_nd">
        <p>7</p>
    </div>
</div></div><div class="booklet-page page-9"><div class="content_header">
	<div class="contents">
		<h1>ACTIONS AND<br> SNAPSHOTS</h1>
	</div>
	<div>
		<img class="actions-note" src="assets/img/actions_note2.png">
	</div>
</div>
<div class="actions_hr">
	<hr>
</div>

<h3>Actions</h3>

<div class="draggable-container">
	<button style="text-align: left; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 4,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 4}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> Disconnect - Take network components offline
	</button>
</div>

<div class="draggable-container">
	<button style="text-align: left; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 5,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> Test - Run diagnostic test on network components and services
	</button>
</div>

<div class="draggable-container">
	<button style="text-align: left; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 2,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 2}, &quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 10}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> Failover - Start running a service from your DR provider's environment
	</button>
</div>

<div class="draggable-container">
	<button style="text-align: left; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 222,&quot;1&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 1}, &quot;2&quot;:{&quot;set&quot;: 2, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> Fail back - Reverse the direction of replication to fail back to your on-site infrastructure
	</button>
</div>

<div class="draggable-container">
	<button style="text-align: left; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 6,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 3}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> Run Malware Scan - Run a test across the environment to detect risks and irregularities
	</button>
</div>

<div class="draggable-container">
	<button style="font-size: 10pt;" id="kokoo" data-answer="{&quot;id&quot;: 80,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 2}}" type="button" class="btn btn btn-sample">
		<span class="glyphicon glyphicon-move"></span> Create Incident - 10:56AM, File Server IOPs spiked around 10:45, have taken it<br> offline. Other services not affected. Notifying users of imminent downtime.
	</button>
</div>

<h3>Backup Snapshots</h3>

<div class="draggable-container">
	<button style="text-align: left; margin-top: 10px; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 7,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 13}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> 08:00am
	</button>

	<button style="text-align: left; margin-top: 10px; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 8,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 13}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> 09:00am
	</button>

	<button style="text-align: left; margin-top: 10px; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 9,&quot;1&quot;:{&quot;set&quot;: 1, &quot;question&quot;: 1}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> 10:00am
	</button>

	<button style="text-align: left; margin-top: 10px; margin-bottom: 10px;" id="kokoo" data-answer="{&quot;id&quot;: 10,&quot;1&quot;:{&quot;set&quot;: 0, &quot;question&quot;: 13}}" type="button" class="btn btn btn-sample">		<span class="glyphicon glyphicon-move"></span> 11:00am
	</button>
</div>

<div class="doodle">
	<img src="assets/img/doodle.png">
</div>

<div class="page_footer">
	<div class="footer_number_a">
		<p>8</p>
	</div>
</div></div><div class="booklet-page page-10"><div class="content_header">
	<div class="contents">
		<h1>RECOVERY TEMPLATE</h1>
	</div>
</div>
<hr>

<h3>Cyber-Attack</h3>
<p style="font-size: 10.5pt;">Cyber-attacks produce different symptoms depending on the nature and target of the attack. Look out for decreased CPU performance, erroneous IOPs and difficulty in accessing files.<br><br>Whatever the symptoms, timely and effective triage is essential. Whilst it’s still important to assemble the Crisis Management Team, your immediate priority should be to stop the spread of malware across your environment and to isolate any affected systems from the rest of the network.<br><br>To do this, run scans across the environment to locate the affected systems and isolate them from the rest of the network. Then determine whether you can continue operating without any interruption to business continuity. If not, contact your disaster recovery provider and prepare to invoke a full fail over.<br><br>The effects of many cyber-attacks can be circumvented by restoring your environment from unaffected backups, so long as no infected data has been replicated. In order to avoid this, stop your backup processes.<br><br>Once you’ve identified the source of infection and mitigated its effects, contact your disaster recovery provider to invoke a fail over and restore functionality to affected services. Remember to reconfigure your DNS records with new external-facing network information.<br><br>Once continuity is established, consider either maintaining operations from external, 3rd-party infrastructure, or prepare to failback to on-site hardware.

</p><div class="coffee_rt">
<img src="assets/img/coffee2.png">
</div>

<div class="page_footer">
    <div class="footer_number_rt">
        <p>9</p>
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