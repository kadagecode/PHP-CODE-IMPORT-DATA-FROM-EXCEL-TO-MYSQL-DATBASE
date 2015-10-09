<!DOCTYPE html>
<?php 
	include 'db.php';
	


?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BULK Import Excel CSV </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
		<script src="js/jquery-1.9.1.min.js"></script>

	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">BULK Import Excel CSV</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" id="imp"  method="post" action="import.php" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
					<select id='opt'>
					
					<option value='student.php'>Student</option>
					<option value='address.php'>Address</option>
					</select>
						<legend>Import CSV file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
				<div class="control-group">
							<div class="controls">
							<button type="submit" id="export" name="Export" class="btn btn-primary button-loading" data-loading-text="Loading...">Export</button>
							</div>
						</div>
			</div>
			<div class="span3 hidden-phone"></div>
			
		</div>
		

		
	</div>

	</div>
	
	<div id="wrap1">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well"  method="post" action="export.php" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
					<legend>Export Student Table to excel File</legend>
						
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Export</button>
							</div>
						</div>
					</fieldset>
				</form>
			
			</div>
			<div class="span3 hidden-phone"></div>
			
		</div>
		

		
	</div>

	</div>
<script>
$(document).ready(function(){
	$('#wrap1').hide();
	});
	$('#export').click(function(){
		$('#wrap').hide();
		$('#wrap1').show();
	});
</script>
<script>
$('#opt').change(function(event){
$('#imp').attr('action',$('#opt').val());
});
</script>
	</body>
</html>