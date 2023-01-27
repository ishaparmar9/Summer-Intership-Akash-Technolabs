<html>
<body>
<?php
   echo "Details entered by you are as follows...<br><br><br>";
   echo "<table border='|' style='border-collapse: collapse'>";
   echo "<tr>";
   echo "<th>First Name</th>";
   echo "<td>".$_POST["fn"]."</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Last Name</th>";
   echo "<td>".$_POST["ln"]."</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Password</th>";
   echo "<td>".$_POST["pass"]."</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>City</th>";
   echo "<td>".$_POST["ct"]."</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Gender</th>";
   echo "<td>".$_POST["g"]."</td>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Hobbies</th>";
   echo "<td>";
   foreach($_POST["hb"] as $h) 
   {
       echo $h."<br>";
   }



//    echo "<script>";
//    echo "<function show(){ alert('Data Submitted');}";
//    echo "</script>";

?>
<script>
    function show()
    { alert('Data Submitted');}
</script>
</body>
</html>