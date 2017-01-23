<?php

$currentroom = $_REQUEST["currentroom"];
$lastdate = $_REQUEST["lastdate"];

$con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
$sql = "UPDATE Chats SET Lastdate = '".$lastdate."' WHERE Chatname = '".$currentroom."'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
    die("Chats updated");
}
else
    die("Error to update Chats");
?>