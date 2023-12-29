<?php
$inserted = false;
if(isset($_POST['name'])){
// name set hai tabhi connection banega otherwise nothing will be done -> user must enter name to be registered for the fest
      $server = "localhost";
      $username = "root";
      $password = "";

      $con = mysqli_connect($server,$username,$password);
      if(!$con){
         die("Failed to connect with the Database" . mysqli_connect_error());
      }
      //  echo "Successfully connected to the database";
      /* --- connection with database made --- */



      /* now entering the mysql query into our database */
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $desc = $_POST['desc'];

      $sql = "INSERT INTO `festdetails`.`entries` (`Name`, `Age`, `Gender`, `Email`, `Phone No`, `Other`, `date-time`) 
      VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
      //echo $sql; 

      if($con->query($sql) == true){
        // echo "successfully submitted";
        $inserted = true;
      }
      else{
         echo "Error $sql <br> $con->error";
      }   
      //closing the connection
      $con->close();
}

?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to techNIEks</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="night.jpg" alt="bg-image" id="bg">
    <div class="nav">
        <div class="logo"><img src="tk-logo.png" alt=""></div>
        <ul><b>
            <li><a href="https://leetcode.com/salvaatore/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Schedule</a></li>
            <li><a href="#">Venue</a></li>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="search here">
            </div>
            </b>
        </ul>
     </div>

    <div class="container">
        <h1>techNIEks Registration Form</h1>
        <p class="tagline">Be a part of this amazing journey</p> 
        <?php
            if($inserted == true){
               echo "<p class = 'display-thanks'>Thanks for registering !!!</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Full Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter anyother info..."></textarea>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js"></script>

    
</body>
</html> -->