<?php
include 'conect.php';
if (isset($_POST['submit'])){

        include_once 'conect.php';
        //echo is for check 
        //echo "yes";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    //Check if inputs are empty 
    if (empty($first_name) ||empty($last_name) || empty($address) || empty($phone)){
        header("Location: ../customers.php?signup=empty");
        exit();
    }
    else{
    // Check if input is characters 
        if (!preg_match("/^[a-zA-Z]*$/",$first_name) || !preg_match("/^[a-zA-Z]*$/",$last_name)){
            header("Location: ../customers.php?signup=char&address=$address&phone=$phone");
            exit();
        }
        else{     
          
                                //check if name already exists 
            $sql ="SELECT * FROM Client WHERE first_name='$first_name' AND last_name='$last_name' AND address='$address';";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result))
                    {
                    echo "Customer already exist in the database:";
                    echo $row["client_id"]." - - ";
                    echo $row["first_name"]." - - ";       
                    echo $row["address"]." - - ";
                    echo $row["phone_number"]." - - "."<br>";
                    }
                }
                else {
                //adds emelemt to the database 
                $sql =" INSERT INTO Client (first_name, last_name,address,phone_number)
                VALUES('$first_name','$last_name','$address','$phone');";
                mysqli_query($conn,$sql);
                

                header("Location: ../customers.php?signup=success");
            exit();}
        }

    }
    

    }
    else{
        header("Location: ../customers.php?signup=notUsed");
        }
?>


