<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"bank");
if(!$con){
    die("Connection failed");
} 


$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST["reciever"];
$amount=$_POST["amount"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body class="tB">
  <script src="jquery.min.js" type="text/javascript"></script>
	<script src="popper.min.js" type="text/javascript"></script>
	<script src="sweetalert.min.js" type="text/javascript"></script> 
</body>
</html>
<?php

$sql = "SELECT balance FROM customer WHERE cname='$sender'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 if($amount>$row["balance"] or $row["balance"]-$amount<100){
    echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'viewcustomers.php'; });;</script>";
   
 }
else{
    $sql = "UPDATE `customer` SET balance=(balance-$amount) WHERE cname='$sender'";
    

if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 
  }
} else {
  echo "0 results";
} 

if($flag==true){
$sql = "UPDATE `customer` SET balance=(balance+$amount) WHERE cname='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error updating record: " . $con->error;
}
}
if($flag==true){
    $sql = "SELECT * from customer where cname='$sender'";
    $result = $con-> query($sql);
    while($row = $result->fetch_assoc())
     {
         $sender_ac=$row['accno'];
 }
  $sql = "SELECT * from customer where cname='$receiver'";
    $result = $con-> query($sql);
  while($row = $result->fetch_assoc())
     {
         $receiver_ac=$row['accno'];
 }    
$sql = "INSERT INTO `transfer`(sender_name,sender_accno,receiver_name,receiver_accno, amount) VALUES ('$sender','$sender_ac','$receiver','$receiver_ac','$amount')";
if ($con->query($sql) === TRUE) {
} else 
{
  echo "Error updating record: " . $con->error;
}
}
}
if($flag==true){
echo "<script>swal('Transfered!', 'Transaction Successfull','success').then(function() { window. location = 'viewcustomers.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>