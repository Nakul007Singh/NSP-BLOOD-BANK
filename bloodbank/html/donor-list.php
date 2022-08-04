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
    <title>Donor List</title>
    <style>
    *{
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
    margin-left: 20%;
    background-color: rgb(221, 94, 94);
    margin-top: 150px;
}


td
{
   width: 200px;
   height: 60px;

}
.circle
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #D5AAAA;
    clip-path: circle(600px at right);
}
</style>
</head>
<body>
        
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

    <td><center><b>First Name</b></center></td>    
    <td><center><b>Last Name</b></center></td>   
    <td><center><b>Address</b></center></td>   
    <td><center><b>Contact</b></center></td>   
    <td><center><b>Gender</b></center></td>   
    <td><center><b>Blood Group</b></center></td>   

</tr>
<?php
$q=$db->query("SELECT * FROM donor_registration");
while($r1=$q->fetch(PDO::FETCH_OBJ))
{
    ?>
<tr>

<td><center><?= $r1->fname; ?></center></td>
<td><center><?= $r1->lname; ?></center></td>
<td><center><?= $r1->address; ?></center></td>
<td><center><?= $r1->contact; ?></center></td>
<td><center><?= $r1->gender; ?></center></td>
<td><center><?= $r1->blood; ?></center></td>

</tr>

    <?php
}
?>


</table>
              
 </div>

            </body>
            </html>