<?php
include_once '../include/conect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
  
  <title> Customers</title>
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="../css/stylesCustomers1.css"> 
</head>

<?php require "../include/header.html" ?>


    <body>
        <div class="grid">
                    <div class ="border" >
                <div class ="buttons">
                    <a class=" but1" href="customers_remove.php">Remove Customer</a>
                    <!-- <a class=" but1" href="/contact">Contact</a> -->
                </div>
        </div>
        <div class ="borderform">
        <div class ="form-style" >
            <h1>Add customers </h1>
                <form   action = "../action/new_error.php" method ="POST">
                    <!-- <label for="name">First Name</label><br> -->
                    <input type ="text"  name= "first_name" placeholder= "First Name">
                    <input type ="text"  name= "last_name" placeholder= "Last Name">

                    <!-- <label for="address">Address</label><br> -->
                    <input type ="text" id="address" name= "address" placeholder= "Address">
                    <!-- <label for="phone">Phone Number</label><br> -->
                    <input type ="text" id="phone" name= "phone" placeholder= "Phone Number">
                    <button type= "submit"  name="submit" >Submit info</button>
            </form>
        
        <?php
          
             if (!isset($_GET['signup'])){
                 
                 exit();
             }
             else{
                 $singupCheck = $_GET['signup'];
                 if($singupCheck == 'empty'){
                  echo "<p class = 'error' > You need to enter information in every field!<p>";
                    exit();
                    }
                    elseif($singupCheck == 'char'){
                        echo "<p class = 'error' > Please entere only characters as your name!<p>";
                        exit();
                    }
                    elseif($singupCheck == 'success'){
                        echo "<p class = 'success' > You have added the item successfuly!<p>";
                        exit();
                    }
             }

        ?>
        </div>
            </div>
</div>
<div class="additional"></div>
        
    </body>
</html>
