<?php
session_start();
require_once ("con_db.php");
/*++Search++++*/
$numSrch = 0;
if(isset($_POST['btnSrch'])=="Search"){
	$srchID = $_POST['srchID'];
	$sqlSrch = "SELECT * FROM student_info WHERE student_ID='$srchID'";
	$qrySrch = mysqli_query($dbCon,$sqlSrch);
	$numSrch = mysqli_num_rows($qrySrch);
	$recSrch = mysqli_fetch_object($qrySrch);
	 if($numSrch > 0){
		$_SESSION['msg'] = "";
	}
    else{
		$_SESSION['msg'] = "<h4 style='color:red; text-align: center;'>Studen not found</h4>";
        // echo "<h4 style='color:red'>Studen not found</h4>";
	}
}
?>