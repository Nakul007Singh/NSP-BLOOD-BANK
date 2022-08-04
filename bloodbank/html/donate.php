<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/donate.css">
</head>
<body> 
    <section>
        <div class="circle"></div>
     <header> 
        <a href="../html/index.html"><img src="../images/logo.png" class="logo"></a>
        <ul>
            <li><a href="../html/index.html">Home</a></li>
            <li><a href="../html/about us.html">About Us</a></li>
            <li><a href="../html/contact us.html">Contact Us</a></li>
            <li><a href="../html/donor-reg.php">Register</a></li>
            <li><a href="../html/donate.php">Login</a></li>
        </ul>
     </header> 
     <div class="content">
         <div class="textbox">
            
         </div> 
     </div> 
     <div class="login-wrapper">
        <form action="" class="form" method="post">
          <img src="../images/avatar.png" alt="">
          <h2>Login</h2>
          <div class="input-group">
            <input type="text" name="loginUser" id="loginUser" required>
            <label for="loginUser">User Name</label>
          </div>
          <div class="input-group">
            <input type="password" name="loginPassword" id="loginPassword" required>
            <label for="loginPassword">Password</label>
          </div>
          <input type="submit" name="sub" value="Login" class="submit-btn">
          <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
        </form>
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
    
        <div id="forgot-pw">
          <form action="" class="form">
            <a href="#" class="close">&times;</a>
            <h2>Reset Password</h2>
            <div class="input-group">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>
            <input type="submit" value="Submit" class="submit-btn">
          </form>
      
        </div>
      </div>
    </section>
</body>
</html>