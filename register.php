
<?php
    $con=mysqli_connect('localhost','root','');
    if (!$con) {
        //echo "not connected";
    }else {
        //echo "connected to the server";
    }
    if (!mysqli_select_db($con,'rent')) {
        //echo "not connected to DB";
    }else {
        //echo "connected to the DB";
    }
    
    if (isset($_POST['btn'])) {
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO register_form(userName,email,password) VALUES ('$userName','$email','$password')";
        if(!mysqli_query($con,$sql)) {
            echo "you have registered";
        }
        else {
            //echo "not registerd";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME RENT </title>
        <!--we add css-->
        <link rel="stylesheet" type="text/css" href="style.css" />
        
    </head>
    
    <body>
        <!--Header Start-->
        <header class="header">
            <div class="home">
                <h1>HOME RENT</h1>
            </div>
            
        </header>
        <!--Header End-->
        
        
        
        <!--Main Body Start-->
        <div class="main">
            <div class="home">
                

                <div class="booking-details">
                    <h3>Register</h3>
                    <form method="post">
                        <span class="name">Username</span>
                        <input type="text" name="userName" placeholder="Username Please" required="true" /><br />
                        
                        <span class="name">Email</span>
                        <input type="email" name="email" placeholder="Email Please" required="true" /><br />
                        
                        <span class="name">Password</span>
                        <input type="password" name="password" placeholder="Password Please" required="true" /><br />
                        
                        <input type="submit" name="btn" value="SUBMIT"/>
                        <input type="reset" name="reset" value="RESET" /><br />
                        <a href="index.php">Go Home</a>
                        <a href="login.php" style="float: right;">Login</a>
                    </form>
                </div>
            </div>
        </div>
        <!--Main Body End-->

    </body>
</html>