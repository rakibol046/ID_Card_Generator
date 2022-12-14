<?php
session_start();
require_once ("con_db.php");
if (isset($_POST['btnUpdt']) == "Update") {
	$ID = $_POST['ID'];	
	$name = $_POST['name'];	
	$program = $_POST['program'];	
	$intake = $_POST['intake'];	
	$blood = $_POST['blood'];
	/*Update into tbl_info*/
	$updtSQL= "UPDATE student_info SET student_name='$name',student_program='$program',student_intake='$intake',student_blood='$blood' WHERE student_ID='$ID'";
	$updtQry = @mysqli_query($dbCon,$updtSQL) or die("Error in Table Info Update: ".mysqli_error($dbCon));
	/*Success or Error Message*/
	if($updtQry){
		$_SESSION['msg'] = "<h4 style='color:blue; text-align: center; margin-bottom: 10px'>Data Succefully Updated</h4>";
	}else{
		$_SESSION['msg'] = "<h4 style='color:red'; text-align: center;  margin-bottom: 10px'>Not Updated</h4>";
	}
	header('Location: http://localhost/id_card_generator/update_form.php?updtID='.$ID);
}
?>