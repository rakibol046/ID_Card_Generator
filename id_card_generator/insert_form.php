<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Team Error">
    <title>Student Id Card Generator</title>
    <link rel="stylesheet" href="./style/style.css">
	<link rel="stylesheet" href="./style/nav.css">
</head>
<body>
    <?php require("header.php") ?>
 <div class="main-content">
    <h2 style="text-align: center; margin-bottom: 20px">Create Student</h2>
			<?php 
				if(@$_SESSION['msg']!=""){
					echo $_SESSION['msg']; 
					echo $_SESSION['msg']="";
				}
			?>
			</span>
			<form class="update-form" action="insert_action.php" method="post" enctype="multipart">
				
							<label>ID </label>
							<input type="text" name="ID" />
						
							<label>NAME </label>
							<input type="text" name="name" />
						
							<label>PROGRAM : </label>
							<input type="radio" name="program" value="CSE" /> CSE | 
							<input type="radio" name="program" value="EEE" /> EEE |
							<input type="radio" name="program" value="Textile" /> Textile
						<br>
							<label style="display: block; margin-top: 8px">INTAKE </label>
							<input type="number" name="intake" />
					
							<label>BLOOD </label>
							<select name="blood">
								<option value="-99">Select Blood Group</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
					
							<label>VALIDITY  </label>
							<input type="date" name="validity" />
					
						<input type="submit" name="btnInfo" value="Save" />
					
			</form>
 </div>
</body>
</html>