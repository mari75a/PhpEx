<?php
    echo "Hello ,World!";
    $fruits = array('apple','orange','banana');
    $numbers= range(1,10);
    foreach($fruits as $fruit){
        echo $fruit."<br> ";
    }

    foreach($numbers as $number){
        echo $number."<br> ";

    }

    $associativeArray =array(
        'name' => 'Sangeeth',
        'age' => 25,
        'city' => 'Colombo'
    );

    foreach($associativeArray as $key => $value){
        echo $key . ": " . $value . " <br>";
    }
    echo $associativeArray['name'] . "<br>";
  
    echo count($associativeArray);

?>