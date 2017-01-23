<?php

$chats = $_REQUEST["chats"];

$con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
$sql = "SELECT * FROM Chats";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "|".$row['Chatname'];
    }
else
{
    die("No Chats");
}

?>