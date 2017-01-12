<?php

    $ServerAddress = $_REQUEST["ServerAddress"];

    $con = new mysqli("www.ue4.sunsign.su", "u44441", "yf3ovz4qbi", "u44441_dbg");

    $check = mysqli_query($con, "SELECT * FROM Servers WHERE 'address' = '".$ServerAddress"'");
    $numRows = mysqli_query($check);
    if ($numRows != 0)
    {
        $sql = "DELETE FROM Servers WHERE 'adress' = '".$ServerAddress"'";
        mysqli_query($con, $sql);
        die("Server Deleted");
    }
    else
    {
        die("Delete Failed");
    }
?>