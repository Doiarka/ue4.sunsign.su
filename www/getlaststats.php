<?php

    $useremail = $_REQUEST["useremail"];
    
    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $sql = "SELECT LastAdd, LastMult, LastSub, LastDiv, LastAll FROM Stats WHERE Email='".$useremail."'";
    
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0)
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "|".$row['LastAdd'] . "|".$row['LastMult'] . "|".$row['LastSub'] . "|".$row['LastDiv'] . "|".$row['LastAll'];
        }
    else
    {
    die("No Last Stats");
    }

?>