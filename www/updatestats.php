<?php

    $useremail = $_REQUEST["useremail"];
    $useraddition = $_REQUEST["useraddition"];
    $usersubtraction = $_REQUEST["usersubtraction"];
    $usermultiplication = $_REQUEST["usermultiplication"];
    $userdivision = $_REQUEST["userdivision"];
    $userall = $_REQUEST["userall"];
    
    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $sql = "SELECT * FROM Stats WHERE Email='".$useremail."'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        $sql = "UPDATE Stats SET Addition='".$useraddition."', Subtraction='".$usersubtraction."', Multiplication='".$usermultiplication."',
                                Division='".$userdivision."', AllVar='".$userall."'
            WHERE Email='".$useremail."'";
        $result = mysqli_query($con, $sql);
        die("Stats-Updated");
    }
    else
    die("Stats-Not-Updated");

?>