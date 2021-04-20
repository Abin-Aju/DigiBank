<?php
    $con = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

<body class="vC">
    <div id="navBar">
        <div class="navContainer">    
            <a href="viewCustomers.php" class="navItem" style="background-color: green">View Customers</a>
            <a href="index.html" class="navItem">Home</a>
            <a href="ViewTransactions.php" class="navItem">Transaction History</a>
        </div>
    </div>
 <!-- table starts-->
<div class="">

    
    <table>
    <thead>
        <tr style="background-color: red">
            <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
            <th>&nbsp</th>
        </tr>
    </thead>
    

          <?php
        $sql = "SELECT * FROM `customer`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'OneCustomer.php'>";
            echo "<td>". $row['cid'] . "</td>
            <td>". $row['cname'] . "</td>
            <td>". $row['emailid'] . "</td>
            <td>". $row['balance'] . "</td>";
           echo "<td> <a href='OneCustomer.php'><button type='submit' name='user'  id='users1' value= '{$row['cname']}' class= 'aaa'>View Customer</button></a></td>";
            echo "</form>";
           echo  "</tr>";
        }
        ?>
          
    </table>
    
</div>
<br><br>

<!-- table ends-->

</body>
</html>