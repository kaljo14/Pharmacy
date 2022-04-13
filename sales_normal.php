<?php
include_once 'conect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
 
  <title> Sales</title>
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="sales.css">

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
        
       
        
    <div class = "form-style-2">
        <h1>Record the sale </h1>

        <form class="addinginformation" action="add_sale_normal.php" method ="POST">
            
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
    </div>
  
       
</body>
</html>