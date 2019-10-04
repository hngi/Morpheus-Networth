<?php

if (isset($_POST['submit'])){

require 'phpmailer/PHPMailerAutoload.php';

		$mail= new PHPMailer();
		
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 465
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
         $mail->SMTPSecure = 'tls';
        $mail->Username = "morpheusnetworth@gmail.com";
        $mail->Password = "morphnetworth";
       
        
     
        
		$mail->setFrom($email=$_POST['email'] );
		$mail->addAddress("morpheusnetworth@gmail.com");
		$mail->addReplyTo($email=$_POST['email'] );
		$mail->Subject = 'Contact Form-Email';
		$mail->IsHTML(true);
	    $mail->Body =$_POST['body'];
		
		
		
	if (!$mail->send()){
	?>
	<script>alert("Oops ! \n Email Not Sent  !!");
	    </script>
	<?php
	}else{
						?>
                    <script>
					alert("Email Successfully Sent !!");
                        
                    </script>
                    <?php
	
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Contact US</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
    <header class="navbar p-0">
        <a href="#" class="navbar-brand p-0"><img src="https://res.cloudinary.com/anikefisher/image/upload/v1569282034/Group_no9oac.png" alt="logo"></a>
    </header>
    <div style="margin-top:1%" class="container">
        <div class="body-form">
            <h3 class="mb-4"> Contact US </h3>
            <form action="contact_form.php" method="post">
                <div class="form-center">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username" required>
                            
                        </div>
						  <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control" placeholder="Message" required></textarea>

                        </div>


                        <div class="form-group">
                            <button type="submit" class="submit-btn" name="submit" value="Send Email">Send</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>

    </div>
</body>
</html>
