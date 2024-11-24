<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
    <style>
        .uni{
            border: 2px solid brown;
            padding: 20px;
            background-color: yellowgreen;
        }
    </style>

</head>

<body>

    <h2>Array in PHP</h2>
    <?php
    //   // PHP Indexed array / numeric arrays
    // $names = array("Kaneez", "Shazia", "Noreen", "Fiza", "Shahida", "Ali", "Hassan");
    // $size = count($names);  /// 7
    //                   //sha
    // foreach($names as $val){
    //     echo $val , "</br>" ;
    // }

    // /* PHP Associative Array */
                    
    // $person = array(
    //     "name"=>"John", 
    //     "age"=>40,
    //     "city"=>"Skardu",
    //     "Country"=> "Pakistan"
    
    // );

    // // echo "the user name is ".$person['name'] . "and his age is ".$person['age'];
  

    // $name = "ali";
    // var_dump($person);


    /* PHP Multi Dimensional Arrays */

    // $students = array(array('name'=>"john", 'age'=>40,'city'=>'skd'),array('name'=>'Kamal','age'=>50,'city'=>'Karachi' ));


    // foreach($students as $std){

    //     foreach($std as $key=> $val ){
    //         echo $key , $val,"</br>";
    //     }

    // }
 

    // $names = array( array(1,2,3), array("a","b","c"));
      
    // for($i=0;$i<2;$i++){
   
    //     for($j=0;$j<3;$j++){
           
    //         echo $names[$i][$j];
    //     }
  
    // }

    // $names = array('a','b','c');
    // var_dump($names);
    // $names[2] = "Qa";
    // var_dump($names)


    // $colors = array("red","Blue",'red');

    // // $merged_array = array_merge($names,$colors);

    // $capital = array(
    //     "Pakistan" => "Islamabad",
    //     "india" => "Delhi"
    // );

                             //5
    function increment_value(&$y){ 
        $y++;  // 6
        echo $y;  //6
     } 
    $x = 5;
             // 5
    increment_value($x); 
    echo "</br>";
    echo $x; 
   
    
   





         














 
  


?>


    
</body>

</html>