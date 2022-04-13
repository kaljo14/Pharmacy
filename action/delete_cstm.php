<?php 
// gives error message for customers
if (isset($_POST['submit'])){

        include_once 'include/conect.php';
        //echo is for check 
        echo "yes";
    $client_id= mysqli_real_escape_string($conn,$_POST['client_id']);
    $phone = $_POST['phone'];
    //Check if inputs are empty 
    
    if ( !empty($client_id) && !empty($phone)){
        header("Location: ../customers_remove.php?signup=empty");
        exit();
    }
    else{
    
                    //adds emelemt to the database 

                
                
                include_once 'conect.php';
                $client_id= mysqli_real_escape_string($conn,$_POST['client_id']);
                $sql = "DELETE FROM Client WHERE client_id=$client_id";

                if (mysqli_query($conn, $sql)) {
                echo "Record deleted successfully";
                } else {
                echo "Error deleting record: " . mysqli_error($conn);
}    // INSERT INTO Client (first_name, last_name,address,phone_number)
                // VALUES('$first_name','$last_name','$address','$phone');";
                mysqli_query($conn,$sql);
                

                header("Location: ../customers_remove.php?signup=success");
            exit();
        

    }
    

    }
    else{
        header("Location: ../customers.php?signup=notUsed");
        }
?>
