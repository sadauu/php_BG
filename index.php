<?php
 
 include('connection.php');
  // $firstname = "ahmed";
  // $lastname = "maiyaki";
  // $phoneNumber = "+2348111904455";
  // $email = "ahmed.maiyaki@gmail.com";
  // $address = "asso villa";
  // $password = md5("letmein");
  // $name = $firstname. ' ' .   $lastname;



  // $insertQuery = "INSERT INTO users 
  //             (name, email, password, address, phone_number) 
  //             VALUES ('$name','$email','$password','$address','$phoneNumber')";
  // $excecuteQuery = mysqli_query($connection, $insertQuery);
  // if ($excecuteQuery) {
  //     $excecutestatus = 'Record Inserted Successfully';
  // }else{
  //     $excecutestatus = 'Error While Inserting Record';
  // }

  if(isset($_POST['add_record'])){
    $firstname = mysqli_escape_string($connection, $_POST['firstname']);
    $lastname = mysqli_escape_string($connection, $_POST['lastname']);
    $email = mysqli_escape_string($connection, $_POST['email']);
    $password = mysqli_escape_string($connection, $_POST['password']);
    $confirmPassword = mysqli_escape_string($connection, $_POST['confirmPassword']);
    $phoneNumber = mysqli_escape_string($connection, $_POST['phoneNumber']);
    $address = mysqli_escape_string($connection, $_POST['address']);

    $error = null;
    $success = null;
    $pass = null;

    
    if($password != $confirmPassword){
      $error = 'password mismatch';
    }else{
      $pass = md5($password);
    }
  }

  
  //   $insertQuery = "INSERT INTO users (firstname, lastname, email, phoneNumber, password, address) VALUES ('$firstname', $lastname,'$email','$phoneNumber','$pass', '$address')";
  
  //   $executeQuery = mysqli_query($connection, $insertQuery);
  //   if ($executeQuery) {
  //     $success = 'Record Inserted Successfully';
  //   }else{
  //     $error = 'Error While Inserting Record';
  //   }

  // }
  $insertQuery = "INSERT INTO users (firstname, lastname, email, phoneNumber, password, address) VALUES ('$firstname', '$lastname', '$email', '$phoneNumber', '$pass', '$address')";

$executeQuery = mysqli_query($connection, $insertQuery);

if ($executeQuery) {
  $success = 'Record Inserted Successfully';
} else {
  $error = 'Error While Inserting Record: ' . mysqli_error($connection);
}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
        .container{
        width: 100%;
        height: 100vh;
        font-family: 'poppins', sans-serif;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        
    }
    .card{
        width: 350px;
        height: 600px;
        box-shadow: 0 0 40px 10px rgba(0, 0, 0,0.26);
        perspective: 1000px;
        transition: transform 0.1s;
        
        
    }
    .inner-box{
        position: relative;
        width: 100%;
        height: 90%;
        /*animated color background*/
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px 0;
        background: linear-gradient(#00bcd4, #e91e63, #3f51b5, #00bcd4);
        background-size: 100% 600%;
        background-position: 0 40%;
        transform-style: preserve-3d;
        
    }
    .inner-box:hover{
        animation: backcolor 20s linear infinite reverse;
    }
    @keyframes backcolor {
        0%{
            background-position: 0 0%;
        }
        100%{
            background-position: 0 400%;
        }
    }
     .card-back{
        position: absolute;
        width: 100%;
        height: 150%;
        background-position: center;
        background-size: cover;
        padding: 50px;
        box-sizing: border-box;
        padding-top: 50%;
        
        
    }
    .back{
        width: 100%;
        height: 100%;
        background-image: linear-gradient( rbga(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8)) url(photo.png),
        
        
    }
  
    
    .card h2{
        font-weight: normal;
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }
    .input-box{
        width: 100%;
        background: transparent;
        border: 1px solid #fff;
        margin: 10px 0;
        height: 32px;
        border-radius: 20px;
        padding: 0 10px;
        box-sizing: border-box;
        outline: none;
        text-align: center;
        color: #fff;
    }
    ::placeholder{
        color: #fff;
        font-size: 12px;
    }
    button{
        width: 100%;
        background: transparent;
        border: 1px solid #fff;
        margin: 35px 0 5px;
        height: 32px;
        font-size: 12px;
        border-radius: 20px;
        padding: 0 10px;
        box-sizing: border-box;
        outline: none;
        color: #fff;
        cursor: pointer;
        
    }
    .submit-btn{
        position: relative;
    }
    .submit-btn::after{
        /*the below code is a icon \27*/
        content: '\27a4';
        color: #333;
        line-height: 32px;
        font-size: 17px;
        height: 32px;
        width: 32px;
        border-radius: 50%;
        background: #fff;
        position: absolute;
        right: -1px;
        top: -1px;
    }
    span{
        font-size: 13px;
        margin-left: 10px;
    }
    .card .btn{
        margin-top: 50px;
    }
    .card a{
        color: #fff;
        text-decoration: none;
        display: block;
        text-align: center;
        font-size: 13px;
        margin-top: 8px; 
    }
  </style>
</head>
<body>
  <hr>
  <?php if(!empty($error)){ ?>
  <p style = "background-color: red; color: #fff; padding: 20px;"><?= $error ?></p>
  <?php } ?>
  <?php if(!empty($success)){ ?>
  <p style = "background-color: green; color: #fff; padding: 20px;"><?= $success ?></p>
  <?php } ?>
  <hr>
  <section>
    <div class="container">
      <div class="card">
        <div class="inner-box" id="card">
          <div class="card-back">
            <h2>REGISTER</h2>
            <form action="index.php" method="POST">

              <input type="text" class="input-box" name="firstname" placeholder="Enter Your First_Name" required>

              <input type="text" class="input-box" name="lastname" placeholder="Enter Your Last_Name" required>

              <input type="email" class="input-box" name="email" placeholder="Enter Your Email_Address" required>

              <input type="text" class="input-box" name="phoneNumber" placeholder="phone_Number" required>

              <input type="text" class="input-box" name="address" placeholder="address" required>

              <input type="password" class="input-box" name="password" placeholder="Password" required>

              <input type="password" class=" input-box" name="confirmPassword" placeholder="confirm_password" required>

              <button type="submit" class="submit-btn" name="add_record">submit</button>

            </form>
          </div>
        </div>     
      </div>
    </div>
  </section> 
</body>
</html>
