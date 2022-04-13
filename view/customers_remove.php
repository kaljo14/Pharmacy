<?php
include_once 'conect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
 
  <title>Delete Customer</title>
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="../css/stylesCustomers1.css">

</head>
<header>
            <a href ="customers.php" class="logo">Pharmacy</a>

            <nav>
                <ul class="nav_links">
                    <!-- <li><a href="pharmacy.php">Home</a></li> -->
                    <li><a href="customers.php"> Customers</a></li>
                    <li><a href="sales_p.php"> Sales</a>
                            <ul >
                             <li><a href= "sales_p.php"> Perscription Sale</a>
                             <li><a href= "sales_normal.php"> Normal Sale </a>

                            </ul>


                </li>

                    <li><a href="drugs.php"> Commissions</a></li>
                    <li><a href="reports.php"> Reports</a></li>
                </ul>
            </nav>
</header>
    <body>
        <div class="grid">
                    <div class ="border" >
                <div class ="buttons">
                    <a class=" but1" href="customers.php">Add Customer</a>

                </div>
        </div>
        <div class ="borderform">
        <div class ="form-style" >
            <h1> Remove customers </h1>
                <form   action = "delete_cstm.php" method ="POST">
                    <!-- <label for="name">First Name</label><br> -->
                    <input  type ="number"  name= "client_id" placeholder= "ID">                    <!-- <label for="address">Address</label><br> -->
                    <!-- <label for="phone">Phone Number</label><br> -->
                    <input  type ="number" id="phone" name= "phone" placeholder= "Phone Number">
                    <button type= "submit"  name="submit" >Submit info</button>
            </form>
        
            <!-- error message printing  -->
        <?php
            /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($fullUrl,"singup=empty") == true){
                echo "<p class = 'error' > You did not fill in all fields!<p>";
            }
            elseif (strpos($fullUrl,"singup=char") == true){
                echo "<p class = 'error' > Please entere only characters as your name!<p>";
            }
            elseif (strpos($fullUrl,"singup=success") == true){
                echo "<p class = 'success' >You have added the item successfuly!<p>";
            }*/
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
                        echo "<p class = 'success' > You have removed the customer successfuly!<p>";
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
