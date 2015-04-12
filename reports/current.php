<?php
include('../Config.php');
include('reports_current.php');
?>

<html>
<head>
	<title>Reporting Interface</title>
	<link rel="stylesheet" type="text/css" href="estudiostyle.css">
</head>

<body>
	<!-- HEADER / LOGO -->
	<div id="headerbox">
		<div id="headerbuttonholderleft">
			<font size="5" face="Tahoma" style="position:relative; top:-4px;"> eStudio </font>
			<a href="adminUpcoming.php" class="headerbutton" style="position:relative; top:-4px;"> Upcoming </a>
			<a href="addTutorInfo.html" class="headerbutton" style="position:relative; top:-4px;"> Tutors </a>
			<a href="scheduleTutor.html" class="headerbutton" style="position:relative; top:-4px;"> Schedule </a>
			<a href="Reports.php" class="headerbutton" style="position:relative; top:-4px;"> Reports </a>
			<a href="reporting.php" class="headerbutton" style="position:relative; top:-4px;"> Reporting </a>
			<a href="#" class="headerbutton" style="position:relative; top:-4px;"> Disable </a>
			<a href="adminHelp.html" class="headerbutton" style="position:relative; top:-4px;"> Help </a>
		</div>
		
		<div id="headerbuttonholderright">
			<form action="LogOut.php" method="post">
				<input class="headerbutton" type="submit" value="Log Out" />
			</form>
		</div>

    </div>

	<!-- CONTENT BOX -->
	<div id="contentholder">   
		<div class="report-grid">
			<h2>Overall Performance</h2>
			<?php getCurrentOverall(); ?>
		</div>
		<div class="report-grid">
			<h2>Service</h2>
			<?php getCurrentService(); ?>
		</div>
		<div class="report-grid">
			<h2>Academic Year</h2>
			<?php getCurrentYear(); ?>
		</div>
		<div class="report-grid">
			<h2>Major</h2>
			<?php getCurrentMajor(); ?>
		</div>
		<div class="report-grid">
			<h2>First Visit</h2>
			<?php getCurrentFirstVisit(); ?>
		</div>
		<div class="report-grid">
			<h2>English as Second Language</h2>
			<?php getCurrentEnglish(); ?>
		</div>
		<!--div class="report-grid">
			<?php 
				// TODO:
				// getCurrentRequired(); 
			?>
		</div-->
	</div>

</body>

</html>

