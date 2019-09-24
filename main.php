<?php include ('dbcon.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Main</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="p-0" style="background-color: #FAFAFA">
    <header class="navbar navbar-main">
        <a href="#" class="navbar-brand p-0"><img src="../img/Group_no9oad.png" height="65" alt="logo"></a>
    </header>

    <div class="container mt-4 p-0">
        <h1 style=" font-size: 35px; text-align: center;">MorphWorth Calculator</h1>
        <form class="mt-2 mainform"method="POST">
            <div class="content">
                <div >
                    <h1 style=" font-size: 30px; text-align: center;">Assets</h1>
                    <div class="group mt-2">
                        <label for="real-estate"><h2> Real Estate </h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="estate" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2> Cash </h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="cash" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2> Investments</h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="investments" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2> Autos</h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="autos" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2>Others </h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp"  name="others" placeholder="0">
                        </div>
                    </div>
                </div>
                <div>
                    <h1 style=" font-size: 30px; text-align: center;">Liabilities</h1>
                    <div class="group mt-2">
                        <label for="real-estate"><h2>Debts </h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="debts" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2> Mortgage Debts </h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="mortgage_debts"placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2>Loans</h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="loans" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2> Auto Loans</h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="auto_loans" placeholder="0">
                        </div>
                    </div>
                    <div class="group mt-2">
                        <label for="real-estate"><h2>Others </h2></label>
                        <div class="d-flex">
                            <h5>₦</h5>
                            <input type="text" class="form-control" aria-describedby="nameHelp" name="l_others" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>
             <button type="submit" name="submit" class="submit-btn" style="width: 20%;
    margin: 3% 32%;">Submit</button>
	<?php
	if (isset($_POST['submit'])){
	$es = $_POST['estate'];
	$cs = $_POST['cash'];
	$in= $_POST['investments'];
	$au= $_POST['autos'];
	$ot= $_POST['others'];
	$db= $_POST['debts'];
	$mdb= $_POST['mortgage_debts'];
	$ln= $_POST['loans'];
	$aln= $_POST['auto_loans'];
	$lot= $_POST['l_others'];
	
	$asset = mysqli_query($con, "INSERT INTO tbl_assets (estate,cash,investments,autos,others) VALUES ('$es','$cs','$in','$au', '$ot'  ) ") or die (mysqli_error($con));
    $liability = mysqli_query($con, "INSERT INTO tbl_liabilities (debts,mortgage_debts,	loans,auto_loans,others) VALUES ('$db','$mdb','$ln','$aln', '$lot' ) ") or die (mysqli_error($con));

				   if ($asset){
	?>
					<script>
					alert("Hurray !\n Submitted!!");
                        
                    </script>
					<?php
							
					}else{
						?>
                    <script>
					alert("Oops ! \n Error !!");
                       
                    </script>
	 <?php
					}
					
                }
							
                ?>


	
	
	
	
        </form>
    </div>
</body>

</html>