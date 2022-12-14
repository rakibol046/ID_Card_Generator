<?php
session_start();
require_once("con_db.php");

	$ID = $_GET['id'];	

    $sqlSrch = "SELECT * FROM student_info WHERE student_id='$ID'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	$recSrch = mysqli_fetch_object($qrySrch);
    if($numSrch > 0){
		$_SESSION['msg'] = "";
	}
    else{
		$_SESSION['msg'] = "<h4 style='color:red; text-align: center;'>Student not found</h4>";
	}

?>