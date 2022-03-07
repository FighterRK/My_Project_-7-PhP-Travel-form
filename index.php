<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
 
    if(!$con){

        die("Connection to this database failed due to " .mysqli_connect_error());

    }

    $name = $_POST['name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $desc  = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `Age`, `Gender`, `email`, `number`, `desc`, `dt`)
            VALUES ('$name', '$Age', '$Gender', '$email', '$number', '$desc', current_timestamp());";


    
    

if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }

$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

</head>
<body>
    <img src="bg.jpg" alt="books" class="bg" >
    <div class="container">
        <h1>Welcome To My Travel Form</h1>
        <p>Enter Your Details To Confirm Your Participation</p>
        <form  action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="Age" id="Age" placeholder="Enter Your Age">
            <input type="text" name="Gender" id="Gender" placeholder="Gender">
            <input type="text" name="email" id="email" placeholder=" Enter Your Email">
            <input type="phone" name="number" id="number" placeholder="Enter Your Mobile Number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Additional Details"></textarea>
            <button type="submit" >Submit</button>
          


        </form>
    </div>
</body>
<script src="index.js"></script>
</html>