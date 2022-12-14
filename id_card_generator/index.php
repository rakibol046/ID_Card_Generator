<?php  
	require_once('con_db.php');
	$sqlShow = "SELECT * FROM student_info";
	$qryShow = mysqli_query($dbCon,$sqlShow);
	$numData = mysqli_num_rows($qryShow);
?>
<?php require("search_action.php") ?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="author" content="Team Error">
    <title>Student Id Card Generator</title>
	<link rel="stylesheet" href="./style/style.css">
	<link rel="stylesheet" href="./style/nav.css">
</head>
<body>

	
	<?php require("header.php") ?>

	<div class="main-content" style="margin-top: 20px">
	<section class="search">
		<form action="" method="post" enctype="multipart">
							<input type="text" name="srchID" placeholder="search student with id"/>
							<input type="submit" name="btnSrch" value="Search" />
						</form>
		<a class="add" href="insert_form.php">Add Student</a>
	</section>
	<section>
		
		<?php if(@$numSrch>0){ ?>
			<span style="text-align: center"><h3>Search Result</h3>
				<table class="table">
				<tr style="background: #d5dbdb;">
					<th>ID</th>
					<th>NAME</th>
					<th>PROGRAM</th>
					<th>INTAKE</th>
					<th>BLOOD</th>
					<th>ACTIONS</th>
				</tr>
				
				<tr style="background: <?php echo $rowColor;?> ;">
					<td><?php echo $recSrch->student_ID; ?></td>
					<td><?php echo $recSrch->student_name; ?></td>
					<td><?php echo $recSrch->student_program; ?></td>
					<td><?php echo $recSrch->student_intake; ?></td>
					<td><?php echo $recSrch->student_blood; ?></td>
					<td>
						<a target="" href="update_form.php?updtID=<?php echo $recSrch->student_ID;?>">Update</a> /
						<a href="delete_action.php?dltID=<?php echo $recSrch->student_ID;?>">Delete</a>
					</td>
				</tr>
				
			</table>			
				<?php }?>
	</section>
	<?php if(@$numSrch==0){ ?>
		<div>
			<span ><h3 style="text-align: center; margin: 10px;">Student Information</h3>
			</span>

			<table>
				<tr style="background: #d5dbdb;">
					<th>ID</th>
					<th>NAME</th>
					<th>PROGRAM</th>
					<th>INTAKE</th>
					<th>BLOOD</th>
					<th>ACTIONS</th>
				</tr>
				<?php if($numData>0){
				
						while($recShow = mysqli_fetch_object($qryShow)){
									
				?>
				<tr >
					<td><?php echo $recShow->student_ID; ?></td>
					<td><?php echo $recShow->student_name; ?></td>
					<td><?php echo $recShow->student_program; ?></td>
					<td><?php echo $recShow->student_intake; ?></td>
					<td><?php echo $recShow->student_blood; ?></td>
					<td>
						<a target="" href="update_form.php?updtID=<?php echo $recShow->student_ID;?>">Update</a> /
						<a href="delete_action.php?dltID=<?php echo $recShow->student_ID;?>">Delete</a>
					</td>
				</tr>
				<?php }}?>
			</table>	
			<?php }?>		
		</div>
	</div>
	
</body>
</html>