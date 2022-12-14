<?php include 'barcode128.php'; ?>
<?php include 'id_card_action.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Team Error">
    <title>Student Id Card Generator</title>
    <!-- <link rel="stylesheet" href="./style/style.css"> -->
    <link rel="stylesheet" href="./style/card.css">
    <link rel="stylesheet" href="./style/nav.css">
</head>
<body>
    <?php require("header.php") ?>
    <div class="main-content">
        <h1 style="text-align: center">Generate Id Card</h1>
        
    <section class="idcard">
		<form action="" method="post" enctype="multipart">
			<input type="text" name="ID" placeholder="Student ID"/>
			<input type="submit" name="btngen" value="Generate" />
		</form>
	</section>
    <?php 
		if(@$_SESSION['msg']!=""){
			echo @$_SESSION['msg']; echo @$_SESSION['msg']="";
		}
		?>
<?php if(@$numSrch>0){ ?>
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
    <div style="text-align: center; margin-top: 10px"> <a style="text-align: center; padding: 5px 10px; background: green; color: white; border-radius: 4px" target="_blank" href="print.php?id=<?php echo $recSrch->student_ID; ?>" >Print</a></div>
    <?php }?>
        
       
    </div>
</body>
</html>