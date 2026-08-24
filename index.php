<?php
include('C:\xampp\htdocs\LOGIN\config.php');

if(isset($_POST["enter"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $firstname=$_POST["FirstName"];
    $lastname=$_POST["LastName"];
    $origin=$_POST["origin"];

    $query="INSERT INTO `admin`(`id`, `UserName`, `Password`, `FirstName`, `LastName`, `Country`) 
    VALUES ('','$username','$password','$firstname','$lastname','$origin') ";
    $result=mysqli_query($conn,$query);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Registration Form</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" >
        
        <h3>Register Here</h3>
        
        <label for="username">Username</label>
        <input required type="text" name ="username" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input required type="password" name ="password" placeholder="Password" id="password">

        <label for="First Name">First Name</label>
        <input required type="text" name ="FirstName" placeholder="First Name" id="First Name">

        <label for="Last Name">Last Name</label>
        <input required type="text" name ="LastName" placeholder="Last Name" id="Last Name">
          
        <label for="country">Country</label>
        <input required type="text"  name ="origin" placeholder="Place Of Origin" id="Origin">
    
         
        <button type= "submit" name ="enter">Log In</button>
    
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>
</html>