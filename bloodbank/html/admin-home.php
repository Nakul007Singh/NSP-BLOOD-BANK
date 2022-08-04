<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/main.css">
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
     <?php
    $loginUser=$_SESSION['loginUser'];
    if(!$loginUser)
    {
    header("Location:donate.php");
    }
?>
     <div class="content">
         <div class="textbox">
              <h2><span>Admin Login :</span></h2>
             <h2>One Nation<br><span>One Platform</span></h2>
             <p> The human body contains five liters of blood, which is made of several useful components </p> 
             <p> i.e. Whole blood, Platelet, and Plasma.</p>
             <p> Each type of component has several medical uses and can be used for different medical treatments.</p>
             <p> your blood donation determines the best donation for you to make.</p>
             <a href="#">Learn More</a>
         </div> 
             <div class="imgBox">
                 <img src="../images/thumb1.png" class="bloodbank">
             </div>   
     </div> 
     <ul class="thumb">
         <li><img src="../images/thumb1.png" onclick="imgChange('../images/img1.png');changeCircleColor('#EA9A9A')"></li>
         <li><img src="../images/thumb2.png" onclick="imgChange('../images/img2.png');changeCircleColor('#F48080')"></li>
         <li><img src="../images/thumb3.png" onclick="imgChange('../images/img3.png');changeCircleColor('#EA6666')"></li>
     </ul>   
     <ul class="sci">  
         <li><a href="#"><img src="../images/facebook.png"></a></li>
         <li><a href="#"><img src="../images/twitter.png"></a></li>
         <li><a href="#"><img src="../images/instagram.png"></a></li>
     </ul>
    </section>
  <script type="text/javascript">
      function imgChange(anything)
      {
      document.querySelector('.bloodbank').scr = anything;
      }
      function changeCircleColor(color)
      {
          const circle = document.querySelector('.circle')
          circle.style.background = color;
      }
  </script>
</body>  
</html> 