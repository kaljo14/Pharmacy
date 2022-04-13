<?php
if (isset($_POST['submit'])){
include '../include/conect.php';

$client_id= mysqli_real_escape_string($conn,$_POST['client_id']);
$emp_id= mysqli_real_escape_string($conn,$_POST['emp_id']);
$drug_id=mysqli_real_escape_string($conn,$_POST['drug_id']);
$sale_date=mysqli_real_escape_string($conn,$_POST['sale_date']);
if (empty($client_id) ||empty($emp_id) || empty($drug_id) || empty($sale_date)){
        header("Location: ../view/sales_p.php?signup=empty");
        exit();
    }
$sql =" INSERT INTO sale_prescription ( client_id,emp_id,drug_id,sale_date)
VALUES('$client_id','$emp_id','$drug_id','$sale_date');";
// mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  // echo "Error deleting record: " . mysqli_error($conn);
}

$sql ="SELECT * FROM Employee WHERE emp_id =$emp_id ;";
           $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                     while ($row = mysqli_fetch_assoc($result))
                    {
                    // echo "yess";
                     $emp_check =$row["branch_id"];
                     }
                }
                else {
                      header("Location: ../view/sales_p.php?signup=NoSuchemp");    
                }
                   if ($emp_check == 2){
                                                $sql ="SELECT * FROM Drugs WHERE drug_id='$drug_id';";
                            $result = mysqli_query($conn,$sql);
                            
                                      $resultCheck = mysqli_num_rows($result);
                                          if ($resultCheck > 0){
                                              while ($row = mysqli_fetch_assoc($result))
                                              {
                                              echo $row["drug-id"]." - - ";
                                              echo $row["dr_name"]." - - ";
                                              echo $row["quantity"]." - - "."<br>";
                                              $drug_count =$row["quantity"];
                                              }
                                          }
                                          else {
                                              echo "0 results";
                                              }
                                              $drug_count = $drug_count-1;
                                              echo "$drug_count";

                              $sql =" UPDATE Drugs SET quantity='$drug_count' WHERE drug_id ='$drug_id'; ";

                                mysqli_query($conn,$sql);
                              if (mysqli_query($conn, $sql)) {
                                echo "Record deleted successfully";
                              } else {
                                echo "Error deleting record: " . mysqli_error($conn);
                              }

                          header("Location: ../view/sales_p.php?signup=sold");

                    }
                    else{header("Location: ../view/sales_p.php?signup=EmpMustHaveLicence");}

  
  
  // header("Location: ../sale.php?singup=succes");
  }
  //  proverka na licenza na prodavacha 
    else{
        header("Location: ../view/sales_p.php?signup=notUsed");
        }


?>

