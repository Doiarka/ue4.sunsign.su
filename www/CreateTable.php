<?php

$newtablename = $_REQUEST["newtablename"];

$con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
$sql = "CREATE Table ".$newtablename." (Username VARCHAR(255) NOT NULL, Usertext VARCHAR(1000) NOT NULL)";
$result = mysqli_query($con, $sql);

die("Table created");

?>