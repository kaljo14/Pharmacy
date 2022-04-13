<?php
include_once '../include/conect.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset ="utf-8">
 
  <title> Commissions</title>
  <meta name ="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="../css/sales.css">

</head>

<?php require "../include/header.html" ?>

<body>
  <div class="grid">
  <div class = "form-style-2">
  <form method="POST" action="#">
  <h1>Report Commission For Employee </h1>

  <input type="number" name ="emp_id" placeholder="Employee ID">
  <button type= "submit" name="submit" >Submit info</button>
  </form>
  </div>
  <div class ="report">  
     
<?php
if (isset($_POST['submit'])){
$emp_id = mysqli_real_escape_string($conn,$_POST['emp_id']);
  if ($emp_id == NULL)
     {echo "<p class = 'weekrhead'> For a report please entercustomer ID<p>";}
     else{
   $sql ="SELECT * FROM sale_normal WHERE emp_id =$emp_id";
   $result=mysqli_query($conn,$sql);
   $resultCheck = mysqli_num_rows($result);
   $commission=0;
   if ($resultCheck >0){
     while($row=mysqli_fetch_assoc($result)){
       echo "Drug ID: &nbsp&nbsp".$row["drug_id"]."<br>";
       echo "Sale Date :&nbsp&nbsp". $row["sale_date"]."<br>";
       echo "Amount Sold : &nbsp&nbsp".$row["amount_d"]."<br>";
       echo "Commission for the sale :&nbsp&nbsp".number_format($row["Commission"],2,'.','')."BGN"."<br>";
            $commission+=$row["Commission"];
            echo "----------------------------------------------------------------------<br>";

     }
           echo "Total commissiosn :&nbsp&nbsp".number_format($commission,2,'.','')."BGN";

   }
}}
?>
     </div>       </div>  

    </body>
</html>