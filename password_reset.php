<?php
require_once "connection.php";


$email =  $password = $confirm_password = "";
 $email_err = $password_err = $confirm_password_err= $confirm_password_suc = "";



 if($_SERVER["REQUEST_METHOD"] == "POST"){

     if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
       $email =  trim($_POST["email"]);
     // echo $email;
        $sql = "SELECT Email FROM morph WHERE Email = '$email'";
         if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $email);     
                  
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows <= 0){
                    $email_err = "This email does not exist on our system, please type in the correct email or sign up if you haven't.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        } 
        // Close statement
        $stmt->close();
    }
      // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must be at least 8 characters.";
    if(!preg_match("#[0-9]+#",$password)) {
        $password_err = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $password_err = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $password_err = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }


    if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

         $password =  password_hash($password, PASSWORD_DEFAULT);
         echo $password;

         $sql = "UPDATE  morph SET Password = '$password' WHERE Email = '$email' ";

         if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters

           
            $stmt->bind_param("s", $password);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $confirm_password_suc = "password updated successfully";
                // Redirect to login page
                 header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        
          $stmt->close();
        }
         
        // Close statement
      
    }

     $mysqli->close(); 

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
    <title>Enter New Password</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header class="navbar p-0">
        <a href="#" class="navbar-brand p-0"><img src="https://res.cloudinary.com/anikefisher/image/upload/v1569282034/Group_no9oac.png" alt="logo"></a>
    </header>
    <div style="margin-top:1%" class="container">
        <div class="body-form">
             <h6 class="help-block">You will be  automatically redirected to the <a href="login.php"> <b> Log In </b> </a> page once your password change is successful </h6>
            <h3 class="mb-4"> Update Password </h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-center">
                    <form>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label for="email">Enter Email </label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" value="<?php echo $email; ?>">
                            <span class="help-block text-danger"><b> <?php echo $email_err; ?></b></span>
                        </div>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label for="password"> Enter New Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="******" value="<?php echo $password; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            <span class="help-block text-danger"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label for="password">Confirm New Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2" placeholder="******" value="<?php echo $confirm_password; ?>">
                            <span class="help-block text-danger"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn" value="Submit">Submit</button>
                        </div>
                         <h6 class=""> Not registered yet? <a href="index.php"> <b> Sign Up </b> </a> </h6>
                    </form>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
