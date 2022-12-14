<?php
require_once ("con_db.php");
/*DELETE*/
$dltID = $_GET['dltID'];
$sqlDelt = "DELETE FROM student_info WHERE student_ID='$dltID'";
mysqli_query($dbCon,$sqlDelt);
header('Location: ' . BASE);
?>