<?php
if (isset($_POST['submit'])){
include_once 'include/conect.php';


$emp_id= mysqli_real_escape_string($conn,$_POST['emp_id']);
$drug_id=mysqli_real_escape_string($conn,$_POST['drug_id']);
$amount_d=mysqli_real_escape_string($conn,$_POST['amount_d']);

$sale_date=mysqli_real_escape_string($conn,$_POST['sale_date']);
$cash_or_card= mysqli_real_escape_string($conn,$_POST['cash_or_card']);


$sql ="SELECT * FROM Drugs WHERE drug_id=$drug_id;";
   $result = mysqli_query($conn,$sql);
   
            $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0){
                     while ($row = mysqli_fetch_assoc($result))
                    {
                    echo $row["drug-id"]." - - ";
                     echo $row["dr_name"]." - - ";
                     echo $row["quantity"]." - - "."<br>";
                     $drug_count =$row["quantity"];
                     $drug_price=$row["price"];
                     }
                }
                else {
                    echo "0 results";
                    }
                    $drug_count = $drug_count-$amount_d;
                    echo "$drug_count";



    $sql =" UPDATE Drugs SET quantity='$drug_count' WHERE drug_id ='$drug_id'; ";

//mysqli_query($conn,$sql);
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
    $sql2="SELECT commission_percentage FROM Employee WHERE emp_id='$emp_id'; ";
   $result2 = mysqli_query($conn,$sql2);

    $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck > 0){
                     while ($row = mysqli_fetch_assoc($result2))
                    {
                      $commis_percent=$row["commission_percentage"];
                    }}
                    else{echo"error";}
                    echo "from here:".$amount_d."<br>";
                    echo $drug_price."<br>";
                    echo $commis_percent."<br>";
    $commission=($amount_d*$drug_price)*$commis_percent;
                    echo $commission;
                    $sql =" INSERT INTO sale_normal (emp_id,drug_id,amount_d,sale_date,cash_or_card,Commission)
VALUES('$emp_id','$drug_id','$amount_d','$sale_date','$cash_or_card','$commission');";
// mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
                    // $commission=0;
                 header("Location: ../sales_normal.php?signup=notUsed");
            
}

    else{
        header("Location: ../sales_normal.php?signup=notUsed");
        }
 

// header("Location: ../sale.php?singup=succes");
?>

