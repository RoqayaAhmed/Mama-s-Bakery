<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="receipt.css">
    <title>ORDER DETAILS</title>
</head>
<body>
    <div class="navbar" >
        <img class="logo" src="mama2.jfif">
        <form >   
            <input class="search" type="submit" value="search">
            <input class="t1" type="text" name="search" placeholder="  search">
        </form>
        <ul >
        <li><a href="homepage.html" >HOME</a></li>
            <li><a href="bread cat.html">BREAD</a></li>
            <li><a href="desserts.html">DESSERTS</a></li>
            <li><a href="offers.html">OFFERS</a></li>
            <li><a href="signup.html">SIGN UP</a></li>
            <li><a href="login.html">LOG IN</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><a href="admin.html">ADMIN</a></li>
        </ul>
    </div>
    <center>
        <div class="rs">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <br><br><br>
                <h1 style="color:rgb(11, 11, 12); text-align: center; ">Please Enter The Product Name</h1><br>
                <input class="but5" type="text" name="product" placeholder="ENTER PRODUCT NAME"><br><br>
                <input class="but6" type="submit" value="BUY" name="buy">
            </form>
        </div>
    </center>

       <?php
       require 'conn.php';
       global $conn;
       session_start();
       
       if($_SESSION['username']==''){
           header("location:login.html");
       }
       if(isset($_POST['buy'])){
        if(isset($_POST['product']) && !empty($_POST['product']))
        $product=$_POST['product'];
    else
    echo "please enter the product name";
}

       if (!empty($product)){
       $query = "SELECT * FROM `products` WHERE Name = '$product'";
       $runquery = mysqli_query($conn , $query);
       $record = mysqli_fetch_array($runquery);}
       ?>
       <center>
    <div class="receipt">
            <h3 class="tit">
                YOUR <br>
                ORDER<br>
                DETAILS</h3><br>
                <table class="t">
                    <tr class="tr">
                        <th class="th"> ITEM:</th>
                        <td class="td"><?php echo $record['Name'] ?></td>
                    </tr>
                    <tr class="tr"></tr>
                        <th class="th"> DESCRIPTION:</th>
                        <td class="td"> <?php echo $record['description'] ?> </td>
                    </tr>
                    <tr class="tr"></tr>
                        <th class="th">PRICE:</th>
                        <td class="td"> <?php echo $record['price'] ?></td>
                    </tr>
                </table>
                <form method="post" action="logout.php">
                <input class="lo" type="submit" value="LOG OUT">
       </form>
    </div>
       </center>
       
    <div id="contact" class="contact">
        <br><br>
         
<h1 style="text-align: center; color: black;font-family: 'Cookie', cursive;font-size: 60px;">Contact Us </h1>
<div class="hr"></div> <br>
<div class="try"><br>
    <img class="icon" src="phone.jpeg"><br>
    <img class="icon" src="mail1 (1).jpeg"><br>
    <img class="icon" src="fb1.jpeg">
</div>
<div class="info">
    <br>
    <b style="display: inline-block;">phone:0123456789</b><br><br><br>

    <b style="display: inline-block;">Email: mamasbakery@gmail.com</b><br><br><br>

        <b style="display: inline-block;">Facebook:https://www.facebook.com/mamasbakery/</b>
</div>
<div class="aboutUs" id="des">
    <h2>Our Story</h2><br>
    <p style="font-size: 18px;"> Mama's Bakery started out in a small house full of love and the smell of fresh baked goods, people used to love to visit us just to enjoy mama's famous cookies, they always told us how they would wish if there was a bakery that had food made with love and passion like ours, so we finally decided to share our heavenly bites with the world and decided to open mama's bakery and bless you all with her cooking. </p>
    </div>
<div class="feedback">
<h2 >Give Us Your Feedback!</h2><br>
<form >
<textarea name="write something" id="" cols="40" rows="5"></textarea>
<br>
<button class="but2">send</button>
</form >
</div>

       </div>
</body>
</html>