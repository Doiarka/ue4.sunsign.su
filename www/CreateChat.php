<?php

$chatname = $_REQUEST["chatname"];
$lastdate = $_REQUEST["lastdate"];

$con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
$sql = "SELECT * FROM Chats WHERE Chatname = '".$chatname."'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
    die("Chatname is taken");
}
else
{
    $sql = "INSERT INTO Chats (Chatname, Lastdate) VALUE ('".$chatname."', '".$lastdate."')";

    $result = mysqli_query($con, $sql);
    die("Chat created");
}
?>