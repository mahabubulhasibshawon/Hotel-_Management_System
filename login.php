
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
    
    if (isset($_POST['submit'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $email =$_POST['email'];
        $sql = "SELECT * FROM register_form WHERE email='$email'  AND password='$password'";
        $result = mysqli_query($con,$sql);
        $register_form = mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo $register_form['password'];
        echo $register_form['email'];
        if ($password==$register_form['password'] && $email==$register_form['email']) {
            header("Location: index.php");
        }
        else{
            echo "invalid user";
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
        <!--we add css -->
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
                    <h3>Log In</h3>
                    <form action="index.php" method="post">
                        <span class="name">email</span>
                        <input type="email" name="email" placeholder="Email please" required="true" /><br />
                        
                        <span class="name">Password</span>
                        <input type="password" name="password" placeholder="Password Please" required="true" /><br />
                        
                        <input type="submit" name="submit" id="submit" value="SUBMIT" />
                        <input type="reset" name="reset" value="RESET" /><br />
                        <a href="index.php">Go Home</a>
                        <a href="register.php" style="float: right;">Register</a>
                    </form>
                </div>
            </div>
        </div>
        <!--Main Body End-->
    </body>
</html>