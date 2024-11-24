<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>this is a function</h3>
    <p>this is another change</p>
    <p>login </p>
    <?php
// include('headerr.php'); 
require('headerrr.php');



              //2
function factorial($number) {

    // base case
       // 1
    if ($number < 3) {
         return 1;
     } else {
                 // 2  *            //1 
         return ($number * factorial($number - 1)); 
    } 			
} 
echo factorial(4);




    // echo $age;


    ?>
</body>

</html>