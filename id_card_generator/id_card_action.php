<?php
session_start();
require_once("con_db.php");
if (isset($_POST['btngen']) == "Generate") {
	$ID = $_POST['ID'];	

    $sqlSrch = "SELECT * FROM student_info WHERE student_id='$ID'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	$recSrch = mysqli_fetch_object($qrySrch);
    if($numSrch > 0){
		$_SESSION['msg'] = "";
	}
    else{
		$_SESSION['msg'] = "<h4 style='color:red; text-align: center;'>Student not found</h4>";
        // echo "<h4 style='color:red'>Studen not found</h4>";
	}

	// $name = $_POST['name'];	
	// $program = $_POST['program'];	
	// $intake = $_POST['intake'];	
	// $blood = $_POST['blood'];
	// $barcode = substr(md5($ID),0,10);
	// $valid = date_format(date_create($_POST['validity']),"Y-m-d");
	
	// header('Location: http://localhost/student-management/id_card.php');
}
?>