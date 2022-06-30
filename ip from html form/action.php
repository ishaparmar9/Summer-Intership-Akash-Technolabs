<?php
    $name = $_POST['name'];
    $num = $_POST['num'];

    echo "Welcome $name<br/>";

    echo "<table border=''>";
    for($i=1;$i<=$num;$i++)
    {
        if($i%2==0){
            echo "<tr style='color:red'><td>";
            echo "Num $i";
            echo "</td></tr>";
        }
        else{
            echo "<tr style='color:violet'><td>";
            echo "Num $i";
            echo "</td></tr>";
        }
    }
    echo "</table>";
?>