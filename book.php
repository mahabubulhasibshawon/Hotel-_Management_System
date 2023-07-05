
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
    

    if (isset($_POST['book'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $houseName = $_POST['houseName'];
        $houseNumber = $_POST['houseNumber'];
        $sql = "INSERT INTO booking_form(firstName,lastName,email,contact,address,houseName,houseNumber) VALUES ('$firstName','$lastName','$email','$contact','$address','$houseName','$houseNumber')";
        if(!mysqli_query($con,$sql)) {
            echo "failed";
        }
        else {
            echo "You have booked the house";
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
        <!--here we add css file-->
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body>
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

                
                <!--Client Booking Detail Entry-->
                <div class="booking-details">
                    <h3>Your Booking Details</h3>
                    <form method="post">
                        <span class="name">First Name</span>
                        <input type="text" name="firstName" placeholder="First Name Please" /><br />
                        
                        <span class="name">Last Name</span>
                        <input type="text" name="lastName" placeholder="Last Name Please" /><br />
                        
                        <span class="name">E-Mail</span>
                        <input type="email" name="email" placeholder="E-Mail Please" /><br />
                        
                        <span class="name">Conatct No.</span>
                        <input type="tel" name="contact" placeholder="Contact Number Please" /><br />
                        
                        <span class="name">Address</span> 
                        <textarea name="address" placeholder="Your Address Please"></textarea><br />
                        <span class="name">House Name</span>
                        <input type="text" name="houseName" placeholder="Enter House Name" /><br />
                        <span class="name">House Number</span>
                        <input type="text" name="houseNumber" placeholder="Enter House Number" /><br />
                        
                        <input type="submit" name="book" value="BOOK NOW" />
                        <input type="reset" name="reset" value="RESET" />
                    </form>
                </div>
            </div>
        </div>
        <!--Main Body End-->
        
    </body>
</html>