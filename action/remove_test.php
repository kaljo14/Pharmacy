<?php
  include_once 'include/conect.php';
$client_id= mysqli_real_escape_string($conn,$_POST['client_id']);
$sql = "DELETE FROM Client WHERE client_id=$client_id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>

