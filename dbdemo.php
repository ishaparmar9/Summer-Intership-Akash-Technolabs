<?php
    $con = mysqli_connect('localhost:3307','root','');
    if($con)
    {
        echo "connection successful<br>";
    }
    else{
        die("cannot establish connection<br>");
    }


    // $createdb = "create database wp";
    // $exeq = mysqli_query($con,$createdb);
    // if($exeq){
    //     echo "database created...<br>";
    // }
    // else{
    //     echo "database not created...<br>";
    // }


    // mysqli_select_db($con,"wp");
    // $createtb = "create table stud(rollno int(4) primary key, name varchar(40))";
    // $exeq = mysqli_query($con,$createtb);
    // if($exeq){
    //     echo "table created...<br>";
    // }
    // else{
    //     echo "table not created...<br>";
    // }


    // mysqli_select_db($con,"wp");
    // $instb = "insert into stud values (1,'Isha')";
    // $exeq = mysqli_query($con,$instb);
    // if($exeq){
    //     echo "rechord inserted...<br>";
    // }
    // else{
    //     echo "rechord not inserted...<br>";
    // }

    // mysqli_select_db($con,"wp");
    // $instb = "insert into stud values (2,'Denish')";
    // $exeq = mysqli_query($con,$instb);
    // if($exeq){
    //     echo "rechord inserted...<br>";
    // }
    // else{
    //     echo "rechord not inserted...<br>";
    // }

    mysqli_select_db($con,"wp");
    $selectq = "select * from stud";
    $exeq = mysqli_query($con,$selectq);
    // $count =0;
    while($row = mysqli_fetch_assoc($exeq)){
        echo $row['rollno']." ".$row['name'];
        // echo ++$count;
    }
?>