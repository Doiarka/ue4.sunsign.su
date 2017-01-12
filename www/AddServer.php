<?php

    $ServerName = $_REQUEST["ServerName"];
    $ServerAddress = $_REQUEST["ServerAddress"];
    $MapName = $_REQUEST["MapName"];
    $GameType = $_REQUEST["GameType"];
    $CNP = "0";
    $MNP = $_REQUEST["MNP"];

if($ServerAddress != ": 7777")
{
    $con = new mysqli("www.ue4.sunsign.su", "u44441", "yf3ovz4qbi", "u44441_dbg");

    $sql = "SELECT * FROM Servers WHERE 'address' = '".$ServerAddress."'";
    if(mysqli_num_rows($result)>0)
    {
        die("Server Exist");
    }
    else
    {
        $sql = "INSERT INTO 'Servers' ('name', 'address', 'mapname', 'gametype', 'CNP', 'MNP')
                VALUE('$ServerName', '$ServerAddress', '$MapName', '$GameType', '$CNP', '$MNP')";
        $result = mysqli_query($con, $sql);
        die("Server Created");
    }
}
else
{
    echo $ServerAddress;//die("Empty");
}

?>