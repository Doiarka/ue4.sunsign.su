<?php

    $useremail = $_REQUEST["useremail"];
    $useraddition = $_REQUEST["useraddition"];
    $usersubtraction = $_REQUEST["usersubtraction"];
    $usermultiplication = $_REQUEST["usermultiplication"];
    $userdivision = $_REQUEST["userdivision"];
    $userall = $_REQUEST["userall"];
    $mix = $_REQUEST["mix"];
    
    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $sql = "SELECT Addition, Subtraction, Multiplication, Division, AllVar, Mix FROM Stats WHERE Email='".$useremail."'";
    
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0)
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "|".$row['Addition'] . "|".$row['Subtraction'] . "|".$row['Multiplication'] . "|".$row['Division'] . "|".$row['AllVar'] . "|".$row['Mix'];
        }
    else
    {
    die("No Stats");
    }

?>