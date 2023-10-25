
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <style>
        .container{
        width: 100%;
        height: 100vh;
        font-family: 'poppins', sans-serif;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url(photo.jpeg);
        }
        .input{
        width: 30%;
        background: transparent;
        border: 1px solid #fff;
        margin: 10px 0;
        height: 32px;
        border-radius: 5px;
        padding: 0 10px;
        box-sizing: border-box;
        outline: none;
        text-align: center;
        color: #fff;
        }
        button{
        width: 50%;
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
        margin-left: 50px;
        
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
        .submit_btn:hover{
            color: red;
        }
         .php{
            
            color: #fff;
        
        } 
    </style>

</head>
<body>
    <div class="container">
        <div>
            <form name="bmi" method="POST" action="assignment.php">
            Mass in kilogram (kg):
            <input type="text" name="mass" class="input" id="mass"  maxlength="3">
            <br> 

            Height in meter (m):
            <input type="text" name="height" class="input" id="height"  maxlength="3">
            <br>

            <button type="submit" name="submit" class="submit-btn">submit</button>
            <br>

            <br>
            <div class="php">
            <?php
                if(isset($_POST["submit"])){
                $mass = floatval($_POST['mass']);
                    $height = floatval($_POST['height']);
                }

                function bmi($mass, $height){
                    $bmi = $mass/($height*$height);
                    return $bmi;
                }

                $bmi =number_format(bmi($mass, $height), 2);
                    
                $output = null;

                if($bmi <= 18.5){

                    $output = "Under Weight";

                }elseif ($bmi > 18.5 AND $bmi >= 24.9) {

                    $output = "Normal weight";

                }elseif ($bmi > 24.9 AND $bmi <= 29.9) {

                    $output = "Over Weight";

                }elseif ($bmi >= 30.0) {

                    $output = "OBESE";
                }

                echo "Your BMI value is " . $bmi .  " and you are : " . $output ;
            ?>
            </div>
        </form>
        </div>
        
    </div>
</body>
</html>