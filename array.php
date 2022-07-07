<?php
    // numerical array
    // method1
    $a[0] = 9;
    $a[1] = 12.2;
    $a[2] = 'P';
    $a[3] = 'Isha';

    // method2 --> dynamic_array / blank_array
    $a[] = 100;
    $a[] = 9.12;
    $a[] = 'Parmar';

    //method3 
    $a = array(10,20,30,"C","C++","PHP");

    // print array value
    // echo $a[0];
    // echo $a[3];

    //printing array value using for loop
    for($i=0;$i<count($a);$i++)
    {
        echo $a[$i].'<br>';
    }

    echo "<hr>";

    // inbuilt functions
    echo "<pre>";
    print_r($a);   //display array $a as associative array with key (index) and value pair
    var_dump($a);  // ass array with index as key and type(val) as value
    var_export($a); //ass array comma separated
?>
