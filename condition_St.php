<html>
<?php
    //num is even or odd
    $num = 5;
    if($num%2==0){
        echo "number is even";
    }

    else{
        echo "number is odd";
    }
     
    echo "<br/><br/><br/>";
    //pattern
    for($i=0;$i<$num;$i++){
        for($j=$i;$j<$num;$j++){
            echo "* ";
        }
        echo "<br/>";
    }

    echo "<br/><br/><br/>";


    //switch statement
  
    $ch = 'C';

    switch($ch){
        case 'A': echo "Character is 'A'";
                  break;
        case 'B': echo "Character is 'B'";
                  break;
        default : echo "It is niether A nor B";
    }
?>
  </html>