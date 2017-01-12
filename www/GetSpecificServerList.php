<?php

    $ServerName = $_REQUEST["ServerName"];

    $con = new mysqli("www.ue4.sunsign.su", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $password = md5($password);
    $sql = "SELECT * FROM Servers WHERE 'name' = '".$ServerName."'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0)
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "|".$row['Name'] . "|".$row['Address'] . "|".$row['MapName'] . "|".$row['GameType'] . "|".$row['CNP'] . "|".$row['MNP'];
        }
else
{
    die("No Servers");
}
?>