<?php
  $name = "abudlmalik sakariyahu";
        //strings in php
  //echo strlen($name);
  //echo strrev($name);
  //echo str_word_count($name);
 //echo str_replace('sakariyahu','sadiq',$name)

 $age = 20;
 $bmi = 12.5;
 $male = true;
 $cars = ["ahmed", "adamu", "äliyu", "benz"];
 var_dump($age);
 /* class user{
    function user(){
        $this->name = "ahmed";
    }
  }*/

  function sum(){
    $x = 30;
    $y = 7;
    $sum = $x + $y;

    return $sum;
  }
  $addtion = sum();
  /*$name = "(a,b)";
  return "a,b";
  $name = "ahmed,adam";*/

?>
<!DOCTYPE html>
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
        <?php foreach($cars as $car){?>
        <li><?= $car ?></li>
        <P><?php if($car == "benz"){?>
            your favorite car is <?= $car?>
        </P>
        <?php }?>
        
        </ul>
    

</body>
</html>