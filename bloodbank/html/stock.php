<?php
include('connection.php');
session_start();
?> 
<?php
    $loginUser=$_SESSION['loginUser'];
    if(!$loginUser)
    {
        header("Location:donate.php");
    }
    ?>
            <?php
        if(isset($_POST['sub']))
        {
         $loginUser=$_POST['loginUser'];
         $loginPassword=$_POST['loginPassword'];
         $q=$db->prepare("SELECT * FROM admin where uname='$loginUser' AND pass='$loginPassword'");
         $q->execute();
         $res=$q->fetchAll(PDO::FETCH_OBJ);
         if($res)
         {
           $_SESSION['loginUser']=$loginUser;


           header("Location:admin-home.php");
         }
         else
         {
           echo "<script>alert('Wrong User')</script>";
         }
        }
        ?>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Stock List</title>
 <style> *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" , sans-serif;
}

header
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
} 

header .logo
{
   position: relative;
   max-width: 150px; 
}

header ul 
{
    position: relative;
    display: flex;
}

header ul li
{
    list-style: none;

}
header ul li a
{
    display: inline-block;
    color: #333;
    font-weight: 400;
    margin-left: 40px;
    text-decoration: none;
}

table 
{
    border: 1px solid black;
    border-radius : 20px;
    margin-left: 40%;
    background-color: rgb(221, 94, 94);
    margin-top: 250px;
}


td
{
   width: 200px;
   height: 60px;

}
</style>  
</head>
<body>

        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
        <header> 
        <a href="../html/admin-home.php"><img src="../images/logo.png" class="logo"></a>
        <ul>
            <li><a href="../html/admin-home.php">Home</a></li>
            <li><a href="../html/donor-list.php">Donor List</a></li>
            <li><a href="../html/stock.php">Blood Stock</a></li>
            <li><a href="../html/out-stock.php">Out of Stock</a></li>
            <li><a href="../html/exchange-blood.php">Exchange Blood Reg</a></li>
            <li><a href="../html/exchange-blist.php">Exchange Blood List</a></li>
            <li><a href="../html/logout.php">Logout</a></li>
        </ul>
     </header> 
<table>
<tr>

    <td><center><b>Name</b></center></td>    
    <td><center><b>Quantity</b></center></td>   


</tr>
<tr>

<td><center>A+</center></td>
<td><center>
<?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='A+'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>A-</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='A-'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>B+</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='B+'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>B-</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='B-'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>AB+</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='AB+'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>AB-</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='AB-'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>O+</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='O+'");
echo $row=$q->rowcount();
?></center></td>

</tr>
<tr>

<td><center>O-</center></td>
<td><center><?php
$q=$db->query("SELECT * FROM donor_registration WHERE blood='O-'");
echo $row=$q->rowcount();
?></center></td>

</tr>

</table>
              
 </div>

            </body>
            </html>