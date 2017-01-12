<?php

    $useremail = $_REQUEST["useremail"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $con = new mysqli("localhost", "u44441", "yf3ovz4qbi", "u44441_dbg");
    $sql = "SELECT Email FROM Login WHERE Email = '".$useremail."'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        die("Email is taken");
    }
    else
    {
        $password = md5($password);
        $sql = "INSERT INTO Login(ID, Email, Username, Password, IsLogin) VALUE(NULL, '$useremail', '$username', '$password', '0')";
        $result = mysqli_query($con, $sql);
        die("User Created");
    }

?>