<?php
 
  $dbHost = "localhost";
  $dbUser = "root";
  $dbpassword = "password";
  $dbName = "ahmed";

    //$connection = mysqli_connect($dbHost, $dbUsername, $dbpassword, $dbName);

  $firstname = "AHMED";
  $lastnamed= "maiyaki";
  $phoneNumber = "+2348100625087";
  $address = "ässo villa";
  $password = "letmein";


  /*$insertQuery = "INSERT INTO users
                  (firstname, email, password, address, phone_number)
                  VALUES ('$firstname', '$email', ''md5($password)', '$address', '$phone_number')";
  $excecuteQuery = mysql_query($connection, $insertQuery);
  if ($excecuteQuery){
    $excecutestatus = 'Record Inserted Successfully';
  }else{
    $excecutestatus = 'Error While Inserting Record';
  }
  $connectionstatus = $connection
  ?"Database Connection Successful"
  :"Database Connection falied"*/

  if (isset($_POST['add_record'])){
    $firstname = $_POSt['first']
  }

?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWE 205</title>
</head>
<body>
    
    <h1 style="color: yellow; backgroud-colour: black; padding: 20px;">welcome! <?=  $name ?></h1>
    <P>you will like the folloing names and cars</P>
        <ul>
        //<?php foreach($cars as $car){?>
        //<li><?= $car ?></li>
        //<?php }?>
        //<P><?php if($car == "benz"){?>
         //   your favorite car is <?= $car?>
        </P>
        //<?php }?>
        
        </ul>
    

</body>-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="POST" >
          <p>
          firstname: <input type="text" name="fisrt_name" id="" placehloder="enter your first name">
          </p>
          <p>
          lastname: <input type="text" name="last_name" id="" placehloder="enter your last name">
          </p>
          <p>
          emali: <input type="email" name="email" id="" placehloder="enter your email">
          </p>
          <p>
          password: <input type="password" name="password" id="" placehloder="enter your password">
          </p>
          
          <p>
          address: <input type="address" name="address" id="" placehloder="enter your address">
          </p>
          <p>
          phone number: <input type="text" name="phone_number" id="" placehloder="enter your phone number">
          </p>
          <p>
            <button type="submit" name="add_record">submit</button>
          </p>


  </form>

</body>
</html>

