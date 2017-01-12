<?php

    $useremail = $_REQUEST["useremail"];
    
    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $sql = "SELECT * FROM Stats WHERE Email = '".$useremail."'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        die("User stats is already created");
    }
    else
    {
        $sql = "INSERT INTO Stats(Email, Addition, Subtraction, Multiplication, Division, AllVar, LastAdd, LastSub, LastMult, LastDiv, LastAll, Mix)
                VALUE('".$useremail."', '0%', '0%', '0%', '0%', '0%', '0%', '0%', '0%', '0%', '0%', '0%')";
        $result = mysqli_query($con, $sql);
        die("User stats created");
    }

?>