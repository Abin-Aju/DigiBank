<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"bank");
if(!$con){
    die("Connection failed");

}
$_SESSION['user']=$_POST['user'];
$_SESSION['sender']=$_SESSION['user'];
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
<body class="oC">
<div id="navBar">
        <div class="navContainer">    
            <a href="viewCustomers.php" class="navItem">View Customers</a>
            <a href="index.html" class="navItem">Home</a>
            <a href="ViewTransactions.php" class="navItem">Transaction History</a>
        </div>
    </div>
  <div class="bcontainer">

    <H2><ins>Customer Details</ins></H2>
    <br><br>
        <?php
        if (isset($_SESSION['user']))
        {
          $user=$_SESSION['user'];
          $result=mysqli_query($con,"SELECT * FROM customer WHERE cname='$user'");
          while($row=mysqli_fetch_array($result))
          {
            echo "<p><b>User ID:</b> ".$row['cid']."</p><br>";
            echo "<p name='sender'><b>Name : ".$row['cname']."</p><br>";
            echo "<p><b>Email ID</b> : ".$row['emailid']."</p><br>";
            echo "<p><b>A/C No</b> : ".$row['accno']."</p><br>";
            echo "<p><b class='font-weight-bold'>Balance</b>: <b>&#8377;</b> " .$row['balance']."</p>";
          }         
        }
      ?>
                    <form action="transfer.php" method="POST">
                      <br>
                    <b style="font-size:1.2em;">Sender</b> : <span style="font-size:1.2em;"><input id="myinput" name="sender" disabled type="text" value='<?php echo "$user";?>'></input></span>
                        <br><br>
                        <b style="font-size:1.2em;">Select Reciever:</b>
                <select name="reciever" id="dropdown" required>
                    <option>Select Reciever</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "bank");
                $res = mysqli_query($db, "SELECT * FROM customer WHERE cname!='$user'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['cname']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="amount" type="number" min="100" required >
                        
                        <button id="transfer"  name="transfer" class="transferbutton" ; ><b>Transfer</b></button>
                        </form>
                        </div>
</body>
</html>