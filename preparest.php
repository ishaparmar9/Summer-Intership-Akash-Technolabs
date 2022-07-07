<?php
     $con = mysqli_connect('localhost:3307','root','');
     mysqli_select_db($con, "wp");
    $qperpst = "insert into student values (????)";
    $fst = mysqli_prepare($con, $qperpst);
    $f=mysqli_stmt_bind_param($fst,"issi",$en,$fname,$sem,$per);

    $en = 100;
    $fname = "xyz";
    $sem = "sem3";
    $per = 33;
    mysqli_stmt_execute($f);
?>