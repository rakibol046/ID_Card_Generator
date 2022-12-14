<?php include 'barcode128.php'; ?>
<?php include 'print_action.php'; ?>
<html>
<head>
    <link rel="stylesheet" href="./style/card.css">
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	 <section class="card">
        <div class="front">
            <div class="card-header">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/03/BUBT_logo.jpg?20150531111055" alt="logo"  width="40px" height="40px">
                <div class="name">
                    <h3>Bangladesh University of </h3>
                    <h3>Business and Technology</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="barcode">
                   <?php
			echo "<strong style='dispay: block'>".bar128(stripcslashes($ID))."</strong>";
		?>
                </div>
                <div class="card-info">
                    <img src="https://www.americanaircraftsales.com/wp-content/uploads/2016/09/no-profile-img.jpg" alt="logo" width="110px" height="110px">
                    <h3><?php echo $recSrch->student_name; ?></h3>
                    <h3>ID- <?php echo $recSrch->student_ID; ?></h3>
                    <div>
                        <p>Program</p>
                        <p>: <?php echo $recSrch->student_program; ?></p>
                    </div>
                    <div>
                        <p>Intake</p>
                        <p>: <?php echo $recSrch->student_intake; ?></p>
                    </div>
                    <div>
                        <p>Validity</p>
                        <p>: <?php echo $recSrch->student_date; ?></p>
                    </div>
                    <p style="color: red">Blood Group : A+ </p>

                </div>
            </div>
            <div class="card-footer">
                <h1>BUBT</h1>
            </div>
        </div>
        <div class="back">
            <p>If found please return to : </p>
            <hr>
            <h1>BUBT</h1>
            <p>Mirpur-2, Dhaka-1216</p>
            <p>Phone: 9024266, 9020132</p>
            <p>Cell: 01741129235</p>
            <p>Email: info@bubt.edu.bd</p>
            <p>Website: bubt.edu.bd</p>
            <img src="img/bubt-qr.png" alt="img">
            <p style="text-align: right" class="regi">Registrar</p>
            <p class="code">0000232232 011, 54545</p>
        </div>

    </section>
</body>
</html>