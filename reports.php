<?php
include_once 'conect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
 
  <title> Sales</title>
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="report123.css">

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
       <div class ="grid">
           <div class = "buttons">

             <form  method="post">
                 <input class="client_id" type ="number" name = "client_id" placeholder ="Customer ID ">
        <input class="but1" type="submit" name="button1"
                value="Client Report"/>
          
        <input class="but2" type="submit" name="button2"
                value="Weekly Report"/>
                <lable id="startdate">Start Date:</lable>
                <input class ="date" type ="date" name = "startdate" placeholder ="Start Date">
                                <lable id="enddate">End Date:</lable>

                <input class="date" type ="date" name = "enddate" placeholder ="Start Date">
    </form>
</div>
<div class ="border">
   <div class ="result1">

            <?php
            if(isset($_POST['button1'])) 
            {
                
                $client_id= mysqli_real_escape_string($conn,$_POST['client_id']);
                        // echo "$client_id"; proverka na nomera
                        if ($client_id == NULL)
                        {echo "<p class = 'weekrhead'> For a individual report please enter customer ID<p>";}
                        else
                            {
                                        $sql ="SELECT * FROM Client WHERE client_id =$client_id;";
                                        $result = mysqli_query($conn,$sql);
                                        $resultCheck = mysqli_num_rows($result);
                                        if ($resultCheck > 0)
                                    {
                                        while ($row = mysqli_fetch_assoc($result))
                                        {
                                            // echo "yess";
                                             echo "Name:".$row["first_name"]."&nbsp";
                                             echo $row["last_name"]."<br>";
                                            echo"----------------------------------------------------------"."<br>";
 
                                            //$row["first_name"].$row["last_name"];
                                             //echo "$first_name";
                                        }
                                        
                                        
                                    }
                                        else {
                                            echo "<p class ='error'>There is no such customer";
                                            exit();
                                        }
                                        $sql ="SELECT * FROM sale_prescription WHERE client_id =$client_id;";
                                        $result = mysqli_query($conn,$sql);
                                        $resultCheck = mysqli_num_rows($result);
                                        if ($resultCheck > 0)
                                    {
                                       
                                        while ($row = mysqli_fetch_assoc($result))
                                        {  
                                            echo "Sale Date:&nbsp&nbsp".$row["sale_date"]."<br>";
                                             echo "Emp. ID:&nbsp&nbsp".$row["emp_id"]."<br>";
                                            echo "Drug ID:&nbsp&nbsp".$row["drug_id"]."<br>";
                                            $drug_id=$row["drug_id"];
                                            
                                            $sql2="SELECT * FROM Drugs WHERE drug_id =$drug_id;";
                                            $result2=mysqli_query($conn,$sql2);
                                            $resultCheck2 = mysqli_num_rows($result2);
                                            if ($resultCheck2>0){
                                                while ($row2=mysqli_fetch_assoc($result2)){
                                                    echo "Drug Name:&nbsp&nbsp".$row2["dr_name"]."<br>";
                                                    echo "price:&nbsp&nbsp ".$row2["price"]." BGN"."<br>";
                                                    
                                                }
                                            }
                                            echo"----------------------------------------------------------"."<br>";                                        }
                                    }else {echo "<p class='error'>Player has no drugs"."<br>";}
                                    
                                       
                                        
                            }
                    
            }
            else {
            }
            ?>
            <!-- </div>
            <div class ="results2">  -->
            <?php
            
        if(isset($_POST['button2'])) {
            $startdate=mysqli_real_escape_string($conn,$_POST['startdate']);
            $enddate=mysqli_real_escape_string($conn,$_POST['enddate']);
            // echo $startdate;
            // echo $enddate;
                        // echo "$client_id"; proverka na nomera
                        if ($startdate == NULL || $enddate == NULL){echo "<p class ='weekrhead'>For a weekly report please enter start and end date<p>";
                            exit();}
             $totalprice=0;
             echo " <p class ='weekrhead'>Weekly Report<p> ";
            $sql ="SELECT * FROM sale_prescription WHERE sale_date BETWEEN '$startdate' AND '$enddate';";
                                        $result = mysqli_query($conn,$sql);
                                        $resultCheck = mysqli_num_rows($result);
                                        if ($resultCheck > 0)
                                    {
                                        while ($row = mysqli_fetch_assoc($result))
                                        {
                                            // echo "yess";
                                             echo "Employee&nbsp&nbsp"."<br>"."ID:&nbsp". $row["emp_id"];
                                             $emp_id=$row["emp_id"];
                                             $sql1="SELECT * FROM Employee WHERE emp_id = $emp_id; ";
                                             $result1=mysqli_query($conn,$sql1);
                                             $resultCheck1=mysqli_num_rows($result1);
                                             if ($resultCheck1>0){while($row1=mysqli_fetch_assoc($result1)){
                                                 echo " NAme:&nbsp&nbsp".$row1["name"]."<br>";
                                                //  echo " birth date:&nbsp&nbsp".$row1["birth_date"]."<br>";

                                             }}
                                             
                                             echo "Client&nbsp&nbsp"."<br>"." ID:&nbsp". $row["client_id"];
                                             $client_id=$row["client_id"];
                                               $sql1="SELECT * FROM Client WHERE client_id = $client_id; ";
                                             $result1=mysqli_query($conn,$sql1);
                                             $resultCheck1=mysqli_num_rows($result1);
                                             if ($resultCheck1>0){while($row1=mysqli_fetch_assoc($result1)){
                                                 echo " Name:&nbsp".$row1["first_name"]."&nbsp".$row1["last_name"]."<br>";
                                                 echo"address:&nbsp&nbsp".$row1["address"]."<br>";
                                                 echo "Phone Number:&nbsp".$row1["phone_number"]."<br>";
                                                //  echo " birth date:&nbsp&nbsp".$row1["birth_date"]."<br>";

                                             }}
                                             echo "Drug "."<br>"."ID:&nbsp&nbsp". $row["drug_id"]."<br>";
                                             $drug_id=$row["drug_id"];
                                             $sql1="SELECT * FROM Drugs WHERE drug_id = $drug_id; ";
                                             $result1=mysqli_query($conn,$sql1);
                                             $resultCheck1=mysqli_num_rows($result1);
                                             if ($resultCheck1>0){while($row1=mysqli_fetch_assoc($result1)){
                                                 echo " Name:&nbsp".$row1["dr_name"]."<br>";
                                                 echo"producer:&nbsp&nbsp".$row1["producer"]."<br>";
                                                 echo "Supplier:&nbsp".$row1["supplier"]."<br>";
                                                 echo "Price:&nbsp".$row1["price"]." bgn"."<br>";
                                                 $price=$row1["price"];
                                                 $totalprice=$totalprice+$price;
                                                //  echo " birth date:&nbsp&nbsp".$row1["birth_date"]."<br>";

                                             }}
                                             echo "Sale date:&nbsp&nbsp". $row["sale_date"]."<br>";
                                            echo"----------------------------------------------------------"."<br>";
 
                                            //$row["first_name"].$row["last_name"];
                                             //echo "$first_name";
                                        }
                                        
            
        }
        else{echo "<p class= 'error'>&nbsp&nbsp&nbspNo results<p>";}
    }
            ?>
                        </div>

            </div>
            <div class ="total">
                <?php
                if(isset($_POST['button2'])) {
                echo "Total sum of all prescription products sold:&nbsp".$totalprice." BGN";
                }
                ?>
            </div>
        </div>
    </body>
</html>
