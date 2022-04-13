<?php
include_once 'include/conect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
 
  <title> Sales</title>
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="../css/sales.css">

</head>

<?php require "../include/header.html" ?>

<body>
        
       
        
    <div class = "form-style-2">
        <h1>Record the sale </h1>

        <form class="addinginformation" action="../action/add_sale_normal.php" method ="POST">
            
        <!-- <label for="card">Client ID : </label><br>
            <input type ="number" id="client_id" name= "client_id" placeholder= "Client ID"> -->

            <label for="card">Employee ID :</label><br>
            <input type ="number" id="emp_id" name= "emp_id" placeholder= "Employee ID">
            <label for="card">Drug ID :</label><br>
            <input type ="number"  id="drug_id" name= "drug_id" placeholder= "Drug ID">
            <label for="card">Amount:</label><br>
            <input type ="number"  id="amount_d" name= "amount_d" placeholder= "Amount">
            <label for="card">Sale date :</label><br>
            <input type ="date" id="date" name= "sale_date" placeholder= "Sale date">
            <div class="cash_card">
               
                  <label class="radio">
                <input type="radio"  name="cash_or_card" value="Card">
                        Card Payment
                </label>
                  <label class="radio">
                <input type="radio"  name="cash_or_card" value="Cash">
                        Cash Payment   
                             
                </label>
            </div>
            <button type= "submit" name="submit" >Submit info</button>
        </form>
         <?php
            if (!isset($_GET['signup'])){

            }
            else{
                $signupChek = $_GET['signup'];
                if($singupCheck == 'empty'){
                  echo "<p class = 'success' > You need to enter information in every field!<p>";
                    exit();
                    }
                elseif($signupChek =='EmpMustHaveLicence'){
                    echo "<p class = 'error' >Employee has no licence to sell prescription drugs <p>";
                exit();
                }
                elseif ($signupChek == 'NoSuchemp'){
                    echo " <p class == 'error'> There is no such employee ID.Please try again<p>";
                                    exit();

                }
            elseif($signupChek == 'sold'){
                echo "<p class = 'success' > Item sold successfuly <p>";
                exit();
            }
            }
            ?>
    </div>
  
       
</body>
</html>