<?php
    
    
    if (isset($_POST['submit'])) {
        $password = $_POST['password'];
        $email =$_POST['email'];
    }
        
    
    
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME RENT </title>
        <!-- here we add css file-->
        <link rel="stylesheet" href="style.css" />
        
        <!-- For icone adding  -->
        <script src="https://kit.fontawesome.com/22ae655644.js" crossorigin="anonymous"></script>
      
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
                            <a href="login.php"><li>
                                <?php
                                    if(isset($email)){
                                        echo $email;
                                    }
                                    else{
                                        echo "Log In";
                                    }
                                ?>
                            </li></a>
                        </ul>
                </nav>
            </div>
            <!--Menu End -->
        </header>
        <!--Header End -->

        <div class="bg">
                <div class="image">		
                    <h3 class="text">Find your Home!!</h3>
                </div>
        </div>
        
        <!--Main Body Start -->
        <div class="main">
            <div class="home">
                <h3>Recently Added</h3>
                
                <!--Displaying Recently Added Houses in Boxes-->
                <div class="box">
                    
                    <div class="houses">
                        <img src="image/ho1.jpg" />
                        <span class="house-title">01</span><br />
                        <span class="house-title">The Castle</span><br />
                        <span class="house-added">Added Date:01-05-2023</span><br />
                        <span class="house-location">Location: Ashulia, Savar, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 5</i>
                        <i class="fa-solid fa-bath"> 5</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 25,000</i><br>
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="image/ho2.jpg" />
                        <span class="house-title">02</span><br />
                        <span class="house-title">Little Court</span><br />
                        <span class="house-added">Added Date:03-05-2023</span><br />
                        <span class="house-location">Location: Mirpur-01, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 6</i>
                        <i class="fa-solid fa-bath"> 5</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 35,000</i><br>
                        <a href="book.php">
                        <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="image/ho3.jpg" />
                        <span class="house-title">03</span><br />
                        <span class="house-title">Dreamwood House</span><br />
                        <span class="house-added">Added Date:05-05-2023</span><br />
                        <span class="house-location">Location: Dhanmondi-27, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 6</i>
                        <i class="fa-solid fa-bath"> 5</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 45,000</i><br>
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="image/ho4.jpg" />
                        <span class="house-title">04</span><br />
                        <span class="house-title">Orchard House</span><br />
                        <span class="house-added">Added Date:02-05-2023</span><br />
                        <span class="house-location">Location: Gulshan-02, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 4</i>
                        <i class="fa-solid fa-bath"> 3</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 25,000</i><br>
                        <a href="book.php">
                        <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                </div> <br><br>
                
                <h3>Luxurious Houses</h3>
                <!--Displaying Luxurious Houses in Boxes-->
                <div class="clearfix">
                    
                    <div class="houses">
                        <img src="image/ho5.jpg" />
                        <span class="house-title">05</span><br />
                        <span class="house-title">Quarters</span><br />
                        <span class="house-added">Added Date:04-03-2023</span><br />
                        <span class="house-location">Location: Uttara-18, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 6</i>
                        <i class="fa-solid fa-bath"> 5</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 30,000</i><br>
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="image/ho6.jpg" />
                        <span class="house-title">06</span><br />
                        <span class="house-title">Treetops</span><br />
                        <span class="house-added">Added Date:05-10-2023</span><br />
                        <span class="house-location">Location: Shahbagh, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 4</i>
                        <i class="fa-solid fa-bath"> 5</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 20,000</i><br>
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    
                    <div class="houses">
                        <img src="image/ho7.jpg" />
                        <span class="house-title">07</span><br />
                        <span class="house-title"> Fairview</span><br />
                        <span class="house-added">Added Date:06-10-2023</span><br />
                        <span class="house-location">Location: Bonani, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 5</i>
                        <i class="fa-solid fa-bath"> 3</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 25,000</i><br>
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="image/ho8.jpg" />
                        <span class="house-title">08</span><br />
                        <span class="house-title"> White House</span><br />
                        <span class="house-added">Added Date:07-10-2023</span><br />
                        <span class="house-location">Location: Farmgate, Dhaka</span><br />
                        <i class="fa-solid fa-bed"> 5</i>
                        <i class="fa-solid fa-bath"> 4</i>
                        <i class="fa-solid fa-bangladeshi-taka-sign"> 23,000</i><br>
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
        <!--Main Body End -->
    </body>
    
</html>