<?php

    $useremail = $_REQUEST["useremail"];

    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");

    $sql = "UPDATE Login SET IsLogin = '0' WHERE Email = '".$useremail."'";
    $result = mysqli_query($con, $sql);

?>