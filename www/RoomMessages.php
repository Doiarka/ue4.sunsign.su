<?php

$currentroom = $_REQUEST["currentroom"];
$username = $_REQUEST["username"];
$usertext = $_REQUEST["usertext"];

$con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
$sql = "INSERT INTO ".$currentroom." (Username, Usertext) VALUE ('".$username."', '".$usertext."')";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "|".$row['Username'] . "|".$row['Usertext'];
    }
else
die("Error to add message");
?>