<?php 
	session_start();
	require_once('con_db.php');
	$updtID=$_GET['updtID']; 
	$sqlUpdtShow = "SELECT * FROM student_info WHERE student_ID='$updtID'";
	$qryUpdtShow = mysqli_query($dbCon,$sqlUpdtShow);
	$recUpdtShow = mysqli_fetch_object($qryUpdtShow);	
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
   <meta name="author" content="Team Error">
    <title>Student Id Card Generator</title>
	<link rel="stylesheet" href="./style/style.css">
	<link rel="stylesheet" href="./style/nav.css">
</head>
<body>
	 <?php require("header.php") ?>
	<div class="main-content">
		<h2 style="text-align: center; margin-bottom: 20px">Update Student Information</h2>
	
	<!--Procedure: Try to write the PHP code. -->
		<div>
		<?php 
		if(@$_SESSION['msg']!=""){
			echo @$_SESSION['msg']; echo @$_SESSION['msg']="";
		}
		?>
		
		<form class="update-form" action="update_action.php" method="post" enctype="multipart">
		
					<label>ID </label>
					<input disabled="disabled" type="text" value="<?php echo $recUpdtShow->student_ID;?>" />
					<input type="hidden" name="ID" value="<?php echo $updtID; ?>">
			
					<label>NAME </label>
					<input type="text" name="name" value="<?php echo $recUpdtShow->student_name; ?>" />
				
					<label>PROGRAM : </label>
				&nbsp;   
					<input type="radio" name="program" value="CSE" <?php if($recUpdtShow->student_program=="CSE"){echo "checked";}?> />CSE  &nbsp;   &nbsp; 
					<input type="radio" name="program" value="EEE" <?php if($recUpdtShow->student_program=="EEE"){echo "checked";}?> />EEE  &nbsp;  &nbsp; 
					<input type="radio" name="program" value="Textile" <?php if($recUpdtShow->student_program=="Textile"){echo "checked";}?> />Textile  &nbsp;  &nbsp; 
					<br>
					<!-- <br> -->
					<label style="display: block; margin-top: 8px">INTAKE </label>
					<input type="number" name="intake" value="<?php echo $recUpdtShow->student_intake; ?>" />
				
					<label>BLOOD </label>
					<select name="blood">
						<option value="-99">Select Blood Group</option>
						<option <?php if($recUpdtShow->student_blood=="A+"){echo "selected";}?> value="A+">A+</option>
						<option <?php if($recUpdtShow->student_blood=="A-"){echo "selected";}?> value="A-">A-</option>
						<option <?php if($recUpdtShow->student_blood=="B+"){echo "selected";}?> value="B+">B+</option>
						<option <?php if($recUpdtShow->student_blood=="B-"){echo "selected";}?> value="B-">B-</option>
						<option <?php if($recUpdtShow->student_blood=="AB+"){echo "selected";}?> value="AB+">AB+</option>
						<option <?php if($recUpdtShow->student_blood=="AB-"){echo "selected";}?> value="AB-">AB-</option>
					</select>
				
					<input type="submit" name="btnUpdt" value="Update" />
				
		</form>
		</div>
	</div>
	<!-- Problem + Solution: 002 [FORM END]-->
</body>
</html>


