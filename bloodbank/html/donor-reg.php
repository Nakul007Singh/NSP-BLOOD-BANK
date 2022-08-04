<?php
include('connection.php');
session_start();
?> 
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donor Registration</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <section>
        <div class="circle"></div>
        <header> 
        <a href="../html/admin-home.php"><img src="../images/logo.png" class="logo"></a>
        <ul>
        <ul>
            <li><a href="../html/index.html">Home</a></li>
            <li><a href="../html/about us.html">About Us</a></li>
            <li><a href="../html/contact us.html">Contact Us</a></li>
            <li><a href="../html/donor-reg.php">Register</a></li>
            <li><a href="../html/donate.php">Donate</a></li>
        </ul>
        </ul>
     </header> 
            <div class="text">
                <ul>
                    <li>REGISTRATION </li>
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
            
                 <label>Blood Group</label>
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
                  $q=$db->prepare("INSERT INTO donor_registration (fname,lname,address,contact,gender,blood) VALUES(:fname,:lname,:address,:contact,:gender,:blood)");
                  $q->bindValue('fname',$fname);
                  $q->bindValue('lname',$lname);
                  $q->bindValue('address',$address);
                  $q->bindValue('contact',$contact);
                  $q->bindValue('gender',$gender);
                  $q->bindValue('blood',$blood);
                  if($q->execute())
                  {
                      echo "<script>alert('Donor Registration Successfull')</script>";
                  }
                  else
                  {
                    echo "<script>alert('Donor Registration Failed')</script>";
                  }
              }
              ?>
              
 </div>
    </section>
            </body>
            </html>