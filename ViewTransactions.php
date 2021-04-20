<!DOCTYPE html>
<html>
<head>
<title>All Transactions</title>
<link rel="stylesheet" href="styles.css" type="text/css">
<style>
    #navBar
{   
    height:40px;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    background-color: rgb(25, 25, 26);
    align-items: center;
   
}
.navContainer{   
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    width: 50%;
    margin-right: 5%;
}
.navItem{
    font-size: 20px;
    font-family:  'Times New Roman', Times, serif;
    color: #fff;
    margin: 3px;
    text-decoration: none;
}
</style>  
</head>
<body class="vT">
<div id="navBar">
        <div class="navContainer">    
            <a href="viewCustomers.php" class="navItem">View Customers</a>
            <a href="index.html" class="navItem">Home</a>
            <a href="ViewTransactions.php" class="navItem" style="background-color: green">Transaction History</a>
        </div>
    </div>
<table>
<tr style="background-color: red">
<th>Sender Name</th>
<th>Sender A/c No.</th>
<th>Recipient Name</th>
<th>Recipient A/c No.</th>
<th>Amount</th>
<th>Date & Time</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "bank");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM transfer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<form method ='post' action = 'OneCustomer.php'>";
    echo "<td>" . $row["sender_name"]. "</td><td>" . $row["sender_accno"] . "</td><td>" . $row["receiver_name"]. "</td><td>" . $row["receiver_accno"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["Date"] . "</td>";
    echo "</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>