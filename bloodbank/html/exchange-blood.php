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
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exchange Blood Group</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <section>
        <div class="circle"></div>
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
            <div class="text">
                <ul>
                    <li>REGISTRATION</li>
                    <br><br><br>
                </ul>
            </div>
            <form action="" method="post">
            <p class="line1"></p>
            <div class="container">
                <label >First Name</label>
                <input type="text"  name="fname" placeholder="Your name.." required>
            
                <label >Last Name</label>
                <input type="text"  name="lname" placeholder="Your last name.." required>
            
                <label >Address</label>
                <input type="text"  name="address" placeholder="Your current address.." required>
            
                 <label >Contact</label>
                <input type="text"  name="contact" placeholder="Your mobile number.." required>
            
                 <label >Gender</label><select name="gender">
                    <option value="volvo">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label>Exchange Blood Group</label>
                <select name="blood">
                    <option value="volvo">Select</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select> 

                <label>Blood Group</label>
                <select name="exblood">
                    <option value="volvo">Select</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                 </select>
                 
                <input type="submit" name="sub" value="Submit">
              </form>
              <?php
              if(isset($_POST['sub']))
              {
                  $fname=$_POST['fname'];
                  $lname=$_POST['lname'];
                  $address=$_POST['address'];
                  $contact=$_POST['contact'];
                  $gender=$_POST['gender'];
                  $blood=$_POST['blood'];
                  $exblood=$_POST['exblood'];


                  $q=$db->prepare("INSERT INTO exchange_b (fname,lname,address,contact,gender,blood,exblood) VALUES(:fname,:lname,:address,:contact,:gender,:blood,:exblood)");
                  $q->bindValue('fname',$fname);
                  $q->bindValue('lname',$lname);
                  $q->bindValue('address',$address);
                  $q->bindValue('contact',$contact);
                  $q->bindValue('gender',$gender);
                  $q->bindValue('blood',$blood);
                  $q->bindValue('exblood',$exblood);


                  $q2="SELECT * FROM donor_registration Where blood = '$blood'";
                  $st=$db->query($q2);
                  $num_row=$st->fetch();
                  $id=$num_row['id'];
                  $bl=$num_row['blood'];
                  $fn=$num_row['fname'];
                  $ln=$num_row['lname'];
                  $cont=$num_row['contact'];

                  $q1="INSERT INTO out_stock_b(blood,fname,lname,contact) VALUES(?,?,?,?)";
                  $st1=$db->prepare($q1);
                  $st1->execute([$bl,$fn,$ln,$cont]);


                  $delete_q="DELETE from donor_registration where id='$id'";
                  $st=$db->prepare($delete_q);
                  $st->execute();



                  

                  
                  if($q->execute())
                  {
                      echo "<script>alert('Exchange Request Successful')</script>";
                  }
                  else
                  {
                    echo "<script>alert('Exchange Request Failed')</script>";
                  }



                  
              }
              ?>
              
 </div>
    </section>
            </body>
            </html>