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
    

    if (isset($_POST['firstName'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactNumber'];
        $address = $_POST['address'];
        $query = $_POST['query'];
        $sql = "INSERT INTO contact_form(firstName,lastName,email,contactNumber,address,query) VALUES ('$firstName','$lastName','$email','$contactNumber','$address','$query')";
        if(!mysqli_query($con,$sql)) {
            echo "Thanks for your contact";
        }
        else {
            //echo "Try again";
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
        <!--we add css file-->
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <!--Header Start -->
    <header class="header">
            <div class="home">
                <h1>HOME RENT </h1>
            </div>
            <!--Menu Start -->
            <div>
                <nav class="menu">
                        <ul>
                            <a href="index.php"><li>Home</li></a>
                            <a href="about.php"><li>About Us</li></a>
                            <a href="contact.php"><li>Contact Us</li></a>
                            <a href="login.php"><li>Log In</li></a>
                        </ul>
                </nav>
            </div>
            <!--Menu End -->
        </header>
        <!--Header End -->
        
        <!--Main Body Start-->
        <div class="main">
            <div class="home">
                
                
                <!--Contact Detail Entry-->
                <div class="booking-details">
                    <h3>Contact Us</h3>
                    <form action="" method="post">
                        <span class="name">First Name</span>
                        <input type="text" name="firstName" placeholder="First Name Please" /><br />
                        
                        <span class="name">Last Name</span>
                        <input type="text" name="lastName" placeholder="Last Name Please" /><br />
                        
                        <span class="name">Email</span>
                        <input type="email" name="email" placeholder="Email Please" /><br />
                        
                        <span class="name">Conatct No.</span>
                        <input type="tel" name="contactNumber" placeholder="Contact Number Please" /><br />
                        
                        <span class="name">Address</span> 
                        <textarea name="address" placeholder="Your Address Please"></textarea><br />

                        <span class="name">Your Query</span> 
                        <textarea name="query" placeholder="Your Query Please"></textarea><br />
                        
                        <input type="submit" name="submit" value="SUBMIT" />
                        <input type="reset" name="reset" placeholder="RESET" />
                    </form>
                </div>
            </div>
        </div>
        <!--Main Body End-->
        
    </body>
</html>